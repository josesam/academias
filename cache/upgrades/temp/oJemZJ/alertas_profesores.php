<?php

if (!defined('sugarEntry'))define('sugarEntry', true);

require_once('include/entryPoint.php');
ob_start();
require_once('include/MVC/SugarApplication.php');
include 'custom/include/alertas/ProfesorAlertas.php';
$param=include 'custom/include/alertas/parametros.php';
$profesor=new ProfesorAlertas($param);
$profesor->controlador();

?>
