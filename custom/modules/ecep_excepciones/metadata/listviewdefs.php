<?php
$module_name = 'ecep_excepciones';
$OBJECT_NAME = 'ECEP_EXCEPCIONES';
$listViewDefs [$module_name] = 
array (
  'ECEP_EXCEPCIONES_NUMBER' => 
  array (
    'width' => '5%',
    'label' => 'LBL_NUMBER',
    'link' => true,
    'default' => true,
  ),
  'TYPE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'AREA_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_AREA',
    'width' => '10%',
  ),
  'STATUS' => 
  array (
    'width' => '10%',
    'label' => 'LBL_STATUS',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'FECHA_RECIBIDO_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_FECHA_RECIBIDO',
    'width' => '10%',
  ),
  'ING_INGENIERIA_ECEP_EXCEPCIONES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ING_INGENIERIA_ECEP_EXCEPCIONES_1_FROM_ING_INGENIERIA_TITLE',
    'id' => 'ING_INGENIERIA_ECEP_EXCEPCIONES_1ING_INGENIERIA_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'OBSERVACIONES1_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_OBSERVACIONES1',
    'width' => '10%',
  ),
);
;
?>
