<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-05-10 11:41:23
$dictionary['AOS_Products']['fields']['aos_product_category_name']['inline_edit']=true;
$dictionary['AOS_Products']['fields']['aos_product_category_name']['merge_filter']='disabled';

 

// created: 2018-04-16 07:42:47
$dictionary["AOS_Products"]["fields"]["aos_products_aos_quotes_1"] = array (
  'name' => 'aos_products_aos_quotes_1',
  'type' => 'link',
  'relationship' => 'aos_products_aos_quotes_1',
  'source' => 'non-db',
  'module' => 'AOS_Quotes',
  'bean_name' => 'AOS_Quotes',
  'side' => 'right',
  'vname' => 'LBL_AOS_PRODUCTS_AOS_QUOTES_1_FROM_AOS_QUOTES_TITLE',
);


// created: 2018-04-12 18:15:49
$dictionary["AOS_Products"]["fields"]["rvsem_reservas_aos_products_1"] = array (
  'name' => 'rvsem_reservas_aos_products_1',
  'type' => 'link',
  'relationship' => 'rvsem_reservas_aos_products_1',
  'source' => 'non-db',
  'module' => 'rvsem_reservas',
  'bean_name' => 'rvsem_reservas',
  'vname' => 'LBL_RVSEM_RESERVAS_AOS_PRODUCTS_1_FROM_RVSEM_RESERVAS_TITLE',
  'id_name' => 'rvsem_reservas_aos_products_1rvsem_reservas_ida',
);
$dictionary["AOS_Products"]["fields"]["rvsem_reservas_aos_products_1_name"] = array (
  'name' => 'rvsem_reservas_aos_products_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RVSEM_RESERVAS_AOS_PRODUCTS_1_FROM_RVSEM_RESERVAS_TITLE',
  'save' => true,
  'id_name' => 'rvsem_reservas_aos_products_1rvsem_reservas_ida',
  'link' => 'rvsem_reservas_aos_products_1',
  'table' => 'rvsem_reservas',
  'module' => 'rvsem_reservas',
  'rname' => 'document_name',
);
$dictionary["AOS_Products"]["fields"]["rvsem_reservas_aos_products_1rvsem_reservas_ida"] = array (
  'name' => 'rvsem_reservas_aos_products_1rvsem_reservas_ida',
  'type' => 'link',
  'relationship' => 'rvsem_reservas_aos_products_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_RVSEM_RESERVAS_AOS_PRODUCTS_1_FROM_RVSEM_RESERVAS_TITLE',
);


 // created: 2018-07-26 10:13:35
$dictionary['AOS_Products']['fields']['piso_c']['inline_edit']='1';
$dictionary['AOS_Products']['fields']['piso_c']['labelValue']='Piso';

 

// created: 2018-07-21 12:36:31
$dictionary["AOS_Products"]["fields"]["bugs_aos_products_1"] = array (
  'name' => 'bugs_aos_products_1',
  'type' => 'link',
  'relationship' => 'bugs_aos_products_1',
  'source' => 'non-db',
  'module' => 'Bugs',
  'bean_name' => 'Bug',
  'vname' => 'LBL_BUGS_AOS_PRODUCTS_1_FROM_BUGS_TITLE',
  'id_name' => 'bugs_aos_products_1bugs_ida',
);
$dictionary["AOS_Products"]["fields"]["bugs_aos_products_1_name"] = array (
  'name' => 'bugs_aos_products_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BUGS_AOS_PRODUCTS_1_FROM_BUGS_TITLE',
  'save' => true,
  'id_name' => 'bugs_aos_products_1bugs_ida',
  'link' => 'bugs_aos_products_1',
  'table' => 'bugs',
  'module' => 'Bugs',
  'rname' => 'name',
);
$dictionary["AOS_Products"]["fields"]["bugs_aos_products_1bugs_ida"] = array (
  'name' => 'bugs_aos_products_1bugs_ida',
  'type' => 'link',
  'relationship' => 'bugs_aos_products_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_BUGS_AOS_PRODUCTS_1_FROM_BUGS_TITLE',
);


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


 // created: 2018-05-10 11:41:47
$dictionary['AOS_Products']['fields']['descuento_c']['inline_edit']='1';
$dictionary['AOS_Products']['fields']['descuento_c']['labelValue']='Descuento';

 

 // created: 2018-07-12 16:21:10
$dictionary['AOS_Products']['fields']['estado_c']['inline_edit']='1';
$dictionary['AOS_Products']['fields']['estado_c']['labelValue']='Estado';

 

// created: 2018-07-27 16:33:51
$dictionary["AOS_Products"]["fields"]["aos_products_trami_tramites_1"] = array (
  'name' => 'aos_products_trami_tramites_1',
  'type' => 'link',
  'relationship' => 'aos_products_trami_tramites_1',
  'source' => 'non-db',
  'module' => 'trami_Tramites',
  'bean_name' => 'trami_Tramites',
  'side' => 'right',
  'vname' => 'LBL_AOS_PRODUCTS_TRAMI_TRAMITES_1_FROM_TRAMI_TRAMITES_TITLE',
);


// created: 2018-07-21 17:13:01
$dictionary["AOS_Products"]["fields"]["aos_products_bugs_1"] = array (
  'name' => 'aos_products_bugs_1',
  'type' => 'link',
  'relationship' => 'aos_products_bugs_1',
  'source' => 'non-db',
  'module' => 'Bugs',
  'bean_name' => 'Bug',
  'side' => 'right',
  'vname' => 'LBL_AOS_PRODUCTS_BUGS_1_FROM_BUGS_TITLE',
);


 // created: 2018-03-15 05:31:42
$dictionary['AOS_Products']['fields']['fecha_reserva_c']['inline_edit']='1';
$dictionary['AOS_Products']['fields']['fecha_reserva_c']['options']='date_range_search_dom';
$dictionary['AOS_Products']['fields']['fecha_reserva_c']['labelValue']='Fecha Reserva';
$dictionary['AOS_Products']['fields']['fecha_reserva_c']['enable_range_search']='1';

 

 // created: 2018-07-26 10:18:34
$dictionary['AOS_Products']['fields']['codigo_unidad_c']['inline_edit']='1';
$dictionary['AOS_Products']['fields']['codigo_unidad_c']['labelValue']='Código Unidad';

 

 // created: 2018-07-12 15:48:20
$dictionary['AOS_Products']['fields']['ala_c']['inline_edit']='1';
$dictionary['AOS_Products']['fields']['ala_c']['labelValue']='Ala';

 

// created: 2018-07-21 10:34:27
$dictionary["AOS_Products"]["fields"]["aos_products_ing_ingenieria_1"] = array (
  'name' => 'aos_products_ing_ingenieria_1',
  'type' => 'link',
  'relationship' => 'aos_products_ing_ingenieria_1',
  'source' => 'non-db',
  'module' => 'ING_Ingenieria',
  'bean_name' => 'ING_Ingenieria',
  'side' => 'right',
  'vname' => 'LBL_AOS_PRODUCTS_ING_INGENIERIA_1_FROM_ING_INGENIERIA_TITLE',
);


 // created: 2018-07-12 15:48:05
$dictionary['AOS_Products']['fields']['torre_c']['inline_edit']='1';
$dictionary['AOS_Products']['fields']['torre_c']['labelValue']='Torre';

 

// created: 2018-03-15 11:39:33
$dictionary["AOS_Products"]["fields"]["ingen_ingenieria_aos_products_1"] = array (
  'name' => 'ingen_ingenieria_aos_products_1',
  'type' => 'link',
  'relationship' => 'ingen_ingenieria_aos_products_1',
  'source' => 'non-db',
  'module' => 'ingen_ingenieria',
  'bean_name' => 'ingen_ingenieria',
  'vname' => 'LBL_INGEN_INGENIERIA_AOS_PRODUCTS_1_FROM_INGEN_INGENIERIA_TITLE',
  'id_name' => 'ingen_ingenieria_aos_products_1ingen_ingenieria_ida',
);
$dictionary["AOS_Products"]["fields"]["ingen_ingenieria_aos_products_1_name"] = array (
  'name' => 'ingen_ingenieria_aos_products_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_INGEN_INGENIERIA_AOS_PRODUCTS_1_FROM_INGEN_INGENIERIA_TITLE',
  'save' => true,
  'id_name' => 'ingen_ingenieria_aos_products_1ingen_ingenieria_ida',
  'link' => 'ingen_ingenieria_aos_products_1',
  'table' => 'ingen_ingenieria',
  'module' => 'ingen_ingenieria',
  'rname' => 'document_name',
);
$dictionary["AOS_Products"]["fields"]["ingen_ingenieria_aos_products_1ingen_ingenieria_ida"] = array (
  'name' => 'ingen_ingenieria_aos_products_1ingen_ingenieria_ida',
  'type' => 'link',
  'relationship' => 'ingen_ingenieria_aos_products_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_INGEN_INGENIERIA_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
);


// created: 2018-05-14 07:27:22
$dictionary["AOS_Products"]["fields"]["aye_almacenes_y_estacionamientos_aos_products"] = array (
  'name' => 'aye_almacenes_y_estacionamientos_aos_products',
  'type' => 'link',
  'relationship' => 'aye_almacenes_y_estacionamientos_aos_products',
  'source' => 'non-db',
  'module' => 'AYE_almacenes_y_estacionamientos',
  'bean_name' => false,
  'side' => 'right',
  'vname' => 'LBL_AYE_ALMACENES_Y_ESTACIONAMIENTOS_AOS_PRODUCTS_FROM_AYE_ALMACENES_Y_ESTACIONAMIENTOS_TITLE',
);


 // created: 2018-05-21 11:08:41
$dictionary['AOS_Products']['fields']['areaconstruida_c']['inline_edit']='1';
$dictionary['AOS_Products']['fields']['areaconstruida_c']['labelValue']='Area Construida';

 

// created: 2018-04-16 07:40:19
$dictionary["AOS_Products"]["fields"]["aos_products_reser_reservas_1"] = array (
  'name' => 'aos_products_reser_reservas_1',
  'type' => 'link',
  'relationship' => 'aos_products_reser_reservas_1',
  'source' => 'non-db',
  'module' => 'Reser_Reservas',
  'bean_name' => 'Reser_Reservas',
  'side' => 'right',
  'vname' => 'LBL_AOS_PRODUCTS_RESER_RESERVAS_1_FROM_RESER_RESERVAS_TITLE',
);


 // created: 2018-05-17 09:05:07
$dictionary['AOS_Products']['fields']['modelo_c']['inline_edit']='1';
$dictionary['AOS_Products']['fields']['modelo_c']['labelValue']='Modelo';

 

 // created: 2018-05-20 09:16:39
$dictionary['AOS_Products']['fields']['url_plano_c']['inline_edit']='1';
$dictionary['AOS_Products']['fields']['url_plano_c']['labelValue']='Url de plano';

 

 // created: 2018-05-21 11:10:06
$dictionary['AOS_Products']['fields']['habitaciones_c']['inline_edit']='1';
$dictionary['AOS_Products']['fields']['habitaciones_c']['labelValue']='Habitaciones';

 

 // created: 2018-05-20 09:15:55
$dictionary['AOS_Products']['fields']['plano_c']['inline_edit']='1';
$dictionary['AOS_Products']['fields']['plano_c']['labelValue']='Plano';

 

 // created: 2018-07-12 15:43:47
$dictionary['AOS_Products']['fields']['terraza_c']['inline_edit']='1';
$dictionary['AOS_Products']['fields']['terraza_c']['labelValue']='Terraza (mt2)';

 

 // created: 2018-05-21 11:11:21
$dictionary['AOS_Products']['fields']['banos_c']['inline_edit']='1';
$dictionary['AOS_Products']['fields']['banos_c']['labelValue']='Baños';

 

// created: 2018-04-05 06:50:36
$dictionary["AOS_Products"]["fields"]["ing_ingenieria_aos_products"] = array (
  'name' => 'ing_ingenieria_aos_products',
  'type' => 'link',
  'relationship' => 'ing_ingenieria_aos_products',
  'source' => 'non-db',
  'module' => 'ING_Ingenieria',
  'bean_name' => false,
  'vname' => 'LBL_ING_INGENIERIA_AOS_PRODUCTS_FROM_ING_INGENIERIA_TITLE',
  'id_name' => 'ing_ingenieria_aos_productsing_ingenieria_ida',
);
$dictionary["AOS_Products"]["fields"]["ing_ingenieria_aos_products_name"] = array (
  'name' => 'ing_ingenieria_aos_products_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ING_INGENIERIA_AOS_PRODUCTS_FROM_ING_INGENIERIA_TITLE',
  'save' => true,
  'id_name' => 'ing_ingenieria_aos_productsing_ingenieria_ida',
  'link' => 'ing_ingenieria_aos_products',
  'table' => 'ing_ingenieria',
  'module' => 'ING_Ingenieria',
  'rname' => 'name',
);
$dictionary["AOS_Products"]["fields"]["ing_ingenieria_aos_productsing_ingenieria_ida"] = array (
  'name' => 'ing_ingenieria_aos_productsing_ingenieria_ida',
  'type' => 'link',
  'relationship' => 'ing_ingenieria_aos_products',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ING_INGENIERIA_AOS_PRODUCTS_FROM_ING_INGENIERIA_TITLE',
);


// created: 2018-07-20 11:11:58
$dictionary["AOS_Products"]["fields"]["accounts_aos_products_1"] = array (
  'name' => 'accounts_aos_products_1',
  'type' => 'link',
  'relationship' => 'accounts_aos_products_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_AOS_PRODUCTS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_aos_products_1accounts_ida',
);
$dictionary["AOS_Products"]["fields"]["accounts_aos_products_1_name"] = array (
  'name' => 'accounts_aos_products_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_AOS_PRODUCTS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_aos_products_1accounts_ida',
  'link' => 'accounts_aos_products_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["AOS_Products"]["fields"]["accounts_aos_products_1accounts_ida"] = array (
  'name' => 'accounts_aos_products_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_aos_products_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
);


 // created: 2018-03-15 05:31:42
$dictionary['AOS_Products']['fields']['metraje_c']['inline_edit']='1';
$dictionary['AOS_Products']['fields']['metraje_c']['labelValue']='Metraje';

 

 // created: 2018-05-21 11:07:38
$dictionary['AOS_Products']['fields']['estacionamientos_c']['inline_edit']='1';
$dictionary['AOS_Products']['fields']['estacionamientos_c']['labelValue']='Estacionamientos';

 

// created: 2018-04-16 10:59:25
$dictionary["AOS_Products"]["fields"]["aos_products_reser_contrato_1"] = array (
  'name' => 'aos_products_reser_contrato_1',
  'type' => 'link',
  'relationship' => 'aos_products_reser_contrato_1',
  'source' => 'non-db',
  'module' => 'Reser_Contrato',
  'bean_name' => 'Reser_Contrato',
  'side' => 'right',
  'vname' => 'LBL_AOS_PRODUCTS_RESER_CONTRATO_1_FROM_RESER_CONTRATO_TITLE',
);


 // created: 2018-05-21 11:09:31
$dictionary['AOS_Products']['fields']['depositos_c']['inline_edit']='1';
$dictionary['AOS_Products']['fields']['depositos_c']['labelValue']='Depósitos';

 
?>