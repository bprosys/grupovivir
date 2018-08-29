<?php
$viewdefs ['Bugs'] = 
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
          3 => 'FIND_DUPLICATES',
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
        'LBL_BUG_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_bug_information' => 
      array (
        0 => 
        array (
          0 => 'bug_number',
          1 => 'status',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'tipologia_c',
            'studio' => 'visible',
            'label' => 'LBL_TIPOLOGIA',
          ),
          1 => 
          array (
            'name' => 'area_garantia_c',
            'studio' => 'visible',
            'label' => 'LBL_AREA_GARANTIA',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'fechacreacion_c',
            'label' => 'LBL_FECHACREACION',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'fotoinspeccion_c',
            'studio' => 'visible',
            'label' => 'LBL_FOTOINSPECCION',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'fecha_correcion_c',
            'label' => 'LBL_FECHA_CORRECION',
          ),
          1 => 
          array (
            'name' => 'fototrabajorealizado_c',
            'studio' => 'visible',
            'label' => 'LBL_FOTOTRABAJOREALIZADO',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'fecha_firma_entrega_c',
            'label' => 'LBL_FECHA_FIRMA_ENTREGA',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 'description',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'aos_products_bugs_1_name',
          ),
          1 => '',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'accounts_bugs_1_name',
          ),
        ),
      ),
    ),
  ),
);
;
?>
