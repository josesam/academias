<?php
/* 
 * Maneja los links para los subpannel con Jquery
 * 
 */
class SubPannel{
    public $panneldef;
    public $mod;
    public function  __construct($data=array(),$language=array()) {
        $this->panneldef=$data;
        $this->mod=$language;
    }

    /*
     * Genera los link , en menu horizonatales de los paneles
     */
    public function generaLinks(){
        $cadena='<div id="menuh">';
        $cadena.="<ul>";
        $cont=0;
        foreach ($this->panneldef as $key => $value){
            $cadena.='<li>';
            $cadena.='<a href="#menuh" id="panel_'.$key.'" onclick="javascript:mostrar_'.$key.'()">';
            $cadena.= $this->mod[$value['title_key']];
            $cadena.='</a>';
            $cadena.='</li>';
            $cont++;             
        }
        $cadena.='</ul>';
        $cadena.='</div><div></div>';
        echo $cadena.'';

    }
    /*
     * Genera el javascript para mostrar y ocultar los paneles
     */
    function generaScript(){
        $script.='<script>';                
        $temp=$this->panneldef;
        foreach ($this->panneldef as $key => $value){
            $script.=" mostrar_".$key."=function(){";
            $script.=' jQuery("#whole_subpanel_'.$key.'").show();';
            $script.=' jQuery("#panel_'.$key.'").removeClass("unselected");';
            $script.=' jQuery("#panel_'.$key.'").addClass("selected");';            
            foreach($temp as $key1 =>$val){
                if($key1!=$key){
                    $script.=' jQuery("#panel_'.$key1.'").removeClass("selected");';
                    $script.=' jQuery("#panel_'.$key1.'").addClass("unselected");';
                    $script.=' jQuery("#whole_subpanel_'.$key1.'").hide();';
                }
            
            }
            $script.=" };";        
        }        
        $script.='</script>';
        echo $script;
    }
    /*
     * Dispara el evento Onload del browser, para mostrar y ocultar
     */
    function _triggerOnLoad(){
        $script.='<script>';        
        $temp=$this->panneldef;
        foreach ($this->panneldef as $key => $value){
            $script.=" jQuery(document).ready(function() {";
            $script.=' jQuery("#whole_subpanel_'.$key.'").show();';
            $script.=' jQuery("#panel_'.$key.'").removeClass("unselected");';
            $script.=' jQuery("#panel_'.$key.'").addClass("selected");';           
            foreach($temp as $key1 =>$val){
                if($key1!=$key){
                     $script.=' jQuery("#panel_'.$key1.'").removeClass("selected");';
                    $script.=' jQuery("#panel_'.$key1.'").addClass("unselected");';
                    $script.=' jQuery("#whole_subpanel_'.$key1.'").hide();';
                }
            }            
            $script.="});";
            break;
        }
        $script.='</script>';
        echo $script;
    }
    
}
?>
