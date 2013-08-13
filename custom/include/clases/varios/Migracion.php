<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Migracion
 *
 * @author BOS
 */
class Migracion {
    //put your code here
    public function __construct(){
        
    }
    function asignarNumeros(){
        global $db;
        $sql=" Select
               id
               from accounts a ";
        $result=$db->query($sql);
        $cont=1;
        while($a=$db->fetchByAssoc($result)){
            $id=$a['id'];

            $update="Update accounts set cliente_id='$cont'
                    where id='$id'";
            //break;
            $db->query($update);
            $cont++;
        }
    }
    /*
     * Actualiza la informacion de los campos de direcciones a un solo campo
     *
     */
    public function cuentas(){
        global $db;
        $sql=" Select
               id,calle_principal,calle2_principal,numero_principal,
               sector_principal,calle_envio,
               calle2_envio,
               numero_envio,sector_envio,phone_alternate
               from accounts a where a.deleted=0";
        $result=$db->query($sql);
        while($a=$db->fetchByAssoc($result)){
            $id=$a['id'];
            $principal=$a['calle_principal'].' y '.$a['calle2_principal']." ".$a['numero_principal']." ".$a['sector_principal'];
            $secundario=$a['calle_envio'].' y '.$a['calle2_envio']." ".$a['numero_envio']." ".$a['sector_envio'];
            if(trim($principal)=="y")
                $principal="";
            if(trim($secundario)=="y")
                $secundario="";
            $pais=$a['phone_alternate'];
            $telefono=self::formatoTelefono($a['phone_alternate']);
            $update="Update accounts set calle_principal='$principal',
                   calle_envio='$secundario',phone_alternate='$telefono',rating='$pais' where id='$id'";
            //break;
            $db->query($update);
        }
    }
    /*
     * @param <string> Telefono
     * @return <string> Aumentado el nuevo digito
     */
    public function formatoTelefono($telf,$pos=STR_PAD_RIGHT){
        if(empty($telf))
            return '';
        $pad="0";
        $nuevo_digito="9";
        if(strlen($telf)<14)
            $telf=str_pad ($telf, 14, $pad, $pos);
        if(strlen($telf)==15)
            return $telf;
        $cadena1=substr($telf, 0,3);
        $cadena2=substr($telf, 3,strlen($telf)-1);
        $telf=$cadena1." ".$nuevo_digito.trim($cadena2);
        return $telf;
    }

    /*
     * Actualiza la informacion de los campos de direcciones a un solo campo en contactos
     *
     */
    public function contactos(){
        global $db;
        $sql=" Select
               id,calle_principal,calle2_principal,numero_principal,
               sector_principal,calle_envio,
               calle2_envio,
               numero_envio,sector_envio,phone_mobile
               from contacts a where a.deleted=0";
        $result=$db->query($sql);
        while($a=$db->fetchByAssoc($result)){
            $id=$a['id'];
            $principal=$a['calle_principal'].' y '.$a['calle2_principal']." ".$a['numero_principal']." ".$a['sector_principal'];
            $secundario=$a['calle_envio'].' y '.$a['calle2_envio']." ".$a['numero_envio']." ".$a['sector_envio'];
            if(trim($principal)=="y")
                $principal="";
            if(trim($secundario)=="y")
                $secundario="";
            $pais=$a['phone_mobile'];
            $telefono=self::formatoTelefono($a['phone_mobile']);
            $update="Update contacts set calle_principal='$principal',
                   calle2_envio='$secundario',phone_mobile='$telefono', primary_address_country='$pais' where id='$id'";
            //break;
            $r=$db->query($update);
        }
    }

    /*
     * Actualiza la informacion de los campos de direcciones a un solo campo en contactos
     *
     */
    public function instructores(){
        global $db;
        $sql=" Select
               id,calle_principal,calle2_principal,numero_principal,
               sector_principal,calle_envio,
               calle2_envio,
               numero_envio,sector_envio,phone_mobile
               from ee_profesores a where a.deleted=0";
        $result=$db->query($sql);
        while($a=$db->fetchByAssoc($result)){
            $id=$a['id'];
            $principal=$a['calle_principal'].' y '.$a['calle2_principal']." ".$a['numero_principal']." ".$a['sector_principal'];
            $secundario=$a['calle_envio'].' y '.$a['calle2_envio']." ".$a['numero_envio']." ".$a['sector_envio'];
            if(trim($principal)=="y")
                $principal="";
            if(trim($secundario)=="y")
                $secundario="";
            $pais=$a['phone_mobile'];
            $telefono=self::formatoTelefono($a['phone_mobile']);
            $update="Update ee_profesores set calle_principal='$principal',
                   calle_envio='$secundario',phone_mobile='$telefono', primary_address_country='$pais' where id='$id'";
            //break;
            $r=$db->query($update);
        }
    }
}
?>
