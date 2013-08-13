<?php
/*
 * Envio de Notificaciones
 * @author Jose Sambrano
 */
class NotificacionesCasos{
    /*
     * @param modulo
     */
    protected $modulo;
     /*
     * @param $opcion
     */
    protected $opcion;
     /*
     * @param $enviomail
     */
    protected $enviomail=array();
     /*
     *
     * @param $mail_from
     *
     */
    protected $mail_from='jose.sambrano@dynamia.ec';
     /*
     *
     * @param $tipo
     *
     */
    protected $tipo;
     /*
     *
     * @param $path
     *
     */
    protected $path='custom/include/PHPMailer/class.phpmailer.php';
     /*
     *
     * @param $pathlog
     *
     */
    protected $pathlog='custom/include/clases/varios/Log.php';
     /*
     *
     * @param $linl
     *
     */
    protected $link='index.php?module=';
    /*
     *
     * @param $mail
     *
     */
    protected $mail;

    /**
     * @param $log
     */
    protected $log;
    /**
     * @param $url
     */
    protected $url='http://www.dynamiahosting.com/newnetafim/';
    /**
     * @param $parametros_log
     */
    protected $parametros_log=array();
    /**
     * @param $db
     */
    protected $db;
    /**
     * @param $parametros
     */
    protected $parametros;
    /**
     * @param $body
     */
    protected $body;
    /**
     * @param $asunto
     */
    protected $asunto;
    /*
     * Puede ser el usuario asignado o el cliente.
     *@$mailadicional
     */
    protected $mailadicional;

    /*
     *
     * Parametros de envio de maila
     */
    private $smtp=array(
      'cuenta'=>'jose.sambrano@dynamia.ec',
      'clave'=>'sambrano2011',
      'puerto'=>'25',
      'host'=>'mail.dynamia.ec',
      'autenticacion'=>true,

    );
    private $envia_link=true;
    function __construct($link=true){
    $this->envia_link=$link;
     $this->db =DBManagerFactory::getInstance();
     if(file_exists($this->path)){
            include_once $this->path;
           $this->mail=new PHPMailer();

        }
         if(file_exists($this->pathlog)){
           include_once $this->pathlog;
           $this->log=new Log();

        }


    }
    /*
     * Setea los parametros para envio el mail
     */
    function setParametros($data=array()){
       
        $this->modulo=$data['modulo'];
        $this->opcion=$data['tipo'];
        $this->nombreContrato=$data['name'];
        $this->asunto=$data['asunto'];
        $this->body=$data['body'];
        $this->id=$data['id'];
        $this->mailadicional=$data['mailadicional'];
        if($this->envia_link){
            $this->link=$this->url.$this->link;
            $this->link.=$this->modulo.'&action=DetailView&record='.$this->id;
        }
     
        $this->parametros_log['modulo']=$this->modulo;
        $this->parametros_log['parent_id']=$this->id;
        
        if($this->modulo=="Opportunities"){
            $sql="Select description from bos_notificacionesmail  where modulo='oportunidad' and deleted=0";
        }else if ($this->modulo=='Cases'){
            $sql="Select description from bos_notificacionesmail  where modulo='casos' and deleted=0";

        }else if($this->modulo=='sp_libroobra'){
            $sql="Select description from bos_notificacionesmail  where modulo='libroobra' and deleted=0";
        }else if($this->modulo=='Calls'){
            $sql="Select description from bos_notificacionesmail  where modulo='calls' and deleted=0";
        }else if($this->modulo=='Meetings'){
            $sql="Select description from bos_notificacionesmail  where modulo='reuniones' and deleted=0";
        }else if ($this->modulo=='Project'){
            $sql="Select description from bos_notificacionesmail  where modulo='proyecto' and deleted=0";
        }else
            $sql="Select description from bos_notificacionesmail  where modulo='cuenta' and deleted=0";

        $result=$this->db->query($sql);
       
       while($a = $this->db->fetchByAssoc($result)) {
            $data1 = $a['description'];
            break;
       }
          $this->parametros_log['email']=$data1;
       if(!empty($data1)){
           $this->parametros=explode(";",$data1);

       }
    }

    function sendMail(){
           global $timedate;
                

           if(is_array($this->parametros)){

                $this->mail->IsSMTP();
                $this->mail->Host = $this->smtp['host'];
                $this->mail->SMTPAuth = $this->smtp['autenticacion'];
                $this->mail->Username =$this->smtp['cuenta'];
                $this->mail->Password =$this->smtp['clave'];

                $this->mail->SetFrom($this->mail_from, 'Alertas Automaticas');
/*                $body="La oportunidad  ".$this->nombreContrato.'<br>';
                $body.="ha cambiado de etapa de venta <br>";*/
                if($this->envia_link)
                $this->body.="Haga click en el link :  <br> ".$this->link.'<br>';
                $this->mail->Subject = $this->asunto;
                $this->mail->AltBody= "Funcionalidad de Alertas"; // optional, comment out and test
                $this->mail->MsgHTML($this->body);

                foreach($this->parametros as $key =>$value){
                    $this->mail->AddAddress($value);
                }
                if(!empty($this->mailadicional))
                    $this->mail->AddAddress($this->mailadicional);

                
                $this->fecha_envio=gmdate($GLOBALS['timedate']->get_db_date_time_format());


                if(!$this->mail->Send()) {
                        $this->msg='El mensaje no fue correctamente enviado '.$this->mail->ErrorInfo;
                        $this->estado='no enviado';
                } else {
                        $this->msg='El mensaje fue correctamente enviado';
                        $this->estado='enviado';
                }
                  // Clear all addresses and attachments for next loop
                $this->mail->ClearAddresses();
                $this->mail->ClearAttachments();
                
                $this->parametros_log['msg']=$this->msg;
                $this->parametros_log['estado']=$this->estado;
                $this->parametros_log['fecha']=$this->fecha_envio;


                $this->log->setParametros($this->parametros_log);
                $this->log->save();

                return $this->estado;
                }
               else
               return '';
       

  }




}
?>
