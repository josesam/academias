<?php
$module_name = 'ee_Profesores';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'search_name' => 
      array (
        'name' => 'search_name',
        'label' => 'LBL_NAME',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'documentoidentidad_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_DOCUMENTOIDENTIDAD',
        'width' => '10%',
        'name' => 'documentoidentidad_c',
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
      'first_name' => 
      array (
        'name' => 'first_name',
        'default' => true,
        'width' => '10%',
      ),
      'last_name' => 
      array (
        'name' => 'last_name',
        'default' => true,
        'width' => '10%',
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'title',
      ),
      'phone_mobile' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_MOBILE_PHONE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_mobile',
      ),
      'tiponaciaoliad_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TIPONACIAOLIAD',
        'width' => '10%',
        'name' => 'tiponaciaoliad_c',
      ),
      'documentoidentidad_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_DOCUMENTOIDENTIDAD',
        'width' => '10%',
        'name' => 'documentoidentidad_c',
      ),
      'niveltitulo2' => 
      array (
        'type' => 'multienum',
        'studio' => 'visible',
        'label' => 'LBL_NIVELTITULO2',
        'width' => '10%',
        'default' => true,
        'name' => 'niveltitulo2',
      ),
      'honorarioshora' => 
      array (
        'type' => 'decimal',
        'default' => true,
        'label' => 'LBL_HONORARIOSHORA',
        'width' => '10%',
        'name' => 'honorarioshora',
      ),
      'estado' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADO',
        'width' => '10%',
        'name' => 'estado',
      ),
      'induccion' => 
      array (
        'type' => 'bool',
        'label' => 'LBL_INDUCCION',
        'width' => '10%',
        'default' => true,
        'name' => 'induccion',
      ),
      'areasconocimiento' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'default' => true,
        'label' => 'LBL_AREASCONOCIMIENTO',
        'width' => '10%',
        'name' => 'areasconocimiento',
      ),
      'created_by_name' => 
      array (
        'name' => 'created_by_name',
        'default' => true,
        'width' => '10%',
      ),
      'do_not_call' => 
      array (
        'name' => 'do_not_call',
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
