<?php
// created: 2018-04-25 09:58:33
$subpanel_layout['list_fields'] = array (
  'bug_number' => 
  array (
    'vname' => 'LBL_LIST_NUMBER',
    'width' => '5%',
    'default' => true,
  ),
  'tipologia_c' => 
  array (
    'type' => 'dynamicenum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_TIPOLOGIA',
    'width' => '10%',
  ),
  'area_garantia_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_AREA_GARANTIA',
    'width' => '10%',
  ),
  'description' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'Bugs',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'Bugs',
    'width' => '5%',
    'default' => true,
  ),
);