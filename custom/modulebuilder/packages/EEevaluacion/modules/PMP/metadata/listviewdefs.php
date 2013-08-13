<?php
$module_name = 'ee_PMP';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'NOMBREPROGRAMA' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_NOMBREPROGRAMA',
    'width' => '10%',
    'default' => true,
  ),
  'NOMBREMODULO' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_NOMBREMODULO',
    'width' => '10%',
    'default' => true,
  ),
  'NOMBREPROFESOR' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_NOMBREPROFESOR',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
);
?>
