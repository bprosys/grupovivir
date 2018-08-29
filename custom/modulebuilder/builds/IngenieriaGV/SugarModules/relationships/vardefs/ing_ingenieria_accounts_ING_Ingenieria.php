<?php
// created: 2018-04-05 06:50:36
$dictionary["ING_Ingenieria"]["fields"]["ing_ingenieria_accounts"] = array (
  'name' => 'ing_ingenieria_accounts',
  'type' => 'link',
  'relationship' => 'ing_ingenieria_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ING_INGENIERIA_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'ing_ingenieria_accountsaccounts_idb',
);
$dictionary["ING_Ingenieria"]["fields"]["ing_ingenieria_accounts_name"] = array (
  'name' => 'ing_ingenieria_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ING_INGENIERIA_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'ing_ingenieria_accountsaccounts_idb',
  'link' => 'ing_ingenieria_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ING_Ingenieria"]["fields"]["ing_ingenieria_accountsaccounts_idb"] = array (
  'name' => 'ing_ingenieria_accountsaccounts_idb',
  'type' => 'link',
  'relationship' => 'ing_ingenieria_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ING_INGENIERIA_ACCOUNTS_FROM_ACCOUNTS_TITLE',
);
