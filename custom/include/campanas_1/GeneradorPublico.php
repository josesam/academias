<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GeneradorPublico
 *
 * @author BOS
 */
class GeneradorPublico {
    //put your code here

    //@var <string> Nombre del la carpeta del Módulo del cual se va a generar la plantilla de búsqueda,
    var $folder_modulo;
    // @var <array> Array con los leguajes del módulo
    var $modstring;
    // @var <string> Nombre del Bean
    var $bean_name;
    // @var <array>
    var $diccionario;
    // @var <string>
    var $where;
    // @var <string>
    var $tabla_padre;
    // @var <string>
    var $tabla_hijo;
    // @var <string>
    var $publico;
    // @var <array> Datos resultantes de la búsqueda
    var $data;
    
    function  __construct() {
        ;
    }
        /*
     * @param <string> Valor pasado del formulario
     * @retrun <void>
     */
    public function setPublico($var){
        $this->publico=$var;
    }
    /*
     * @return <string> Obtiene el nombre de módulo
     */
    public function getPublico(){
        return $this->publico;
    }

    /*
     * @param <string> Valor pasado del formulario
     * @retrun <void>
     */
    public function setModulo($var){
        $this->folder_modulo=$var;
    }
    /*
     * @return <string> Obtiene el nombre de módulo
     */
    public function getModulo(){
        return $this->folder_modulo;
    }
    /*
     * @param <string> Nombre del Bean (objeto) de sugarcrm
     * @retrun <void>
     */
    public function setBeanName($var){
        $this->bean_name=$var;
    }
    /*
     * @return <string> Obtiene el nombre de bean
     */
    public function getBeanName(){
        return $this->bean_name;
    }
    /*
     * @return <array> Datos resultante de la busqueda
     */
    public function getData(){
        return $this->data;
    }

    /*
     *
     *  Carga los vardefs del modulo de donde se desea sacar la lista
     *  @return  <void>
     */
    public function cargaVardefs(){
        global $beanFiles;
        $path='cache/modules/'.self::getModulo().'/'.self::getBeanName().'vardefs.php';
        // Leer los vardefs
        if(file_exists($path)){
            include_once $path;
            $dictionary=$GLOBALS["dictionary"][self::getBeanName()];
        }else{
            $path='modules/'.self::getModulo().'/vardefs.php';
            if(file_exists($path))
                include_once $path;

            $path='custom/modules/'.self::getModulo().'/Ext/Vardefs/vardefs.ext.php';
            if(file_exists($path))
                include_once $path;

        }
        $this->diccionario=$dictionary;
    }
    /*
     * Genera el "where" recorriendo todos los filtros
     * de búsqueda aplicados en la pantalla anterios
     * esta funcion lee los vardef del modulo para reconocer el tipo de dato  de la base de datos
     * @param <array>
     * @return <void>
     */
    public function generaWhere($form){

       foreach($form as $key => $datos){
           $pos = strpos($key, self::getBeanName().'_');
	   if ($pos === false || $pos > 0)
	    continue;
           $id = str_replace(self::getBeanName().'_', '', $key);
           $vardef=$this->diccionario['fields'][$id];
           if($vardef['source']!='custom_fields')
               $alias="p.";
           else
               $alias='h.';

           switch ($vardef['type']){
               case 'varchar':
               case 'text':
               case 'date':
               case 'datetime':
                   if (!empty($form[self::getBeanName().'_'.$id]))
                        $sql.=" and ".$alias.$id ."='".$form[self::getBeanName().'_'.$id]."'";
                   break;
               case 'float':
               case 'int':
                   if (!empty($form[self::getBeanName().'_'.$id]))
                        $sql.=" and ".$alias.$id ."=".$form[self::getBeanName().'_'.$id]."";
                   break;
               case 'multienum':
               case 'enum':
                   if(count($form[self::getBeanName().'_'.$id])>0)
                      $sql.=" and ".$alias.$id ." in ('". implode("','",$form[self::getBeanName().'_'.$id]) ."')";
                   break;
               case 'bool':
                   if($form[self::getBeanName().'_'.$id]=="on")
                       $sql.=" and ".$alias.$id ."=1";
                   break;
           }
       }
       $this->where=$sql;
    }
    //Sirve de controlador para asignar las tablas donde se va a realizar
    // las búquedas y llamar a la funcion especifica
    // @return <void>
    public function controller(){
        if($this->publico=="cuenta"){
            $this->tabla_hijo=" accounts_cstm h";
           $this->tabla_padre=" accounts p";
           self::cuenta();

        }else if($this->publico=="contacto"){
           $this->tabla_hijo=" contacts_cstm h";
           $this->tabla_padre=" contacts p";
           self::contacto();
        }else if($this->publico=="instructor"){
           $this->tabla_hijo=" ee_profesores_cstm h";
           $this->tabla_padre=" ee_profesores p";
           self::instructor();
        }else if($this->publico=="contactosoportunidad"){
           $this->tabla_hijo=" contacts_cstm h";
           $this->tabla_padre=" contacts p";
        }else if($this->publico=="clientescontactos"){
           $this->tabla_hijo=" contacts_cstm cstm";
           $this->tabla_padre=" contacts c";
           self::clientescontactos();
        }

    }
    //Lista todos clientes que cumplan con el filtro
    //aplicado en la pantalla anterior
    // Asigna los datos resultantes al array que se va mostrara al usuario final
    // @return <void>
    function cuenta(){
        global  $db;
        $email="LEFT JOIN email_addr_bean_rel t ON p.id = t.bean_id
                    AND t.bean_module = 'Accounts'   and t.primary_address=1
                    AND t.deleted =0
                    LEFT JOIN email_addresses em on em.id=t.email_address_id ";
        $sql="Select p.* , h.*,em.email_address email from ".$this->tabla_padre." inner join ".$this->tabla_hijo." on p.id=h.id_c
              $email where p.deleted=0 ".$this->where;
       // echo $sql;
        $result = $db->query($sql);
        $cont=0;
        while($a = $db->fetchByAssoc($result)){
            $this->data[$cont]['id']=$a['id'];
            $this->data[$cont]['nombre']=$a['name'];
            $this->data[$cont]['email']=$a['email'];
            $cont++;
        }
         
    }
    //Lista todos los instructores que cumplan con el filtro
    //aplicado en la pantalla anterior
    // Asigna los datos resultantes al array que se va mostrara al usuario final
    // @return <void>
    function instructor(){
        global  $db;
        $email="LEFT JOIN email_addr_bean_rel t ON p.id = t.bean_id
                    AND t.bean_module = 'ee_Profesores'   and t.primary_address=1
                    AND t.deleted =0
                    LEFT JOIN email_addresses em on em.id=t.email_address_id ";
        $sql="Select p.* , h.*,em.email_address email from ".$this->tabla_padre." inner join ".$this->tabla_hijo." on p.id=h.id_c
              $email where p.deleted=0 ".$this->where;
        $result = $db->query($sql);
        $cont=0;
        while($a = $db->fetchByAssoc($result)){
            $this->data[$cont]['id']=$a['id'];
            $this->data[$cont]['nombre']=$a['first_name']." ". $a['last_name'];
            $this->data[$cont]['email']=$a['email'];
            $cont++;
        }
    }
    // Lista todos los contactos que cumplan con el filtro
    // aplicado en la pantalla anterior
    // Asigna los datos resultantes al array que se va mostrara al usuario final
    // @return <void>
    function clientescontactos(){
        global $db;
        // Se sobre escribe , para poder atar bien la lista de publico objetivo 
        // puesto que esta lista es una relacion entre Clietnes y contactos
        self::setModulo("Contacts");
        $email="LEFT JOIN email_addr_bean_rel t ON c.id = t.bean_id
                    AND t.bean_module = 'Contacts'   and t.primary_address=1
                    AND t.deleted =0
                    LEFT JOIN email_addresses em on em.id=t.email_address_id ";
        $sql="Select c.* , cstm.*,em.email_address email from 
                accounts p inner join accounts_cstm h on p.id=h.id_c
                inner join accounts_contacts ac on p.id=ac.account_id
                inner join ".$this->tabla_padre." on c.id=ac.contact_id
                    inner join ".$this->tabla_hijo." on c.id=cstm.id_c
              $email where p.deleted=0 and c.deleted=0 and ac.deleted=0 " .$this->where;
       // echo $sql;
        $result = $db->query($sql);
        $cont=0;
        while($a = $db->fetchByAssoc($result)){
            $this->data[$cont]['id']=$a['id'];
            $this->data[$cont]['nombre']=$a['first_name']." ". $a['last_name'];
            $this->data[$cont]['email']=$a['email'];
            $cont++;
        }
    }

    
    // Lista todos los contactos que cumplan con el filtro
    // aplicado en la pantalla anterior
    // Asigna los datos resultantes al array que se va mostrara al usuario final
    // @return <void>
    function contacto(){
        global $db;
        
        $email="LEFT JOIN email_addr_bean_rel t ON p.id = t.bean_id
                    AND t.bean_module = 'Contacts'   and t.primary_address=1
                    AND t.deleted =0
                    LEFT JOIN email_addresses em on em.id=t.email_address_id ";
        $sql="Select p.* , h.*,em.email_address email from ".$this->tabla_padre." inner join ".$this->tabla_hijo." on p.id=h.id_c
              $email where p.deleted=0 " .$this->where;
      //  echo $sql;
        $result = $db->query($sql);
        $cont=0;
        while($a = $db->fetchByAssoc($result)){
            $this->data[$cont]['id']=$a['id'];
            $this->data[$cont]['nombre']=$a['first_name']." ". $a['last_name'];
            $this->data[$cont]['email']=$a['email'];
            $cont++;
        }
    }

    function crear($name,$list=array()){
       global $db,$current_user;
       $lista=new ProspectList();
       $lista->list_type="default";
       $lista->name=$name;
       $lista->assigned_user_id=$current_user->id;
       $lista->description="Creación desde la pantalla personalizada";
       $lista->save();
       $res=array(
           'error'=>false,
           'exito'=>true,
           'errores'=>array(),
       );
       if(!empty($lista->id)){
            if(is_array($list)){
                $id_lista=$lista->id;
                $related_type=self::getModulo();
                foreach($list as $value){
                    $id=create_guid();
                    $sql=" insert into  prospect_lists_prospects (
                            id,prospect_list_id,related_id,related_type,date_modified,deleted)
                            values (
                            '$id',
                            '$id_lista',
                            '$value',
                            '$related_type',
                            '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                            '0'
                            )";
                    $r=$db->query($sql);
                    if(!$r){
                        $res['errores'][]=$value;
                        $res['error']=true;
                        $res['exito']=false;
                    }
                }

             }
       }else{
           $res['errores'][]="No se puedo crear el público objetivo";
           $res['error']=true;
           $res['exito']=false;
       }
       return $res;
    }


}
?>
