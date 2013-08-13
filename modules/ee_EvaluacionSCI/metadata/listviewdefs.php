<?php
$module_name = 'ee_EvaluacionSCI';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'PARTICIPANTE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PARTICIPANTE',
    'width' => '10%',
    'default' => true,
  ),
  'CALIQUE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CALIQUE',
    'width' => '10%',
    'default' => true,
  ),
  'NUEVOCAMPO' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_NUEVOCAMPO',
    'width' => '10%',
    'default' => true,
  ),
  'RECOMENDARIA' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_RECOMENDARIA',
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
