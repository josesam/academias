<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
if(file_exists('custom/include/Reportes/sp_globals.php')){
    include('custom/include/Reportes/sp_globals.php');
}

$reportes=$_REQUEST['reportes'];
if(isset($reportes)){
 switch ($reportes){
       case 1:
            if (file_exists(SP_PATHREPORTES.'ReporteEstadoCuentaCliente/ReporteEstadoCuentaCliente.php')){
                include(SP_PATHREPORTES.'ReporteEstadoCuentaCliente/ReporteEstadoCuentaCliente.php');
            }
            if(class_exists("ReporteEstadoCuentaCliente")){
                $form=$_REQUEST;
                $manejador=new ReporteEstadoCuentaCliente($_REQUEST);
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
            if (file_exists(SP_PATHREPORTES.'ReporteVenta/ReporteVenta.php')){
                include(SP_PATHREPORTES.'ReporteVenta/ReporteVenta.php');
            }
            if(class_exists("ReporteVenta")){
                $form=$_REQUEST;
                $manejador=new ReporteVenta($_REQUEST);
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

       /*-------------------------------------------------------------------------------------------------*/
       case 3:
            if (file_exists(SP_PATHREPORTES.'ReporteCarteraProyecto/ReporteCarteraProyecto.php')){
                include(SP_PATHREPORTES.'ReporteCarteraProyecto/ReporteCarteraProyecto.php');
            }
            if(class_exists("ReporteCarteraProyecto")){
                $form=$_REQUEST;
                $manejador=new ReporteCarteraProyecto($_REQUEST);
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

           /*-------------------------------------------------------------------------------------------------*/
       case 4:
            if (file_exists(SP_PATHREPORTES.'ReporteCorrienteVencida/ReporteCorrienteVencida.php')){
                include(SP_PATHREPORTES.'ReporteCorrienteVencida/ReporteCorrienteVencida.php');
            }
            if(class_exists("ReporteCorrienteVencida")){
                $form=$_REQUEST;
                $manejador=new ReporteCorrienteVencida($_REQUEST);
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

           /*-------------------------------------------------------------------------------------------------*/
       case 5:
            if (file_exists(SP_PATHREPORTES.'ReporteLegalAcumulado/ReporteLegalAcumulado.php')){
                include(SP_PATHREPORTES.'ReporteLegalAcumulado/ReporteLegalAcumulado.php');
            }
            if(class_exists("ReporteLegalAcumulado")){
                $form=$_REQUEST;
                $manejador=new ReporteLegalAcumulado($_REQUEST);
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


           /*-------------------------------------------------------------------------------------------------*/
      case 6:
            if (file_exists(SP_PATHREPORTES.'ReporteLegalProyecto/ReporteLegalProyecto.php')){
                include(SP_PATHREPORTES.'ReporteLegalProyecto/ReporteLegalProyecto.php');
            }
            if(class_exists("ReporteLegalProyecto")){
                $form=$_REQUEST;
                $manejador=new ReporteLegalProyecto($_REQUEST);
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


           /*-------------------------------------------------------------------------------------------------*/
       case 7:
            if (file_exists(SP_PATHREPORTES.'ReporteCredito/ReporteCredito.php')){
                include(SP_PATHREPORTES.'ReporteCredito/ReporteCredito.php');
            }
            if(class_exists("ReporteCredito")){
                $form=$_REQUEST;
                $manejador=new ReporteCredito($_REQUEST);
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


           /*-------------------------------------------------------------------------------------------------*/
           case 8:
            if (file_exists(SP_PATHREPORTES.'ReporteAdmVenta/ReporteAdmVenta.php')){
                include(SP_PATHREPORTES.'ReporteAdmVenta/ReporteAdmVenta.php');
            }
            if(class_exists("ReporteAdmVenta")){
                $form=$_REQUEST;
                $manejador=new ReporteAdmVenta($_REQUEST);
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

           /*-------------------------------------------------------------------------------------------------*/








   }

}
?>
