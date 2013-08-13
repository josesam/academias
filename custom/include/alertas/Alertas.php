<?php
/**
 * Description of AlertasEscuela
 *
 * @author BOS
 */
//include_once 
class Alertas {
    
    protected $path_template;

    protected $email;

    protected $source;

    protected $parent_type;
    
    protected $parent_id;

    protected $emailObj;
    protected $mail;
    protected $defaults=array();
    protected $bcc=array();
    function __construct(){
        
        $this->emailObj=new Email();
        $this->defaults=$this->emailObj->getSystemDefaultEmail();
        $this->mail=new SugarPHPMailer();
        $this->mail->setMailerForSystem();
        $this->mail->IsHTML(true);
        $this->mail->From=$this->defaults['email'];
        $this->mail->FromName=$this->defaults['name'];

    }

    /*
     *
     */
    function setSource($var){
        $this->source=$var;
    }
    function setBcc($var,$name){
        $this->bcc[$name]=$var;
    }
    function getSource(){
        return $this->source;
    }
    function setEmail($var){
        $this->email=$var;
    }
    function getEmail(){
        return $this->email;
    }
    function setParenttype($var){
        $this->parent_type=$var;
    }
    function getParenttype(){
        return $this->parent_type;
    }
    function setParentId($var){
        $this->parent_id=$var;
    }
    function getParentId(){
        return $this->parent_id;
    }
  
     /*
     * Envia mail usando los parametros del sistema.
     *
     * @return <void>
     *
     */
    function sendMail($emailSubject,$emailBody){
        $this->mail->ClearAllRecipients();
        $this->mail->ClearReplyTos();
        $this->mail->Subject=from_html($emailSubject);
        $this->mail->Body=from_html($emailBody);
        $this->mail->prepForOutbound();

        $this->mail->AddAddress(self::getEmail());
        $this->mail->AddCC("jose.sambrano@greenfieldcrm.com","Jose Sambrano");
        $this->mail->AddCC("jose.fernandez@greenfieldcrm.com","Jose Fernandez");
        $this->mail->AddCC("mjaramillo@usfq.com.ec","Maria Antonieta Jaramillo");
        
        if(count($this->bcc)>0){
            foreach ($this->bcc as $nombre =>$direccion){
                $this->mail->AddCC($direccion,$nombre);
                
            }
        }

        if(@$this->mail->Send()){
            $this->emailObj->to_addrs='';
            $this->emailObj->type='archived';
            $this->emailObj->deleted=0;
            $this->emailObj->name=$this->mail->Subject;
            $this->emailObj->description=$this->mail->Body;
            $this->emailObj->description_html=null;
            $this->emailObj->from_addr=$this->mail->From;
            $this->emailObj->parent_type=self::getParenttype();
            $this->emailObj->parent_id=self::getParentId();
            $this->emailObj->date_sent=TimeDate::getInstance()->nowDb();
            $this->emailObj->modified_user_id='1';
            $this->emailObj->created_by='1';
            $this->emailObj->status='sent';
            $this->emailObj->save();
        }
    }
    
    /*
     * Envia un mail a varias personas
     * 
     */
    function sendMailMassive($emailSubject,$emailBody,$emails=array()){
        $this->mail->ClearAllRecipients();
        $this->mail->ClearReplyTos();
        $this->mail->Subject=from_html($emailSubject);
        $this->mail->Body=from_html($emailBody);
        $this->mail->prepForOutbound();
        foreach ($emails as $value){
            $this->mail->AddAddress($value);
        }
        
        $this->mail->AddCC("jose.sambrano@greenfieldcrm.com");
        $this->mail->AddCC("jose.fernandez@greenfieldcrm.com");
        $this->mail->AddCC("mjaramillo@usfq.com.ec","Maria Antonieta Jaramillo");        
        if(count($this->bcc)>0){
            
            foreach ($this->bcc as $nombre =>$direccion){
                $this->mail->AddCC($direccion,$nombre);
            }
        }
        if(@$this->mail->Send()){
            $this->emailObj->to_addrs='';
            $this->emailObj->type='archived';
            $this->emailObj->deleted=0;
            $this->emailObj->name=$this->mail->Subject;
            $this->emailObj->description=$this->mail->Body;
            $this->emailObj->description_html=null;
            $this->emailObj->from_addr=$this->mail->From;
            $this->emailObj->parent_type=self::getParenttype();
            $this->emailObj->parent_id=self::getParentId();
            $this->emailObj->date_sent=TimeDate::getInstance()->nowDb();
            $this->emailObj->modified_user_id='1';
            $this->emailObj->created_by='1';
            $this->emailObj->status='sent';
            $this->emailObj->save();
        }
    }
    /*
     * Obtiene todos los usuarios del sistema 
     * @return <array>
     */
    function usuariosSistema(){
        global $db;
        $sql="Select id from users where status='Active'";
        $result=$db->query($sql);
        $data=array();
        while ($a=$db->fetchByAssoc($result)){
           $user=new User();
           $user->retrieve($a['id']);
           if(!empty($user->id)){
               if(!empty($user->email1)){
                   $data[]=$user->email1;
               }
           }
           
        }
        return $data;
    }

}
?>
