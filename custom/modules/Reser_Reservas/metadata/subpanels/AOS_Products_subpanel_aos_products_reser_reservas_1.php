<?php
// created: 2018-04-16 10:56:05
$subpanel_layout['list_fields'] = array (
  'document_name' => 
  array (
    'name' => 'document_name',
    'vname' => 'LBL_LIST_DOCUMENT_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'aos_products_reser_reservas_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_AOS_PRODUCTS_RESER_RESERVAS_1_FROM_AOS_PRODUCTS_TITLE',
    'id' => 'AOS_PRODUCTS_RESER_RESERVAS_1AOS_PRODUCTS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'AOS_Products',
    'target_record_key' => 'aos_products_reser_reservas_1aos_products_ida',
  ),
  'opportunities_reser_reservas_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_OPPORTUNITIES_RESER_RESERVAS_1_FROM_OPPORTUNITIES_TITLE',
    'id' => 'OPPORTUNITIES_RESER_RESERVAS_1OPPORTUNITIES_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Opportunities',
    'target_record_key' => 'opportunities_reser_reservas_1opportunities_ida',
  ),
  'reser_reservas_accounts_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_RESER_RESERVAS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'RESER_RESERVAS_ACCOUNTS_1ACCOUNTS_IDB',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Accounts',
    'target_record_key' => 'reser_reservas_accounts_1accounts_idb',
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'Reser_Reservas',
    'width' => '5%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'Reser_Reservas',
    'width' => '5%',
    'default' => true,
  ),
);