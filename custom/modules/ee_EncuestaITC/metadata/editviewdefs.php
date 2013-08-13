<?php
$module_name = 'ee_EncuestaITC';
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
          'file' => 'custom/include/scripts/sistema/SpEvaluacionITC.js',
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
            'name' => 'participante',
            'label' => 'LBL_PARTICIPANTE',
           'displayParams' =>
            array (
              'required' => true,
            ),
            'customCode' => '<input type="text" name="participante" readonly="yes" size="35" id="participante" value="{$fields.participante.value}"/>
                             <input type="hidden" name="idparticipante" readonly="yes" size="35" id="idparticipante" value="{$fields.idparticipante.value}"/>
                             <a href="javascript:void(0);" onclick="javascript:abrirParticipante();" >Seleccionar Participante</a>',
           
          ),
          1 => 
          array (
            'name' => 'modulo',
            'label' => 'LBL_MODULO',
            'displayParams' =>
            array (
              'required' => true,
            ),
            'customCode' => '<input type="text" name="modulo" readonly="yes" size="35" id="modulo" value="{$fields.modulo.value}"/>
                             <input type="hidden" name="idmodulo" readonly="yes" size="35" id="idmodulo" value="{$fields.idmodulo.value}"/>
                             <a href="javascript:void(0);" onclick="javascript:abrirModulo();" >Seleccionar Módulo</a>',
            
          ),
        ),
        2 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'ee_ejecucionprograma_ee_encuestaitc_name',
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
             'name' => 'encuestas',
            'label' => 'LBL_ENCUESTAS',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
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
