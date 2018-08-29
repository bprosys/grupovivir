<?php
// created: 2018-05-14 07:37:01
$subpanel_layout['list_fields'] = array (
  'codigo' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_CODIGO',
    'width' => '10%',
    'default' => true,
  ),
  'tipo_c' => 
  array (
    'type' => 'dynamicenum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_TIPO',
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
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
  'aye_almacenes_y_estacionamientos_aos_products_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_AYE_ALMACENES_Y_ESTACIONAMIENTOS_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE',
    'id' => 'AYE_ALMACENES_Y_ESTACIONAMIENTOS_AOS_PRODUCTSAOS_PRODUCTS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'AOS_Products',
    'target_record_key' => 'aye_almacenes_y_estacionamientos_aos_productsaos_products_ida',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'AYE_almacenes_y_estacionamientos',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'AYE_almacenes_y_estacionamientos',
    'width' => '5%',
    'default' => true,
  ),
);