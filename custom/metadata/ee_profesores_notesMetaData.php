<?php
// created: 2012-03-22 05:03:21
$dictionary["ee_profesores_notes"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ee_profesores_notes' => 
    array (
      'lhs_module' => 'ee_Profesores',
      'lhs_table' => 'ee_profesores',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ee_profesores_notes_c',
      'join_key_lhs' => 'ee_profesores_notesee_profesores_ida',
      'join_key_rhs' => 'ee_profesores_notesnotes_idb',
    ),
  ),
  'table' => 'ee_profesores_notes_c',
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
      'name' => 'ee_profesores_notesee_profesores_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ee_profesores_notesnotes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ee_profesores_notesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ee_profesores_notes_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ee_profesores_notesee_profesores_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ee_profesores_notes_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ee_profesores_notesnotes_idb',
      ),
    ),
  ),
);