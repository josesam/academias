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
          'file' => 'custom/include/scripts/sistema/SpAccounts.js',
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
            'customCode' => '<input type="text" name="name" readonly="yes" size="35" id="name" value="{$fields.name.value}"/>',
          ),
          1 => 
          array (
            'name' => 'estado_c',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
            'customCode' => '<input type="hidden" name="estado_c" id="estado_c" value="{$fields.estado_c.value}"/>{$fields.estado_c.value} ',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'tipocliente_c',
            'studio' => 'visible',
            'label' => 'LBL_TIPOCLIENTE',
          ),
          1 => 
          array (
            'name' => 'nrodocumento_c',
            'label' => 'LBL_NRODOCUMENTO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'primernombre',
            'label' => 'LBL_PRIMERNOMBRE',
            'customLabel' => '<label for="primernombre" id="l_primernombre">Primer Nombre:<span class="required">*</span></label>',
          ),
          1 => 
          array (
            'name' => 'segundonombre',
            'label' => 'LBL_SEGUNDONOMBRE',
            'customLabel' => '<label for="segundonombre" id="l_segundonombre">Segundo Nombre:</label>',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'primerapellido',
            'label' => 'LBL_PRIMERAPELLIDO',
            'customLabel' => '<label for="primerapellido" id="l_primerapellido">Primer Apellido:<span class="required">*</span></label>',
          ),
          1 => 
          array (
            'name' => 'segundoapellido',
            'label' => 'LBL_SEGUNDOAPELLIDO',
            'customLabel' => '<label for="primerapellido" id="l_segundoapellido">Segundo Apellido:</label>',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'razonsocial',
            'label' => 'LBL_RAZONSOCIAL',
            'customLabel' => '<label for="razonsocial" id="l_razonsocial">Razón Social:<span class="required">*</span></label>',
          ),
          1 => 
          array (
            'name' => 'nombrecomercial',
            'label' => 'LBL_NOMBRECOMERCIAL',
            'customLabel' => '<label for="nombrecomercial" id="l_nombrecomercial">Nombre Comercial:<span class="required">*</span></label>',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'nacionalidad_c',
            'studio' => 'visible',
            'label' => 'LBL_NACIONALIDAD',
            'customCode' => '<input id="nacionalidad_c"  type="text" autocomplete="off" title="Nacionalidad" value="{$fields.nacionalidad_c.value}" size="30" tabindex="0" name="nacionalidad_c">
                           <input id="ee_nacionalidad_id_c" type="hidden" value="{$valor}" name="ee_nacionalidad_id_c"><a href="javascript:void(0);" onclick="javascript:nacionalidad();" >Seleccionar País</a>  ',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
            'customLabel' => '<label for="website" id="l_website">{$MOD.LBL_WEBSITE}:</label>',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'ciudad_principal',
            'label' => 'LBL_CIUDADPRINCIPAL',
            'customCode' => '<input type="text" name="ciudad_principal" readonly="yes" size="35" id="ciudad_principal" value="{$fields.ciudad_principal.value}"/><a href="javascript:void(0);" id="ciudad_link" onclick="javascript:buscar(\'principal\');" >Seleccionar Ciudad</a>',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'phone_alternate',
            'label' => 'LBL_PHONE_ALT',
            'customLabel' => '<label for="phone_alternate" id="l_phone_alternate">{$MOD.LBL_PHONE_ALT}:</label>',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'phone_office',
            'label' => 'LBL_PHONE_OFFICE',
          ),
          1 => 
          array (
            'name' => 'ext',
            'label' => 'LBL_EXT',
            'customLabel' => '<label for="phone_alternate" id="l_ext">{$MOD.LBL_EXT}:</label>',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'sectoreconomico_c',
            'studio' => 'visible',
            'label' => 'LBL_SECTORECONOMICO',
            'customLabel' => '<label for="sectoreconomico_c" id="l_sectoreconomico_c">{$MOD.LBL_SECTORECONOMICO}:</label>',
          ),
          1 => 
          array (
            'name' => 'clienteproblema_c',
            'label' => 'LBL_CLIENTEPROBLEMA',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'comportamientopago_c',
            'studio' => 'visible',
            'label' => 'LBL_COMPORTAMIENTOPAGO',
          ),
          1 => 
          array (
            'name' => 'clientepotencial_c',
            'label' => 'LBL_CLIENTEPOTENCIAL',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
            'customLabel' => '<label for="email1" id="l_email1">{$MOD.LBL_EMAIL}:</label>',
          ),
          1 => 
          array (
            'name' => 'cursosinteres',
            'label' => 'LBL_CURSOSINTERES',
            'customCode' => '<table id="AccountsTable"><thead><tr><th>{$MOD.LBL_CURSOSINTERES}</th></tr></thead></table>
                <a href="javascript:void(0);" onclick="javascript:buscar_programas();" >Seleccionar Programa</a>',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'mediocontacto',
            'label' => 'LBL_MEDIOCONTACTO',
            'customCode' => '<input type="text" name="mediocontacto" readonly="yes" size="35" id="mediocontacto" value="{$fields.mediocontacto.value}"/><a href="javascript:void(0);" onclick="javascript:openMedios();" >Seleccionar Medios</a>&nbsp;<a href="javascript:void(0);" onclick="javascript:borra_medios_sp();" >Borrar</a>',
          ),
          1 => 
          array (
            'name' => 'detallemedio',
            'label' => 'LBL_DETALLEEMEDIO',
            'customCode' => '<input type="text" name="detallemedio" readonly="yes" size="35" id="detallemedio" value="{$fields.detallemedio.value}"/><a href="javascript:void(0);" id="detalle_link" onclick="javascript:openDetalle();" >Seleccionar Detalle</a>&nbsp;
                                 <a href="javascript:void(0);" onclick="javascript:borra_detalle_sp();" >Borrar</a>',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
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
            'customCode' => '<input type="text" name="ciudad_principal_ndb" readonly="yes" size="35" id="ciudad_principal_ndb" value="{$fields.ciudad_principal_ndb.value}"/>',
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
            'customCode' => '<input type="text" name="provincia_envio" readonly="yes" size="35" id="provincia_envio" value="{$fields.provincia_envio.value}"/>',
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
        1 => 
        array (
          0 => 
          array (
            'name' => 'otrodescuento',
            'studio' => 'visible',
            'label' => 'LBL_OTRODESCUENTO',
            'customLabel' => '<label id="otrodescuento_l">{$MOD.LBL_OTRODESCUENTO}</label> ',
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
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'infobancaria',
            'label' => 'LBL_INFOBANCARIA',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
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
    ),
  ),
);
?>
