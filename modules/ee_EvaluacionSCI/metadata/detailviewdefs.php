<?php
$module_name = 'ee_EvaluacionSCI';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
      'syncDetailEditViews' => true,
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
            'name' => 'calique',
            'studio' => 'visible',
            'label' => 'LBL_CALIQUE',
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
            'name' => 'recomendaria',
            'studio' => 'visible',
            'label' => 'LBL_RECOMENDARIA',
          ),
        ),
        3 => 
        array (
          0 => 'description',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 'team_name',
          1 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
?>
