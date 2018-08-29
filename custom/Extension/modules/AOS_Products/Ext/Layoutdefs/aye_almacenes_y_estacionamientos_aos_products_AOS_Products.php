<?php
 // created: 2018-05-14 07:27:22
$layout_defs["AOS_Products"]["subpanel_setup"]['aye_almacenes_y_estacionamientos_aos_products'] = array (
  'order' => 100,
  'module' => 'AYE_almacenes_y_estacionamientos',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AYE_ALMACENES_Y_ESTACIONAMIENTOS_AOS_PRODUCTS_FROM_AYE_ALMACENES_Y_ESTACIONAMIENTOS_TITLE',
  'get_subpanel_data' => 'aye_almacenes_y_estacionamientos_aos_products',
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
