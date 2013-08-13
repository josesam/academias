<?php
if(file_exists('custom/include/Reportes/sp_globals.php')){
    include('custom/include/Reportes/sp_globals.php');
}
require_once('include/MVC/View/SugarView.php');
require_once("include/JSON.php");

class gm_ReportesViewGrafico extends SugarView {

 	function gm_ReportesViewGrafico(){
 		parent::SugarView();
 	}

 	function process() {
		$this->display();
 	}

 	function display(){

      

           $nombre_reporte=$_REQUEST['reporte'] ;
           $path=SP_PATHREPORTES.$nombre_reporte.'/'.$nombre_reporte.'php';
           $form=$_REQUEST;
           if (file_exists(SP_PATHREPORTES.$nombre_reporte.'/'.$nombre_reporte.'.php')){
                include(SP_PATHREPORTES.$nombre_reporte.'/'.$nombre_reporte.'.php');
            }
            if(class_exists($nombre_reporte)){           
                $manejador=new $nombre_reporte($_REQUEST);
                $datos=$manejador->generarReporte();
               
//                $verreporte=$_REQUEST['verreporte'];
//                $exportarExcel=$_REQUEST['descargar'];
//                        if(isset($verreporte)){
//                          $manejador->mostrarData();
//                             $manejador->display();
//
//                        }else if (isset($exportarExcel)){
//                            $manejador->exportexcel();
//                        }else{
//                            $manejador->displayParametros();
//
//                        }
                echo $datos;
            }
//	   if(file_exists("custom/include/clases/varios/CargarExcel.php")){
//               include_once("custom/include/clases/varios/CargarExcel.php");
//               $file=$_FILES['archivo'];
//               $idOportunidad=$_REQUEST['idOportunidad'];
//               $cargar=new CargadorCatalogo($idOportunidad);
//               $cargar->procesarArchivo($file);
//               echo $cargar->muestraDatosCreados();
//
//           }else
//               echo "Se produjo un error.!! Comuniquese con el proveedor";
 	}
}
?>