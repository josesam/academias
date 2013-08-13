<?php
/* 
 * Crea cobranza a partir de la oportunidad
 * @josesambrano
 */
class Cobranza{
    // generar cobranza ganado
    // anular cobranza perdida
    /*
     * @param <Opportunity>
     * @return <void>
     */
    function create(Opportunity $oportunidad){
        $id=create_guid();

        if($oportunidad->categoria_c=='Incompany'){
            $monto=$oportunidad->amountreal;
        }else{
            $monto=$oportunidad->amount-($oportunidad->amount*($oportunidad->descuento_c)/100);
        }
        if(empty($oportunidad->idcobranza)){
                                        $cobranza=new ee_Cobranzas();
                                         $cobranza->name=" Pago ".$oportunidad->name;
                                         $cobranza->fechaprevistapago=$oportunidad->date_closed;
                                         $cobranza->formapago="Efectivo";
                                         $cobranza->estado="Pendiente";
                                         $cobranza->assigned_user_id=$oportunidad->assigned_user_id;
                                         $cobranza->team_id=$oportunidad->team_id;
                                         $cobranza->team_set_id=$oportunidad->team_set_id;
                                         $cobranza->montopago=(empty($monto))? 0 : $monto;
                                         $cobranza->opportunities_ee_cobranzasopportunities_ida=$oportunidad->id;
                                         $cobranza->description="Se aplicó un descuento de : ".$oportunidad->descuento_c." %";
                                         $cobranza->idoportunidad=$oportunidad->id;
                                         $cobranza->save();
             $oportunidad->idcobranza=$cobranza->id;
             $oportunidad->save();
        }
    }
    /*
     * @param <string> Id de la cobranza a cambiar de estado
     *
     */
    function delete($idCobranza="",$estado="Devolucion"){
        if($idCobranza==""){
            return "El código de la cobranza no puede estar vacio";
        }
        $cobranza=new ee_Cobranzas();
        $cobranza->retrieve($idCobranza);
        if(!empty($cobranza->id)){
            $cobranza->estado=$estado;
            $cobranza->save();
            if($cobranza->estado==$estado)
                return "Se ejecuto el cambio del estado de la cobranza con exito";
            else
                return "Existío un error en la cobranza. Comuniquese con el Administrador ! ";

        }else{
            return "Existio un error en la búsqueda de la cobranza actual";
        }
        
    }
}
?>
