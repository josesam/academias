<?php
$module_name = 'ee_EjecucionPrograma';
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
//          0 => 'EDIT',
//          1 => 'DUPLICATE',
//          2 => 'DELETE',
//          3 => 'FIND_DUPLICATES',
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
          1 => 
          array (
            'name' => 'estado',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fechainicio',
            'label' => 'LBL_FECHAINICIO',
          ),
          1 => 
          array (
            'name' => 'fechafin',
            'label' => 'LBL_FECHAFIN',
          ),
        ),
        2 => 
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
            'name' => 'detalleprograma',
            'studio' => 'visible',
            'label' => 'LBL_DETALLEPROGRAMA',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
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
