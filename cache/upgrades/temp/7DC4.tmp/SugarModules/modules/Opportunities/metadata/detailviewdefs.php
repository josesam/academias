<?php
// created: 2012-03-19 20:33:57
$viewdefs = array (
  'Opportunities' => 
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
              'label' => '{$MOD.LBL_AMOUNT} ({$CURRENCY})',
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
            0 => 
            array (
              'name' => 'description',
              'nl2br' => true,
            ),
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