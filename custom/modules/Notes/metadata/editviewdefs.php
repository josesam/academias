<?php
$viewdefs ['Notes'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
        'headerTpl' => 'modules/Notes/tpls/EditViewHeader.tpl',
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
      'javascript' => '{sugar_getscript file="include/javascript/dashlets.js"}
<script>
function deleteAttachmentCallBack(text)
	{literal} { {/literal}
	if(text == \'true\') {literal} { {/literal}
		document.getElementById(\'new_attachment\').style.display = \'\';
		ajaxStatus.hideStatus();
		document.getElementById(\'old_attachment\').innerHTML = \'\';
	{literal} } {/literal} else {literal} { {/literal}
		document.getElementById(\'new_attachment\').style.display = \'none\';
		ajaxStatus.flashStatus(SUGAR.language.get(\'Notes\', \'ERR_REMOVING_ATTACHMENT\'), 2000);
	{literal} } {/literal}
{literal} } {/literal}
</script>
<script>toggle_portal_flag(); function toggle_portal_flag()  {literal} { {/literal} {$TOGGLE_JS} {literal} } {/literal} </script>',
    ),
    'panels' => 
    array (
      'lbl_note_information' => 
      array (
        0 => 
        array (
          0 => 'contact_name',
          1 => 'parent_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
              'size' => 60,
            ),
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 'filename',
          1 => 
          array (
            'name' => 'portal_flag',
            'displayParams' => 
            array (
              'required' => false,
            ),
            'label' => 'LBL_PORTAL_FLAG',
            'hideIf' => 'empty($PORTAL_ENABLED)',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_NOTE_STATUS',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => '',
          1 => '',
        ),
        5 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'ee_profesores_notes_name',
            'label' => 'LBL_EE_PROFESORES_NOTES_FROM_EE_PROFESORES_TITLE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'ee_ejecucionprograma_activities_notes_name',
          ),
          1 => 
          array (
            'name' => 'ee_ejecucionprograma_notes_name',
            'label' => 'LBL_EE_EJECUCIONPROGRAMA_NOTES_FROM_EE_EJECUCIONPROGRAMA_TITLE',
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
