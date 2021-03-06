<?php

/**
 * @file
 * Generate examples of all elements.
 */

use Drupal\Component\Utility\Unicode;

/**
 * Generate examples of all elements.
 *
 * @return array
 *   An array containing examples of all elements.
 */
function yamlform_test_example_elements() {
  $data = [
    'basic_elements' => [],
    'advanced_elements' => [],
  ];

  /** @var \Drupal\yamlform\YamlFormElementManagerInterface $element_manager */
  $element_manager = \Drupal::service('plugin.manager.yamlform.element');

  $definitions = $element_manager->getDefinitions();
  $definitions = $element_manager->getSortedDefinitions($definitions);
  $elements = $element_manager->getInstances();
  foreach ($definitions as $definition) {
    $element_type = $definition['id'];
    $yamlform_element = $elements[$element_type];
    $element = _yamlform_test_get_example_element($element_type);
    if (!$element) {
      continue;
    }

    $category_name = (string) $yamlform_element->getPluginDefinition()['category'] ?: 'Other elements';
    $category_id = preg_replace('/[^a-zA-Z0-9]+/', '_', Unicode::strtolower($category_name));
    if (empty($data[$category_id])) {
      $data[$category_id] = [
        '#type' => 'details',
        '#title' => $category_name,
        '#open' => TRUE,
      ];
    }
    $data[$category_id][$element_type] = $element;
  }

  // Move other elements last.
  if (isset($data['other_elements'])) {
    $other_elements = $data['other_elements'];
    unset($data['other_elements']);
    $data['other_elements'] = $other_elements;
  }

  return $data;
}
