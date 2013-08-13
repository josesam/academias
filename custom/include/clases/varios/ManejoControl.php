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
    //Proyectos , productos o servicios

    var $clase;
    function __construct($class=''){
        global $app_list_strings;
        $this->clase=$class;

        if ($this->clase!=="Domestico")
            $this->clonesales_stage=$app_list_strings['medio1_dom'];
        else
            $this->clonesales_stage=$app_list_strings['medio_dom'];
     }


    function showEtapas(){

        return $this->showAll();


    }
    //muestra todas las etapas de ventas
    function showAll(){
        $cont=0;
         $cadena.='<table width="100%">';
        foreach($this->clonesales_stage as $key=> $values){
            $cadena.='<tr>';
            $cadena.='<td>';
            $cadena.='<a href="javascript:copiarMedio(\''.$values.'\')">'.$values.'</a>';
            $cadena.='</td>';
            $cadena.='</tr>';
            $cont++;
        }
        $cadena.='</table>';
        return $cadena;

    }
    //Selecciona la probabilidad
    function getProbability($value){
        global $app_list_strings;
      if ($this->clase!=="Proyectos")
                return $app_list_strings['sales_probability1_dom'][$value];
            else
            return $app_list_strings['sales_probability_dom'][$value];


    }
    /*
     * Transforma a ingles para ser guardado
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
     */
    function prepareEditField($etapa){

         foreach($this->clonesales_stage as $key =>$value){
            if(trim($key)==trim($etapa))
                return $value;
        }
    }

}
?>