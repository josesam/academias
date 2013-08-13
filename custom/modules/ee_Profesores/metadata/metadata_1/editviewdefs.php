<?php
$module_name = 'ee_Profesores';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' =>
      array (
        'buttons' =>
        array (
          0 =>
          array (
            'customCode' => '<input title="Save [Alt+S]" accessKey="S" onclick="this.form.action.value=\'Save\'; return check_custom_data();" type="submit" name="button" value="Guardar">',
          ),
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
          'file' => 'custom/include/scripts/sistema/SpTelefonos.js',
        ),
        7 =>
        array (
          'file' => 'custom/include/scripts/sistema/SpProfesores.js',
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
      'lbl_contact_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          ),
          1 => 'last_name',
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
          0 => 'phone_work',
          1 => 'phone_mobile',
        ),
        3 => 
        array (
          0 => 'phone_other',
          1 => 'phone_home',
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
                 'customCode' => '<input type="text" name="ciudad_principal" readonly="yes" size="35" id="ciudad_principal" value="{$fields.ciudad_principal.value}"/><a href="javascript:void(0);" onclick="javascript:buscar(\'principal\');" >Seleccionar Ciudad</a>',
          ),
          1 => 
          array (
            'name' => 'ciudad_envio',
            'label' => 'LBL_CIUDADENVIO',
            'customCode' => '<input type="text" name="ciudad_envio" readonly="yes" size="35" id="ciudad_envio" value="{$fields.ciudad_envio.value}"/><a href="javascript:void(0);" onclick="javascript:buscar(\'secundaria\');" >Seleccionar Ciudad</a>',

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
