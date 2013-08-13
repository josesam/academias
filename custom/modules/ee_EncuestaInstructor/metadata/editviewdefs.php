<?php
$module_name = 'ee_EncuestaInstructor';
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
          'file' => 'custom/include/scripts/sistema/SpInstructor.js',
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
            'name' => 'instructor',
            'label' => 'LBL_INSTRUCTOR',
            'customCode' => '<input type="text" name="instructor" readonly="yes" size="35" id="instructor" value="{$fields.instructor.value}"/>
                             <input type="hidden" name="idprofesor" readonly="yes" size="35" id="idprofesor" value="{$fields.idprofesor.value}"/>
                             <a href="javascript:void(0);" onclick="javascript:abrirProfesor();" >Seleccionar Instructor</a>',
          ),
          1 => 
          array (
            'name' => 'modulo',
            'label' => 'LBL_MODULO',
            'customCode' => '<input type="text" name="modulo" readonly="yes" size="35" id="modulo" value="{$fields.modulo.value}"/>
                             <input type="hidden" name="idmodulo" readonly="yes" size="35" id="idmodulo" value="{$fields.idmodulo.value}"/>
                             ',
          ),
        ),
        2 => 
        array (
          0 =>'grupo', 
          1=>''
        ),  
        3 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'ee_ejecucionprograma_ee_encuestainstructor_name',
           'displayParams' =>
            array (
              'required' => true,
            ),

          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'encuestas2',
            'label' => 'LBL_ENCUESTAS2',
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
