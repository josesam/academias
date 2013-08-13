<?php
$viewdefs ['Contacts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
          1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
          2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
          3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
          4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
        ),
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
          'file' => 'custom/include/scripts/sistema/SpContact.js',
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
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" readonly="true" maxlength="25" type="text" value="{$fields.first_name.value}">',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'last_name',
            'customCode' => '<input id="last_name" readonly="true"  type="text" autocomplete="off" title="Apellido" value="{$fields.last_name.value}" size="30" tabindex="0" name="last_name"> ',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'primernombre',
            'label' => 'LBL_PRIMERNOMBRE',
            'customCode' => '<input id="primernombre" maxlength="50" type="text" autocomplete="off" title="Primer Nombre" value="{$fields.primernombre.value}" size="30" tabindex="0" name="primernombre"> ',
          ),
          1 => 
          array (
            'name' => 'segundonombre',
            'label' => 'LBL_SEGUNDONOMBRE',
            'customCode' => '<input id="segundonombre" maxlength="50" type="text" autocomplete="off" title="Segundo Nombre" value="{$fields.segundonombre.value}" size="30" tabindex="0" name="segundonombre">',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'primerapellido',
            'label' => 'LBL_PRIMERAPELLIDO',
            'customCode' => '<input id="primerapellido" maxlength="50" type="text" autocomplete="off" title="Primer Apellido" value="{$fields.primerapellido.value}" size="30" tabindex="0" name="primerapellido"> ',
          ),
          1 => 
          array (
            'name' => 'segundoapellido',
            'label' => 'LBL_SEGUNDOAPELLIDO',
            'customCode' => '<input id="segundoapellido" maxlength="50" type="text" autocomplete="off" title="Segundo Apellido" value="{$fields.segundoapellido.value}" size="30" tabindex="0" name="segundoapellido"> ',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'tipocontacto',
            'label' => 'LBL_TIPOCONTACTO',
          ),
          1 => 
          array (
            'name' => 'cedula',
            'label' => 'LBL_CEDULA',
            'customCode' => '<input type="text" name="cedula" id="cedula" value="{$fields.cedula.value}" maxlength="10">',
          ),
        ),
        4 => 
        array (
          0 => 'picture',
          1 => 
          array (
            'name' => 'genero_c',
            'studio' => 'visible',
            'label' => 'LBL_GENERO',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'estadocivil_c',
            'studio' => 'visible',
            'label' => 'LBL_ESTADOCIVIL',
          ),
          1 => 
          array (
            'name' => 'birthdate',
            'comment' => 'The birthdate of the contact',
            'label' => 'LBL_BIRTHDATE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'phone_work',
            'comment' => 'Work phone number of the contact',
            'label' => 'LBL_OFFICE_PHONE',
          ),
          1 => 
          array (
            'name' => 'ext',
            'label' => 'LBL_EXT',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'phone_mobile',
            'comment' => 'Mobile phone number of the contact',
            'label' => 'LBL_MOBILE_PHONE',
          ),
          1 => 
          array (
            'name' => 'phone_other',
            'comment' => 'Other phone number for the contact',
            'label' => 'LBL_OTHER_PHONE',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'nacionalidad_c',
            'label' => 'LBL_NACIONALIDAD_C',
            'customCode' => '<input id="nacionalidad_c"  type="text" autocomplete="off" title="Nacionalidad" value="{$fields.nacionalidad_c.value}" size="30" tabindex="0" name="nacionalidad_c">
                           <input id="ee_nacionalidad_id_c" type="hidden" value="{$valor}" name="ee_nacionalidad_id_c"><a href="javascript:void(0);" onclick="javascript:nacionalidad();" >Seleccionar País</a>  ',
          ),
          1 => '',
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'ciudad_principal',
            'label' => 'LBL_CIUDADPRINCIPAL',
            'customCode' => '<input type="text" name="ciudad_principal" readonly="yes" size="35" id="ciudad_principal" value="{$fields.ciudad_principal.value}"/><a href="javascript:void(0);" id="ciudad_link" onclick="javascript:buscar(\'principal\');" >Seleccionar Ciudad</a>',
          ),
          1 => 
          array (
            'name' => 'codigobanner',
            'label' => 'LBL_CODIGOBANNER',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'title',
            'comment' => 'The title of the contact',
            'label' => 'LBL_TITLE',
          ),
          1 => 
          array (
            'name' => 'area_c',
            'studio' => 'visible',
            'label' => 'LBL_AREA',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'lugartrabajo',
            'label' => 'LBL_LUGARTRABAJO',
          ),
          1 => 
          array (
            'name' => 'cursosinteres',
            'label' => 'LBL_CURSOSINTERES',
            'customCode' => '<table id="AccountsTable"><thead><tr><th>{$MOD.LBL_CURSOSINTERES}</th></tr></thead></table>
                <a href="javascript:void(0);" onclick="javascript:buscar_programas();" >Seleccionar Programa</a>',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'niveleducativo_c',
            'studio' => 'visible',
            'label' => 'LBL_NIVELEDUCATIVO',
          ),
          1 => 
          array (
            'name' => 'situacionlaboral_c',
            'studio' => 'visible',
            'label' => 'LBL_SITUACIONLABORAL',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL_ADDRESS',
          ),
          1 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'account_name',
            'displayParams' => 
            array (
              'key' => 'billing',
              'copy' => 'primary',
              'billingKey' => 'primary',
              'required' => true,
              'additionalFields' => 
              array (
                'phone_office' => 'phone_work',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'fuente',
            'label' => 'LBL_FUENTE',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
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
            'name' => 'ciudad_principal_ndb',
            'label' => 'LBL_CIUDADPRINCIPAL_NDB',
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
            'customCode' => '<input type="text" name="pais_principal" readonly="yes" size="35" id="pais_principal" value="{$fields.pais_principal.value}"/><a href="javascript:void(0);" id="a_principal" onclick="javascript:buscarpais(\'principal\');" >Seleccionar Pais</a>',
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
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'pais_envio',
            'label' => 'LBL_PAISENVIO',
            'customCode' => '<input type="text" name="pais_envio" readonly="yes" size="35" id="pais_envio" value="{$fields.pais_envio.value}"/><a href="javascript:void(0);" id="a_secundario" onclick="javascript:buscarpais(\'secundaria\');" >Seleccionar Pais</a>',
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
            'name' => 'participante_c',
            'label' => 'LBL_PARTICIPANTE',
          ),
          1 => 
          array (
            'name' => 'tomadordecision_c',
            'label' => 'LBL_TOMADORDECISION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'cobranzas22_c',
            'label' => 'LBL_COBRANZAS22',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'do_not_call',
            'comment' => 'An indicator of whether contact can be called',
            'label' => 'LBL_DO_NOT_CALL',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'razones_c',
            'studio' => 'visible',
            'label' => 'LBL_RAZONES',
            'customLabel' => '<label id="l_razones_c_label">{$MOD.LBL_RAZONES}</label>',
          ),
          1 => 
          array (
            'name' => 'detalle_c',
            'label' => 'LBL_DETALLE',
            'customLabel' => '<label id="l_detalle_c_label">{$MOD.LBL_DETALLE}</label>',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'direccionfacebook_c',
            'label' => 'LBL_DIRECCIONFACEBOOK',
          ),
          1 => 
          array (
            'name' => 'direccionlinkedin_c',
            'label' => 'LBL_DIRECCIONLINKEDIN',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'direccionskype_c',
            'label' => 'LBL_DIRECCIONSKYPE',
          ),
          1 => 
          array (
            'name' => 'direcciontwitter_c',
            'label' => 'LBL_DIRECCIONTWITTER',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'vimeo_c',
            'label' => 'LBL_VIMEO',
          ),
          1 => 
          array (
            'name' => 'googleplus_c',
            'label' => 'LBL_GOOGLEPLUS',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
          1 => 'team_name',
        ),
      ),
    ),
  ),
);
?>
