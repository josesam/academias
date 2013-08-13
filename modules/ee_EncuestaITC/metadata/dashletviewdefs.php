<?php
$dashletData['ee_EncuestaITCDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'participante' => 
  array (
    'default' => '',
  ),
  'modulo' => 
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
$dashletData['ee_EncuestaITCDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'modulo' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MODULO',
    'width' => '10%',
    'default' => true,
    'name' => 'modulo',
  ),
  'participante' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PARTICIPANTE',
    'width' => '10%',
    'default' => true,
    'name' => 'participante',
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
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
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
