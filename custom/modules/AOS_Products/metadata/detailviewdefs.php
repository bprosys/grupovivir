<?php
$module_name = 'AOS_Products';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
        ),
      ),
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
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'codigo_unidad_c',
            'label' => 'LBL_CODIGO_UNIDAD',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'estado_c',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
          1 => 
          array (
            'name' => 'aos_product_category_name',
            'label' => 'LBL_AOS_PRODUCT_CATEGORYS_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'metraje_c',
            'label' => 'LBL_METRAJE',
          ),
          1 => 
          array (
            'name' => 'price',
            'label' => 'LBL_PRICE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'descuento_c',
            'label' => 'LBL_DESCUENTO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'modelo_c',
            'label' => 'LBL_MODELO',
          ),
          1 => 
          array (
            'name' => 'piso_c',
            'label' => 'LBL_PISO',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'banos_c',
            'label' => 'LBL_BANOS',
          ),
          1 => 
          array (
            'name' => 'depositos_c',
            'label' => 'LBL_DEPOSITOS',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'estacionamientos_c',
            'label' => 'LBL_ESTACIONAMIENTOS',
          ),
          1 => 
          array (
            'name' => 'habitaciones_c',
            'label' => 'LBL_HABITACIONES',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'torre_c',
            'label' => 'LBL_TORRE',
          ),
          1 => 
          array (
            'name' => 'ala_c',
            'label' => 'LBL_ALA',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'terraza_c',
            'label' => 'LBL_TERRAZA',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'product_image',
            'label' => 'LBL_PRODUCT_IMAGE',
            'customCode' => '<img src="{$fields.product_image.value}"/>',
          ),
        ),
      ),
    ),
  ),
);
;
?>
