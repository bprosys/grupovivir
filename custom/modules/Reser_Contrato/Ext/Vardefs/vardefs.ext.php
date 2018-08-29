<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-08-26 09:43:10
$dictionary['Reser_Contrato']['fields']['document_name']['audited']=true;
$dictionary['Reser_Contrato']['fields']['document_name']['inline_edit']=true;
$dictionary['Reser_Contrato']['fields']['document_name']['merge_filter']='disabled';
$dictionary['Reser_Contrato']['fields']['document_name']['unified_search']=false;

 

 // created: 2018-08-26 09:42:54
$dictionary['Reser_Contrato']['fields']['active_date']['audited']=true;
$dictionary['Reser_Contrato']['fields']['active_date']['inline_edit']=true;
$dictionary['Reser_Contrato']['fields']['active_date']['merge_filter']='disabled';
$dictionary['Reser_Contrato']['fields']['active_date']['enable_range_search']=false;

 

// created: 2018-07-20 14:37:37
$dictionary["Reser_Contrato"]["fields"]["accounts_reser_contrato_1"] = array (
  'name' => 'accounts_reser_contrato_1',
  'type' => 'link',
  'relationship' => 'accounts_reser_contrato_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_RESER_CONTRATO_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_reser_contrato_1accounts_ida',
);
$dictionary["Reser_Contrato"]["fields"]["accounts_reser_contrato_1_name"] = array (
  'name' => 'accounts_reser_contrato_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_RESER_CONTRATO_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_reser_contrato_1accounts_ida',
  'link' => 'accounts_reser_contrato_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Reser_Contrato"]["fields"]["accounts_reser_contrato_1accounts_ida"] = array (
  'name' => 'accounts_reser_contrato_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_reser_contrato_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_RESER_CONTRATO_1_FROM_RESER_CONTRATO_TITLE',
);


// created: 2018-04-16 10:59:25
$dictionary["Reser_Contrato"]["fields"]["aos_products_reser_contrato_1"] = array (
  'name' => 'aos_products_reser_contrato_1',
  'type' => 'link',
  'relationship' => 'aos_products_reser_contrato_1',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'vname' => 'LBL_AOS_PRODUCTS_RESER_CONTRATO_1_FROM_AOS_PRODUCTS_TITLE',
  'id_name' => 'aos_products_reser_contrato_1aos_products_ida',
);
$dictionary["Reser_Contrato"]["fields"]["aos_products_reser_contrato_1_name"] = array (
  'name' => 'aos_products_reser_contrato_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_PRODUCTS_RESER_CONTRATO_1_FROM_AOS_PRODUCTS_TITLE',
  'save' => true,
  'id_name' => 'aos_products_reser_contrato_1aos_products_ida',
  'link' => 'aos_products_reser_contrato_1',
  'table' => 'aos_products',
  'module' => 'AOS_Products',
  'rname' => 'name',
);
$dictionary["Reser_Contrato"]["fields"]["aos_products_reser_contrato_1aos_products_ida"] = array (
  'name' => 'aos_products_reser_contrato_1aos_products_ida',
  'type' => 'link',
  'relationship' => 'aos_products_reser_contrato_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_PRODUCTS_RESER_CONTRATO_1_FROM_RESER_CONTRATO_TITLE',
);


 // created: 2018-08-26 09:43:23
$dictionary['Reser_Contrato']['fields']['status_id']['audited']=true;
$dictionary['Reser_Contrato']['fields']['status_id']['inline_edit']=true;
$dictionary['Reser_Contrato']['fields']['status_id']['merge_filter']='disabled';
$dictionary['Reser_Contrato']['fields']['status_id']['reportable']=true;

 

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

?>