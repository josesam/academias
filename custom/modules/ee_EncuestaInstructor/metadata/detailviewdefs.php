<?php
$module_name = 'ee_EncuestaInstructor';
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
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'instructor',
            'label' => 'LBL_INSTRUCTOR',
          ),
          1 => 
          array (
            'name' => 'modulo',
            'label' => 'LBL_MODULO',
          ),
        ),
        2 => 
        array (
          0 =>'grupo', 
          1=>''
        ),   
        3 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'ee_ejecucionprograma_ee_encuestainstructor_name',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'encuestas2',
            'label' => 'LBL_ENCUESTAS2',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 'team_name',
          1 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
?>
