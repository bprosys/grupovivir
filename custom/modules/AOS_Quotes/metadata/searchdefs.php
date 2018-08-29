<?php
$module_name = 'AOS_Quotes';
$_module_name = 'aos_quotes';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'billing_account' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'default' => true,
        'width' => '10%',
        'label' => 'LBL_BILLING_ACCOUNT',
        'id' => 'BILLING_ACCOUNT_ID',
        'link' => true,
        'name' => 'billing_account',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'billing_account' => 
      array (
        'name' => 'billing_account',
        'default' => true,
        'width' => '10%',
      ),
      'number' => 
      array (
        'name' => 'number',
        'default' => true,
        'width' => '10%',
      ),
      'total_amount' => 
      array (
        'name' => 'total_amount',
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
