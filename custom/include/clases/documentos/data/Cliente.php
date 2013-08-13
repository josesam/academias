<?php
/* 
 * Prepara el array asociativo que va hacer despliegado en la plantillas
 * 
 */
class Cliente{
    var $res=array();
    function __construct(){

    }
    /*
     * Crea un array que asocia la cuenta con las variables hacer exportadas
     * @ $cuenta variable de tipo Account
     * @ $res array asociativo
     */
    function clienteContexto(& $cuenta){
        global  $beanList, $beanFiles;
        
        
	$class_name = $beanList["Accounts"];
	require_once($beanFiles[$class_name]);
        $vardef = new $class_name();
        foreach ($vardef->field_defs as $field=>$value){
            $this->res[$field]=$cuenta->$field;
        }
      
        return $this->res;
    }
    
}
?>
