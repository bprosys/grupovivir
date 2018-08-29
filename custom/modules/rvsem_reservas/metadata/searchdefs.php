<?php
$module_name = 'rvsem_reservas';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'rvsem_reservas_aos_products_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_RVSEM_RESERVAS_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'RVSEM_RESERVAS_AOS_PRODUCTS_1AOS_PRODUCTS_IDB',
        'name' => 'rvsem_reservas_aos_products_1_name',
      ),
      'document_name' => 
      array (
        'name' => 'document_name',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'document_name' => 
      array (
        'name' => 'document_name',
        'default' => true,
        'width' => '10%',
      ),
      'rvsem_reservas_aos_products_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_RVSEM_RESERVAS_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
        'id' => 'RVSEM_RESERVAS_AOS_PRODUCTS_1AOS_PRODUCTS_IDB',
        'width' => '10%',
        'default' => true,
        'name' => 'rvsem_reservas_aos_products_1_name',
      ),
      'opportunities_rvsem_reservas_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_OPPORTUNITIES_RVSEM_RESERVAS_1_FROM_OPPORTUNITIES_TITLE',
        'id' => 'OPPORTUNITIES_RVSEM_RESERVAS_1OPPORTUNITIES_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'opportunities_rvsem_reservas_1_name',
      ),
      'rvsem_reservas_accounts_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_RVSEM_RESERVAS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
        'id' => 'RVSEM_RESERVAS_ACCOUNTS_1ACCOUNTS_IDB',
        'width' => '10%',
        'default' => true,
        'name' => 'rvsem_reservas_accounts_1_name',
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_DOC_STATUS',
        'width' => '10%',
        'default' => true,
        'name' => 'status',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
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
