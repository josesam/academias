<?php
$module_name = 'ee_Logistica';
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
            'name' => 'precio',
            'label' => 'LBL_PRECIO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'items',
            'studio' => 'visible',
            'label' => 'LBL_ITEMS',
          ),
          1 => 
          array (
            'name' => 'proveedor',
            'label' => 'LBL_PROVEEDOR',
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
          1 => 'assigned_user_name',
        ),
        3 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'ee_ejecucionprograma_ee_logistica_name',
          ),
        ),
      ),
    ),
  ),
);
?>
