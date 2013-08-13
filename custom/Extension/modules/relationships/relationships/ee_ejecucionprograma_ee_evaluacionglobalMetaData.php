<?php
// created: 2012-05-21 08:03:46
$dictionary["ee_ejecucionprograma_ee_evaluacionglobal"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'ee_ejecucionprograma_ee_evaluacionglobal' => 
    array (
      'lhs_module' => 'ee_EjecucionPrograma',
      'lhs_table' => 'ee_ejecucionprograma',
      'lhs_key' => 'id',
      'rhs_module' => 'ee_EvaluacionGlobal',
      'rhs_table' => 'ee_evaluacionglobal',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ee_ejecucionprograma_ee_evaluacionglobal_c',
      'join_key_lhs' => 'ee_ejecucionprograma_ee_evaluacionglobalee_ejecucionprograma_ida',
      'join_key_rhs' => 'ee_ejecucionprograma_ee_evaluacionglobalee_evaluacionglobal_idb',
    ),
  ),
  'table' => 'ee_ejecucionprograma_ee_evaluacionglobal_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'ee_ejecucionprograma_ee_evaluacionglobalee_ejecucionprograma_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ee_ejecucionprograma_ee_evaluacionglobalee_evaluacionglobal_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ee_ejecucionprograma_ee_evaluacionglobalspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ee_ejecucionprograma_ee_evaluacionglobal_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ee_ejecucionprograma_ee_evaluacionglobalee_ejecucionprograma_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ee_ejecucionprograma_ee_evaluacionglobal_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ee_ejecucionprograma_ee_evaluacionglobalee_evaluacionglobal_idb',
      ),
    ),
  ),
);