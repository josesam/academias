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
            'name' => 'tipodocumento',
            'label' => 'LBL_TIPODOCUMENTO',
          ),
          1 => 
          array (
            'name' => 'documentoidentidad_c',
            'label' => 'LBL_DOCUMENTOIDENTIDAD',
            'displayParams' => 
            array (
              'required' => true,
            ),  
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
          0 => 'phone_work',
          1 => 'phone_mobile',
        ),
        5 => 
        array (
          0 => 'phone_other',
          1 => 'phone_home',
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
            'displayParams' => 
            array (
              'required' => true,
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
            'customCode' => '<input type="text" name="ciudad_principal" readonly="yes" size="35" id="ciudad_principal" value="{$fields.ciudad_principal.value}"/><a href="javascript:void(0);" onclick="javascript:buscar(\'principal\');" >Seleccionar Ciudad</a>',
          ),
          1 => 
          array (
            'name' => 'provincia_principal',
            'label' => 'LBL_PROVINCIAPRINCIPAL',
            'customCode' => '<input type="text" name="provincia_principal" readonly="yes" size="35" id="provincia_principal" value="{$fields.provincia_principal.value}"/>',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'pais_principal',
            'label' => 'LBL_PAISPRINCIPAL',
            'customCode' => '<input type="text" name="pais_principal" readonly="yes" size="35" id="pais_principal" value="{$fields.pais_principal.value}"/>',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'etiqueta_secundaria_ndb',
            'label' => 'LBL_CIUDADSECUNDARIA_NDB',
            'customLabel' => '<strong>{$MOD.LBL_CIUDADSECUNDARIA_NDB}</strong>',
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
            'customCode' => '<input type="text" name="ciudad_envio" readonly="yes" size="35" id="ciudad_envio" value="{$fields.ciudad_envio.value}"/><a href="javascript:void(0);" id="ciudadse_link" onclick="javascript:buscar(\'secundaria\');" >Seleccionar Ciudad</a>',
          ),
          1 => 
          array (
            'name' => 'provincia_envio',
            'label' => 'LBL_PROVINCIAENVIO',
            'customCode' => '<input type="text" name="provincia_envio" readonly="yes" size="35" id="provincia_envio" value="{$fields.provincia_envio.value}"/>',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'pais_envio',
            'label' => 'LBL_PAISENVIO',
            'customCode' => '<input type="text" name="pais_envio" readonly="yes" size="35" id="pais_envio" value="{$fields.pais_envio.value}"/>',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel2' => 
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
