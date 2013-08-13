<?php
$module_name = 'ee_Profesores';
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
        ),
      ),
      'useTabs' => true,
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
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_contact_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'comment' => 'First name of the contact',
            'label' => 'LBL_FIRST_NAME',
          ),
          1 => 
          array (
            'name' => 'last_name',
            'comment' => 'Last name of the contact',
            'label' => 'LBL_LAST_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'tiponaciaoliad_c',
            'studio' => 'visible',
            'label' => 'LBL_TIPONACIAOLIAD',
          ),
          1 => 
          array (
            'name' => 'documentoidentidad_c',
            'label' => 'LBL_DOCUMENTOIDENTIDAD',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'phone_work',
          ),
          1 => 
          array (
            'name' => 'phone_mobile',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'phone_other',
            'label' => 'LBL_OTHER_PHONE',
          ),
          1 => 
          array (
            'name' => 'phone_home',
            'label' => 'LBL_HOME_PHONE',
          ),
        ),
        4 => 
        array (
          0 => 'do_not_call',
          1 => 
          array (
            'name' => 'profesion_c',
            'label' => 'LBL_PROFESION',
          ),
        ),
        5 => 
        array (
          0 => 'title',
          1 => 'department',
        ),
        6 => 
        array (
          0 => 'team_name',
          1 => 'assigned_user_name',
        ),
        7 => 
        array (
          0 => '',
          1 => 'description',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'estado',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
          1 => 
          array (
            'name' => 'niveltitulo2',
            'studio' => 'visible',
            'label' => 'LBL_NIVELTITULO2',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'induccion',
            'label' => 'LBL_INDUCCION',
          ),
          1 => 
          array (
            'name' => 'honorarioshora',
            'label' => 'LBL_HONORARIOSHORA',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'nivelconocimiento',
            'studio' => 'visible',
            'label' => 'LBL_NIVELCONOCIMIENTO',
          ),
          1 => 
          array (
            'name' => 'areasconocimiento',
            'studio' => 'visible',
            'label' => 'LBL_AREASCONOCIMIENTO',
          ),
        ),
      ),
      'lbl_email_addresses' => 
      array (
        0 => 
        array (
          0 => 'email1',
        ),
      ),
      'lbl_address_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'calle_principal',
            'label' => 'LBL_CALLEPRINCIPAL',
          ),
          1 => 
          array (
            'name' => 'calle_envio',
            'label' => 'LBL_CALLESENVIO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'calle2_principal',
            'label' => 'LBL_CALLE2PRINCIPAL',
          ),
          1 => 
          array (
            'name' => 'calle2_envio',
            'label' => 'LBL_CALLE2ENVIO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'numero_principal',
            'label' => 'LBL_NUMEROPRINCIPAL',
          ),
          1 => 
          array (
            'name' => 'numero_envio',
            'label' => 'LBL_NUMEROENVIO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'sector_principal',
            'label' => 'LBL_SECTORPRINCIPAL',
          ),
          1 => 
          array (
            'name' => 'sector_envio',
            'label' => 'LBL_SECTORENVIO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'ciudad_principal',
            'label' => 'LBL_CIUDADPRINCIPAL',
          ),
          1 => 
          array (
            'name' => 'ciudad_envio',
            'label' => 'LBL_CIUDADENVIO',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'provincia_principal',
            'label' => 'LBL_PROVINCIAPRINCIPAL',
          ),
          1 => 
          array (
            'name' => 'provincia_envio',
            'label' => 'LBL_PROVINCIAENVIO',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'pais_principal',
            'label' => 'LBL_PAISPRINCIPAL',
          ),
          1 => 
          array (
            'name' => 'pais_envio',
            'label' => 'LBL_PAISENVIO',
          ),
        ),
      ),
    ),
  ),
);
?>
