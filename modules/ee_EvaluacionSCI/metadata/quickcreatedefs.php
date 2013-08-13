<?php
$module_name = 'ee_EvaluacionSCI';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'participante',
            'label' => 'LBL_PARTICIPANTE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'recomendaria',
            'studio' => 'visible',
            'label' => 'LBL_RECOMENDARIA',
          ),
          1 => 
          array (
            'name' => 'nuevocampo',
            'studio' => 'visible',
            'label' => 'LBL_NUEVOCAMPO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'calique',
            'studio' => 'visible',
            'label' => 'LBL_CALIQUE',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
          1 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
?>
