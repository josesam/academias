<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class OrdenCompraDomestico{

    var $res=array();
    function __construct(){

    }
    /*
     * Crea un array que asocia la cuenta con las variables hacer exportadas
     * @ $cuenta variable de tipo Account
     * @ $res array asociativo
     */
    function ordenContexto(& $orden){
        global  $beanList, $beanFiles;
	$class_name = $beanList["bos_OrdenCompraDomestica"];
	require_once($beanFiles[$class_name]);
        $vardef = new $class_name();
        if(is_array($vardef->field_defs)){
            foreach ($vardef->field_defs as $field=>$value){
                $this->res[$field]=$orden->$field;
            }
        }
        $this->getDetalle($orden->id);
        $this->getDataUser($this->res);
        $this->res['fechadia']=date("Y-m-d");


        return $this->res;
    }
    function getDataUser($res=array()){
        global  $beanList, $beanFiles;
	$class_name = $beanList["Users"];
	require_once($beanFiles[$class_name]);
        $bean = new $class_name();
        $bean->retrieve($res['assigned_user_id']);
        $this->res['nombre']=$bean->first_name.' '.$bean->last_name;
        $this->res['telefono']=$bean->phone_work;
        $this->res['celular']=$bean->phone_mobile;
        $this->res['email']=$bean->email1;
       // return $res;
    }


    function getDetalle($id="",$amount=0){
        if(!empty($id)){
           $db = DBManagerFactory::getInstance();

	   $result = $db->query("SELECT item,
                                procesoTipo,
                                proveedor,
                                tipoProveedor,
                                cantidad,
                                codigo,
                                descripcion,
                                valorUnitario,
                                comisionAreaTecnica,
                                comisionVentas,
                                utilidad,
                                comisionTarjeta,
                                valorTotal,
                                observaciones FROM det_materiales where cotizacion_id = '$id'" );


		 while($a = $db->fetchByAssoc($result)) {
			$data[] = $a;
		}

            if(is_array($data)){
                $cont=0;
                foreach($data as $key =>$value){


                    $this->res['tabla'][$cont]['item']=$value['item'];
                    $this->res['tabla'][$cont]['procesoTipo']=$value['procesoTipo'];
                    $this->res['tabla'][$cont]['proveedor']=$value['proveedor'];

                    $this->res['tabla'][$cont]['cantidad']=number_format($value['cantidad'],2);
                    $this->res['tabla'][$cont]['codigo']=$value['codigo'];
                    $this->res['tabla'][$cont]['descripcion']=$value['descripcion'];
                    $this->res['tabla'][$cont]['valorUnitario']=$value['valorUnitario'];
                    $this->res['tabla'][$cont]['comisionAreaTecnica']=$value['comisionAreaTecnica'];
                    $this->res['tabla'][$cont]['comisionVentas']=$value['comisionVentas'];
                    $this->res['tabla'][$cont]['utilidad']=$value['utilidad'];
                    $this->res['tabla'][$cont]['comisionTarjeta']=$value['comisionTarjeta'];
                    $this->res['tabla'][$cont]['valorTotal']=number_format($value['valorTotal'],2);
                    $this->res['tabla'][$cont]['observaciones']=$value['observaciones'];




                    $cont++;
                }


                $this->res['subtotal']=number_format($amount,'2');
                $this->res['valoriva']=number_format(($amount*0.12),'2');
                $this->res['totalCotizacion']=number_format(($amount*1.12),'2');
                // self::buscarImagen($id);
            }else{
                   $cont=0;
                    $this->res['tabla'][$cont]['codigo']=$value['codigo'];
                    $this->res['tabla'][$cont]['descripction']=$value['descripction'];
                    $this->res['tabla'][$cont]['cantidad']=$value['cantidad'];

                    $this->res['tabla'][$cont]['totalIva']=number_format($value['totalIva'],2);
                    $this->res['tabla'][$cont]['precio']=number_format($value['precio'],2);
                    $this->res['tabla'][$cont]['total']=number_format($value['total'],2);
                    $this->res['tabla'][$cont]['descuento']=number_format($value['descuento'],2);
                    $this->res['tabla'][$cont]['entrega']=$value['entrega'];


            }

        }

    }
    function totalOportunidadLetras($amount){
        if(file_exists('custom/include/clases/proUtils/NumerosTexto.php')){
          //  include_once('custom/include/clases/proUtils/NumerosTexto.php');
           // $numero=new NumerosTexto();
  //$this->res['numeroletras']=$numero->convertir($amount);
$this->res['numeroletras']=$amount;
        }

    }

     function buscarImagen($id=""){

         if(!empty($id)){
           $db = DBManagerFactory::getInstance();

	   $result = $db->query("SELECT * FROM archivo where parent_id = '$id'" );


		 while($a = $db->fetchByAssoc($result)) {
			$data[] = $a;
                        break;
		}

            if(is_array($data)){
                foreach($data as $key =>$value){
                    if(file_exists('galeria/'.$id.'/'.$value['nombre_sistema']))
                    $this->res['imagen']='<img src="galeria/'.$id.'/'.$value['nombre_sistema'].'" alt="" />';
                    else
                        $this->res['imagen']='';

                }
            }else{
                    $this->res['imagen']=" ";

            }

        }
    }
    function calculaImpuestos($amount=0, $cliente){
           $db = DBManagerFactory::getInstance();

	   $result = $db->query("SELECT iva,servicios
                                FROM jf_impuestos where deleted=0
                                LIMIT 1 " );
           while($a = $db->fetchByAssoc($result)) {
			$data[] = $a;
                        break;
		}
           if(is_array($data)){
                foreach($data as $key =>$value){
                  $iva=$value['iva'];
                  $servicios=$value['servicios'];

                }
                if($cliente->servicios_c==1){
                    $impuesto['servicios']=($amount*$servicios/100);
                }else{
                    $impuesto['servicios']=0;

                }

                if($cliente->iva_c==1){
                     $impuesto['iva']=($amount*$iva/100);
                }else{
                     $impuesto['iva']=0;

                }
                $impuesto['totalopo']=$impuesto['iva']+$impuesto['servicios']+$amount;
                return $impuesto;
            }

    }
}
?>
