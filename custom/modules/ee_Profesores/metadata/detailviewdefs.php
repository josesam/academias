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
            'name' => 'tipodocumento',
            'label' => 'LBL_TIPODOCUMENTO',
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
            'name' => 'tiponaciaoliad_c',
            'studio' => 'visible',
            'label' => 'LBL_TIPONACIAOLIAD',
          ),
          1 => 
          array (
            'name' => 'colaboraen',
            'label' => 'LBL_COLABORAEN',
          ),
        ),
        3 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'otros',
            'label' => 'LBL_OTROS',
          ),
        ),
        4 => 
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
        5 => 
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
        6 => 
        array (
          0 => 'do_not_call',
          1 => 
          array (
            'name' => 'profesion_c',
            'label' => 'LBL_PROFESION',
          ),
        ),
        7 => 
        array (
          0 => 'title',
          1 => 'department',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'cargoactual',
            'label' => 'LBL_CARGOACTUAL',
          ),
          1 => 
          array (
            'name' => 'lugartrabajo',
            'label' => 'LBL_LUGARTRABAJO',
          ),
        ),
        9 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'codigobanner',
            'label' => 'LBL_CODIGOBANNER',
          ),
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
        3 => 
        array (
          0 => 
          array (
            'name' => 'induccion',
            'label' => 'LBL_INDUCCION',
          ),
          1 => 
          array (
            'name' => 'fechainduccion',
            'label' => 'LBL_FECHAINDUCCION',
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
            'name' => 'etiqueta_principal_ndb',
            'label' => 'LBL_ETIQUETAPRINCIPAL_NDB',
            'customLabel' => '<strong>{$MOD.LBL_ETIQUETAPRINCIPAL_NDB}</strong>',
            'customCode' => '<hr>',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'calle_principal',
            'label' => 'LBL_CALLEPRINCIPAL',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ciudad_principal',
            'label' => 'LBL_CIUDADPRINCIPAL',
          ),
          1 => 
          array (
            'name' => 'provincia_principal',
            'label' => 'LBL_PROVINCIAPRINCIPAL',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'pais_principal',
            'label' => 'LBL_PAISPRINCIPAL',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'etiqueta_secundaria_ndb',
            'label' => 'LBL_CIUDADSECUNDARIA_NDB',
            'customCode' => '<hr>',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'calle_envio',
            'label' => 'LBL_CALLESENVIO',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'ciudad_envio',
            'label' => 'LBL_CIUDADENVIO',
          ),
          1 => 
          array (
            'name' => 'provincia_envio',
            'label' => 'LBL_PROVINCIAENVIO',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'pais_envio',
            'label' => 'LBL_PAISENVIO',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel2' => 
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
