<?php
$viewdefs ['Bugs'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="account_id" value="{$smarty.request.account_id}">',
          1 => '<input type="hidden" name="contact_id" value="{$smarty.request.contact_id}">',
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
          0 => 
          array (
            'name' => 'bug_number',
            'type' => 'readonly',
          ),
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
            'comment' => 'Date record created',
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
          0 => 
          array (
            'name' => 'description',
            'nl2br' => true,
          ),
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
