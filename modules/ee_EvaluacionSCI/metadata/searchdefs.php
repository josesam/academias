<?php
$module_name = 'ee_EvaluacionSCI';
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
      'idparticipante' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_IDPARTICIPANTE',
        'width' => '10%',
        'default' => true,
        'name' => 'idparticipante',
      ),
      'calique' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_CALIQUE',
        'width' => '10%',
        'default' => true,
        'name' => 'calique',
      ),
      'participante' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PARTICIPANTE',
        'width' => '10%',
        'default' => true,
        'name' => 'participante',
      ),
      'nuevocampo' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_NUEVOCAMPO',
        'width' => '10%',
        'default' => true,
        'name' => 'nuevocampo',
      ),
      'recomendaria' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_RECOMENDARIA',
        'width' => '10%',
        'default' => true,
        'name' => 'recomendaria',
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
