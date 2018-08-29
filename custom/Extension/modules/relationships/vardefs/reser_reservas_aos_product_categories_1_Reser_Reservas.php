<?php
// created: 2018-05-23 05:24:50
$dictionary["Reser_Reservas"]["fields"]["reser_reservas_aos_product_categories_1"] = array (
  'name' => 'reser_reservas_aos_product_categories_1',
  'type' => 'link',
  'relationship' => 'reser_reservas_aos_product_categories_1',
  'source' => 'non-db',
  'module' => 'AOS_Product_Categories',
  'bean_name' => 'AOS_Product_Categories',
  'vname' => 'LBL_RESER_RESERVAS_AOS_PRODUCT_CATEGORIES_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
  'id_name' => 'reser_rese08daegories_idb',
);
$dictionary["Reser_Reservas"]["fields"]["reser_reservas_aos_product_categories_1_name"] = array (
  'name' => 'reser_reservas_aos_product_categories_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RESER_RESERVAS_AOS_PRODUCT_CATEGORIES_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
  'save' => true,
  'id_name' => 'reser_rese08daegories_idb',
  'link' => 'reser_reservas_aos_product_categories_1',
  'table' => 'aos_product_categories',
  'module' => 'AOS_Product_Categories',
  'rname' => 'name',
);
$dictionary["Reser_Reservas"]["fields"]["reser_rese08daegories_idb"] = array (
  'name' => 'reser_rese08daegories_idb',
  'type' => 'link',
  'relationship' => 'reser_reservas_aos_product_categories_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_RESER_RESERVAS_AOS_PRODUCT_CATEGORIES_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
);
