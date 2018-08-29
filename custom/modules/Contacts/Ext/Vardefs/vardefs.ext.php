<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-04-20 16:31:27
$dictionary['Contact']['fields']['descripcion_c']['inline_edit']='1';
$dictionary['Contact']['fields']['descripcion_c']['labelValue']='Descripcion';

 

 // created: 2018-04-20 16:31:07
$dictionary['Contact']['fields']['estado_c']['inline_edit']='1';
$dictionary['Contact']['fields']['estado_c']['labelValue']='Estado';

 

 // created: 2018-03-15 03:10:38
$dictionary['Contact']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

 // created: 2018-03-15 16:03:07
$dictionary['Contact']['fields']['proyecto_de_interes_c']['inline_edit']='1';
$dictionary['Contact']['fields']['proyecto_de_interes_c']['labelValue']='proyecto de interes';

 

 // created: 2018-03-15 03:10:38
$dictionary['Contact']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

// created: 2018-05-23 06:25:40
$dictionary["Contact"]["fields"]["reser_reservas_contacts_1"] = array (
  'name' => 'reser_reservas_contacts_1',
  'type' => 'link',
  'relationship' => 'reser_reservas_contacts_1',
  'source' => 'non-db',
  'module' => 'Reser_Reservas',
  'bean_name' => 'Reser_Reservas',
  'vname' => 'LBL_RESER_RESERVAS_CONTACTS_1_FROM_RESER_RESERVAS_TITLE',
  'id_name' => 'reser_reservas_contacts_1reser_reservas_ida',
);
$dictionary["Contact"]["fields"]["reser_reservas_contacts_1_name"] = array (
  'name' => 'reser_reservas_contacts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RESER_RESERVAS_CONTACTS_1_FROM_RESER_RESERVAS_TITLE',
  'save' => true,
  'id_name' => 'reser_reservas_contacts_1reser_reservas_ida',
  'link' => 'reser_reservas_contacts_1',
  'table' => 'reser_reservas',
  'module' => 'Reser_Reservas',
  'rname' => 'document_name',
);
$dictionary["Contact"]["fields"]["reser_reservas_contacts_1reser_reservas_ida"] = array (
  'name' => 'reser_reservas_contacts_1reser_reservas_ida',
  'type' => 'link',
  'relationship' => 'reser_reservas_contacts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_RESER_RESERVAS_CONTACTS_1_FROM_RESER_RESERVAS_TITLE',
);


 // created: 2018-07-18 12:03:37
$dictionary['Contact']['fields']['proyectoint_c']['inline_edit']='1';
$dictionary['Contact']['fields']['proyectoint_c']['labelValue']='Proyecto Interes';

 

 // created: 2018-04-04 10:40:08
$dictionary['Contact']['fields']['relacion_con_la_cuenta_c']['inline_edit']='1';
$dictionary['Contact']['fields']['relacion_con_la_cuenta_c']['labelValue']='Relacion con la cuenta';

 

 // created: 2018-03-15 03:10:38
$dictionary['Contact']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2018-03-15 03:10:38
$dictionary['Contact']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2018-07-13 16:09:31
$dictionary['Contact']['fields']['last_name']['inline_edit']=true;
$dictionary['Contact']['fields']['last_name']['comments']='Last name of the contact';
$dictionary['Contact']['fields']['last_name']['importable']='true';
$dictionary['Contact']['fields']['last_name']['merge_filter']='disabled';
$dictionary['Contact']['fields']['last_name']['required']=false;

 

 // created: 2018-05-31 15:47:35
$dictionary['Contact']['fields']['identificacion_c']['inline_edit']='1';
$dictionary['Contact']['fields']['identificacion_c']['labelValue']='Cédula o RUC';

 
?>