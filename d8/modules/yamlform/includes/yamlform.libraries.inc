<?php

/**
 * @file
 * Form libraries.
 */

use Drupal\Component\Serialization\Yaml;
use Drupal\Core\Url;

/**
 * Implements hook_library_info_alter().
 */
function yamlform_library_info_alter(&$libraries, $extension) {
  // Only alter form libraries.
  if ($extension != 'yamlform') {
    return;
  }

  // Map /library/* paths to CDN.
  // @see yamlform.libraries.yml.
  foreach ($libraries as &$library) {
    // Check CDN setting exists.
    if (!isset($library['cdn'])) {
      continue;
    }

    // Check if the CDN's source /library/* path exists.
    reset($library['cdn']);
    if (file_exists(DRUPAL_ROOT . key($library['cdn']))) {
      continue;
    }

    _yamlform_library_info_alter_recursive($library, $library['cdn']);
  }
}

/**
 * Recursive through a form library.
 *
 * @param array $library
 *   A form library defined in yamlform.libraries.yml.
 * @param array $cdn
 *   A associative array of library paths mapped to CDN URL.
 */
function _yamlform_library_info_alter_recursive(array &$library, array $cdn) {
  foreach ($library as $key => &$value) {
    // CSS and JS files and listed in associative arrays keyed via string.
    if (!is_string($key) || !is_array($value)) {
      continue;
    }

    // Ignore the CDN's associative array.
    if ($key == 'cdn') {
      continue;
    }

    // Replace the CDN sources (ie /library/*) with the CDN URL destination
    // (https://cdnjs.cloudflare.com/ajax/libs/*).
    foreach ($cdn as $source => $destination) {
      if (strpos($key, $source) === 0) {
        $uri = str_replace($source, $destination, $key);
        $library[$uri] = $value;
        unset($library[$key]);
        break;
      }
    }

    // Recurse downward to find nested libraries.
    _yamlform_library_info_alter_recursive($value, $cdn);
  }
}

/**
 * Get third party libraries from yamlform.libraries.make.yml.
 *
 * @return array
 *    An associative array of third party libraries keyed by library name.
 */
function _yamlform_libraries_load() {
  $info = Yaml::decode(file_get_contents(drupal_get_path('module', 'yamlform') . '/yamlform.libraries.make.yml'));
  $libraries = $info['libraries'];

  // Ignore 'lib' library which is being used download a single file.
  // @see yamlform.libraries.make.yml
  // @see https://github.com/codemirror/CodeMirror/issues/4328.
  unset($libraries['codemirror_lib']);

  foreach ($libraries as $library_name => &$library) {
    $library['library_name'] = $library_name;
  }
  return $libraries;
}

/**
 * Get third party libraries status for hook_requirements and drush.
 *
 * @return array
 *    An associative array of third party libraries keyed by library name.
 */
function _yamlform_libraries_requirements() {
  $cdn = \Drupal::config('yamlform.settings')->get('library.cdn', FALSE);

  $status = [];
  $libraries = _yamlform_libraries_load();
  foreach ($libraries as $library_name => $library) {
    $library_path = '/' . $library['destination'] . '/' . $library['directory_name'];
    $library_exists = (file_exists(DRUPAL_ROOT . $library_path)) ? TRUE : FALSE;

    $t_args = [
      '@title' => $library['library_title'],
      '@version' => $library['library_version'],
      '@path' => $library_path,
      ':download_href' => $library['download']['url'],
      ':library_href' => $library['library_url'],
      ':install_href' => 'http://yamlform.io/support/installation/#third-party-libraries',
      ':external_href' => 'https://www.drupal.org/docs/8/theming-drupal-8/adding-stylesheets-css-and-javascript-js-to-a-drupal-8-theme#external',
      ':settings_href' => Url::fromRoute('yamlform.settings', [], ['fragment' => 'edit-library'])->toString(),
    ];

    if ($library_exists) {
      $value = t('@version (Installed)', $t_args);
      $description = t('The <a href=":library_href">@title</a> library is installed in <b>@path</b>.', $t_args);
      $severity = REQUIREMENT_OK;
    }
    elseif ($cdn) {
      $value = t('@version (CDN).', $t_args);
      $description = t('The <a href=":library_href">@title</a> library is <a href=":external_href">externally hosted libraries</a> and loaded via a Content Delivery Network (CDN).', $t_args);
      $severity = REQUIREMENT_OK;
    }
    else {
      $value = t('@version (CDN).', $t_args);
      $description = t('Please download the <a href=":library_href">@title</a> library from <a href=":download_href">:download_href</a> and copy it to <b>@path</b> or use <a href=":install_href">Drush</a> to install this library. (<a href=":settings_href">Disable CDN warning)', $t_args);
      $severity = REQUIREMENT_WARNING;
    }

    $status['yamlform_library_' . $library_name] = [
      'library' => $library ,
      'title' => t('YAML Form library: @title', $t_args),
      'value' => $value,
      'description' => $description,
      'severity' => $severity,
    ];
  }

  return $status;
}
