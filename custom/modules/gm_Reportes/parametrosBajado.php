<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
if(file_exists('custom/include/Reportes/sp_globals.php')){
    include_once('custom/include/Reportes/sp_globals.php');
}

$reportes=$_REQUEST['reportes'];

if(isset($reportes)){
 switch ($reportes){

      case 1:
            if(file_exists(SP_PATHREPORTES.'ReporteRoi/ReporteRoi.php')){
                include_once(SP_PATHREPORTES.'ReporteRoi/ReporteRoi.php');
            }
            if(class_exists("ReporteRoi")){
                $form=$_REQUEST;
                $manejador=new ReporteRoi($_REQUEST);
                $verreporte=$_REQUEST['verreporte'];
                $exportarExcel=$_REQUEST['descargar'];
                     if(isset($verreporte)){
                          $manejador->mostrarData();
                          $manejador->display();
                     }else if (isset($exportarExcel)){
                          $manejador->exportexcel();
                     }else{
                          $manejador->displayParametros();
                     }
            }
         break;

         case 2:
            if(file_exists(SP_PATHREPORTES.'ReporteParticipantePrograma/ReporteParticipantePrograma.php')){
                include_once(SP_PATHREPORTES.'ReporteParticipantePrograma/ReporteParticipantePrograma.php');
            }
            if(class_exists("ReporteParticipantePrograma")){
                $form=$_REQUEST;
                $manejador=new ReporteParticipantePrograma($_REQUEST);
                $verreporte=$_REQUEST['verreporte'];
                $exportarExcel=$_REQUEST['descargar'];
                     if(isset($verreporte)){
                          $manejador->mostrarData();
                          $manejador->display();
                     }else if (isset($exportarExcel)){
                          $manejador->exportexcel();
                     }else{
                          $manejador->displayParametros();
                     }
            }
         break;



        case 3:
            if(file_exists(SP_PATHREPORTES.'ReporteEfectividadNegocio/ReporteEfectividadNegocio.php')){
                include_once(SP_PATHREPORTES.'ReporteEfectividadNegocio/ReporteEfectividadNegocio.php');
            }
            if(class_exists("ReporteEfectividadNegocio")){
                $form=$_REQUEST;
                $manejador=new ReporteEfectividadNegocio($_REQUEST);
                $verreporte=$_REQUEST['verreporte'];
                $exportarExcel=$_REQUEST['descargar'];
                     if(isset($verreporte)){
                          $manejador->mostrarData();
                          $manejador->display();
                     }else if (isset($exportarExcel)){
                          $manejador->exportexcel();
                     }else{
                          $manejador->displayParametros();
                     }
            }
         break;
       case 4:
            if(file_exists(SP_PATHREPORTES.'ReporteActividadComercial/ReporteActividadComercial.php')){
                include_once(SP_PATHREPORTES.'ReporteActividadComercial/ReporteActividadComercial.php');
            }
            if(class_exists("ReporteActividadComercial")){
                $form=$_REQUEST;
                $manejador=new ReporteActividadComercial($_REQUEST);
                $verreporte=$_REQUEST['verreporte'];
                $exportarExcel=$_REQUEST['descargar'];
                     if(isset($verreporte)){
                          $manejador->mostrarData();
                          $manejador->display();
                     }else if (isset($exportarExcel)){
                          $manejador->exportexcel();
                     }else{
                          $manejador->displayParametros();
                     }
            }
         break;

        case 5:
            if(file_exists(SP_PATHREPORTES.'ReporteInscritosPagados/ReporteInscritosPagados.php')){
                include_once(SP_PATHREPORTES.'ReporteInscritosPagados/ReporteInscritosPagados.php');
            }
            if(class_exists("ReporteInscritosPagados")){
                $form=$_REQUEST;
                $manejador=new ReporteInscritosPagados($_REQUEST);
                $verreporte=$_REQUEST['verreporte'];
                $exportarExcel=$_REQUEST['descargar'];
                     if(isset($verreporte)){
                          $manejador->mostrarData();
                          $manejador->display();
                     }else if (isset($exportarExcel)){
                          $manejador->exportexcel();
                     }else{
                          $manejador->displayParametros();
                     }
            }
         break;

            case 6:
            if(file_exists(SP_PATHREPORTES.'ReporteEstadisticoIngresoTaller/ReporteEstadisticoIngresoTaller.php')){
                include_once(SP_PATHREPORTES.'ReporteEstadisticoIngresoTaller/ReporteEstadisticoIngresoTaller.php');
            }
            if(class_exists("ReporteEstadisticoIngresoTaller")){
                $form=$_REQUEST;
                $manejador=new ReporteEstadisticoIngresoTaller($_REQUEST);
                $verreporte=$_REQUEST['verreporte'];
                $exportarExcel=$_REQUEST['descargar'];
                     if(isset($verreporte)){
                          $manejador->mostrarData();
                          $manejador->display();
                     }else if (isset($exportarExcel)){
                          $manejador->exportexcel();
                     }else{
                          $manejador->displayParametros();
                     }
            }
         break;
             case 8:
            if(file_exists(SP_PATHREPORTES.'ReporteEstadisticoKilometraje/ReporteEstadisticoKilometraje.php')){
                include_once(SP_PATHREPORTES.'ReporteEstadisticoKilometraje/ReporteEstadisticoKilometraje.php');
            }
            if(class_exists("ReporteEstadisticoKilometraje")){
                $form=$_REQUEST;
                $manejador=new ReporteEstadisticoKilometraje($_REQUEST);
                $verreporte=$_REQUEST['verreporte'];
                $exportarExcel=$_REQUEST['descargar'];
                     if(isset($verreporte)){
                          $manejador->mostrarData();
                          $manejador->display();
                     }else if (isset($exportarExcel)){
                          $manejador->exportexcel();
                     }else{
                          $manejador->displayParametros();
                     }
            }
         break;
       case 10:
            if(file_exists(SP_PATHREPORTES.'ReporteEstadisticoTipoServicioModelo/ReporteEstadisticoTipoServicioModelo.php')){
                include_once(SP_PATHREPORTES.'ReporteEstadisticoTipoServicioModelo/ReporteEstadisticoTipoServicioModelo.php');
            }
            if(class_exists("ReporteEstadisticoTipoServicioModelo")){
                $form=$_REQUEST;
                $manejador=new ReporteEstadisticoTipoServicioModelo($_REQUEST);
                $verreporte=$_REQUEST['verreporte'];
                $exportarExcel=$_REQUEST['descargar'];
                     if(isset($verreporte)){
                          $manejador->mostrarData();
                          $manejador->display();
                     }else if (isset($exportarExcel)){
                          $manejador->exportexcel();
                     }else{
                          $manejador->displayParametros();
                     }
            }
         break;
         case 11:
            if(file_exists(SP_PATHREPORTES.'ReporteGestionConcesionario/ReporteGestionConcesionario.php')){
                include_once(SP_PATHREPORTES.'ReporteGestionConcesionario/ReporteGestionConcesionario.php');
            }
            if(class_exists("ReporteGestionConcesionario")){
                $form=$_REQUEST;
                $manejador=new ReporteGestionConcesionario($_REQUEST);
                $verreporte=$_REQUEST['verreporte'];
                $exportarExcel=$_REQUEST['descargar'];
                     if(isset($verreporte)){
                          $manejador->mostrarData();
                          $manejador->display();
                     }else if (isset($exportarExcel)){
                          $manejador->exportexcel();
                     }else{
                          $manejador->displayParametros();
                     }
            }
         break;
      case 12:
            if(file_exists(SP_PATHREPORTES.'ReporteGestionNoContactados/ReporteGestionNoContactados.php')){
                include_once(SP_PATHREPORTES.'ReporteGestionNoContactados/ReporteGestionNoContactados.php');
            }
            if(class_exists("ReporteGestionNoContactados")){
                $form=$_REQUEST;
                $manejador=new ReporteGestionNoContactados($_REQUEST);
                $verreporte=$_REQUEST['verreporte'];
                $exportarExcel=$_REQUEST['descargar'];
                     if(isset($verreporte)){
                          $manejador->mostrarData();
                          $manejador->display();
                     }else if (isset($exportarExcel)){
                          $manejador->exportexcel();
                     }else{
                          $manejador->displayParametros();
                     }
            }
         break;
     case 13:
            if(file_exists(SP_PATHREPORTES.'ReporteCruze/ReporteCruze.php')){
                include_once(SP_PATHREPORTES.'ReporteCruze/ReporteCruze.php');
            }
            if(class_exists("ReporteCruze")){
                $form=$_REQUEST;
                $manejador=new ReporteCruze($_REQUEST);
                $verreporte=$_REQUEST['verreporte'];
                $exportarExcel=$_REQUEST['descargar'];
                     if(isset($verreporte)){
                          $manejador->mostrarData();
                          $manejador->display();
                     }else if (isset($exportarExcel)){
                          $manejador->exportexcel();
                     }else{
                          $manejador->displayParametros();
                     }
            }
         break;

   }

}
?>
