<?php
$module_name = 'ee_Cobranzas';
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
      'includes' => 
      array (
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
          'file' => 'include/SugarCobranza/SugarCobranza.js',
        ),
      ),
      'useTabs' => true,
      'syncDetailEditViews' => false,
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
            'name' => 'montopago',
            'label' => 'LBL_MONTOPAGO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fechaprevistapago',
            'label' => 'LBL_FECHAPREVISTAPAGO',
          ),
          1 => 
          array (
            'name' => 'opportunities_ee_cobranzas_name',
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
            'name' => 'pagos',
            'label' => 'LBL_PAGOS',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
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
