<?php
// created: 2018-04-16 12:43:20
$subpanel_layout['list_fields'] = array (
  'document_name' => 
  array (
    'name' => 'document_name',
    'vname' => 'LBL_LIST_DOCUMENT_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'aos_products_reser_contrato_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_AOS_PRODUCTS_RESER_CONTRATO_1_FROM_AOS_PRODUCTS_TITLE',
    'id' => 'AOS_PRODUCTS_RESER_CONTRATO_1AOS_PRODUCTS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'AOS_Products',
    'target_record_key' => 'aos_products_reser_contrato_1aos_products_ida',
  ),
  'status_id' => 
  array (
    'type' => 'enum',
    'vname' => 'LBL_DOC_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'exp_date' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_DOC_EXP_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'Reser_Contrato',
    'width' => '5%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'Reser_Contrato',
    'width' => '5%',
    'default' => true,
  ),
);