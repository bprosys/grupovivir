<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-03-15 05:31:42
$dictionary['Bug']['fields']['account_id_c']['inline_edit']=1;

 

 // created: 2018-03-15 05:31:42
$dictionary['Bug']['fields']['incidencia_numerodeparte_c']['inline_edit']='1';
$dictionary['Bug']['fields']['incidencia_numerodeparte_c']['labelValue']='Producto';

 

 // created: 2018-07-13 17:01:44
$dictionary['Bug']['fields']['description']['inline_edit']=true;
$dictionary['Bug']['fields']['description']['comments']='Full text of the note';
$dictionary['Bug']['fields']['description']['merge_filter']='disabled';

 

 // created: 2017-11-23 03:47:20
$dictionary['Bug']['fields']['type']['len']=100;
$dictionary['Bug']['fields']['type']['inline_edit']=true;
$dictionary['Bug']['fields']['type']['comments']='The type of issue (ex: issue, feature)';
$dictionary['Bug']['fields']['type']['merge_filter']='disabled';

 

 // created: 2018-07-13 17:05:59
$dictionary['Bug']['fields']['fechacreacion_c']['inline_edit']='1';
$dictionary['Bug']['fields']['fechacreacion_c']['labelValue']='Fecha de Creación';

 

 // created: 2018-04-25 09:46:57
$dictionary['Bug']['fields']['area_garantia_c']['inline_edit']='1';
$dictionary['Bug']['fields']['area_garantia_c']['labelValue']='Area Garantia';

 

 // created: 2018-07-13 16:59:23
$dictionary['Bug']['fields']['fecha_firma_entrega_c']['inline_edit']='1';
$dictionary['Bug']['fields']['fecha_firma_entrega_c']['labelValue']='Fecha Aceptación';

 

 // created: 2018-07-13 17:00:13
$dictionary['Bug']['fields']['date_entered']['comments']='Date record created';
$dictionary['Bug']['fields']['date_entered']['merge_filter']='disabled';

 

 // created: 2018-03-15 05:31:42
$dictionary['Bug']['fields']['aos_products_id_c']['inline_edit']=1;

 

// created: 2018-07-21 12:49:45
$dictionary["Bug"]["fields"]["bugs_accounts_1"] = array (
  'name' => 'bugs_accounts_1',
  'type' => 'link',
  'relationship' => 'bugs_accounts_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_BUGS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'bugs_accounts_1accounts_idb',
);
$dictionary["Bug"]["fields"]["bugs_accounts_1_name"] = array (
  'name' => 'bugs_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BUGS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'bugs_accounts_1accounts_idb',
  'link' => 'bugs_accounts_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Bug"]["fields"]["bugs_accounts_1accounts_idb"] = array (
  'name' => 'bugs_accounts_1accounts_idb',
  'type' => 'link',
  'relationship' => 'bugs_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_BUGS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
);


 // created: 2018-07-13 17:06:47
$dictionary['Bug']['fields']['fotoinspeccion_c']['inline_edit']='1';
$dictionary['Bug']['fields']['fotoinspeccion_c']['labelValue']='Foto Inspección';

 

 // created: 2018-04-25 09:43:22
$dictionary['Bug']['fields']['tipologia_c']['inline_edit']='1';
$dictionary['Bug']['fields']['tipologia_c']['labelValue']='Tipologia';

 

 // created: 2018-07-17 11:15:57
$dictionary['Bug']['fields']['status']['default']='New';
$dictionary['Bug']['fields']['status']['inline_edit']=true;
$dictionary['Bug']['fields']['status']['comments']='The status of the issue';
$dictionary['Bug']['fields']['status']['merge_filter']='disabled';

 

 // created: 2018-03-15 05:31:42
$dictionary['Bug']['fields']['incidencia_contacto_c']['inline_edit']='1';
$dictionary['Bug']['fields']['incidencia_contacto_c']['labelValue']='Contacto';

 

 // created: 2018-07-13 17:07:32
$dictionary['Bug']['fields']['fototrabajorealizado_c']['inline_edit']='1';
$dictionary['Bug']['fields']['fototrabajorealizado_c']['labelValue']='Foto Trabajo Realizado';

 

// created: 2018-07-21 18:28:12
$dictionary["Bug"]["fields"]["accounts_bugs_1"] = array (
  'name' => 'accounts_bugs_1',
  'type' => 'link',
  'relationship' => 'accounts_bugs_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_BUGS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_bugs_1accounts_ida',
);
$dictionary["Bug"]["fields"]["accounts_bugs_1_name"] = array (
  'name' => 'accounts_bugs_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_BUGS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_bugs_1accounts_ida',
  'link' => 'accounts_bugs_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Bug"]["fields"]["accounts_bugs_1accounts_ida"] = array (
  'name' => 'accounts_bugs_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_bugs_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_BUGS_1_FROM_BUGS_TITLE',
);


 // created: 2018-03-15 05:31:42
$dictionary['Bug']['fields']['aos_product_categories_id_c']['inline_edit']=1;

 

// created: 2018-04-05 06:50:36
$dictionary["Bug"]["fields"]["ing_ingenieria_bugs"] = array (
  'name' => 'ing_ingenieria_bugs',
  'type' => 'link',
  'relationship' => 'ing_ingenieria_bugs',
  'source' => 'non-db',
  'module' => 'ING_Ingenieria',
  'bean_name' => false,
  'vname' => 'LBL_ING_INGENIERIA_BUGS_FROM_ING_INGENIERIA_TITLE',
  'id_name' => 'ing_ingenieria_bugsing_ingenieria_ida',
);
$dictionary["Bug"]["fields"]["ing_ingenieria_bugs_name"] = array (
  'name' => 'ing_ingenieria_bugs_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ING_INGENIERIA_BUGS_FROM_ING_INGENIERIA_TITLE',
  'save' => true,
  'id_name' => 'ing_ingenieria_bugsing_ingenieria_ida',
  'link' => 'ing_ingenieria_bugs',
  'table' => 'ing_ingenieria',
  'module' => 'ING_Ingenieria',
  'rname' => 'name',
);
$dictionary["Bug"]["fields"]["ing_ingenieria_bugsing_ingenieria_ida"] = array (
  'name' => 'ing_ingenieria_bugsing_ingenieria_ida',
  'type' => 'link',
  'relationship' => 'ing_ingenieria_bugs',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ING_INGENIERIA_BUGS_FROM_BUGS_TITLE',
);


// created: 2018-07-21 12:36:31
$dictionary["Bug"]["fields"]["bugs_aos_products_1"] = array (
  'name' => 'bugs_aos_products_1',
  'type' => 'link',
  'relationship' => 'bugs_aos_products_1',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'vname' => 'LBL_BUGS_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
  'id_name' => 'bugs_aos_products_1aos_products_idb',
);
$dictionary["Bug"]["fields"]["bugs_aos_products_1_name"] = array (
  'name' => 'bugs_aos_products_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BUGS_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
  'save' => true,
  'id_name' => 'bugs_aos_products_1aos_products_idb',
  'link' => 'bugs_aos_products_1',
  'table' => 'aos_products',
  'module' => 'AOS_Products',
  'rname' => 'name',
);
$dictionary["Bug"]["fields"]["bugs_aos_products_1aos_products_idb"] = array (
  'name' => 'bugs_aos_products_1aos_products_idb',
  'type' => 'link',
  'relationship' => 'bugs_aos_products_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_BUGS_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
);


 // created: 2018-03-15 05:31:42
$dictionary['Bug']['fields']['incidencias_cuentas_c']['inline_edit']='1';
$dictionary['Bug']['fields']['incidencias_cuentas_c']['labelValue']='Cuentas';

 

 // created: 2018-03-15 05:31:42
$dictionary['Bug']['fields']['incidencia_categoriaproducto_c']['inline_edit']='1';
$dictionary['Bug']['fields']['incidencia_categoriaproducto_c']['labelValue']=' Categoría Producto';

 

 // created: 2018-07-13 16:58:48
$dictionary['Bug']['fields']['fecha_correcion_c']['inline_edit']='1';
$dictionary['Bug']['fields']['fecha_correcion_c']['labelValue']='Fecha Terminación';

 

 // created: 2018-03-15 05:31:42
$dictionary['Bug']['fields']['contact_id_c']['inline_edit']=1;

 

// created: 2018-07-21 17:13:01
$dictionary["Bug"]["fields"]["aos_products_bugs_1"] = array (
  'name' => 'aos_products_bugs_1',
  'type' => 'link',
  'relationship' => 'aos_products_bugs_1',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'vname' => 'LBL_AOS_PRODUCTS_BUGS_1_FROM_AOS_PRODUCTS_TITLE',
  'id_name' => 'aos_products_bugs_1aos_products_ida',
);
$dictionary["Bug"]["fields"]["aos_products_bugs_1_name"] = array (
  'name' => 'aos_products_bugs_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_PRODUCTS_BUGS_1_FROM_AOS_PRODUCTS_TITLE',
  'save' => true,
  'id_name' => 'aos_products_bugs_1aos_products_ida',
  'link' => 'aos_products_bugs_1',
  'table' => 'aos_products',
  'module' => 'AOS_Products',
  'rname' => 'name',
);
$dictionary["Bug"]["fields"]["aos_products_bugs_1aos_products_ida"] = array (
  'name' => 'aos_products_bugs_1aos_products_ida',
  'type' => 'link',
  'relationship' => 'aos_products_bugs_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_PRODUCTS_BUGS_1_FROM_BUGS_TITLE',
);

?>