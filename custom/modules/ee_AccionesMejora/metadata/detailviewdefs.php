<?php
$module_name = 'ee_AccionesMejora';
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
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fechaevaluacion',
            'label' => 'LBL_FECHAEVALUACION',
          ),
          1 => 
          array (
            'name' => 'destrezas',
            'studio' => 'visible',
            'label' => 'LBL_DESTREZAS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'conocimientos',
            'studio' => 'visible',
            'label' => 'LBL_CONOCIMIENTOS',
          ),
          1 => 
          array (
            'name' => 'actitudes',
            'studio' => 'visible',
            'label' => 'LBL_ACTITUDES',
          ),
        ),
        3 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'ee_profesores_ee_accionesmejora_name',
          ),
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
