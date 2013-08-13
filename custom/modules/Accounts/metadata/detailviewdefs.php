<?php
// created: 2013-01-02 12:12:59
$viewdefs = array (
  'Accounts' => 
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
            5 => 
            array (
              'customCode' => '{if $fields.tipocliente_c.value=="Natural"}{if $fields.convertida.value == 0}<input type="submit" name="Convertir" id="Convertir" value="Crear Contacto" onclick="this.form.return_module.value=\'Accounts\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'convertir\';"/>{/if}{/if}',
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
          3=>array(
                 'file' =>'include/SubPanel/SubPanelTiles.js',
          )    
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
              'comment' => 'Name of the Company',
              'label' => 'LBL_NAME',
              'displayParams' => 
              array (
                'enableConnectors' => true,
                'module' => 'Accounts',
                'connectors' => 
                array (
                  0 => 'ext_rest_twitter',
                  1 => 'ext_rest_linkedin',
                ),
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
              'customCode' => '{if $fields.tipocliente_c.value=="Natural"}{$fields.primernombre.value}{/if}',
              'customLabel' => '{if $fields.tipocliente_c.value=="Natural"}{$MOD.LBL_PRIMERNOMBRE}{/if}',
            ),
            1 => 
            array (
              'name' => 'segundonombre',
              'label' => 'LBL_SEGUNDONOMBRE',
              'customCode' => '{if $fields.tipocliente_c.value == "Natural"}{$fields.segundonombre.value}{/if}',
              'customLabel' => '{if $fields.tipocliente_c.value == "Natural"}{$MOD.LBL_SEGUNDONOMBRE}{/if}',
            ),
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'primerapellido',
              'label' => 'LBL_PRIMERAPELLIDO',
              'customCode' => '{if $fields.tipocliente_c.value =="Natural"}{$fields.primerapellido.value}{/if}',
              'customLabel' => '{if $fields.tipocliente_c.value =="Natural"}{$MOD.LBL_PRIMERAPELLIDO}{/if}',
            ),
            1 => 
            array (
              'name' => 'segundoapellido',
              'label' => 'LBL_SEGUNDOAPELLIDO',
              'customCode' => '{if $fields.tipocliente_c.value =="Natural"}{$fields.segundoapellido.value}{/if}',
              'customLabel' => '{if $fields.tipocliente_c.value =="Natural"}{$MOD.LBL_SEGUNDOAPELLIDO}{/if}',
            ),
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'razonsocial',
              'label' => 'LBL_RAZONSOCIAL',
              'customCode' => '{if $fields.tipocliente_c.value !="Natural"}{$fields.razonsocial.value}{/if}',
              'customLabel' => '{if $fields.tipocliente_c.value !="Natural"}{$MOD.LBL_RAZONSOCIAL}{/if} ',
            ),
            1 => 
            array (
              'name' => 'nombrecomercial',
              'label' => 'LBL_NOMBRECOMERCIAL',
              'customLabel' => '{if $fields.tipocliente_c.value !="Natural"}{$MOD.LBL_NOMBRECOMERCIAL}{/if}',
              'customCode' => '{if $fields.tipocliente_c.value !="Natural"}{$fields.nombrecomercial.value}{/if}',
            ),
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'nacionalidad_c',
              'studio' => 'visible',
              'label' => 'LBL_NACIONALIDAD',
            ),
            1 => 
            array (
              'name' => 'website',
              'type' => 'link',
              'label' => 'LBL_WEBSITE',
              'displayParams' => 
              array (
                'link_target' => '_blank',
              ),
            ),
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'ciudad_principal',
              'label' => 'LBL_CIUDADPRINCIPAL',
            ),
            1 => 
            array (
              'name' => 'phone_alternate',
              'comment' => 'An alternate phone number',
              'label' => 'LBL_PHONE_ALT',
            ),
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'phone_office',
              'comment' => 'The office phone number',
              'label' => 'LBL_PHONE_OFFICE',
            ),
            1 => 
            array (
              'name' => 'ext',
              'label' => 'LBL_EXT',
            ),
          ),
          8 => 
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
            ),
            1 => 
            array (
              'name' => 'cursosinteres',
              'label' => 'LBL_CURSOSINTERES',
            ),
          ),
          11 => 
          array (
            0 => 
            array (
              'name' => 'mediocontacto',
              'label' => 'LBL_MEDIOCONTACTO',
            ),
            1 => 
            array (
              'name' => 'detallemedio',
              'label' => 'LBL_DETALLEEMEDIO',
            ),
          ),
          12 => 
          array (
            0 => 
            array (
              'name' => 'description',
              'comment' => 'Full text of the note',
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
              'customLabel' => '{if $fields.tipodescuento_c.value == "Otro"}{$MOD.LBL_OTRODESCUENTO}{/if}',
              'customCode' => '{if $fields.tipodescuento_c.value == "Otro"}{$fields.otrodescuento.value}{/if}',
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
              'customLabel' => '{if $fields.tipocliente_c.value !="Natural"}{$MOD.LBL_INGRESOSENVENTAS}{/if}',
              'customCode' => '{if $fields.tipocliente_c.value !="Natural"}{$fields.ingresosenventas_c.value}{/if}',
            ),
            1 => 
            array (
              'name' => 'numemp_c',
              'label' => 'LBL_NUMEMP',
              'customLabel' => '{if $fields.tipocliente_c.value !="Natural"}{$MOD.LBL_NUMEMP}{/if}',
              'customCode' => '{if $fields.tipocliente_c.value !="Natural"}{$fields.numemp_c.value}{/if}',
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
              'customLabel' => '{if $fields.tipocliente_c.value =="Natural"}{$MOD.LBL_INGRESOSPORMES}{/if}',
              'customCode' => '{if $fields.tipocliente_c.value =="Natural"}{$fields.ingresospormes_c.value}{/if}',
            ),
            1 => 
            array (
              'name' => 'egresospormes_c',
              'label' => 'LBL_EGRESOSPORMES',
              'customLabel' => '{if $fields.tipocliente_c.value =="Natural"}{$MOD.LBL_EGRESOSPORMES}{/if}',
              'customCode' => '{if $fields.tipocliente_c.value =="Natural"}{$fields.egresospormes_c.value}{/if}',
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
            1 => 'team_name',
          ),
        ),
      ),
    ),
  ),
);