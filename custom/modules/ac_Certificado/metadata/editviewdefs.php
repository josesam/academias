<?php
$module_name = 'ac_Certificado';
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
          1 => 
          array (
            'name' => 'contacts_ac_certificado_name',
              'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'aprobo_examen',
            'studio' => 'visible',
            'label' => 'LBL_APROBO_EXAMEN',
          ),
          1 => 
          array (
            'name' => 'fecha_examen',
            'label' => 'LBL_FECHA_EXAMEN',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'rindio_examen',
            'studio' => 'visible',
            'label' => 'LBL_RINDIO_EXAMEN',
          ),
          1 => 
          array (
            'name' => 'fecha_retiro',
            'label' => 'LBL_FECHA_RETIRO',
          ),
        ),
        3 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'fecha_llegada',
            'label' => 'LBL_FECHA_LLEGADA',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'ubicacion_certificado',
            'studio' => 'visible',
            'label' => 'LBL_UBICACION_CERTIFICADO',
          ),
          1 => '',
        ),
        5 => 
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
