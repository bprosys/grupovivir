<?php
// created: 2018-07-20 14:37:37
$dictionary["Reser_Contrato"]["fields"]["accounts_reser_contrato_1"] = array (
  'name' => 'accounts_reser_contrato_1',
  'type' => 'link',
  'relationship' => 'accounts_reser_contrato_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_RESER_CONTRATO_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_reser_contrato_1accounts_ida',
);
$dictionary["Reser_Contrato"]["fields"]["accounts_reser_contrato_1_name"] = array (
  'name' => 'accounts_reser_contrato_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_RESER_CONTRATO_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_reser_contrato_1accounts_ida',
  'link' => 'accounts_reser_contrato_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Reser_Contrato"]["fields"]["accounts_reser_contrato_1accounts_ida"] = array (
  'name' => 'accounts_reser_contrato_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_reser_contrato_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_RESER_CONTRATO_1_FROM_RESER_CONTRATO_TITLE',
);
