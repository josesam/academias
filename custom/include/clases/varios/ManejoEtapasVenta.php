<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class ManejoEtapasVenta{
    // copia de las etapas de venta
    //
    var $clonesales_stage;
    // sub etapas de ventas
    // se activan  cuando se encuentra  en calificacion
    //Especifica el tipo de negocio que esta manejando
    //InCompany , Abierto

    var $clase;


    var $sales_posiciones;
    var $sales_posiciones_array;
    /*
     *  Etapa Actual
     *  var $string
     */
    var $etapa_actual;

    
    function __construct($class='',$etapa=""){
        global $app_list_strings;
        $this->etapa_actual=$etapa;
        if($etapa=="Ganado-Cobrados")
            $etapa="Closed Won";
        else if($etapa=="Perdido")
            $etapa="Closed Lost";


        
        $this->clase=$class;
        
        if ($this->clase=="Incompany"){
            $this->clonesales_stage=$app_list_strings['sales_stage_dom'];
            $this->sales_posiciones=$app_list_strings['sales_posiciones_dom'][$etapa];
            $this->sales_posiciones_array=$app_list_strings['sales_posiciones_dom'];
        }else if($this->clase=="Abierto"){
            $this->clonesales_stage=$app_list_strings['sales_stage1_dom'];

            $this->sales_posiciones=$app_list_strings['sales_posiciones1_dom'][$etapa];
            $this->sales_posiciones_array=$app_list_strings['sales_posiciones1_dom'];
        }else{
            $this->clonesales_stage=$app_list_strings['sales_stage_dom'];
            $this->sales_posiciones=$app_list_strings['sales_posiciones_dom'][$etapa];
            $this->sales_posiciones_array=$app_list_strings['sales_posiciones_dom'];
        }
        $this->sales_posiciones=(empty($this->sales_posiciones))?  1 :(int)$this->sales_posiciones;
        if($etapa=="Closed Won"){
            $this->clonesales_stage=$app_list_strings['sales_stage_perdido_dom'];
        }
        self::prepareSalesStage();

     }

    // Prepara las etapas de ventas , no puede ir para atras




     function  prepareSalesStage(){

         if(is_array($this->sales_posiciones_array)){
             
             $temp1=$this->sales_posiciones_array;
             
             foreach($temp1 as $key =>$value){

                 if((int)$value<=(int)$this->sales_posiciones){
                    // unset($this->clonesales_stage[$key]);

                 }

             }

         }
     }
    function showEtapas(){
       
        return $this->showAll();      

    }
    //muestra todas las etapas de ventas
    function showAll(){
        $cont=0;
        $cadena.='<table width="100%" id="hor-minimalist-b">
            <thead>
                <tr>
                     <th scope="col">Nombre</th>
        	</tr>
            </thead>';
        
        if(count($this->clonesales_stage)>0){
        $cadena.="<tbody>";
            foreach($this->clonesales_stage as $key=> $values){
                   $cadena.='<tr>';
                   $cadena.='<td>';
                   $cadena.='<a href="javascript:copiarEtapa(\''.$values.'\',\''.$this->getProbability($key).'\')">'.$values.'</a>';
                   $cadena.='</td>';
                   $cadena.='</tr>';
                    $cont++;
                }
             $cadena.="</tbody>";
        }else{
            $cadena.="<tbody>";
            $cadena.='<tr>';
            $cadena.='<td>';
            $cadena.=' La etapa de venta actual '.$this->etapa_actual ." es el último proceso de la venta";
            $cadena.='</td>';
            $cadena.='</tr>';
            $cadena.="</tbody>";
        }
       
        $cadena.='</table>';
        return $cadena;

    }
    //Selecciona la probabilidad
    function getProbability($value){
        global $app_list_strings;
      
         if ($this->clase=="Incompany")
           return $app_list_strings['sales_probability_dom'][$value];
         else if($this->clase=="Abierto")
            return  $app_list_strings['sales_probability1_dom'][$value];
         else
            return  $app_list_strings['sales_probability2_dom'][$value];

    }
    /*
     * Transforma a ingles para ser guardado
     * @param <string> Nombre de la etapa seleccionada
     * @return <string> Etapa de venta lista para guardar en la base datos
     */
    function prepareSaveStage($etapa){
       
        foreach($this->clonesales_stage as $key =>$value){
            if(trim($value)==trim($etapa))
                return $key;
        }
    }
    /**
     *
     * Prepara el dato para mostrar al usuario
     * @param <string> Etapa de Venta actual en la base de datos
     * @return <string> Etapa de Venta lista para mostrar al usuario, sirve para las etapas que estan en Inglés
     */
    function prepareEditField($etapa){
        if(is_array($this->clonesales_stage)){
         foreach($this->clonesales_stage as $key =>$value){
            if(trim($key)==trim($etapa))
                return $value;
        }
        }
    }


    /*
     * Unset el resto de valores de la lista
     * @var $tiponegocio
     * @var $listaname
     * @return array
     */
     function manejoTipoNegocio($tiponegocio,$listaname){
         global $app_list_strings;
         $temp=$app_list_strings[$listaname];
         if(is_array($temp)){
             foreach($temp  as $key =>$value){

                 if($key!=$tiponegocio){
                     unset($app_list_strings[$listaname][$key]);
                 }
             }
         }
         
         return $app_list_strings[$listaname];
     }
}
?>
