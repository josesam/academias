<?php
$viewdefs ['Accounts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
        ),
      ),
      'maxColumns' => '2',
      'useTabs' => true,
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
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'estado_c',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'tipocliente22_c',
            'studio' => 'visible',
            'label' => 'LBL_TIPOCLIENTE22',
          ),
          1 => 
          array (
            'name' => 'tipocliente_c',
            'studio' => 'visible',
            'label' => 'LBL_TIPOCLIENTE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'nrodocumento_c',
            'label' => 'LBL_NRODOCUMENTO',
          ),
          1 => 
          array (
            'name' => 'nacionalidad_c',
            'studio' => 'visible',
            'label' => 'LBL_NACIONALIDAD',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
          ),
          1 => 
          array (
            'name' => 'celular1_c',
            'label' => 'LBL_CELULAR1',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'phone_office',
            'label' => 'LBL_PHONE_OFFICE',
          ),
          1 => 
          array (
            'name' => 'phone_alternate',
            'comment' => 'An alternate phone number',
            'label' => 'LBL_PHONE_ALT',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'sectoreconomico_c',
            'studio' => 'visible',
            'label' => 'LBL_SECTORECONOMICO',
          ),
          1 => 
          array (
            'name' => 'clienteproblema_c',
            'label' => 'LBL_CLIENTEPROBLEMA',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'comportamientopago_c',
            'studio' => 'visible',
            'label' => 'LBL_COMPORTAMIENTOPAGO',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
          1 => 
          array (
            'name' => 'shipping_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'shipping',
              'copy' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
          1 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
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
            'name' => 'descuento_c',
            'label' => 'LBL_DESCUENTO',
          ),
          1 => 
          array (
            'name' => 'tipodescuento_c',
            'studio' => 'visible',
            'label' => 'LBL_TIPODESCUENTO',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'ingresosenventas_c',
            'label' => 'LBL_INGRESOSENVENTAS',
          ),
          1 => 
          array (
            'name' => 'numemp_c',
            'label' => 'LBL_NUMEMP',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'ingresospormes_c',
            'label' => 'LBL_INGRESOSPORMES',
          ),
          1 => 
          array (
            'name' => 'egresospormes_c',
            'label' => 'LBL_EGRESOSPORMES',
          ),
        ),
      ),
    ),
  ),
);
?>
