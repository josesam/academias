<?php
// created: 2012-03-22 05:11:41
$dictionary["ee_mediocontacto_ee_detallemedio"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ee_mediocontacto_ee_detallemedio' => 
    array (
      'lhs_module' => 'EE_MedioContacto',
      'lhs_table' => 'ee_mediocontacto',
      'lhs_key' => 'id',
      'rhs_module' => 'EE_DetalleMedio',
      'rhs_table' => 'ee_detallemedio',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ee_mediocontacto_ee_detallemedio_c',
      'join_key_lhs' => 'ee_mediocontacto_ee_detallemedioee_mediocontacto_ida',
      'join_key_rhs' => 'ee_mediocontacto_ee_detallemedioee_detallemedio_idb',
    ),
  ),
  'table' => 'ee_mediocontacto_ee_detallemedio_c',
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
      'name' => 'ee_mediocontacto_ee_detallemedioee_mediocontacto_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ee_mediocontacto_ee_detallemedioee_detallemedio_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ee_mediocontacto_ee_detallemediospk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ee_mediocontacto_ee_detallemedio_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ee_mediocontacto_ee_detallemedioee_mediocontacto_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ee_mediocontacto_ee_detallemedio_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ee_mediocontacto_ee_detallemedioee_detallemedio_idb',
      ),
    ),
  ),
);