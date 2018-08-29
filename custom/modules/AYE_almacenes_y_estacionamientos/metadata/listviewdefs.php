<?php
$module_name = 'AYE_almacenes_y_estacionamientos';
$listViewDefs [$module_name] = 
array (
  'CODIGO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CODIGO',
    'width' => '10%',
    'default' => true,
  ),
  'TIPO_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TIPO',
    'width' => '10%',
  ),
  'AYE_ALMACENES_Y_ESTACIONAMIENTOS_AOS_PRODUCTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AYE_ALMACENES_Y_ESTACIONAMIENTOS_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE',
    'id' => 'AYE_ALMACENES_Y_ESTACIONAMIENTOS_AOS_PRODUCTSAOS_PRODUCTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPCION' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DESCRIPCION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => false,
    'link' => true,
  ),
);
;
?>
