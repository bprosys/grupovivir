<?php
$module_name = 'ING_Ingenieria';
$_object_name = 'ing_ingenieria';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'ing_ingenieria_number',
            'type' => 'readonly',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ing_ingenieria_aos_products_name',
            'label' => 'LBL_ING_INGENIERIA_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'estacionamiento_c',
            'label' => 'LBL_ESTACIONAMIENTO',
          ),
          1 => 
          array (
            'name' => 'depositos_c',
            'label' => 'LBL_DEPOSITOS',
          ),
        ),
        3 => 
        array (
          0 => 'status',
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'fechadeconfirmacion_c',
            'label' => 'LBL_FECHADECONFIRMACION',
          ),
          1 => 
          array (
            'name' => 'obserconfirm_c',
            'label' => 'LBL_OBSERCONFIRM',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'fechareconfirmacion1_c',
            'label' => 'LBL_FECHARECONFIRMACION1',
          ),
          1 => 
          array (
            'name' => 'observreconf_c',
            'label' => 'LBL_OBSERVRECONF',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'fechacamp_c',
            'label' => 'LBL_FECHACAMP',
          ),
          1 => 
          array (
            'name' => 'observacionesentrega_c',
            'label' => 'LBL_OBSERVACIONESENTREGA',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'entregallaves_c',
            'label' => 'LBL_ENTREGALLAVES',
          ),
          1 => '',
        ),
        8 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
