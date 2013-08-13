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
            if(file_exists(SP_PATHREPORTES.'ReporteSeguimientoIncompany/ReporteSeguimientoIncompany.php')){
                include_once(SP_PATHREPORTES.'ReporteSeguimientoIncompany/ReporteSeguimientoIncompany.php');
            }
            if(class_exists("ReporteSeguimientoIncompany")){
                $form=$_REQUEST;
                $manejador=new ReporteSeguimientoIncompany($_REQUEST);
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
         
         case 7:
            if(file_exists(SP_PATHREPORTES.'ReporteParticipanteProgramaInCompany/ReporteParticipanteProgramaInCompany.php')){
                include_once(SP_PATHREPORTES.'ReporteParticipanteProgramaInCompany/ReporteParticipanteProgramaInCompany.php');
            }
            if(class_exists("ReporteParticipanteProgramaInCompany")){
                $form=$_REQUEST;
                $manejador=new ReporteParticipanteProgramaInCompany($_REQUEST);
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
            if(file_exists(SP_PATHREPORTES.'ReporteClientesRecurrentes/ReporteClientesRecurrentes.php')){
                include_once(SP_PATHREPORTES.'ReporteClientesRecurrentes/ReporteClientesRecurrentes.php');
            }
            if(class_exists("ReporteClientesRecurrentes")){
                $form=$_REQUEST;
                $manejador=new ReporteClientesRecurrentes($_REQUEST);
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
         case 9:
            if(file_exists(SP_PATHREPORTES.'ReporteParticipantesRecurrentes/ReporteParticipantesRecurrentes.php')){
                include_once(SP_PATHREPORTES.'ReporteParticipantesRecurrentes/ReporteParticipantesRecurrentes.php');
            }
            if(class_exists("ReporteParticipantesRecurrentes")){
                $form=$_REQUEST;
                $manejador=new ReporteParticipantesRecurrentes($_REQUEST);
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
            if(file_exists(SP_PATHREPORTES.'ReporteProgramasInteres/ReporteProgramasInteres.php')){
                include_once(SP_PATHREPORTES.'ReporteProgramasInteres/ReporteProgramasInteres.php');
            }
            if(class_exists("ReporteProgramasInteres")){
                $form=$_REQUEST;
                $manejador=new ReporteProgramasInteres($_REQUEST);
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
            if(file_exists(SP_PATHREPORTES.'ReporteRecurrenciaProfesores/ReporteRecurrenciaProfesores.php')){
                include_once(SP_PATHREPORTES.'ReporteRecurrenciaProfesores/ReporteRecurrenciaProfesores.php');
            }
            if(class_exists("ReporteRecurrenciaProfesores")){
                $form=$_REQUEST;
                $manejador=new ReporteRecurrenciaProfesores($_REQUEST);
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
