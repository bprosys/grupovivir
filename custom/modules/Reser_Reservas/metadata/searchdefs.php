<?php
$module_name = 'Reser_Reservas';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'document_name',
    ),
    'advanced_search' => 
    array (
      'document_name' => 
      array (
        'name' => 'document_name',
        'default' => true,
        'width' => '10%',
      ),
      'opportunities_reser_reservas_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_OPPORTUNITIES_RESER_RESERVAS_1_FROM_OPPORTUNITIES_TITLE',
        'id' => 'OPPORTUNITIES_RESER_RESERVAS_1OPPORTUNITIES_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'opportunities_reser_reservas_1_name',
      ),
      'aos_products_reser_reservas_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_AOS_PRODUCTS_RESER_RESERVAS_1_FROM_AOS_PRODUCTS_TITLE',
        'id' => 'AOS_PRODUCTS_RESER_RESERVAS_1AOS_PRODUCTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'aos_products_reser_reservas_1_name',
      ),
      'active_date' => 
      array (
        'name' => 'active_date',
        'default' => true,
        'width' => '10%',
      ),
      'exp_date' => 
      array (
        'name' => 'exp_date',
        'default' => true,
        'width' => '10%',
      ),
      'status_id' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_DOC_STATUS',
        'width' => '10%',
        'default' => true,
        'name' => 'status_id',
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
