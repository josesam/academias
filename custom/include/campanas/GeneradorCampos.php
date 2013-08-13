<?php

/**
 * Description of GeneradorCampos
 *
 * @author BOS
 */
class GeneradorCampos {
    
    //@var <string> Nombre del la carpeta del Módulo del cual se va a generar la plantilla de búsqueda,
    var $folder_modulo;
    // @var <array> Array con los leguajes del módulo
    var $modstring;
    // @var <string> Nombre del Bean
    var $bean_name;

    function  __construct() {
        ;
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
     * Set de language para el modulo
     * que se esta generando el público objetivo
     *
     */
    public  function cargarLanguage(){
        $lang=$_COOKIE['ck_login_language_20'];
        
        
                // Leer los vardefs
            $mod_string1=array();
            $mod_string2=array();
            $mod_string3=array();
            $mod_string4=array();
            $mod_string5=array();
            $path='modules/'.self::getModulo().'/language/'.$lang.'.lang.php';
            if(file_exists($path))
                include_once $path;
            $mod_string1=$mod_strings;
            $mod_strings=array();

            $path='custom/modules/'.self::getModulo().'/language/'.$lang.'.lang.php';
            if(file_exists($path))
                include_once $path;
            $mod_string2=$mod_strings;
            $mod_strings=array();

            $path='custom/modules/'.self::getModulo().'/Ext/Language/'.$lang.'.lang.ext.php';
            if(file_exists($path))
                include_once $path;
            $mod_string3=$mod_strings;
            $mod_strings=array();
            $mod_string4=array_merge($mod_string1,$mod_string2);
            $mod_string5=$mod_string3;
            $this->modstring=array_merge($mod_string4,$mod_string5);
        
        
    }

    function texto($data=array()){
       $len=(empty($data['len'])) ? 60 : $data['len'];
       $cadena.="<td>";
       $cadena.=(empty($this->modstring[$data['vname']]))? $data['vname'] : $this->modstring[$data['vname']];
       $cadena.="</td>";
       $cadena.="<td>";
       $cadena.="<input type='text' name='".self::getBeanName()."_".$data['name']."'
                 id='".self::getBeanName()."_".$data['name']."' maxlength='$len' size='30'>";
       $cadena.="</td>";
       return $cadena;
    }
    function hidden($name,$value,$size=30,$readonly=false){

       $cadena="<input type='hidden' name='".$name."'
                 id='".$name."'  size='30' value='$value'>";
       return $cadena;
    }
    function fecha($data=array(),$readonly=false){
        $len=(empty($data['len'])) ? 60 : $data['len'];
       $cadena.="<td>";
       $cadena.=(empty($this->modstring[$data['vname']]))? $data['vname'] : $this->modstring[$data['vname']];
       $cadena.="</td>";
       $cadena.="<td>";
       $cadena.="<input type='text' name='".self::getBeanName()."_".$data['name']."'
                 id='".self::getBeanName()."_".$data['name']."' maxlength='$len' size='30'>";
       $cadena.='<img id="'.self::getBeanName()."_".$data['name'].'_trigger" border="0"
                 absmiddle"="" src="themes/Sugar/images/jscalendar.png">
                ';
       $cadena.=self::scriptFecha(self::getBeanName()."_".$data['name'],self::getBeanName()."_".$data['name']."_trigger");
       $cadena.="</td>";
       return $cadena;
    }
    function select($data=array(),$row=5,$cols=20){
       global $app_list_strings;
       $options=$app_list_strings[$data['options']];
       
       $cadena.="<td>";
       $cadena.=(empty($this->modstring[$data['vname']]))? $data['vname'] : $this->modstring[$data['vname']];
       $cadena.="</td>";
       $cadena.="<td>";
       $cadena.="<select name='".self::getBeanName()."_".$data['name']."[]'
                 id='".self::getBeanName()."_".$data['name']."' rows='$row' cols='$cols' multiple='multiple'>";
                 if(is_array($options)){
                     foreach($options as $key =>$value){
                       $cadena.="<option value='$key'>$value</option>";
                     }
                 }
       $cadena.="</select>";
       $cadena.="</td>";
      return $cadena;
    }
    /*
     *
     */
    function bool($data){
       $len=(empty($data['len'])) ? 60 : $data['len'];
       $cadena.="<td>";
       $cadena.=(empty($this->modstring[$data['vname']]))? $data['vname'] : $this->modstring[$data['vname']];
       $cadena.="</td>";
       $cadena.="<td>";
       $cadena.="<input type='checkbox' name='".self::getBeanName()."_".$data['name']."'
                 id='".self::getBeanName()."_".$data['name']."' maxlength='$len' size='30'>";
       $cadena.="</td>";
       return $cadena;
    }
    function openForm($name, $action,$inicio=true){
        $cadena.="<form name='$name' id='$name' action='index.php' method='post'>";
        
        return $cadena;
    }

    function closeForm(){
        $cadena.="</form>";
        return $cadena;
    }
    function submit($name,$value){
        $cadena.="<input type='submit' name='$name' id='$name' value='$value'>";
        return $cadena;
    }
    /*
     *
     * @return <string>
     */

    function scriptFecha($inputField="",$button=""){
        $cadena.='<script type="text/javascript">
                  Calendar.setup ({
                  inputField : "'.$inputField.'",
                    daFormat : "%Y-%m-%d",
                    onClose: function(cal) { cal.hide(); },
                    showsTime : false,
                    button : "'.$button.'",
                    singleClick : true,
                    step : 1,
                    weekNumbers:false
            });
            </script>';
        return $cadena;
    }

}
?>
