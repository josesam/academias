<?php
$viewdefs ['Contacts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
          1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
          2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
          3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
          4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
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
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          ),
          1 => 
          array (
            'name' => 'last_name',
          ),
        ),
        1 => 
        array (
          0 => 'picture',
          1 => 
          array (
            'name' => 'genero_c',
            'studio' => 'visible',
            'label' => 'LBL_GENERO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'estadocivil_c',
            'studio' => 'visible',
            'label' => 'LBL_ESTADOCIVIL',
          ),
          1 => 
          array (
            'name' => 'fechanacimiento_c',
            'label' => 'LBL_FECHANACIMIENTO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'phone_work',
            'comment' => 'Work phone number of the contact',
            'label' => 'LBL_OFFICE_PHONE',
          ),
          1 => 
          array (
            'name' => 'phone_mobile',
            'comment' => 'Mobile phone number of the contact',
            'label' => 'LBL_MOBILE_PHONE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'phone_other',
            'comment' => 'Other phone number for the contact',
            'label' => 'LBL_OTHER_PHONE',
          ),
          1 => '',
        ),
        5 => 
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
        6 => 
        array (
          0 => 
          array (
            'name' => 'account_name',
            'displayParams' => 
            array (
              'key' => 'billing',
              'copy' => 'primary',
              'billingKey' => 'primary',
              'additionalFields' => 
              array (
                'phone_office' => 'phone_work',
              ),
            ),
          ),
        ),
        7 => 
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
        8 => 
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
        9 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL_ADDRESS',
          ),
          1 => '',
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => '',
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
          1 => 'team_name',
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
          ),
          1 => 
          array (
            'name' => 'detalle_c',
            'label' => 'LBL_DETALLE',
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
    ),
  ),
);
?>
