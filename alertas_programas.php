<?php

if (!defined('sugarEntry'))define('sugarEntry', true);

require_once('include/entryPoint.php');
ob_start();
require_once('include/MVC/SugarApplication.php');
include 'custom/include/alertas/Alertas.php';
include 'custom/include/alertas/ProgramasAlertas.php';
$param=include 'custom/include/alertas/parametros.php';
$programas=new ProgramasAlertas($param);
$programas->controlador();




?>

