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
          'file' => 'custom/include/scripts/genericas/varios/jquery.ui.autocomplete.autoSelect.js',
        ),
        7 => 
        array (
          'file' => 'custom/include/scripts/sistema/SpPrograma.js',
        ),
        8 => 
        array (
          'file' => 'custom/include/scripts/sistema/SpNumeros.js',
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
          0 => 
          array (
            'name' => 'name',
            'customCode' => '<input type="text" name="name" size="60" id="name" value="{$fields.name.value}"/>
               <a href="javascript:void(0);" onclick="javascript:formar_nombre();" >Generar Nombre </a>&nbsp;
               <a href="javascript:void(0);" onclick="javascript:borrar_nombre();" >Borrar </a>
               <div id="mensajename" style="font-color:red;"></div>
                 ',
          ),
          1 => 
          array (
            'name' => 'estado',
            'label' => 'LBL_ESTADO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'codigo',
            'label' => 'LBL_CODIGO',
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
            'name' => 'precio_c',
            'label' => 'LBL_PRECIO',
          ),
          1 => 
          array (
            'name' => 'nrohoras_c',
            'label' => 'LBL_NROHORAS',
          ),
        ),
        3 => 
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
            'customCode' => '<input type="text" name="coordinador"  size="35" id="coordinador" value="{$fields.coordinador.value}"/>',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'asesorcomercial',
            'label' => 'LBL_ASESORCOMERCIAL',
          ),
          1 => 
          array (
            'name' => 'gerenteproyecto',
            'label' => 'LBL_GERENTEPROYECTO',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'generadoroportunidad',
            'label' => 'LBL_GENERADOROPORTUNIDAD',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'fechainicio_programa',
            'comment' => 'Fecha de inicio del programa',
            'label' => 'LBL_FECHAINICIOPROGRAMA',
          ),
          1 => 
          array (
            'name' => 'fechafinal_programa',
            'comment' => 'Fecha de cierre del programa',
            'label' => 'LBL_FECHAFINALPROGRAMA',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'modalidad',
            'label' => 'LBL_MODALIDAD',
          ),
          1 => 
          array (
            'name' => 'numerominimo',
            'comment' => 'Número minimo de participantes',
            'label' => 'LBL_NUMEROMINIMO',
          ),
        ),
        8 => 
        array (
          0 => 'description',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'programas',
            'label' => 'LBL_PROGRAMAS',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'logistica',
            'label' => 'LBL_LOGISTICA',
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
