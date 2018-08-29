<?php
$popupMeta = array (
    'moduleMain' => 'AOS_Product_Categories',
    'varName' => 'AOS_Product_Categories',
    'orderBy' => 'aos_product_categories.name',
    'whereClauses' => array (
  'name' => 'aos_product_categories.name',
  'categoria_c' => 'aos_product_categories_cstm.categoria_c',
  'estado_del_proyecto_c' => 'aos_product_categories_cstm.estado_del_proyecto_c',
  'ciudad_c' => 'aos_product_categories_cstm.ciudad_c',
  'cantunid_c' => 'aos_product_categories_cstm.cantunid_c',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'categoria_c',
  5 => 'estado_del_proyecto_c',
  6 => 'ciudad_c',
  7 => 'cantunid_c',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'categoria_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CATEGORIA',
    'width' => '10%',
    'name' => 'categoria_c',
  ),
  'estado_del_proyecto_c' => 
  array (
    'type' => 'dynamicenum',
    'studio' => 'visible',
    'label' => 'LBL_ESTADO_DEL_PROYECTO',
    'width' => '10%',
    'name' => 'estado_del_proyecto_c',
  ),
  'ciudad_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CIUDAD',
    'width' => '10%',
    'name' => 'ciudad_c',
  ),
  'cantunid_c' => 
  array (
    'type' => 'int',
    'label' => 'LBL_CANTUNID',
    'width' => '10%',
    'name' => 'cantunid_c',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'CODIGO_CATEGORIA_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CODIGO_CATEGORIA',
    'width' => '10%',
    'name' => 'codigo_categoria_c',
  ),
  'CATEGORIA_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CATEGORIA',
    'width' => '10%',
    'name' => 'categoria_c',
  ),
  'ESTADO_DEL_PROYECTO_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO_DEL_PROYECTO',
    'width' => '10%',
    'name' => 'estado_del_proyecto_c',
  ),
  'CANTUNID_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_CANTUNID',
    'width' => '10%',
  ),
),
);
