<?php
$viewdefs ['Cases'] = 
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
            'customCode' => '<input title="{$MOD.LBL_CREATE_KB_DOCUMENT}" accessKey="M" class="button" onclick="this.form.return_module.value=\'Cases\'; this.form.return_action.value=\'DetailView\';this.form.action.value=\'EditView\';this.form.module.value=\'KBDocuments\'" type="submit" name="button" value="{$MOD.LBL_CREATE_KB_DOCUMENT}">',
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
      'lbl_case_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'case_number',
            'label' => 'LBL_CASE_NUMBER',
          ),
        ),
        1 => 
        array (
          0 => 'priority',
        ),
        2 => 
        array (
          0 => 'status',
          1 => 'account_name',
        ),
        3 => 
        array (
          0 => 'type',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_SUBJECT',
          ),
        ),
        5 => 
        array (
          0 => 'description',
        ),
        6 => 
        array (
          0 => 'resolution',
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
