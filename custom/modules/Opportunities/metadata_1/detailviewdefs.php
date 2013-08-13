<?php
$viewdefs ['Opportunities'] = 
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
            'customCode' => '<a id="imprimir" name="imprimir" href="javascript:exportar(\'Perfil\',\'Opportunities\',\'Accounts\' )";>Imprimir Perfil</a>',
          ),
          5 =>
          array (
            'customCode' => '<a id="imprimir" name="imprimir" href="javascript:exportar(\'carta\',\'Opportunities\',\'Accounts\' )";>Imprimir Carta</a>',
          ),
          6 =>
          array (
            'customCode' => '<a id="imprimir" name="imprimir" href="javascript:exportar(\'inscripcion\',\'Opportunities\',\'Accounts\' )";>Imprimir Inscripcion</a>',
          ),
        ),
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
      'useTabs' => true,
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'account_name',
        ),
        1 => 
        array (
          0 => 'date_closed',
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
          0 => 'sales_stage',
          1 => 
          array (
            'name' => 'amount',
            'label' => '{$MOD.LBL_AMOUNT} ({$CURRENCY})',
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
          ),
          1 => 
          array (
            'name' => 'detallemedio',
            'label' => 'LBL_DETALLEEMEDIO',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'nl2br' => true,
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
);
?>
