<?php
// created: 2018-04-25 08:18:47
$dictionary["ecep_excepciones"]["fields"]["ing_ingenieria_ecep_excepciones_1"] = array (
  'name' => 'ing_ingenieria_ecep_excepciones_1',
  'type' => 'link',
  'relationship' => 'ing_ingenieria_ecep_excepciones_1',
  'source' => 'non-db',
  'module' => 'ING_Ingenieria',
  'bean_name' => 'ING_Ingenieria',
  'vname' => 'LBL_ING_INGENIERIA_ECEP_EXCEPCIONES_1_FROM_ING_INGENIERIA_TITLE',
  'id_name' => 'ing_ingenieria_ecep_excepciones_1ing_ingenieria_ida',
);
$dictionary["ecep_excepciones"]["fields"]["ing_ingenieria_ecep_excepciones_1_name"] = array (
  'name' => 'ing_ingenieria_ecep_excepciones_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ING_INGENIERIA_ECEP_EXCEPCIONES_1_FROM_ING_INGENIERIA_TITLE',
  'save' => true,
  'id_name' => 'ing_ingenieria_ecep_excepciones_1ing_ingenieria_ida',
  'link' => 'ing_ingenieria_ecep_excepciones_1',
  'table' => 'ing_ingenieria',
  'module' => 'ING_Ingenieria',
  'rname' => 'name',
);
$dictionary["ecep_excepciones"]["fields"]["ing_ingenieria_ecep_excepciones_1ing_ingenieria_ida"] = array (
  'name' => 'ing_ingenieria_ecep_excepciones_1ing_ingenieria_ida',
  'type' => 'link',
  'relationship' => 'ing_ingenieria_ecep_excepciones_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ING_INGENIERIA_ECEP_EXCEPCIONES_1_FROM_ECEP_EXCEPCIONES_TITLE',
);
