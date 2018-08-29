<?php
// created: 2018-07-26 10:12:54
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'modelo_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_MODELO',
    'width' => '10%',
  ),
  'metraje_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_METRAJE',
    'width' => '10%',
  ),
  'estado_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_ESTADO',
    'width' => '10%',
  ),
  'price' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_PRICE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'AOS_Products',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'AOS_Products',
    'width' => '5%',
    'default' => true,
  ),
);