<?php
$module_name = 'ee_Profesores';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          ),
          1 => 'last_name',
        ),
        1 => 
        array (
          0 => 'phone_work',
          1 => 'phone_mobile',
        ),
        2 => 
        array (
          0 => 'phone_other',
          1 => 'phone_home',
        ),
        3 => 
        array (
          0 => 'do_not_call',
        ),
        4 => 
        array (
          0 => 'title',
          1 => 'department',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
          1 => 'assigned_user_name',
        ),
        6 => 
        array (
          0 => '',
          1 => 'description',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'estado',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
          1 => 
          array (
            'name' => 'niveltitulo2',
            'studio' => 'visible',
            'label' => 'LBL_NIVELTITULO2',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'induccion',
            'label' => 'LBL_INDUCCION',
          ),
          1 => 
          array (
            'name' => 'honorarioshora',
            'label' => 'LBL_HONORARIOSHORA',
          ),
        ),
        2 => 
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
      ),
      'lbl_email_addresses' => 
      array (
        0 => 
        array (
          0 => 'email1',
        ),
      ),
      'lbl_address_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'primary',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
          1 => 
          array (
            'name' => 'alt_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'alt',
              'copy' => 'primary',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
        ),
      ),
    ),
  ),
);
?>
