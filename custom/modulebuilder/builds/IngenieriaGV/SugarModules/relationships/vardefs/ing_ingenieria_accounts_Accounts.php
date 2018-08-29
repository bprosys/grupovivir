<?php
// created: 2018-04-05 06:50:36
$dictionary["Account"]["fields"]["ing_ingenieria_accounts"] = array (
  'name' => 'ing_ingenieria_accounts',
  'type' => 'link',
  'relationship' => 'ing_ingenieria_accounts',
  'source' => 'non-db',
  'module' => 'ING_Ingenieria',
  'bean_name' => false,
  'vname' => 'LBL_ING_INGENIERIA_ACCOUNTS_FROM_ING_INGENIERIA_TITLE',
  'id_name' => 'ing_ingenieria_accountsing_ingenieria_ida',
);
$dictionary["Account"]["fields"]["ing_ingenieria_accounts_name"] = array (
  'name' => 'ing_ingenieria_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ING_INGENIERIA_ACCOUNTS_FROM_ING_INGENIERIA_TITLE',
  'save' => true,
  'id_name' => 'ing_ingenieria_accountsing_ingenieria_ida',
  'link' => 'ing_ingenieria_accounts',
  'table' => 'ing_ingenieria',
  'module' => 'ING_Ingenieria',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["ing_ingenieria_accountsing_ingenieria_ida"] = array (
  'name' => 'ing_ingenieria_accountsing_ingenieria_ida',
  'type' => 'link',
  'relationship' => 'ing_ingenieria_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ING_INGENIERIA_ACCOUNTS_FROM_ING_INGENIERIA_TITLE',
);
