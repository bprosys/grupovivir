<?php
$module_name = 'AYE_almacenes_y_estacionamientos';
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
      'codigo' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CODIGO',
        'width' => '10%',
        'default' => true,
        'name' => 'codigo',
      ),
      'tipo_c' => 
      array (
        'type' => 'dynamicenum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TIPO',
        'width' => '10%',
        'name' => 'tipo_c',
      ),
      'aye_almacenes_y_estacionamientos_aos_products_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_AYE_ALMACENES_Y_ESTACIONAMIENTOS_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE',
        'id' => 'AYE_ALMACENES_Y_ESTACIONAMIENTOS_AOS_PRODUCTSAOS_PRODUCTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'aye_almacenes_y_estacionamientos_aos_products_name',
      ),
    ),
    'advanced_search' => 
    array (
      'codigo' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CODIGO',
        'width' => '10%',
        'default' => true,
        'name' => 'codigo',
      ),
      'tipo_c' => 
      array (
        'type' => 'dynamicenum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TIPO',
        'width' => '10%',
        'name' => 'tipo_c',
      ),
      'aye_almacenes_y_estacionamientos_aos_products_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_AYE_ALMACENES_Y_ESTACIONAMIENTOS_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'AYE_ALMACENES_Y_ESTACIONAMIENTOS_AOS_PRODUCTSAOS_PRODUCTS_IDA',
        'name' => 'aye_almacenes_y_estacionamientos_aos_products_name',
      ),
      'descripcion' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_DESCRIPCION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'descripcion',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'date_modified' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_modified',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
