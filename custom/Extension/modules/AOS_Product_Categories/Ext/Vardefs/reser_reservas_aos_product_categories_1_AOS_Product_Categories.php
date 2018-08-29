<?php
// created: 2018-05-23 05:24:50
$dictionary["AOS_Product_Categories"]["fields"]["reser_reservas_aos_product_categories_1"] = array (
  'name' => 'reser_reservas_aos_product_categories_1',
  'type' => 'link',
  'relationship' => 'reser_reservas_aos_product_categories_1',
  'source' => 'non-db',
  'module' => 'Reser_Reservas',
  'bean_name' => 'Reser_Reservas',
  'vname' => 'LBL_RESER_RESERVAS_AOS_PRODUCT_CATEGORIES_1_FROM_RESER_RESERVAS_TITLE',
  'id_name' => 'reser_reservas_aos_product_categories_1reser_reservas_ida',
);
$dictionary["AOS_Product_Categories"]["fields"]["reser_reservas_aos_product_categories_1_name"] = array (
  'name' => 'reser_reservas_aos_product_categories_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RESER_RESERVAS_AOS_PRODUCT_CATEGORIES_1_FROM_RESER_RESERVAS_TITLE',
  'save' => true,
  'id_name' => 'reser_reservas_aos_product_categories_1reser_reservas_ida',
  'link' => 'reser_reservas_aos_product_categories_1',
  'table' => 'reser_reservas',
  'module' => 'Reser_Reservas',
  'rname' => 'document_name',
);
$dictionary["AOS_Product_Categories"]["fields"]["reser_reservas_aos_product_categories_1reser_reservas_ida"] = array (
  'name' => 'reser_reservas_aos_product_categories_1reser_reservas_ida',
  'type' => 'link',
  'relationship' => 'reser_reservas_aos_product_categories_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_RESER_RESERVAS_AOS_PRODUCT_CATEGORIES_1_FROM_RESER_RESERVAS_TITLE',
);
