<?php
$module_name = 'ING_Ingenieria';
$_object_name = 'ing_ingenieria';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'ing_ingenieria_number' => 
      array (
        'type' => 'int',
        'studio' => 
        array (
          'quickcreate' => false,
        ),
        'label' => 'LBL_NUMBER',
        'width' => '10%',
        'default' => true,
        'name' => 'ing_ingenieria_number',
      ),
      'ing_ingenieria_aos_products_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ING_INGENIERIA_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE',
        'id' => 'ING_INGENIERIA_AOS_PRODUCTSAOS_PRODUCTS_IDB',
        'width' => '10%',
        'default' => true,
        'name' => 'ing_ingenieria_aos_products_name',
      ),
      'status' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_STATUS',
        'width' => '10%',
        'default' => true,
        'name' => 'status',
      ),
    ),
    'advanced_search' => 
    array (
      'ing_ingenieria_number' => 
      array (
        'name' => 'ing_ingenieria_number',
        'default' => true,
        'width' => '10%',
      ),
      'ing_ingenieria_aos_products_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ING_INGENIERIA_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'ING_INGENIERIA_AOS_PRODUCTSAOS_PRODUCTS_IDB',
        'name' => 'ing_ingenieria_aos_products_name',
      ),
      'status' => 
      array (
        'name' => 'status',
        'default' => true,
        'width' => '10%',
      ),
      'ing_ingenieria_accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ING_INGENIERIA_ACCOUNTS_FROM_ACCOUNTS_TITLE',
        'id' => 'ING_INGENIERIA_ACCOUNTSACCOUNTS_IDB',
        'width' => '10%',
        'default' => true,
        'name' => 'ing_ingenieria_accounts_name',
      ),
      'fecha_programada_entrega' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_PROGRAMADA_ENTREGA',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_programada_entrega',
      ),
      'confirmacion_entrega' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_CONFIRMACION_ENTREGA',
        'width' => '10%',
        'name' => 'confirmacion_entrega',
      ),
      'reconfirmacion' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_RECONFIRMACION',
        'width' => '10%',
        'name' => 'reconfirmacion',
      ),
      'fechaentrega' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHAENTREGA',
        'width' => '10%',
        'default' => true,
        'name' => 'fechaentrega',
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
