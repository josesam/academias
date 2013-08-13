<?php
$module_name = 'ee_AccionesMejora';
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
        1 => 
        array (
          'file' => 'custom/include/scripts/genericas/varios/jquery.js',
        ),
        2 => 
        array (
          'file' => 'custom/include/scripts/genericas/jquery/js/jquery-ui.min.js',
        ),
        3 => 
        array (
          'file' => 'custom/include/scripts/genericas/varios/jquery.maskedinput.js',
        ),
        4 => 
        array (
          'file' => 'custom/include/scripts/genericas/varios/jquery.numeric.pack.js',
        ),
        5 => 
        array (
          'file' => 'custom/include/scripts/genericas/varios/jquery.floatnumber.js',
        ),
        6 => 
        array (
          'file' => 'custom/include/scripts/sistema/SpAccionMejora.js',
        ),
        
      ),  
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
