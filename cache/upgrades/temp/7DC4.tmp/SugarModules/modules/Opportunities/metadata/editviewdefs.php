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
            'name' => 'prioridad_c',
            'studio' => 'visible',
            'label' => 'LBL_PRIORIDAD',
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
          0 => 'sales_stage',
          1 => 
          array (
            'name' => 'amount',
          ),
        ),
        5 => 
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
        6 => 
        array (
          0 => 'probability',
          1 => 'campaign_name',
        ),
        7 => 
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
