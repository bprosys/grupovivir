<?php
// created: 2018-07-27 16:58:32
$dictionary["ING_Ingenieria"]["fields"]["accounts_ing_ingenieria_1"] = array (
  'name' => 'accounts_ing_ingenieria_1',
  'type' => 'link',
  'relationship' => 'accounts_ing_ingenieria_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_ING_INGENIERIA_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ing_ingenieria_1accounts_ida',
);
$dictionary["ING_Ingenieria"]["fields"]["accounts_ing_ingenieria_1_name"] = array (
  'name' => 'accounts_ing_ingenieria_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_ING_INGENIERIA_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ing_ingenieria_1accounts_ida',
  'link' => 'accounts_ing_ingenieria_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ING_Ingenieria"]["fields"]["accounts_ing_ingenieria_1accounts_ida"] = array (
  'name' => 'accounts_ing_ingenieria_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ing_ingenieria_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_ING_INGENIERIA_1_FROM_ING_INGENIERIA_TITLE',
);
