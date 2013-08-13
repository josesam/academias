<?php

if (!defined('sugarEntry'))define('sugarEntry', true);
require_once('include/entryPoint.php');
ob_start();
require_once('include/MVC/SugarApplication.php');
include 'custom/include/alertas/CobranzaAlertas.php';
$param=include 'custom/include/alertas/parametros.php';
$cobranza=new CobranzaAlertas($param);
$cobranza->controlador();

?>
