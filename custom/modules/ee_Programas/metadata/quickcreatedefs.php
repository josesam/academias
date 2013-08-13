<?php
$module_name = 'ee_Programas';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
            'name' => 'ciclo',
            'label' => 'LBL_CICLO',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'academias',
            'label' => 'LBL_ACADEMIAS',
          ),
          1 => 
          array (
            'name' => 'anio',
            'label' => 'LBL_ANIO',
          ),
        ),
        4 => 
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
        5 => 
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
        6 => 
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
        7 => 
        array (
          0 => 
          array (
            'name' => 'generadoroportunidad',
            'label' => 'LBL_GENERADOROPORTUNIDAD',
          ),
          1 => '',
        ),
        8 => 
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
        9 => 
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
        10 => 
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
