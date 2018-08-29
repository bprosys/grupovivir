<?php
// created: 2018-04-11 09:50:09
$dictionary["Document"]["fields"]["documents_aos_products_1"] = array (
  'name' => 'documents_aos_products_1',
  'type' => 'link',
  'relationship' => 'documents_aos_products_1',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'vname' => 'LBL_DOCUMENTS_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
  'id_name' => 'documents_aos_products_1aos_products_idb',
);
$dictionary["Document"]["fields"]["documents_aos_products_1_name"] = array (
  'name' => 'documents_aos_products_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DOCUMENTS_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
  'save' => true,
  'id_name' => 'documents_aos_products_1aos_products_idb',
  'link' => 'documents_aos_products_1',
  'table' => 'aos_products',
  'module' => 'AOS_Products',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["documents_aos_products_1aos_products_idb"] = array (
  'name' => 'documents_aos_products_1aos_products_idb',
  'type' => 'link',
  'relationship' => 'documents_aos_products_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_DOCUMENTS_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
);
