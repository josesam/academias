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
          4 => 
          array (
            'customCode' => '{if $fields.estado.value=="Activo"}<input type="submit" name="Convertir" id="Convertir" value="Ejecutar Programa" onclick="this.form.return_module.value=\'ee_Programas\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'convertir\';"/>{/if}',
          ),
          5 => 
          array (
            'customCode' => '{if $fields.estado.value=="EnEjecucion"}<input type="submit" name="cerrar" id="cerrar" value="Cerrar Programa" onclick="this.form.return_module.value=\'ee_Programas\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'cerrar\';"/>{/if}',
          ),
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
          0 => 'team_name',
          1 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
?>
