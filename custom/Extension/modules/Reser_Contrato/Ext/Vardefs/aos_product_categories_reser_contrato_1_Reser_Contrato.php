<?php
// created: 2018-07-18 14:52:39
$dictionary["Reser_Contrato"]["fields"]["aos_product_categories_reser_contrato_1"] = array (
  'name' => 'aos_product_categories_reser_contrato_1',
  'type' => 'link',
  'relationship' => 'aos_product_categories_reser_contrato_1',
  'source' => 'non-db',
  'module' => 'AOS_Product_Categories',
  'bean_name' => 'AOS_Product_Categories',
  'vname' => 'LBL_AOS_PRODUCT_CATEGORIES_RESER_CONTRATO_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
  'id_name' => 'aos_produc5b3degories_ida',
);
$dictionary["Reser_Contrato"]["fields"]["aos_product_categories_reser_contrato_1_name"] = array (
  'name' => 'aos_product_categories_reser_contrato_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_PRODUCT_CATEGORIES_RESER_CONTRATO_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
  'save' => true,
  'id_name' => 'aos_produc5b3degories_ida',
  'link' => 'aos_product_categories_reser_contrato_1',
  'table' => 'aos_product_categories',
  'module' => 'AOS_Product_Categories',
  'rname' => 'name',
);
$dictionary["Reser_Contrato"]["fields"]["aos_produc5b3degories_ida"] = array (
  'name' => 'aos_produc5b3degories_ida',
  'type' => 'link',
  'relationship' => 'aos_product_categories_reser_contrato_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_PRODUCT_CATEGORIES_RESER_CONTRATO_1_FROM_RESER_CONTRATO_TITLE',
);
