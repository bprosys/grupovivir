<?php
// created: 2018-05-23 06:25:40
$dictionary["reser_reservas_contacts_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'reser_reservas_contacts_1' => 
    array (
      'lhs_module' => 'Reser_Reservas',
      'lhs_table' => 'reser_reservas',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'reser_reservas_contacts_1_c',
      'join_key_lhs' => 'reser_reservas_contacts_1reser_reservas_ida',
      'join_key_rhs' => 'reser_reservas_contacts_1contacts_idb',
    ),
  ),
  'table' => 'reser_reservas_contacts_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'reser_reservas_contacts_1reser_reservas_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'reser_reservas_contacts_1contacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'reser_reservas_contacts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'reser_reservas_contacts_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'reser_reservas_contacts_1reser_reservas_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'reser_reservas_contacts_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'reser_reservas_contacts_1contacts_idb',
      ),
    ),
  ),
);