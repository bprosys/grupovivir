<?php
$popupMeta = array (
    'moduleMain' => 'AOS_Products',
    'varName' => 'AOS_Products',
    'orderBy' => 'aos_products.name',
    'whereClauses' => array (
  'name' => 'aos_products.name',
  'price' => 'aos_products.price',
  'estado_c' => 'aos_products_cstm.estado_c',
  'metraje_c' => 'aos_products_cstm.metraje_c',
  'aos_product_category_name' => 'aos_products.aos_product_category_name',
  'modelo_c' => 'aos_products_cstm.modelo_c',
),
    'searchInputs' => array (
  1 => 'name',
  6 => 'price',
  8 => 'estado_c',
  9 => 'metraje_c',
  10 => 'aos_product_category_name',
  11 => 'modelo_c',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'aos_product_category_name' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_AOS_PRODUCT_CATEGORYS_NAME',
    'id' => 'AOS_PRODUCT_CATEGORY_ID',
    'link' => true,
    'width' => '10%',
    'name' => 'aos_product_category_name',
  ),
  'estado_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
    'name' => 'estado_c',
  ),
  'metraje_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_METRAJE',
    'width' => '10%',
    'name' => 'metraje_c',
  ),
  'modelo_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MODELO',
    'width' => '10%',
    'name' => 'modelo_c',
  ),
  'price' => 
  array (
    'name' => 'price',
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '25%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'PART_NUMBER' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PART_NUMBER',
    'default' => true,
    'name' => 'part_number',
  ),
  'TORRE_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TORRE',
    'width' => '10%',
  ),
  'METRAJE_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_METRAJE',
    'width' => '10%',
    'name' => 'metraje_c',
  ),
  'PRICE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PRICE',
    'default' => true,
    'name' => 'price',
  ),
  'ESTADO_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
    'name' => 'estado_c',
  ),
  'AOS_PRODUCT_CATEGORY_NAME' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_AOS_PRODUCT_CATEGORYS_NAME',
    'id' => 'AOS_PRODUCT_CATEGORY_ID',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'aos_product_category_name',
  ),
),
);