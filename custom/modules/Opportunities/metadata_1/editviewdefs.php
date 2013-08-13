<?php
$viewdefs ['Opportunities'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
        8 =>
        array (
          'file' => 'custom/include/scripts/sistema/SpNumeros.js',
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
          ),
          1 => 'account_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_closed',
          ),
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
            'name' => 'ofertapresentada_c',
            'label' => 'LBL_OFERTAPRESENTADA',
          ),
          1 => 
          array (
            'name' => 'fechavalidez_c',
            'label' => 'LBL_FECHAVALIDEZ',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'tiponegocio_c',
            'studio' => 'visible',
            'label' => 'LBL_TIPONEGOCIO',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => array(
              'name'=>'sales_stage',
              'customCode' => '<input type="text" name="sales_stage" readonly="yes" size="35" id="sales_stage" value="{$fields.sales_stage.value}"/><a href="javascript:void(0);" onclick="javascript:openEtapas();" >Seleccionar Etapa</a>',

              ),
          1 => 
          array (
            'name' => 'amount',
          ),
        ),
        5 => 
        array (
          0 => 'probability',
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'motivoperdida_c',
            'studio' => 'visible',
            'label' => 'LBL_MOTIVOPERDIDA',
          ),
          1 => 
          array (
            'name' => 'adicional_c',
            'label' => 'LBL_ADICIONAL',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'mediocontacto',
            'label' => 'LBL_MEDIOCONTACTO',
            'customCode' => '<input type="text" name="mediocontacto" readonly="yes" size="35" id="mediocontacto" value="{$fields.mediocontacto.value}"/><a href="javascript:void(0);" onclick="javascript:openMedios();" >Seleccionar Medios</a>',
          ),
          1 => 
          array (
            'name' => 'detallemedio',
            'label' => 'LBL_DETALLEEMEDIO',
            'customCode' => '<input type="text" name="detallemedio" readonly="yes" size="35" id="detallemedio" value="{$fields.detallemedio.value}"/><a href="javascript:void(0);" onclick="javascript:openDetalle();" >Seleccionar Detalle</a>',
          ),
        ),
        8 => 
        array (
          0 => 'description',
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
            'name' => 'motivo_c',
            'studio' => 'visible',
            'label' => 'LBL_MOTIVO',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          'name' => 'programas',
          'label' => 'LBL_PROGRAMAS',
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
      ),
    ),
  ),
);
?>
