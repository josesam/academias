<?php
// created: 2012-05-19 12:05:49
$dictionary["opportunities_ee_cobranzas"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'opportunities_ee_cobranzas' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'ee_Cobranzas',
      'rhs_table' => 'ee_cobranzas',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'opportunities_ee_cobranzas_c',
      'join_key_lhs' => 'opportunities_ee_cobranzasopportunities_ida',
      'join_key_rhs' => 'opportunities_ee_cobranzasee_cobranzas_idb',
    ),
  ),
  'table' => 'opportunities_ee_cobranzas_c',
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
      'name' => 'opportunities_ee_cobranzasopportunities_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'opportunities_ee_cobranzasee_cobranzas_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'opportunities_ee_cobranzasspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'opportunities_ee_cobranzas_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'opportunities_ee_cobranzasopportunities_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'opportunities_ee_cobranzas_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'opportunities_ee_cobranzasee_cobranzas_idb',
      ),
    ),
  ),
);