<?php
$module_name = 'Reser_Reservas';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'document_name',
          1 => 
          array (
            'name' => 'uploadfile',
            'displayParams' => 
            array (
              'onchangeSetFileNameTo' => 'document_name',
            ),
          ),
        ),
        1 => 
        array (
          0 => 'active_date',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'description',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'valor_c',
            'label' => 'LBL_VALOR',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'opportunities_reser_reservas_1_name',
          ),
          1 => 
          array (
            'name' => 'aos_products_reser_reservas_1_name',
            'label' => 'LBL_AOS_PRODUCTS_RESER_RESERVAS_1_FROM_AOS_PRODUCTS_TITLE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'descripcion_c',
            'studio' => 'visible',
            'label' => 'LBL_DESCRIPCION',
          ),
          1 => 'status_id',
        ),
      ),
    ),
  ),
);
;
?>
