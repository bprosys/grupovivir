<?php
// created: 2018-04-11 09:50:09
$dictionary["AOS_Products"]["fields"]["documents_aos_products_1"] = array (
  'name' => 'documents_aos_products_1',
  'type' => 'link',
  'relationship' => 'documents_aos_products_1',
  'source' => 'non-db',
  'module' => 'Documents',
  'bean_name' => 'Document',
  'vname' => 'LBL_DOCUMENTS_AOS_PRODUCTS_1_FROM_DOCUMENTS_TITLE',
  'id_name' => 'documents_aos_products_1documents_ida',
);
$dictionary["AOS_Products"]["fields"]["documents_aos_products_1_name"] = array (
  'name' => 'documents_aos_products_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DOCUMENTS_AOS_PRODUCTS_1_FROM_DOCUMENTS_TITLE',
  'save' => true,
  'id_name' => 'documents_aos_products_1documents_ida',
  'link' => 'documents_aos_products_1',
  'table' => 'documents',
  'module' => 'Documents',
  'rname' => 'document_name',
);
$dictionary["AOS_Products"]["fields"]["documents_aos_products_1documents_ida"] = array (
  'name' => 'documents_aos_products_1documents_ida',
  'type' => 'link',
  'relationship' => 'documents_aos_products_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_DOCUMENTS_AOS_PRODUCTS_1_FROM_DOCUMENTS_TITLE',
);
