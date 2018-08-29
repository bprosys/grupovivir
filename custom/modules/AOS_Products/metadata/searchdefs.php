<?php
$module_name = 'AOS_Products';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
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
        'default' => true,
        'name' => 'aos_product_category_name',
      ),
      'estado_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADO',
        'width' => '10%',
        'name' => 'estado_c',
      ),
      'modelo_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_MODELO',
        'width' => '10%',
        'name' => 'modelo_c',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'aos_product_category_name' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_AOS_PRODUCT_CATEGORYS_NAME',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'id' => 'AOS_PRODUCT_CATEGORY_ID',
        'name' => 'aos_product_category_name',
      ),
      'estado_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADO',
        'width' => '10%',
        'name' => 'estado_c',
      ),
      'modelo_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_MODELO',
        'width' => '10%',
        'name' => 'modelo_c',
      ),
      'metraje_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_METRAJE',
        'width' => '10%',
        'name' => 'metraje_c',
      ),
      'price' => 
      array (
        'name' => 'price',
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
