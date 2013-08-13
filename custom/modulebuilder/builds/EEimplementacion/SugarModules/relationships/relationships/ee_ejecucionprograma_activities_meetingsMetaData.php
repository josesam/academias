<?php
// created: 2012-03-22 05:05:46
$dictionary["ee_ejecucionprograma_activities_meetings"] = array (
  'relationships' => 
  array (
    'ee_ejecucionprograma_activities_meetings' => 
    array (
      'lhs_module' => 'ee_EjecucionPrograma',
      'lhs_table' => 'ee_ejecucionprograma',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'ee_EjecucionPrograma',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);