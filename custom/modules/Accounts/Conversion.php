<?php
class RespuestaConversion{
    
    var $estado=false;
    var $mensaje=array();
    var $contacto;

    }
/*
 * Copia los datos del cliente a contacto y actualiza el estado del cliente a convertido
 */
class Conversion{

    private $cliente_id;
    private $respuesta;

    public function __construct(){
        $this->respuesta=new RespuestaConversion();
    }
    /*
     * Set id del cliente
     * @var <string> Id del cliente;
     * 
     */

    public function setClienteId($var){
        $this->cliente_id=$var;
    }
    /*
     * Proceso de conversion del cliente a contacto
     * @return <RespuesaConversion>
     */
    public function convertirCliente(){
        if(!empty($this->cliente_id)){
            $cliente=new Account();
            $cliente->retrieve($this->cliente_id);

            if(empty($cliente->id)){
                $this->respuesta->estado=true;
                $this->respuesta->error[]="No existe ningun cliente relacionado";
                return $this->respuesta;
            }
            if($cliente->convertida==1){
                $this->respuesta->estado=true;
                $this->respuesta->error[]="Ya fue creado anteriormente el contaco";
                return $this->respuesta;
            }
            $contacto=new Contact();
            $contacto->first_name=$cliente->primernombre. " ". $cliente->segundonombre;
            $contacto->last_name=$cliente->primerapellido." ".$cliente->segundoapellido;




            $contacto->primernombre=$cliente->primernombre;
            $contacto->segundonombre=$cliente->segundonombre;
            $contacto->primerapellido=$cliente->primerapellido;
            $contacto->segundoapellido=$cliente->segundoapellido;

            $contacto->phone_other=$cliente->phone_office;
            $contacto->phone_work=$cliente->phone_alternate;
            $contacto->phone_mobile='593 9 000 0000';

            $contacto->calle_principal=$cliente->calle_principal;
            $contacto->calle2_principal=$cliente->calle2_principal;
            $contacto->numero_principal=$cliente->numero_principal;
            $contacto->sector_principal=$cliente->sector_principal;
            $contacto->ciudad_principal=$cliente->ciudad_principal;
            $contacto->provincia_principal=$cliente->provincia_principal;
            $contacto->pais_principal=$cliente->pais_principal;
            $contacto->cedula=$cliente->nrodocumento_c;
            $contacto->calle_envio=$cliente->calle_envio;
            $contacto->calle2_envio=$cliente->calle2_envio;
            $contacto->numero_envio=$cliente->numero_envio;
            $contacto->sector_envio=$cliente->sector_envio;
            $contacto->ciudad_envio=$cliente->ciudad_envio;
            $contacto->provincia_envio=$cliente->provincia_envio;
            $contacto->pais_envio=$cliente->pais_envio;
            $contacto->ee_nacionalidad_id_c=$cliente->ee_nacionalidad_id_c;

            $contacto->email1=$cliente->email1;


            $contacto->assigned_user_id=$cliente->assigned_user_id;
            $contacto->account_id=$cliente->id;
            $contacto->idcliente=$cliente->id;
            //$contacto->
            $contacto->save();

            if(empty($contacto->id)){
                $this->respuesta->estado=true;
                $this->respuesta->error[]="Existio un error al convertir al cliente en contacto";
                return $this->respuesta;
            }
            $cliente->idcontacto=$contacto->id;
            $cliente->convertida=1;
            $cliente->save();
            $this->respuesta->contacto=$contacto->id;
            return $this->respuesta;

        }else{
            $this->respuesta->estado=true;
            $this->respuesta->error[]="No existe ningun cliente relacionado";
            return $this->respuesta;
        }
    }
}
?>
