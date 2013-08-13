<?php
$module_name = 'ee_Cursos';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fechacurso',
            'label' => 'LBL_FECHACURSO',
          ),
          1 => 
          array (
            'name' => 'asistio',
            'label' => 'LBL_ASISTIO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'ee_profesores_ee_cursos_name',
          ),
        ),
      ),
    ),
  ),
);
?>
