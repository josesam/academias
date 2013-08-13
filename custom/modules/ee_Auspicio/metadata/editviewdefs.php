<?php
$module_name = 'ee_Auspicio';
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
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'monto',
            'label' => 'LBL_MONTO',
          ),
          1 => 
          array (
            'name' => 'fechaauspicio',
            'label' => 'LBL_FECHAAUSPICIO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'motivo',
            'studio' => 'visible',
            'label' => 'LBL_MOTIVO',
          ),
          1 => 
          array (
            'name' => 'estado',
            'label' => 'LBL_ESTADO',
          ),
        ),
        3 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'accounts_ee_auspicio_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
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
