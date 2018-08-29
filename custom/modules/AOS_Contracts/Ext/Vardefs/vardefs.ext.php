<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-03-15 05:31:41
$dictionary['AOS_Contracts']['fields']['frecuencia_pago_c']['inline_edit']='1';
$dictionary['AOS_Contracts']['fields']['frecuencia_pago_c']['labelValue']='Frecuencia de Pago';

 

// created: 2018-04-16 12:50:05
$dictionary["AOS_Contracts"]["fields"]["accounts_aos_contracts_1"] = array (
  'name' => 'accounts_aos_contracts_1',
  'type' => 'link',
  'relationship' => 'accounts_aos_contracts_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_AOS_CONTRACTS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_aos_contracts_1accounts_ida',
);
$dictionary["AOS_Contracts"]["fields"]["accounts_aos_contracts_1_name"] = array (
  'name' => 'accounts_aos_contracts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_AOS_CONTRACTS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_aos_contracts_1accounts_ida',
  'link' => 'accounts_aos_contracts_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["AOS_Contracts"]["fields"]["accounts_aos_contracts_1accounts_ida"] = array (
  'name' => 'accounts_aos_contracts_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_aos_contracts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_AOS_CONTRACTS_1_FROM_AOS_CONTRACTS_TITLE',
);


 // created: 2018-03-15 05:31:41
$dictionary['AOS_Contracts']['fields']['monto_cuota_c']['inline_edit']='1';
$dictionary['AOS_Contracts']['fields']['monto_cuota_c']['labelValue']='Monto Cuota';

 

 // created: 2018-03-15 05:31:41
$dictionary['AOS_Contracts']['fields']['contrato_plazo_c']['inline_edit']='1';
$dictionary['AOS_Contracts']['fields']['contrato_plazo_c']['labelValue']='Plazo (Meses)';

 

 // created: 2018-03-15 05:31:41
$dictionary['AOS_Contracts']['fields']['contrato_categoriaproducto_c']['inline_edit']='1';
$dictionary['AOS_Contracts']['fields']['contrato_categoriaproducto_c']['labelValue']='Categoria Producto';

 

 // created: 2018-08-26 09:51:07
$dictionary['AOS_Contracts']['fields']['status']['inline_edit']=true;
$dictionary['AOS_Contracts']['fields']['status']['merge_filter']='disabled';
$dictionary['AOS_Contracts']['fields']['status']['audited']=true;

 

 // created: 2018-03-15 05:31:41
$dictionary['AOS_Contracts']['fields']['aos_product_categories_id_c']['inline_edit']=1;

 
?>