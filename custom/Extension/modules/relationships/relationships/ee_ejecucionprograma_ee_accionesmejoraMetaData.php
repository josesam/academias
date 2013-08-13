<?php
// created: 2012-07-03 06:04:25
$dictionary["ee_ejecucionprograma_ee_accionesmejora"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'ee_ejecucionprograma_ee_accionesmejora' => 
    array (
      'lhs_module' => 'ee_EjecucionPrograma',
      'lhs_table' => 'ee_ejecucionprograma',
      'lhs_key' => 'id',
      'rhs_module' => 'ee_AccionesMejora',
      'rhs_table' => 'ee_accionesmejora',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ee_ejecucionprograma_ee_accionesmejora_c',
      'join_key_lhs' => 'ee_ejecucionprograma_ee_accionesmejoraee_ejecucionprograma_ida',
      'join_key_rhs' => 'ee_ejecucionprograma_ee_accionesmejoraee_accionesmejora_idb',
    ),
  ),
  'table' => 'ee_ejecucionprograma_ee_accionesmejora_c',
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
      'name' => 'ee_ejecucionprograma_ee_accionesmejoraee_ejecucionprograma_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ee_ejecucionprograma_ee_accionesmejoraee_accionesmejora_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ee_ejecucionprograma_ee_accionesmejoraspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ee_ejecucionprograma_ee_accionesmejora_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ee_ejecucionprograma_ee_accionesmejoraee_ejecucionprograma_ida',
        1 => 'ee_ejecucionprograma_ee_accionesmejoraee_accionesmejora_idb',
      ),
    ),
  ),
);