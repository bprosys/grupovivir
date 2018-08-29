<?php
$module_name = 'rvsem_reservas';
$OBJECT_NAME = 'RVSEM_RESERVAS';
$listViewDefs [$module_name] = 
array (
  'DOCUMENT_NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
  ),
  'RVSEM_RESERVAS_AOS_PRODUCTS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_RVSEM_RESERVAS_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
    'id' => 'RVSEM_RESERVAS_AOS_PRODUCTS_1AOS_PRODUCTS_IDB',
    'width' => '10%',
    'default' => true,
  ),
  'OPPORTUNITIES_RVSEM_RESERVAS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_OPPORTUNITIES_RVSEM_RESERVAS_1_FROM_OPPORTUNITIES_TITLE',
    'id' => 'OPPORTUNITIES_RVSEM_RESERVAS_1OPPORTUNITIES_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'RVSEM_RESERVAS_ACCOUNTS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_RVSEM_RESERVAS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'RVSEM_RESERVAS_ACCOUNTS_1ACCOUNTS_IDB',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
