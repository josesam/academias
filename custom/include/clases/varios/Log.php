<?php
/* 
 * Regitra todos los mails enviados
 * 
 */
class Log{

    /*
     *
     */
    protected $email;
    protected $parent_id;
    protected $modulo;
    protected $fecha_envio;
    protected $msg;
    protected $estado;
    protected $db;
    protected $sql;

    function __construct(){
        $this->db =DBManagerFactory::getInstance();
    }

    function setParametros($params=array()){
        global $timedate;
        $this->email=$params['email'];
        $this->parent_id=$params['parent_id'];
        $this->modulo=$params['modulo'];
        $this->fecha_envio=$params['fecha'];
        $this->msg=$params['msg'];
        $this->estado=$params['estado'];


    }
/*
 * Registra el envio del mail para cada modulo necesario
 *
 */

    function save(){
         $this->sql="insert into log
                    (email,parent_id,modulo,fecha_envio,msg,estado)
                     values ('".$this->email."',
                             '".$this->parent_id."',
                             '".$this->modulo."',
                             '".$this->fecha_envio."',
                             '".$this->msg."',
                             '".$this->estado."')";
         $result = $this->db->query($this->sql);

    }
    /**
     * Busca en el log si el mail fue enviado anteriormente
     * var1 id del registro
     * var2 nombre del modulo
     * var3
     *
     * @$var1 varchar(36)
     * @$var2 varchar (255)
     * @$var3 varchar(255)
     */
    function buscar($var1='',$var2='',$var3=''){
        $this->sql="Select * from log where parent_id='".$var1."' and modulo='".$var2."' and estado='enviado'";
        $result = $this->db->query($this->sql);
        while($a = $this->db->fetchByAssoc($result)) {
            $data[] = $a;
        }
        if (empty($data))
            return false;
        else {
            return true;
        }
    }
}
?>
