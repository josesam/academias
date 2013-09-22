<?php

/*
 * Clase para ayudas de ciertas funcionalidades
 * que ayuda al CRM a verificar controles
 * @author josesam
 * 
 * 
 */
class SugarCRMHelpers {
    
    /*
     * Remueve de un array  valores que nos son perimitos
     * para el manejo de el usuarios
     * @params <array> Nombre del mod_string
     * @params <array> Valores a excluir
     * @return <void> 
     */
    public static function exclude($mod='',$exclude=array()){
        global $app_list_strings;
        $temp=$app_list_strings[$mod];
        if(is_array($temp)){
            foreach($temp as $key => $val){
                if (in_array($key,$exclude)){
                    unset($app_list_strings[$mod][$key]);
                }
            }
        }
    }
}




?>
