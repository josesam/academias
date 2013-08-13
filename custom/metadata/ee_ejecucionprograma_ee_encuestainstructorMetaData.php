<?php
// created: 2012-07-03 05:35:53
$dictionary["ee_ejecucionprograma_ee_encuestainstructor"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'ee_ejecucionprograma_ee_encuestainstructor' => 
    array (
      'lhs_module' => 'ee_EjecucionPrograma',
      'lhs_table' => 'ee_ejecucionprograma',
      'lhs_key' => 'id',
      'rhs_module' => 'ee_EncuestaInstructor',
      'rhs_table' => 'ee_encuestainstructor',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ee_ejecucionprograma_ee_encuestainstructor_c',
      'join_key_lhs' => 'ee_ejecuci54adrograma_ida',
      'join_key_rhs' => 'ee_ejecucic277tructor_idb',
    ),
  ),
  'table' => 'ee_ejecucionprograma_ee_encuestainstructor_c',
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
      'name' => 'ee_ejecuci54adrograma_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ee_ejecucic277tructor_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ee_ejecucionprograma_ee_encuestainstructorspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ee_ejecucionprograma_ee_encuestainstructor_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ee_ejecuci54adrograma_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ee_ejecucionprograma_ee_encuestainstructor_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ee_ejecucic277tructor_idb',
      ),
    ),
  ),
);