<?php
 // created: 2018-07-21 17:13:01
$layout_defs["AOS_Products"]["subpanel_setup"]['aos_products_bugs_1'] = array (
  'order' => 100,
  'module' => 'Bugs',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AOS_PRODUCTS_BUGS_1_FROM_BUGS_TITLE',
  'get_subpanel_data' => 'aos_products_bugs_1',
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
