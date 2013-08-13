<?php
$dashletData['ee_EvaluacionSCIDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'participante' => 
  array (
    'default' => '',
  ),
  'calique' => 
  array (
    'default' => '',
  ),
  'nuevocampo' => 
  array (
    'default' => '',
  ),
  'recomendaria' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'team_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['ee_EvaluacionSCIDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'participante' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PARTICIPANTE',
    'width' => '10%',
    'default' => true,
  ),
  'calique' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CALIQUE',
    'width' => '10%',
    'default' => true,
  ),
  'nuevocampo' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_NUEVOCAMPO',
    'width' => '10%',
    'default' => true,
  ),
  'recomendaria' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_RECOMENDARIA',
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'team_name' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_TEAM',
    'name' => 'team_name',
    'default' => false,
  ),
);
