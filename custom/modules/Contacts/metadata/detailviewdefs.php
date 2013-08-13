<?php
$viewdefs ['Contacts'] = 
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
          4 => 
          array (
            'customCode' => '<input title="{$APP.LBL_MANAGE_SUBSCRIPTIONS}" class="button" onclick="this.form.return_module.value=\'Contacts\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Contacts\';" type="submit" name="Manage Subscriptions" value="{$APP.LBL_MANAGE_SUBSCRIPTIONS}">',
          ),
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
            'name' => 'primernombre',
            'label' => 'LBL_PRIMERNOMBRE',
          ),
          1 => 
          array (
            'name' => 'segundonombre',
            'label' => 'LBL_SEGUNDONOMBRE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'primerapellido',
            'label' => 'LBL_PRIMERAPELLIDO',
          ),
          1 => 
          array (
            'name' => 'segundoapellido',
            'label' => 'LBL_SEGUNDOAPELLIDO',
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
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'picture',
            'label' => 'LBL_PICTURE_FILE',
          ),
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
          ),
          1 => '',
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'ciudad_principal',
            'label' => 'LBL_CIUDADPRINCIPAL',
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
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'account_name',
            'label' => 'LBL_ACCOUNT_NAME',
            'displayParams' => 
            array (
              'enableConnectors' => true,
              'module' => 'Contacts',
              'connectors' => 
              array (
                0 => 'ext_rest_linkedin',
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
            'label' => 'LBL_CIUDADPRINCIPAL_NDB',
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
            'customLabel' => '<label id="l_razones_c_label">{$MOD.LBL_DETALLE}</label>',
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
            'displayParams' => 
            array (
            ),
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
            'displayParams' => 
            array (
              'enableConnectors' => true,
              'module' => 'Contacts',
              'connectors' => 
              array (
                0 => 'ext_rest_twitter',
              ),
            ),
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
