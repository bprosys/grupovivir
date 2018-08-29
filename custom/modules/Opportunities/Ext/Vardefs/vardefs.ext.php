<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-05-17 09:13:36
$dictionary["Opportunity"]["fields"]["opportunities_aos_product_categories_2"] = array (
  'name' => 'opportunities_aos_product_categories_2',
  'type' => 'link',
  'relationship' => 'opportunities_aos_product_categories_2',
  'source' => 'non-db',
  'module' => 'AOS_Product_Categories',
  'bean_name' => 'AOS_Product_Categories',
  'vname' => 'LBL_OPPORTUNITIES_AOS_PRODUCT_CATEGORIES_2_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
  'id_name' => 'opportunities_aos_product_categories_2aos_product_categories_idb',
);
$dictionary["Opportunity"]["fields"]["opportunities_aos_product_categories_2_name"] = array (
  'name' => 'opportunities_aos_product_categories_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_AOS_PRODUCT_CATEGORIES_2_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_aos_product_categories_2aos_product_categories_idb',
  'link' => 'opportunities_aos_product_categories_2',
  'table' => 'aos_product_categories',
  'module' => 'AOS_Product_Categories',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["opportunities_aos_product_categories_2aos_product_categories_idb"] = array (
  'name' => 'opportunities_aos_product_categories_2aos_product_categories_idb',
  'type' => 'link',
  'relationship' => 'opportunities_aos_product_categories_2',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_OPPORTUNITIES_AOS_PRODUCT_CATEGORIES_2_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
);


// created: 2018-04-23 09:34:05
$dictionary["Opportunity"]["fields"]["opportunities_aos_product_categories_1"] = array (
  'name' => 'opportunities_aos_product_categories_1',
  'type' => 'link',
  'relationship' => 'opportunities_aos_product_categories_1',
  'source' => 'non-db',
  'module' => 'AOS_Product_Categories',
  'bean_name' => 'AOS_Product_Categories',
  'vname' => 'LBL_OPPORTUNITIES_AOS_PRODUCT_CATEGORIES_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
);


// created: 2018-04-16 10:00:18
$dictionary["Opportunity"]["fields"]["opportunities_reser_reservas_1"] = array (
  'name' => 'opportunities_reser_reservas_1',
  'type' => 'link',
  'relationship' => 'opportunities_reser_reservas_1',
  'source' => 'non-db',
  'module' => 'Reser_Reservas',
  'bean_name' => 'Reser_Reservas',
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_RESER_RESERVAS_1_FROM_RESER_RESERVAS_TITLE',
);

?>