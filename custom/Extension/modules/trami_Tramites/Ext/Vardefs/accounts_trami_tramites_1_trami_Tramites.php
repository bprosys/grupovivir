<?php
// created: 2018-07-27 16:21:17
$dictionary["trami_Tramites"]["fields"]["accounts_trami_tramites_1"] = array (
  'name' => 'accounts_trami_tramites_1',
  'type' => 'link',
  'relationship' => 'accounts_trami_tramites_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_TRAMI_TRAMITES_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_trami_tramites_1accounts_ida',
);
$dictionary["trami_Tramites"]["fields"]["accounts_trami_tramites_1_name"] = array (
  'name' => 'accounts_trami_tramites_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_TRAMI_TRAMITES_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_trami_tramites_1accounts_ida',
  'link' => 'accounts_trami_tramites_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["trami_Tramites"]["fields"]["accounts_trami_tramites_1accounts_ida"] = array (
  'name' => 'accounts_trami_tramites_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_trami_tramites_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_TRAMI_TRAMITES_1_FROM_TRAMI_TRAMITES_TITLE',
);
