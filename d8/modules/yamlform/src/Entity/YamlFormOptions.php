<?php

namespace Drupal\yamlform\Entity;

use Drupal\Component\Serialization\Yaml;
use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\yamlform\Utility\YamlFormOptionsHelper;
use Drupal\yamlform\YamlFormOptionsInterface;

/**
 * Defines the form options entity.
 *
 * @ConfigEntityType(
 *   id = "yamlform_options",
 *   label = @Translation("Form options"),
 *   handlers = {
 *     "access" = "Drupal\yamlform\YamlFormOptionsAccessControlHandler",
 *     "list_builder" = "Drupal\yamlform\YamlFormOptionsListBuilder",
 *     "form" = {
 *       "default" = "Drupal\yamlform\YamlFormOptionsForm",
 *       "delete" = "Drupal\Core\Entity\EntityDeleteForm",
 *     }
 *   },
 *   admin_permission = "administer yamlform",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *   },
 *   links = {
 *     "add-form" = "/admin/structure/yamlform/settings/options/add",
 *     "edit-form" = "/admin/structure/yamlform/settings/options/manage/{yamlform_options}/edit",
 *     "delete-form" = "/admin/structure/yamlform/settings/options/manage/{yamlform_options}/delete",
 *     "collection" = "/admin/structure/yamlform/settings/options/manage",
 *   },
 *   config_export = {
 *     "id",
 *     "uuid",
 *     "label",
 *     "options",
 *   }
 * )
 */
class YamlFormOptions extends ConfigEntityBase implements YamlFormOptionsInterface {

  /**
   * The form options ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The form options UUID.
   *
   * @var string
   */
  protected $uuid;

  /**
   * The form options label.
   *
   * @var string
   */
  protected $label;

  /**
   * The form options options.
   *
   * @var string
   */
  protected $options;

  /**
   * The form options decoded.
   *
   * @var string
   */
  protected $optionsDecoded;

  /**
   * {@inheritdoc}
   */
  public function getOptions() {
    if (!isset($this->optionsDecoded)) {
      try {
        $options = Yaml::decode($this->options);
        // Since YAML supports simple values.
        $options = (is_array($options)) ? $options : [];
      }
      catch (\Exception $exception) {
        $link = $this->link(t('Edit'), 'edit-form');
        \Drupal::logger('yamlform')->notice('%title options are not valid. @message', ['%title' => $this->label(), '@message' => $exception->getMessage(), 'link' => $link]);
        $options = FALSE;
      }
      $this->optionsDecoded = $options;
    }
    return $this->optionsDecoded;
  }

  /**
   * {@inheritdoc}
   */
  public function hasAlterHooks() {
    $hook_name = 'yamlform_options_' . $this->id() . '_alter';
    $alter_hooks = \Drupal::moduleHandler()->getImplementations($hook_name);
    return (count($alter_hooks)) ? TRUE : FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function preSave(EntityStorageInterface $storage) {
    parent::preSave($storage);

    // If the submitted options match the altered options clear the submission
    // options.
    $altered_options = [];
    $temp_element = [];
    \Drupal::moduleHandler()->alter('yamlform_options_' . $this->id(), $altered_options, $temp_element);
    $altered_options = YamlFormOptionsHelper::convertOptionsToString($altered_options);
    if ($altered_options == $this->getOptions()) {
      $this->options = '';
    }
  }

  /**
   * {@inheritdoc}
   */
  public function postSave(EntityStorageInterface $storage, $update = TRUE) {
    parent::postSave($storage, $update);

    // Clear cached properties.
    $this->optionsDecoded = NULL;
  }

  /**
   * {@inheritdoc}
   */
  public static function getElementOptions(array $element, $property_name = '#options') {
    // If element already has #options return them.
    if (is_array($element[$property_name])) {
      return $element[$property_name];
    }

    // Return empty options if element does not define an options id.
    if (empty($element[$property_name]) || !is_string($element[$property_name])) {
      return [];
    }

    // If options have been set return them.
    // This allows dynamic options to be overridden.
    $id = $element[$property_name];
    if ($yamlform_options = YamlFormOptions::load($id)) {
      $options = $yamlform_options->getOptions();
      if ($options) {
        return $options;
      }
    }

    // Get options using alter hook.
    $options = [];
    \Drupal::moduleHandler()->alter('yamlform_options_' . $id, $options, $element);

    // Log empty options.
    if (empty($options)) {
      \Drupal::logger('yamlform')->notice('Options %id do not exist.', ['%id' => $id]);
    }

    return $options;
  }

}
