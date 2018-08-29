<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-04-20 16:46:26
$dictionary['Reser_Reservas']['fields']['descripcion_c']['inline_edit']='1';
$dictionary['Reser_Reservas']['fields']['descripcion_c']['labelValue']='Descripcion';

 

 // created: 2018-04-20 16:44:13
$dictionary['Reser_Reservas']['fields']['valor_c']['inline_edit']='1';
$dictionary['Reser_Reservas']['fields']['valor_c']['labelValue']='Valor';

 

// created: 2018-04-16 10:00:18
$dictionary["Reser_Reservas"]["fields"]["opportunities_reser_reservas_1"] = array (
  'name' => 'opportunities_reser_reservas_1',
  'type' => 'link',
  'relationship' => 'opportunities_reser_reservas_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_OPPORTUNITIES_RESER_RESERVAS_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'opportunities_reser_reservas_1opportunities_ida',
);
$dictionary["Reser_Reservas"]["fields"]["opportunities_reser_reservas_1_name"] = array (
  'name' => 'opportunities_reser_reservas_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_RESER_RESERVAS_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_reser_reservas_1opportunities_ida',
  'link' => 'opportunities_reser_reservas_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
  'required' => true,
);
$dictionary["Reser_Reservas"]["fields"]["opportunities_reser_reservas_1opportunities_ida"] = array (
  'name' => 'opportunities_reser_reservas_1opportunities_ida',
  'type' => 'link',
  'relationship' => 'opportunities_reser_reservas_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_RESER_RESERVAS_1_FROM_RESER_RESERVAS_TITLE',
);


// created: 2018-04-16 07:40:19
$dictionary["Reser_Reservas"]["fields"]["aos_products_reser_reservas_1"] = array (
  'name' => 'aos_products_reser_reservas_1',
  'type' => 'link',
  'relationship' => 'aos_products_reser_reservas_1',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'vname' => 'LBL_AOS_PRODUCTS_RESER_RESERVAS_1_FROM_AOS_PRODUCTS_TITLE',
  'id_name' => 'aos_products_reser_reservas_1aos_products_ida',
);
$dictionary["Reser_Reservas"]["fields"]["aos_products_reser_reservas_1_name"] = array (
  'name' => 'aos_products_reser_reservas_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_PRODUCTS_RESER_RESERVAS_1_FROM_AOS_PRODUCTS_TITLE',
  'save' => true,
  'id_name' => 'aos_products_reser_reservas_1aos_products_ida',
  'link' => 'aos_products_reser_reservas_1',
  'table' => 'aos_products',
  'module' => 'AOS_Products',
  'rname' => 'name',
  'required' => true,
);
$dictionary["Reser_Reservas"]["fields"]["aos_products_reser_reservas_1aos_products_ida"] = array (
  'name' => 'aos_products_reser_reservas_1aos_products_ida',
  'type' => 'link',
  'relationship' => 'aos_products_reser_reservas_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_PRODUCTS_RESER_RESERVAS_1_FROM_RESER_RESERVAS_TITLE',
);


 // created: 2018-04-12 18:56:08
$dictionary['Reser_Reservas']['fields']['status_id']['inline_edit']=true;
$dictionary['Reser_Reservas']['fields']['status_id']['options']='estados_reserva';
$dictionary['Reser_Reservas']['fields']['status_id']['merge_filter']='disabled';
$dictionary['Reser_Reservas']['fields']['status_id']['reportable']=true;

 

// created: 2018-05-23 05:24:50
$dictionary["Reser_Reservas"]["fields"]["reser_reservas_aos_product_categories_1"] = array (
  'name' => 'reser_reservas_aos_product_categories_1',
  'type' => 'link',
  'relationship' => 'reser_reservas_aos_product_categories_1',
  'source' => 'non-db',
  'module' => 'AOS_Product_Categories',
  'bean_name' => 'AOS_Product_Categories',
  'vname' => 'LBL_RESER_RESERVAS_AOS_PRODUCT_CATEGORIES_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
  'id_name' => 'reser_rese08daegories_idb',
);
$dictionary["Reser_Reservas"]["fields"]["reser_reservas_aos_product_categories_1_name"] = array (
  'name' => 'reser_reservas_aos_product_categories_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RESER_RESERVAS_AOS_PRODUCT_CATEGORIES_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
  'save' => true,
  'id_name' => 'reser_rese08daegories_idb',
  'link' => 'reser_reservas_aos_product_categories_1',
  'table' => 'aos_product_categories',
  'module' => 'AOS_Product_Categories',
  'rname' => 'name',
);
$dictionary["Reser_Reservas"]["fields"]["reser_rese08daegories_idb"] = array (
  'name' => 'reser_rese08daegories_idb',
  'type' => 'link',
  'relationship' => 'reser_reservas_aos_product_categories_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_RESER_RESERVAS_AOS_PRODUCT_CATEGORIES_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
);


// created: 2018-05-23 06:25:40
$dictionary["Reser_Reservas"]["fields"]["reser_reservas_contacts_1"] = array (
  'name' => 'reser_reservas_contacts_1',
  'type' => 'link',
  'relationship' => 'reser_reservas_contacts_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_RESER_RESERVAS_CONTACTS_1_FROM_CONTACTS_TITLE',
  'id_name' => 'reser_reservas_contacts_1contacts_idb',
);
$dictionary["Reser_Reservas"]["fields"]["reser_reservas_contacts_1_name"] = array (
  'name' => 'reser_reservas_contacts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RESER_RESERVAS_CONTACTS_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'reser_reservas_contacts_1contacts_idb',
  'link' => 'reser_reservas_contacts_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Reser_Reservas"]["fields"]["reser_reservas_contacts_1contacts_idb"] = array (
  'name' => 'reser_reservas_contacts_1contacts_idb',
  'type' => 'link',
  'relationship' => 'reser_reservas_contacts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_RESER_RESERVAS_CONTACTS_1_FROM_CONTACTS_TITLE',
);

?>