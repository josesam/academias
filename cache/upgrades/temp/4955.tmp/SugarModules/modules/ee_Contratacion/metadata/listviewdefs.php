<?php
$module_name = 'ee_Contratacion';
$OBJECT_NAME = 'EE_CONTRATACION';
$listViewDefs [$module_name] = 
array (
  'DOCUMENT_NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
  ),
  'FECHAFIRMA' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHAFIRMA',
    'width' => '10%',
    'default' => true,
  ),
  'FIRMADO' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_FIRMADO',
    'width' => '10%',
    'default' => true,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MODIFIED_USER',
    'module' => 'Users',
    'id' => 'USERS_ID',
    'default' => true,
    'sortable' => false,
    'related_fields' => 
    array (
      0 => 'modified_user_id',
    ),
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_TEAM',
    'default' => false,
    'sortable' => false,
  ),
);
?>
