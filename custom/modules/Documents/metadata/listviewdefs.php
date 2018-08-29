<?php
$listViewDefs ['Documents'] = 
array (
  'DOCUMENT_NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
    'bold' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
  ),
  'CATEGORY_ID' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_CATEGORY',
    'default' => true,
  ),
  'USERS_DOCUMENTS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_USERS_DOCUMENTS_1_FROM_USERS_TITLE',
    'id' => 'USERS_DOCUMENTS_1USERS_IDA',
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
