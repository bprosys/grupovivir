<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2017-12-14 23:04:14
$dictionary["Account"]["fields"]["notes_accounts_1"] = array (
  'name' => 'notes_accounts_1',
  'type' => 'link',
  'relationship' => 'notes_accounts_1',
  'source' => 'non-db',
  'module' => 'Notes',
  'bean_name' => 'Note',
  'vname' => 'LBL_NOTES_ACCOUNTS_1_FROM_NOTES_TITLE',
);


// created: 2018-07-21 18:28:12
$dictionary["Account"]["fields"]["accounts_bugs_1"] = array (
  'name' => 'accounts_bugs_1',
  'type' => 'link',
  'relationship' => 'accounts_bugs_1',
  'source' => 'non-db',
  'module' => 'Bugs',
  'bean_name' => 'Bug',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_BUGS_1_FROM_BUGS_TITLE',
);


 // created: 2018-05-08 14:52:19
$dictionary['Account']['fields']['first_name_c']['inline_edit']='1';
$dictionary['Account']['fields']['first_name_c']['labelValue']='first name';

 

// created: 2018-04-16 12:50:05
$dictionary["Account"]["fields"]["accounts_aos_contracts_1"] = array (
  'name' => 'accounts_aos_contracts_1',
  'type' => 'link',
  'relationship' => 'accounts_aos_contracts_1',
  'source' => 'non-db',
  'module' => 'AOS_Contracts',
  'bean_name' => 'AOS_Contracts',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_AOS_CONTRACTS_1_FROM_AOS_CONTRACTS_TITLE',
);


// created: 2018-07-20 14:37:37
$dictionary["Account"]["fields"]["accounts_reser_contrato_1"] = array (
  'name' => 'accounts_reser_contrato_1',
  'type' => 'link',
  'relationship' => 'accounts_reser_contrato_1',
  'source' => 'non-db',
  'module' => 'Reser_Contrato',
  'bean_name' => 'Reser_Contrato',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_RESER_CONTRATO_1_FROM_RESER_CONTRATO_TITLE',
);


 // created: 2018-03-15 03:10:37
$dictionary['Account']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

// created: 2018-07-27 16:58:32
$dictionary["Account"]["fields"]["accounts_ing_ingenieria_1"] = array (
  'name' => 'accounts_ing_ingenieria_1',
  'type' => 'link',
  'relationship' => 'accounts_ing_ingenieria_1',
  'source' => 'non-db',
  'module' => 'ING_Ingenieria',
  'bean_name' => 'ING_Ingenieria',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_ING_INGENIERIA_1_FROM_ING_INGENIERIA_TITLE',
);


 // created: 2018-03-15 03:10:38
$dictionary['Account']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

// created: 2018-07-20 11:11:58
$dictionary["Account"]["fields"]["accounts_aos_products_1"] = array (
  'name' => 'accounts_aos_products_1',
  'type' => 'link',
  'relationship' => 'accounts_aos_products_1',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
);


// created: 2018-07-21 12:49:45
$dictionary["Account"]["fields"]["bugs_accounts_1"] = array (
  'name' => 'bugs_accounts_1',
  'type' => 'link',
  'relationship' => 'bugs_accounts_1',
  'source' => 'non-db',
  'module' => 'Bugs',
  'bean_name' => 'Bug',
  'vname' => 'LBL_BUGS_ACCOUNTS_1_FROM_BUGS_TITLE',
  'id_name' => 'bugs_accounts_1bugs_ida',
);
$dictionary["Account"]["fields"]["bugs_accounts_1_name"] = array (
  'name' => 'bugs_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BUGS_ACCOUNTS_1_FROM_BUGS_TITLE',
  'save' => true,
  'id_name' => 'bugs_accounts_1bugs_ida',
  'link' => 'bugs_accounts_1',
  'table' => 'bugs',
  'module' => 'Bugs',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["bugs_accounts_1bugs_ida"] = array (
  'name' => 'bugs_accounts_1bugs_ida',
  'type' => 'link',
  'relationship' => 'bugs_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_BUGS_ACCOUNTS_1_FROM_BUGS_TITLE',
);


// created: 2018-07-27 16:21:17
$dictionary["Account"]["fields"]["accounts_trami_tramites_1"] = array (
  'name' => 'accounts_trami_tramites_1',
  'type' => 'link',
  'relationship' => 'accounts_trami_tramites_1',
  'source' => 'non-db',
  'module' => 'trami_Tramites',
  'bean_name' => 'trami_Tramites',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_TRAMI_TRAMITES_1_FROM_TRAMI_TRAMITES_TITLE',
);


// created: 2018-04-05 06:50:36
$dictionary["Account"]["fields"]["ing_ingenieria_accounts"] = array (
  'name' => 'ing_ingenieria_accounts',
  'type' => 'link',
  'relationship' => 'ing_ingenieria_accounts',
  'source' => 'non-db',
  'module' => 'ING_Ingenieria',
  'bean_name' => false,
  'vname' => 'LBL_ING_INGENIERIA_ACCOUNTS_FROM_ING_INGENIERIA_TITLE',
  'id_name' => 'ing_ingenieria_accountsing_ingenieria_ida',
);
$dictionary["Account"]["fields"]["ing_ingenieria_accounts_name"] = array (
  'name' => 'ing_ingenieria_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ING_INGENIERIA_ACCOUNTS_FROM_ING_INGENIERIA_TITLE',
  'save' => true,
  'id_name' => 'ing_ingenieria_accountsing_ingenieria_ida',
  'link' => 'ing_ingenieria_accounts',
  'table' => 'ing_ingenieria',
  'module' => 'ING_Ingenieria',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["ing_ingenieria_accountsing_ingenieria_ida"] = array (
  'name' => 'ing_ingenieria_accountsing_ingenieria_ida',
  'type' => 'link',
  'relationship' => 'ing_ingenieria_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ING_INGENIERIA_ACCOUNTS_FROM_ING_INGENIERIA_TITLE',
);


 // created: 2018-07-26 11:07:46
$dictionary['Account']['fields']['broker_c']['inline_edit']='1';
$dictionary['Account']['fields']['broker_c']['labelValue']='Broker';

 

 // created: 2018-03-15 03:10:38
$dictionary['Account']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2018-03-15 03:10:38
$dictionary['Account']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2018-08-02 07:19:32
$dictionary['Account']['fields']['brokerabierto_c']['inline_edit']='1';
$dictionary['Account']['fields']['brokerabierto_c']['labelValue']='broker';

 

 // created: 2018-07-18 15:15:56
$dictionary['Account']['fields']['identificacion_c']['inline_edit']='1';
$dictionary['Account']['fields']['identificacion_c']['labelValue']='Identificación';

 
?>