<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Cotizacion{
    var $oportunidad=array();
    var $tipoinmueble=array();
    var $cabecera=array();
    var $etapa=array();
    var $proyecto=array();
    function __construct(){


    }
    /*
     * oportunidad con casa,depar,.. en si
     * casa,depar... con  inmueble
     * inmueble con etapa
     * etapa con proyecto
     */
    function cargarData($idoportunidad,$tipo,$id){
          global $beanList,$beanFiles,$current_language;
          include_once 'custom/include/proUtils/documentos/data/Cliente.php';
          include_once 'custom/include/proUtils/documentos/data/Inmuebles.php';
          include_once 'custom/include/proUtils/documentos/data/Oportunidad.php';
          include_once 'custom/include/proUtils/documentos/data/Proyecto.php';
          include_once 'custom/include/proUtils/documentos/data/Data.php';
          include_once 'custom/include/proUtils/documentos/data/Etapas.php';
          include_once 'custom/include/proUtils/documentos/data/Promo.php';

        $class_name = $beanList["Opportunities"];
	require_once($beanFiles[$class_name]);
        $oportunidad = new $class_name();
        $oportunidad->retrieve($idoportunidad);
        if($oportunidad->proyectomandato!=='MANDATO'){
         switch (strtolower($tipo)){
            case 'casa':
                include_once 'custom/include/proUtils/documentos/data/Casa.php';
                     $related_module="casa_Casa";
                     $detalles=new Casa();
                break;
            case 'localcomercial':
                include_once 'custom/include/proUtils/documentos/data/Local.php';
                     $related_module="Local_LocalComercial";
                     $detalles=new Local();
                    break;
            case 'departamento':
                include_once 'custom/include/proUtils/documentos/data/Departamento.php';
                      $related_module="Depar_Departamentos";
                      $detalles=new Departamento();
                break;
            case 'oficina':
                include_once 'custom/include/proUtils/documentos/data/Oficina.php';
                     $related_module="Ofici_Oficina";
                      $detalles=new Oficina();
                break;
            case 'galpon':
                include_once 'custom/include/proUtils/documentos/data/Galpon.php';
                 $related_module="Galpo_Galpon";
                  $detalles=new Galpon();
                break;
            case 'consultorio':
                include_once 'custom/include/proUtils/documentos/data/Consultorio.php';
                 $related_module="Consu_Consultorio";
                  $detalles=new Consultorio();
                break;
             case 'terreno':
                include_once 'custom/include/proUtils/documentos/data/Terreno.php';
                 $related_module="Terre_Terreno";
                 $detalles=new Terreno();
                break;
            case 'quinta':
                include_once 'custom/include/proUtils/documentos/data/Quinta.php';
                $detalles=new Quinta();
                 $related_module="Quint_Quinta";
                break;
            case 'quinta':
                include_once 'custom/include/proUtils/documentos/data/Quinta.php';
                $detalles=new Quinta();
                 $related_module="Quint_Quinta";
                break;
            case 'bodega':
                include_once 'custom/include/proUtils/documentos/data/Bodega.php';
                $detalles=new Bodega();
                 $related_module="pro_Bodegas";
                break;
            case 'accion':
                include_once 'custom/include/proUtils/documentos/data/Accion.php';
                $detalles=new Accion();
                 $related_module="js_Acciones";
                break;
           case 'estacionamiento':
                include_once 'custom/include/proUtils/documentos/data/Estacionamiento.php';
                $detalles=new Estacionamiento();
                 $related_module="pro_Estacionamientos";
                break;
           case 'titulo':
                include_once 'custom/include/proUtils/documentos/data/Titulo.php';
                $detalles=new Titulo();
                $related_module="js_Titulos";
                break;

            case 'mandato':
                break;

        }

        }  else {
    include_once 'custom/include/proUtils/documentos/data/Mandato.php';
                $detalles=new Mandato();
                $related_module="pro_ConsignacionMandato";


                
        }

        // Carga datos del inmueble
        if(strtolower($oportunidad->proyectomandato)!=='mandato'){
        $modulo = $beanList[$related_module];
         require_once($beanFiles[$modulo]);
        $bean = new $modulo;
        $bean->retrieve(strtolower($id));
        $datos['detalles']=$detalles->crearContexto(& $bean);


         $data=new Data();
        // obtiene datos del inmueble (la cabecera)
        $res=$data->get_relationships($related_module, $id, "pro_Inmuebles", "", "0");
        $inmueble=new Inmuebles();
        $datos['inmuebles']=$inmueble->crearContexto(& $res['ids'][0]['data']);

        // OBTIENE LOS DATOS DE LA ETAPA para obtener el id
        $res=$data->get_relationships("pro_Inmuebles", $datos['inmuebles']['id'], "pro_Etapas", "", "0");
        $etapas=new Etapas();
        $datos['etapas']=$etapas->crearContexto(& $res['ids'][0]['data']);
        // OBTIENE LOS DATOS DEL PROYECTO
        $res=$data->get_relationships("pro_Etapas", $datos['etapas']['id'], "pro_ProyectosProInmobiliara", "", "0");
        $proyectos=new Proyecto();
        $datos['proyectos']=$proyectos->crearContexto(& $res['ids'][0]['data']);
        $datos['proyectos']['nombre1']=$datos['proyectos']['name'];
        //OBTENER LOS DATOS DEL PROMOTOR
        $res=$data->get_relationships("pro_ProyectosProInmobiliara", $datos['proyectos']['id'], "pro_Promotor", "", "0");
        $promotor = new Promo();
        $datos['promotor']=$promotor->promotorContexto(& $res['ids'][0]['data']);
        // DATOS DE LA OPORTUNIDAD
       
        $manejaOportunidad=new Oportunidad();
        $datos['oportunidad']=$manejaOportunidad->oportunidadContexto(& $oportunidad);
        }else{
            // tratar mandato
        $modulo = $beanList[$related_module];
        require_once($beanFiles[$modulo]);
        $bean = new $modulo;
        $bean->retrieve(strtolower($id));
        $datos['detalles']=$detalles->crearContexto(& $bean);
        $datos['proyectos']['comunal']=$detalles->generarAspectosComunales($datos['detalles']);
        $datos['promotor']['name']=$bean->nombrepropietario;
        $datos['promotor']['cedulapromotor']=$bean->ncedula;
        $datos['proyectos']['name']=$bean->direccion;
        $datos['proyectos']['nombre1']=$bean->direccioncliente_c;
        $datos['proyectos']['label']="Consignador";
        $datos['proyectos']['consignador']=$bean->referidopor;
        $datos['etapas']['name']=$bean->numinmueble_c;


        $class_name = $beanList["Opportunities"];
	require_once($beanFiles[$class_name]);
        $oportunidad = new $class_name();
        $oportunidad->retrieve($idoportunidad);

        $manejaOportunidad=new Oportunidad();
        $datos['oportunidad']=$manejaOportunidad->oportunidadContexto(& $oportunidad);

        }
        return $datos;
    }

    

}
?>
