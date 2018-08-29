<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-03-21 19:46:26
$dictionary["Document"]["fields"]["users_documents_1"] = array (
  'name' => 'users_documents_1',
  'type' => 'link',
  'relationship' => 'users_documents_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_DOCUMENTS_1_FROM_USERS_TITLE',
  'id_name' => 'users_documents_1users_ida',
);
$dictionary["Document"]["fields"]["users_documents_1_name"] = array (
  'name' => 'users_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_DOCUMENTS_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_documents_1users_ida',
  'link' => 'users_documents_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["users_documents_1users_ida"] = array (
  'name' => 'users_documents_1users_ida',
  'type' => 'link',
  'relationship' => 'users_documents_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);


 // created: 2018-04-11 08:33:45
$dictionary['Document']['fields']['category_id']['inline_edit']=true;
$dictionary['Document']['fields']['category_id']['merge_filter']='disabled';

 

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

?>