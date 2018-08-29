<?php
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
