<?php
/* 
 * Gestiona la busqueda de productos, dispositivos y segmentacion
 * @author Jose Sambrano
 */
class ManagerListaPop{

    private $busqueda;
    private $modulo;
    private $sql;
    private $data=array();
    private $columnas=array();

    function __construct(){

    }
    public function setBusqueda($var){
        $this->busqueda=$var;
    }
    public function setModulo($var){
        $this->modulo=$var;
    }
    public function setSql(){
        if($this->modulo=='Dispositivo'){
                if(!empty($this->busqueda))
                     $filtro="  and name like '%$this->busqueda%'";
                $this->sql="SELECT name,tipodispositivo extra,id FROM `gtl_dispositivo` WHERE deleted=0 ".$filtro." order by name";
                $this->columnas['name']="Dispositivo";
                $this->columnas['extra']="Tipo de dispositivo";
        }else if($this->modulo=='Producto'){
            if(!empty($this->busqueda))
                     $filtro="  and name like '%$this->busqueda%'";
            $this->sql="SELECT name,id FROM gtl_subproducto WHERE deleted=0 ".$filtro." order by name";
                    $this->columnas['name']="Producto";
                $this->columnas['extra']="";
        }else if($this->modulo=='Negocio'){
                $this->sql="SELECT name,id FROM gtl_tiponegocio WHERE deleted=0 ".$filtro." order by name";
                $this->columnas['name']="Tipo negocio";
                $this->columnas['extra']="";
        }
    }
    public function execute(){
        global $db;

        $result=$db->query($this->sql);
              while($a = $db->fetchByAssoc($result)) {
                    $this->data[]=$a;
            }
        

    }
    public function lista(){
        $cadena="";
        if(is_array($this->data)){
           if(count($this->data)>0){
            $cadena.="<table width='100%'>";
            $cadena.="<tr>";
                $cadena.="<td>";
                $cadena.=$this->columnas['name'];
                $cadena.="</td>";
                $cadena.="<td>";
                $cadena.=$this->columnas['extra'];
                $cadena.="</td>";
                $cadena.="</tr>";
            foreach($this->data as $key =>$val){
                $js='<a href="javascript:void(0);" onclick="javascript:copiar(\''.$val['id'].'\',\''.$val['name'].'\');">';
                $cadena.="<tr>";
                $cadena.="<td>";
                $cadena.=$js.$val['name']."</a>";
                $cadena.="</td>";
                $cadena.="<td>";
                $cadena.=$val['extra'];
                $cadena.="</td>";
                $cadena.="</tr>";
            }
            $cadena.="</table>";
           }else
               $cadena="No se encontraron registros";

        }
        echo $cadena;
    }
}
?>
