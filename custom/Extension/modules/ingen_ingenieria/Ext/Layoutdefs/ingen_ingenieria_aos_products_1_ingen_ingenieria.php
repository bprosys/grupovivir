<?php
 // created: 2018-03-15 11:39:33
$layout_defs["ingen_ingenieria"]["subpanel_setup"]['ingen_ingenieria_aos_products_1'] = array (
  'order' => 100,
  'module' => 'AOS_Products',
  'subpanel_name' => 'ForCustomersPurchasedProducts',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_INGEN_INGENIERIA_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
  'get_subpanel_data' => 'ingen_ingenieria_aos_products_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
