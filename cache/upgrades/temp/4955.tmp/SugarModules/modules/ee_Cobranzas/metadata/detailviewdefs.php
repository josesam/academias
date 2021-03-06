<?php
$module_name = 'ee_Cobranzas';
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
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fechaprevistapago',
            'label' => 'LBL_FECHAPREVISTAPAGO',
          ),
          1 => 
          array (
            'name' => 'montopago',
            'label' => 'LBL_MONTOPAGO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'formapago',
            'studio' => 'visible',
            'label' => 'LBL_FORMAPAGO',
          ),
          1 => 
          array (
            'name' => 'personapago',
            'label' => 'LBL_PERSONAPAGO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'fecharealpago',
            'label' => 'LBL_FECHAREALPAGO',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 'team_name',
          1 => '',
        ),
        5 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
