<?php
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
