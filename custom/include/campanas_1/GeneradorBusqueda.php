<?php
/**
 * Description of GeneradorPublico
 *
 * @author BOS
 */
class GeneradorBusqueda{

    //@var <string> Nombre del la carpeta del Módulo del cual se va a generar la plantilla de búsqueda,
    var $folder_modulo;
    //@var <array> Arreglo que contien los campos que se van a poner para las busquedas
    var $array_campos=array();
    // @var <string> Nombre del Bean
    var $bean_name;
    // @var <array> Tipos de campos permitidos
    var $allowed_fields=array('varchar','enum','date','datetime','int','float','bool','text','multienum');
    // @var <string>
    var $publico;
    public function  __construct() {
        ;
    }
    // Declaraciones de getters y setters
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
     *
     */
    function generarArray(){
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
        // Leer la vista de lista de edicion y extrar los datos necesarios para generar la plantilla
        $path_views='custom/modules/'.self::getModulo().'/metadata/editviewdefs.php';

        if(file_exists($path_views)){
            include_once $path_views;
        }else{
            $path_views='modules/'.self::getModulo().'/metadata/editviewdefs.php';
            if(file_exists($path_views))
                include_once $path_views;
        }
        $vista=$viewdefs;
        $d=$dictionary;

        if (is_array($viewdefs[self::getModulo()]['EditView']['panels'])){
            foreach($viewdefs[self::getModulo()]['EditView']['panels'] as $key =>$v){
                if(is_array($v)){
                    foreach ($v as $k1 =>$f){
                        if(is_array($f)){
                            foreach($f as $i =>$datos){
                                $campo=$datos['name'];
                                $vardef=$dictionary['fields'][$campo];
                                if(is_array($vardef)){
                                    $type=$vardef['type'];
                                    if(in_array($vardef['type'],$this->allowed_fields)){
                                        $this->array_campos[]=$vardef;
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
       // var_dump($GLOBALS);


    }
    public function generarPlantilla(){
        $path="custom/include/campanas/GeneradorCampos.php";
        if(file_exists($path)){
            include_once $path;
            
            $generador=new GeneradorCampos();
            $generador->setModulo(self::getModulo());
            $generador->setBeanName(self::getBeanName());
            $generador->cargarLanguage();
            // Inicia Form
            if(is_array($this->array_campos)){
                $cadena.=$generador->openForm("busqueda","index.php");
                $cont=0;
                $cadena.=$generador->hidden("module","Campaigns");
                $cadena.=$generador->hidden("action","lista");
                $cadena.=$generador->hidden("modulo",self::getModulo());
                $cadena.=$generador->hidden("bean",self::getBeanName());
                $cadena.=$generador->hidden("publico",self::getPublico());
                $cadena.="<table name='lead_public' id='lead_public' width='100%' border='1'>";
                $cadena.='<tr>';
                foreach($this->array_campos as $key =>$valor){

                    if($cont==3){
                        $cadena.='</tr>';
                        $cont=0;
                        $cadena.='<tr>';
                    }
                    switch ($valor['type']){
                        case 'bool':
                            $cadena.=$generador->bool($valor);
                            break;
                        case 'varchar':
                            $cadena.=$generador->texto($valor);
                            break;
                        case 'enum':
                        case 'multienum':
                            $cadena.=$generador->select($valor);
                            break;
                        case 'date':
                        case 'datetime':
                            $cadena.=$generador->fecha($valor);
                            break;
                        case 'int':
                            $cadena.=$generador->texto($valor);
                            break;
                        case 'float':
                            $cadena.=$generador->texto($valor);
                            break;
                        case 'text':
                            $cadena.=$generador->texto($valor);
                            break;
                      
                        
                    }
                    $cont++;
                }
                if($cont<3){
                    for($i=$cont;$i==2;$i++){
                        $cadena.="<td></td>";
                        $cadena.="<td></td>";
                    }
                        $cadena.="</tr>";
                }
                $cont=0;
                $cadena.="<tr>";
                $cadena.="<td colspan='6'>".$generador->submit('siguiente',"Generar Lista")."</td>";
                $cadena.="</tr>";
                $cadena.="</table>";
                $cadena.=$generador->closeForm();
                
            }
            return $cadena;
            // Fin form
        }else{
            return 'No se encontro el generador de campos';
        }
    }
}
?>
