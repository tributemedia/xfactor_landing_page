<?php
/**
 * @file
 * xfactor_landing_page.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function xfactor_landing_page_field_group_info() {
  $field_groups = array();

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_meta|node|landing_page|form';
  $field_group->group_name = 'group_meta';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'landing_page';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Meta',
    'weight' => '4',
    'children' => array(
      0 => 'field__meta_description',
      1 => 'meta_keywords',
      2 => 'meta_copyright',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-meta field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $field_groups['group_meta|node|landing_page|form'] = $field_group;

  // Translatables
  // Included for use with string extractors like potx.
  t('Meta');

  return $field_groups;
}
