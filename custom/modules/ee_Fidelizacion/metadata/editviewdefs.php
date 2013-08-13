<?php
$module_name = 'ee_Fidelizacion';
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
            'name' => 'fechaocurrencia',
            'label' => 'LBL_FECHAOCURRENCIA',
          ),
          1 => 
          array (
            'name' => 'que',
            'label' => 'LBL_QUE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'aquien',
            'label' => 'LBL_AQUIEN',
          ),
          1 => 
          array (
            'name' => 'motivo',
            'studio' => 'visible',
            'label' => 'LBL_MOTIVO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'comentarios',
            'studio' => 'visible',
            'label' => 'LBL_COMENTARIOS',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'accounts_ee_fidelizacion_name',
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
