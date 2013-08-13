<?php
$viewdefs ['Opportunities'] = 
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
        'enctype' => 'multipart/form-data',
      ),
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
          'file' => 'custom/include/scripts/sistema/SpOportunidad.js',
        ),
        7 => 
        array (
          'file' => 'include/SugarCotizacion/SugarCotizacion.js',
        ),
        8 => 
        array (
          'file' => 'include/SugarParticipantes/SugarParticipantes.js',
        ),
        9 => 
        array (
          'file' => 'include/SugarFiles/SugarFiles.js',
        ),
      ),
      'javascript' => '{$PROBABILITY_SCRIPT}',
      'useTabs' => true,
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'customCode' => '<input type="text" readonly="yes" size="45" name="name" id="name" value="{$fields.name.value}" />',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 'account_name',
          1 => 
          array (
            'name' => 'categoria_c',
            'studio' => 'visible',
            'label' => 'LBL_CATEGORIA',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'programas',
            'label' => 'LBL_PROGRAMAS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'date_closed',
          ),
          1 => 
          array (
            'name' => 'tiponegocio_c',
            'studio' => 'visible',
            'label' => 'LBL_TIPONEGOCIO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'tomacontactoin',
            'label' => 'LBL_TOMACONTACTOIN',
            'customLabel' => '<label id="l_tomacontactoin">Toma de Contacto In</label>',
          ),
          1 => 
          array (
            'name' => 'tomacontactoout',
            'label' => 'LBL_TOMACONTACTOOUT',
            'customLabel' => '<label id="l_tomacontactoout">Toma de Contacto Out</label>',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'otroin',
            'label' => 'LBL_OTROIN',
            'customLabel' => '<label id="l_otroin">{$MOD.LBL_OTROIN}</label>',
          ),
          1 => 
          array (
            'name' => 'otroout',
            'label' => 'LBL_OTROOUT',
            'customLabel' => '<label id="l_otroout">{$MOD.LBL_OTROOUT}</label>',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'sales_stage',
            'customCode' => '<input type="text" name="sales_stage" readonly="yes" size="35" id="sales_stage" value="{$fields.sales_stage.value}"/>{if $fields.sales_stage.value!="Perdido"}<a href="javascript:void(0);" onclick="javascript:openEtapas(\'{$fields.sales_stage.value}\');" >Seleccionar Etapa</a>{/if}',
          ),
          1 => 
          array (
            'name' => 'amount',
          ),
        ),
        7 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'amountreal',
            'label' => 'LBL_AMOUNTREAL',
            'customLabel' => '<label id="l_amountreal">Monto Real</label>',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'motivoperdida_c',
            'studio' => 'visible',
            'label' => 'LBL_MOTIVOPERDIDA',
            'customLabel' => '<label id="l_motivoperdida_c">Motivo de Perdida</label>',
          ),
          1 => 
          array (
            'name' => 'adicional_c',
            'label' => 'LBL_ADICIONAL',
            'customLabel' => '<label id="l_adicional_c">Detalle</label>',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'probability',
            'customCode' => '<input type="text" name="probability" id="probability" value="{$fields.probability.value}" readonly="true"/>',
          ),
          1 => 
          array (
            'name' => 'numeroparticipantes',
            'label' => 'LBL_NUMEROPARTICIPANTES',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'ofertapresentada_c',
            'label' => 'LBL_OFERTAPRESENTADA',
          ),
          1 => 
          array (
            'name' => 'fechavalidez_c',
            'label' => 'LBL_FECHAVALIDEZ',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'mediocontacto',
            'label' => 'LBL_MEDIOCONTACTO',
            'customCode' => '<input type="text" name="mediocontacto" readonly="yes" size="35" id="mediocontacto" value="{$fields.mediocontacto.value}"/>{if $fields.sales_stage.value!="Ganado"}{if $fields.sales_stage.value!="Perdido"}<a href="javascript:void(0);" onclick="javascript:openMedios();" >Seleccionar Medios</a>&nbsp;<a href="javascript:void(0);" onclick="javascript:borra_medios_sp();" >Borrar</a>{/if}{/if}',
          ),
          1 => 
          array (
            'name' => 'detallemedio',
            'label' => 'LBL_DETALLEEMEDIO',
            'customCode' => '<input type="text" name="detallemedio" readonly="yes" size="35" id="detallemedio" value="{$fields.detallemedio.value}"/>
                            {if $fields.sales_stage.value!="Ganado"}
                                 {if $fields.sales_stage.value!="Perdido"}
                                 <a href="javascript:void(0);" onclick="javascript:openDetalle();" >Seleccionar Detalle</a>&nbsp;
                                 <a href="javascript:void(0);" onclick="javascript:borra_detalle_sp();" >Borrar</a>
                                 {/if}
                             {/if}',
          ),
        ),
        12 => 
        array (
          0 => 'description',
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
            'name' => 'motivo_c',
            'studio' => 'visible',
            'label' => 'LBL_MOTIVO',
          ),
        ),
        1 => 
        array (
          0 => '',
          1 => 
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
            'name' => 'participante',
            'label' => 'LBL_PARTICIPANTE',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'files',
            'label' => 'LBL_FILES',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 'assigned_user_name',
          1 => 
          array (
            'name' => 'team_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
