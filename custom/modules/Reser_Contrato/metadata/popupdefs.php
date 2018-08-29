<?php
$popupMeta = array (
    'moduleMain' => 'Reser_Contrato',
    'varName' => 'Reser_Contrato',
    'orderBy' => 'reser_contrato.name',
    'whereClauses' => array (
  'document_name' => 'reser_contrato.document_name',
  'uploadfile' => 'reser_contrato.uploadfile',
  'active_date' => 'reser_contrato.active_date',
  'aos_products_reser_contrato_1_name' => 'reser_contrato.aos_products_reser_contrato_1_name',
),
    'searchInputs' => array (
  4 => 'document_name',
  5 => 'uploadfile',
  6 => 'active_date',
  7 => 'aos_products_reser_contrato_1_name',
),
    'searchdefs' => array (
  'document_name' => 
  array (
    'name' => 'document_name',
    'width' => '10%',
  ),
  'uploadfile' => 
  array (
    'type' => 'file',
    'label' => 'LBL_FILE_UPLOAD',
    'width' => '10%',
    'name' => 'uploadfile',
  ),
  'active_date' => 
  array (
    'name' => 'active_date',
    'width' => '10%',
  ),
  'aos_products_reser_contrato_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AOS_PRODUCTS_RESER_CONTRATO_1_FROM_AOS_PRODUCTS_TITLE',
    'id' => 'AOS_PRODUCTS_RESER_CONTRATO_1AOS_PRODUCTS_IDA',
    'width' => '10%',
    'name' => 'aos_products_reser_contrato_1_name',
  ),
),
);
