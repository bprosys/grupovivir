<?php
$module_name = 'AOS_Quotes';
$_object_name = 'aos_quotes';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
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
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_LINE_ITEMS' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
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
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
              'required' => true,
            ),
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'number',
            'label' => 'LBL_QUOTE_NUMBER',
            'customCode' => '{$fields.number.value}',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'billing_account',
            'label' => 'LBL_BILLING_ACCOUNT',
            'displayParams' => 
            array (
              'key' => 
              array (
                0 => 'billing',
                1 => 'shipping',
              ),
              'copy' => 
              array (
                0 => 'billing',
                1 => 'shipping',
              ),
              'billingKey' => 'billing',
              'shippingKey' => 'shipping',
            ),
          ),
          1 => 
          array (
            'name' => 'expiration',
            'label' => 'LBL_EXPIRATION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
          1 => '',
        ),
      ),
      'lbl_line_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'line_items',
            'label' => 'LBL_LINE_ITEMS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'total_amt',
            'label' => 'LBL_TOTAL_AMT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'discount_amount',
            'label' => 'LBL_DISCOUNT_AMOUNT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'total_amount',
            'label' => 'LBL_GRAND_TOTAL',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'valor_separacion_c',
            'label' => 'LBL_VALOR_SEPARACION',
          ),
          1 => 
          array (
            'name' => 'monto_a_firma_de_contrato_c',
            'label' => 'LBL_MONTO_A_FIRMA_DE_CONTRATO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'cuota_inicial_c',
            'label' => 'LBL_CUOTA_INICIAL',
          ),
          1 => 
          array (
            'name' => 'saldo_abono_inicial_c',
            'label' => 'LBL_SALDO_ABONO_INICIAL',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'cantidad_c',
            'label' => 'LBL_CANTIDAD',
          ),
          1 => 
          array (
            'name' => 'valor_c',
            'label' => 'LBL_VALOR',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'credito_c',
            'label' => 'LBL_CREDITO',
          ),
          1 => 
          array (
            'name' => 'cuotas_mensuales_c',
            'label' => 'LBL_CUOTAS_MENSUALES',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'porcentaje_c',
            'label' => 'LBL_PORCENTAJE',
          ),
          1 => 
          array (
            'name' => 'valor_de_cuota_c',
            'label' => 'LBL_VALOR_DE_CUOTA',
          ),
        ),
      ),
    ),
  ),
);
;
?>
