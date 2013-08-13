<?php
// created: 2013-08-12 19:05:59
$dictionary["contacts_ac_certificado"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'contacts_ac_certificado' => 
    array (
      'lhs_module' => 'Contacts',
      'lhs_table' => 'contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'ac_Certificado',
      'rhs_table' => 'ac_certificado',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'contacts_ac_certificado_c',
      'join_key_lhs' => 'contacts_ac_certificadocontacts_ida',
      'join_key_rhs' => 'contacts_ac_certificadoac_certificado_idb',
    ),
  ),
  'table' => 'contacts_ac_certificado_c',
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
      'name' => 'contacts_ac_certificadocontacts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'contacts_ac_certificadoac_certificado_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'contacts_ac_certificadospk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'contacts_ac_certificado_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'contacts_ac_certificadocontacts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'contacts_ac_certificado_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'contacts_ac_certificadoac_certificado_idb',
      ),
    ),
  ),
);