<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
define("SP_PATHEXCEL", "custom/include/Reportes/classes/");
define("SP_OBJ2007", SP_PATH."PHPExcel/Writer/Excel2007.php");
define("SP_PATHREPORTES", "custom/include/Reportes/container/");
define("LOGOIMAGE", "custom/include/Reportes/logo.png");
define("LOGONAME", "PROINMOBILIARIA");
define("LOGODESCRIPTION", "LOGO PROINMOBILIARIA");
define("LOGOHEIGHT",40);
define("LOGOWIDTH",40);
define("COLORALLBORDERS","FF000000");
define("ROWHEIGHT",30);
define("FONTHEIGHT",15);


if(file_exists('custom/include/Reportes/SP_Reportes.php')){
    include('custom/include/Reportes/SP_Reportes.php');
}
?>
