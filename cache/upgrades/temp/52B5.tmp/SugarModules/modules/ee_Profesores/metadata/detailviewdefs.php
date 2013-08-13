<?php
$module_name = 'ee_Profesores';
$viewdefs [$module_name] = 
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
      'useTabs' => true,
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
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'full_name',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'phone_work',
          ),
        ),
        1 => 
        array (
          0 => 'title',
          1 => 
          array (
            'name' => 'phone_mobile',
          ),
        ),
        2 => 
        array (
          0 => 'department',
          1 => 
          array (
            'name' => 'phone_home',
            'label' => 'LBL_HOME_PHONE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'phone_other',
            'label' => 'LBL_OTHER_PHONE',
          ),
          1 => 'do_not_call',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        5 => 
        array (
          0 => 'email1',
        ),
        6 => 
        array (
          0 => 'assigned_user_name',
          1 => 'team_name',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_street',
            'label' => 'LBL_PRIMARY_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'primary',
            ),
          ),
          1 => 
          array (
            'name' => 'alt_address_street',
            'label' => 'LBL_ALT_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'alt',
            ),
          ),
        ),
        8 => 
        array (
          0 => 'description',
        ),
      ),
      'lbl_detailview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'areasconocimiento',
            'studio' => 'visible',
            'label' => 'LBL_AREASCONOCIMIENTO',
          ),
          1 => 
          array (
            'name' => 'nivelconocimiento',
            'studio' => 'visible',
            'label' => 'LBL_NIVELCONOCIMIENTO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'honorarioshora',
            'label' => 'LBL_HONORARIOSHORA',
          ),
          1 => 
          array (
            'name' => 'estado',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'induccion',
            'label' => 'LBL_INDUCCION',
          ),
          1 => 
          array (
            'name' => 'niveltitulo2',
            'studio' => 'visible',
            'label' => 'LBL_NIVELTITULO2',
          ),
        ),
      ),
    ),
  ),
);
?>
