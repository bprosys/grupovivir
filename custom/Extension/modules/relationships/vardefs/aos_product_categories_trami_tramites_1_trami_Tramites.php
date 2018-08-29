<?php
// created: 2018-07-27 16:32:00
$dictionary["trami_Tramites"]["fields"]["aos_product_categories_trami_tramites_1"] = array (
  'name' => 'aos_product_categories_trami_tramites_1',
  'type' => 'link',
  'relationship' => 'aos_product_categories_trami_tramites_1',
  'source' => 'non-db',
  'module' => 'AOS_Product_Categories',
  'bean_name' => 'AOS_Product_Categories',
  'vname' => 'LBL_AOS_PRODUCT_CATEGORIES_TRAMI_TRAMITES_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
  'id_name' => 'aos_produc5787egories_ida',
);
$dictionary["trami_Tramites"]["fields"]["aos_product_categories_trami_tramites_1_name"] = array (
  'name' => 'aos_product_categories_trami_tramites_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_PRODUCT_CATEGORIES_TRAMI_TRAMITES_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
  'save' => true,
  'id_name' => 'aos_produc5787egories_ida',
  'link' => 'aos_product_categories_trami_tramites_1',
  'table' => 'aos_product_categories',
  'module' => 'AOS_Product_Categories',
  'rname' => 'name',
);
$dictionary["trami_Tramites"]["fields"]["aos_produc5787egories_ida"] = array (
  'name' => 'aos_produc5787egories_ida',
  'type' => 'link',
  'relationship' => 'aos_product_categories_trami_tramites_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_PRODUCT_CATEGORIES_TRAMI_TRAMITES_1_FROM_TRAMI_TRAMITES_TITLE',
);
