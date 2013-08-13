<?php
$module_name = 'ee_Programas';
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
          1 => 
          array (
            'name' => 'codigo',
            'label' => 'LBL_CODIGO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'precio_c',
            'label' => 'LBL_PRECIO',
          ),
          1 => 
          array (
            'name' => 'aux_c',
            'label' => 'LBL_AUX',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'tipoprograma',
            'studio' => 'visible',
            'label' => 'LBL_TIPOPROGRAMA',
          ),
          1 => 
          array (
            'name' => 'coordinador',
            'label' => 'LBL_COORDINADOR',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'niveles_c',
            'label' => 'LBL_NIVELES',
          ),
          1 => '',
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
