<?php
$module_name = 'AOS_Product_Categories';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CATEGORIA_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CATEGORIA',
    'width' => '10%',
  ),
  'NUMERO_DE_FINCA_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_NUMERO_DE_FINCA',
    'width' => '10%',
  ),
  'ESTADO_DEL_PROYECTO_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO_DEL_PROYECTO',
    'width' => '10%',
  ),
  'CANTUNID_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_CANTUNID',
    'width' => '10%',
  ),
  'DIRECCION_C' => 
  array (
    'type' => 'text',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_DIRECCION',
    'sortable' => false,
    'width' => '10%',
  ),
  'CODIGO_CATEGORIA_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_CODIGO_CATEGORIA',
    'width' => '10%',
  ),
  'CIUDAD_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CIUDAD',
    'width' => '10%',
  ),
);
;
?>
