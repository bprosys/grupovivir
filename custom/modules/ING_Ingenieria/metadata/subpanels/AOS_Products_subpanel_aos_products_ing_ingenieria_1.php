<?php
// created: 2018-07-27 14:40:59
$subpanel_layout['list_fields'] = array (
  'ing_ingenieria_accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_ING_INGENIERIA_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'ING_INGENIERIA_ACCOUNTSACCOUNTS_IDB',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Accounts',
    'target_record_key' => 'ing_ingenieria_accountsaccounts_idb',
  ),
  'status' => 
  array (
    'vname' => 'LBL_STATUS',
    'width' => '15%',
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'name' => 'assigned_user_name',
    'vname' => 'LBL_ASSIGNED_TO_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_record_key' => 'assigned_user_id',
    'target_module' => 'Employees',
    'width' => '10%',
    'default' => true,
  ),
  'observacionesentrega_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_OBSERVACIONESENTREGA',
    'width' => '10%',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'ING_Ingenieria',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'ING_Ingenieria',
    'width' => '5%',
    'default' => true,
  ),
);