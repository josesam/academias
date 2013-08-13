<?php
if(!defined('sugarEntry'))define('sugarEntry', true);
echo "This is an entrypoint";
include 'ProfesorAlertas.php';
include 'ProgramasAlertas.php';
include 'ParticipantesAlertas.php';
$param=include 'parametros.php';

//$profesor=new ProfesorAlertas($param);
//$profesor->controlador();
//
////programas
//
//$programas=new ProgramasAlertas($param);
//$programas->controlador();


$participante=new ParticipantesAlertas($param);
$participante->controlador();


?>
