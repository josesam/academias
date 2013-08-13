<?php
$module_name = 'ee_EncuestaInstructor';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'INSTRUCTOR' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_INSTRUCTOR',
    'width' => '10%',
    'default' => true,
  ),
  'MODULO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MODULO',
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
