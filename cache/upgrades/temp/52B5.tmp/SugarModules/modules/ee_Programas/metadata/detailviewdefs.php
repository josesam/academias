<?php
$module_name = 'ee_Programas';
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
            'name' => 'codigo',
            'label' => 'LBL_CODIGO',
          ),
        ),
        1 => 
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
        2 => 
        array (
          0 => 'team_name',
          1 => 'assigned_user_name',
        ),
        3 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
