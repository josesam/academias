<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class FunctionHelper{


    function selected($valor_base="",$valor_combo=""){
        $return="selected";
        if($valor_base==$valor_combo)
            return $return;
        return "";
    }

    function checked($valor_base="",$valor_combo=""){
        $return="checked";
        if($valor_base==$valor_combo)
            return $return;
        return "";
    }
}
?>
