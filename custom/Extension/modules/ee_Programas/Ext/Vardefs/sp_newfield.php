    <?php
/* 
 * 
 */
$dictionary['ee_Programas']['fields']['programas'] = array (
'name' => 'programas',
'vname' => 'LBL_PROGRAMAS',
'type' => 'varchar',
'function' =>
    array (
        'name' => 'getProgramasWidget',
        'returns' => 'html',
        'include' => 'include/SugarProgramas/SugarProgramas.php',
      ),
'source' => 'non-db',
'group' => 'programas',
'merge_filter' => 'enabled',
);

?>
