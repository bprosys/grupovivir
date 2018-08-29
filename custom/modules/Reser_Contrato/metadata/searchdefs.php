<?php
$module_name = 'Reser_Contrato';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'document_name' => 
      array (
        'name' => 'document_name',
        'default' => true,
        'width' => '10%',
      ),
      'active_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_DOC_ACTIVE_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'active_date',
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
      'active_date' => 
      array (
        'name' => 'active_date',
        'default' => true,
        'width' => '10%',
      ),
      'aos_product_categories_reser_contrato_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_AOS_PRODUCT_CATEGORIES_RESER_CONTRATO_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
        'id' => 'AOS_PRODUC5B3DEGORIES_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'aos_product_categories_reser_contrato_1_name',
      ),
      'aos_products_reser_contrato_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_AOS_PRODUCTS_RESER_CONTRATO_1_FROM_AOS_PRODUCTS_TITLE',
        'id' => 'AOS_PRODUCTS_RESER_CONTRATO_1AOS_PRODUCTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'aos_products_reser_contrato_1_name',
      ),
      'status_id' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_DOC_STATUS',
        'width' => '10%',
        'default' => true,
        'name' => 'status_id',
      ),
      'exp_date' => 
      array (
        'name' => 'exp_date',
        'default' => true,
        'width' => '10%',
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
