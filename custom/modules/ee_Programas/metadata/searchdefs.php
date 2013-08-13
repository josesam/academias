<?php
$module_name = 'ee_Programas';
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
      'tipoprograma' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TIPOPROGRAMA',
        'width' => '10%',
        'name' => 'tipoprograma',
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
      'tipoprograma' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TIPOPROGRAMA',
        'width' => '10%',
        'name' => 'tipoprograma',
      ),
      'categoria_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CATEGORIA',
        'width' => '10%',
        'name' => 'categoria_c',
      ),
      'modalidad' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_MODALIDAD',
        'width' => '10%',
        'default' => true,
        'name' => 'modalidad',
      ),
      'coordinador' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_COORDINADOR',
        'width' => '10%',
        'default' => true,
        'name' => 'coordinador',
      ),
      'estado' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_ESTADO',
        'width' => '10%',
        'default' => true,
        'name' => 'estado',
      ),
      'aux_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_AUX',
        'width' => '10%',
        'name' => 'aux_c',
      ),
      'precio_c' => 
      array (
        'type' => 'decimal',
        'default' => true,
        'label' => 'LBL_PRECIO',
        'width' => '10%',
        'name' => 'precio_c',
      ),
      'niveles_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_NIVELES',
        'width' => '10%',
        'name' => 'niveles_c',
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
