<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-04-20 16:58:31
$dictionary['AOS_Quotes']['fields']['cantidad_c']['inline_edit']='1';
$dictionary['AOS_Quotes']['fields']['cantidad_c']['labelValue']='Cantidad';

 

// created: 2018-04-16 07:42:47
$dictionary["AOS_Quotes"]["fields"]["aos_products_aos_quotes_1"] = array (
  'name' => 'aos_products_aos_quotes_1',
  'type' => 'link',
  'relationship' => 'aos_products_aos_quotes_1',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'vname' => 'LBL_AOS_PRODUCTS_AOS_QUOTES_1_FROM_AOS_PRODUCTS_TITLE',
  'id_name' => 'aos_products_aos_quotes_1aos_products_ida',
);
$dictionary["AOS_Quotes"]["fields"]["aos_products_aos_quotes_1_name"] = array (
  'name' => 'aos_products_aos_quotes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_PRODUCTS_AOS_QUOTES_1_FROM_AOS_PRODUCTS_TITLE',
  'save' => true,
  'id_name' => 'aos_products_aos_quotes_1aos_products_ida',
  'link' => 'aos_products_aos_quotes_1',
  'table' => 'aos_products',
  'module' => 'AOS_Products',
  'rname' => 'name',
);
$dictionary["AOS_Quotes"]["fields"]["aos_products_aos_quotes_1aos_products_ida"] = array (
  'name' => 'aos_products_aos_quotes_1aos_products_ida',
  'type' => 'link',
  'relationship' => 'aos_products_aos_quotes_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_PRODUCTS_AOS_QUOTES_1_FROM_AOS_QUOTES_TITLE',
);


 // created: 2018-04-20 16:53:47
$dictionary['AOS_Quotes']['fields']['valor_c']['inline_edit']='1';
$dictionary['AOS_Quotes']['fields']['valor_c']['labelValue']='valor';

 

 // created: 2018-04-20 16:51:42
$dictionary['AOS_Quotes']['fields']['valor_de_cuota_c']['inline_edit']='1';
$dictionary['AOS_Quotes']['fields']['valor_de_cuota_c']['labelValue']='Valor de Cuota';

 

 // created: 2018-04-20 16:52:21
$dictionary['AOS_Quotes']['fields']['porcentaje_c']['inline_edit']='1';
$dictionary['AOS_Quotes']['fields']['porcentaje_c']['labelValue']='Porcentaje';

 

 // created: 2018-04-20 16:51:16
$dictionary['AOS_Quotes']['fields']['cuotas_mensuales_c']['inline_edit']='1';
$dictionary['AOS_Quotes']['fields']['cuotas_mensuales_c']['labelValue']='Cuotas Mensuales';

 

// created: 2018-06-18 08:06:34
$dictionary["AOS_Quotes"]["fields"]["leads_aos_quotes_1"] = array (
  'name' => 'leads_aos_quotes_1',
  'type' => 'link',
  'relationship' => 'leads_aos_quotes_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_LEADS_AOS_QUOTES_1_FROM_LEADS_TITLE',
  'id_name' => 'leads_aos_quotes_1leads_ida',
);
$dictionary["AOS_Quotes"]["fields"]["leads_aos_quotes_1_name"] = array (
  'name' => 'leads_aos_quotes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_AOS_QUOTES_1_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_aos_quotes_1leads_ida',
  'link' => 'leads_aos_quotes_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["AOS_Quotes"]["fields"]["leads_aos_quotes_1leads_ida"] = array (
  'name' => 'leads_aos_quotes_1leads_ida',
  'type' => 'link',
  'relationship' => 'leads_aos_quotes_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_LEADS_AOS_QUOTES_1_FROM_AOS_QUOTES_TITLE',
);


 // created: 2017-11-18 19:30:12
$dictionary['AOS_Quotes']['fields']['approval_status']['inline_edit']=true;
$dictionary['AOS_Quotes']['fields']['approval_status']['merge_filter']='disabled';

 

 // created: 2018-04-20 16:50:30
$dictionary['AOS_Quotes']['fields']['saldo_abono_inicial_c']['inline_edit']='1';
$dictionary['AOS_Quotes']['fields']['saldo_abono_inicial_c']['labelValue']='Saldo Abono Inicial';

 

 // created: 2018-04-20 16:50:05
$dictionary['AOS_Quotes']['fields']['cuota_inicial_c']['inline_edit']='1';
$dictionary['AOS_Quotes']['fields']['cuota_inicial_c']['labelValue']='Cuota Inicial';

 

 // created: 2018-04-20 16:48:44
$dictionary['AOS_Quotes']['fields']['valor_separacion_c']['inline_edit']='1';
$dictionary['AOS_Quotes']['fields']['valor_separacion_c']['labelValue']='Valor Separacion';

 

 // created: 2018-05-21 11:47:37
$dictionary['AOS_Quotes']['fields']['credito_c']['inline_edit']='1';
$dictionary['AOS_Quotes']['fields']['credito_c']['labelValue']='credito';

 

 // created: 2018-04-20 16:49:26
$dictionary['AOS_Quotes']['fields']['monto_a_firma_de_contrato_c']['inline_edit']='1';
$dictionary['AOS_Quotes']['fields']['monto_a_firma_de_contrato_c']['labelValue']='Monto a Firma de Contrato';

 
?>