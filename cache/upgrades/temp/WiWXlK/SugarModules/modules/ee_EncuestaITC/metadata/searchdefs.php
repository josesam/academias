<?php
$module_name = 'ee_EncuestaITC';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'participante' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PARTICIPANTE',
        'width' => '10%',
        'default' => true,
        'name' => 'participante',
      ),
      'modulo' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_MODULO',
        'width' => '10%',
        'default' => true,
        'name' => 'modulo',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'participante' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PARTICIPANTE',
        'width' => '10%',
        'default' => true,
        'name' => 'participante',
      ),
      'modulo' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_MODULO',
        'width' => '10%',
        'default' => true,
        'name' => 'modulo',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
