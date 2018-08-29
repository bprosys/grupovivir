<?php
$module_name = 'trami_Tramites';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
        'hidden' => 
        array (
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
      'javascript' => '{sugar_getscript file="include/javascript/popup_parent_helper.js"}
	{sugar_getscript file="cache/include/javascript/sugar_grp_jsolait.js"}
	{sugar_getscript file="modules/Documents/documents.js"}',
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
            'name' => 'numerodefinca_c',
            'label' => 'LBL_NUMERODEFINCA',
          ),
          1 => 
          array (
            'name' => 'opportunities_trami_tramites_1_name',
            'label' => 'LBL_OPPORTUNITIES_TRAMI_TRAMITES_1_FROM_OPPORTUNITIES_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fecha_permiso_ocupacion_c',
            'label' => 'LBL_FECHA_PERMISO_OCUPACION',
          ),
          1 => 
          array (
            'name' => 'fecha_permiso_construccion_c',
            'label' => 'LBL_FECHA_PERMISO_CONSTRUCCION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'trami_tramites_aos_product_categories_1_name',
            'label' => 'LBL_TRAMI_TRAMITES_AOS_PRODUCT_CATEGORIES_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
          ),
          1 => 
          array (
            'name' => 'carta_promesa_pago_c',
            'label' => 'LBL_CARTA_PROMESA_PAGO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'envio_paz_y_salvo_idaan_c',
            'label' => 'LBL_ENVIO_PAZ_Y_SALVO_IDAAN',
          ),
          1 => 
          array (
            'name' => 'envio_paz_y_salvo_mant_c',
            'label' => 'LBL_ENVIO_PAZ_Y_SALVO_MANT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'banco_c',
            'studio' => 'visible',
            'label' => 'LBL_BANCO',
          ),
          1 => 
          array (
            'name' => 'tipopago_c',
            'studio' => 'visible',
            'label' => 'LBL_TIPOPAGO',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'fecha_recibo_contrato_c',
            'label' => 'LBL_FECHA_RECIBO_CONTRATO',
          ),
          1 => 
          array (
            'name' => 'envio_paz_y_salvo_inmueble_c',
            'label' => 'LBL_ENVIO_PAZ_Y_SALVO_INMUEBLE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'recibido_protocolo_c',
            'label' => 'LBL_RECIBIDO_PROTOCOLO',
          ),
          1 => 
          array (
            'name' => 'envio_protocolo_c',
            'label' => 'LBL_ENVIO_PROTOCOLO',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'fecha_desembolso_c',
            'label' => 'LBL_FECHA_DESEMBOLSO',
          ),
          1 => 
          array (
            'name' => 'valor_desembolso_c',
            'label' => 'LBL_VALOR_DESEMBOLSO',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'fecha_registro_c',
            'label' => 'LBL_FECHA_REGISTRO',
          ),
          1 => 
          array (
            'name' => 'trami_tramites_aos_products_1_name',
            'label' => 'LBL_TRAMI_TRAMITES_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'trami_tramites_accounts_1_name',
            'label' => 'LBL_TRAMI_TRAMITES_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
          ),
        ),
      ),
    ),
  ),
);
;
?>
