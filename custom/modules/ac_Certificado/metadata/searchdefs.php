<?php
$module_name = 'ac_Certificado';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'contacts_ac_certificado_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CONTACTS_AC_CERTIFICADO_FROM_CONTACTS_TITLE',
        'id' => 'CONTACTS_AC_CERTIFICADOCONTACTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'contacts_ac_certificado_name',
      ),
      'aprobo_examen' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_APROBO_EXAMEN',
        'width' => '10%',
        'name' => 'aprobo_examen',
      ),
      'fecha_examen' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_EXAMEN',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_examen',
      ),
      'fecha_retiro' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_RETIRO',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_retiro',
      ),
      'fecha_llegada' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_LLEGADA',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_llegada',
      ),
      'ubicacion_certificado' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_UBICACION_CERTIFICADO',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'ubicacion_certificado',
      ),
      'rindio_examen' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_RINDIO_EXAMEN',
        'width' => '10%',
        'name' => 'rindio_examen',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'contacts_ac_certificado_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CONTACTS_AC_CERTIFICADO_FROM_CONTACTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'CONTACTS_AC_CERTIFICADOCONTACTS_IDA',
        'name' => 'contacts_ac_certificado_name',
      ),
      'rindio_examen' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_RINDIO_EXAMEN',
        'width' => '10%',
        'name' => 'rindio_examen',
      ),
      'aprobo_examen' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_APROBO_EXAMEN',
        'width' => '10%',
        'name' => 'aprobo_examen',
      ),
      'fecha_retiro' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_RETIRO',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_retiro',
      ),
      'fecha_llegada' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_LLEGADA',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_llegada',
      ),
      'fecha_examen' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_EXAMEN',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_examen',
      ),
      'ubicacion_certificado' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_UBICACION_CERTIFICADO',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'ubicacion_certificado',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
