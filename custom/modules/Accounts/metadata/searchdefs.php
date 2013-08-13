<?php
$searchdefs ['Accounts'] = 
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
      'estado_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADO',
        'width' => '10%',
        'name' => 'estado_c',
      ),
      'nrodocumento_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NRODOCUMENTO',
        'width' => '10%',
        'name' => 'nrodocumento_c',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'clientepotencial_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_CLIENTEPOTENCIAL',
        'width' => '10%',
        'name' => 'clientepotencial_c',
      ),
      'email' => 
      array (
        'name' => 'email',
        'label' => 'LBL_ANY_EMAIL',
        'type' => 'name',
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
      'estado_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADO',
        'width' => '10%',
        'name' => 'estado_c',
      ),
      'nacionalidad_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_NACIONALIDAD',
        'id' => 'EE_NACIONALIDAD_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'nacionalidad_c',
      ),
      'comportamientopago_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_COMPORTAMIENTOPAGO',
        'width' => '10%',
        'name' => 'comportamientopago_c',
      ),
      'nrodocumento_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NRODOCUMENTO',
        'width' => '10%',
        'name' => 'nrodocumento_c',
      ),
      'razonsocial' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_RAZONSOCIAL',
        'width' => '10%',
        'default' => true,
        'name' => 'razonsocial',
      ),
      'nombrecomercial' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_NOMBRECOMERCIAL',
        'width' => '10%',
        'default' => true,
        'name' => 'nombrecomercial',
      ),
      'primernombre' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PRIMERNOMBRE',
        'width' => '10%',
        'default' => true,
        'name' => 'primernombre',
      ),
      'segundonombre' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_SEGUNDONOMBRE',
        'width' => '10%',
        'default' => true,
        'name' => 'segundonombre',
      ),
      'primerapellido' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PRIMERAPELLIDO',
        'width' => '10%',
        'default' => true,
        'name' => 'primerapellido',
      ),
      'segundoapellido' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_SEGUNDOAPELLIDO',
        'width' => '10%',
        'default' => true,
        'name' => 'segundoapellido',
      ),
      'tipocliente_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TIPOCLIENTE',
        'width' => '10%',
        'name' => 'tipocliente_c',
      ),
      'otrodescuento' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_OTRODESCUENTO',
        'width' => '10%',
        'default' => true,
        'name' => 'otrodescuento',
      ),
      'clienteproblema_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_CLIENTEPROBLEMA',
        'width' => '10%',
        'name' => 'clienteproblema_c',
      ),
      'tipocliente2_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TIPOCLIENTE2',
        'width' => '10%',
        'name' => 'tipocliente2_c',
      ),
      'sectoreconomico_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_SECTORECONOMICO',
        'width' => '10%',
        'name' => 'sectoreconomico_c',
      ),
      'tipodescuento_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TIPODESCUENTO',
        'width' => '10%',
        'name' => 'tipodescuento_c',
      ),
      'email' => 
      array (
        'name' => 'email',
        'label' => 'LBL_ANY_EMAIL',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
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
