<?php
$module_name = 'ee_PMP';
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
      'useTabs' => false,
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
            'name' => 'nombreprograma',
            'studio' => 'visible',
            'label' => 'LBL_NOMBREPROGRAMA',
          ),
          1 => 
          array (
            'name' => 'nombremodulo',
            'studio' => 'visible',
            'label' => 'LBL_NOMBREMODULO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'nombreprofesor',
            'studio' => 'visible',
            'label' => 'LBL_NOMBREPROFESOR',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'fechainicio',
            'label' => 'LBL_FECHAINICIO',
          ),
          1 => 
          array (
            'name' => 'fechafin',
            'label' => 'LBL_FECHAFIN',
          ),
        ),
        4 => 
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
        5 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
