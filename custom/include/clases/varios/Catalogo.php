<?php
/*
 *
 *@author Jose Sambrano
 */
class Catalogo{
    private $db;
    private $sql;
    private $criterio;
    private $parametro;
    private $familia;
    function __construct(){
        $this->db = DBManagerFactory::getInstance();
    }
    function setFamilia($var){
        $this->familia=$var;
    }
    function setCriterio($var){
        $this->criterio=$var;
    }
    function getCriterio(){
        return $this->criterio;
    }
    function setParametro($var){
        $this->parametro=$var;
    }
    /**/
    function buscaPais(){
        $this->sql="SELECT a3.valor as pais2,a3.id codigo
                    FROM CATALOGO a3
                    where a3.clase='pais' and valor='ECUADOR'
                    order by pais2 ";
        $result=$this->db->query($this->sql);
        $data=array();
        while($a = $this->db->fetchByAssoc($result)) {
            $data[]=$a;
        }
       return $data;
    }
    function buscaProvincia(){
        $this->sql="SELECT a3.valor as provincia,a3.id codigo
                    FROM CATALOGO a3
                    where a3.clase='provincia' and a3.padre_id='".$this->parametro."'
                    order by provincia ";
        $result=$this->db->query($this->sql);
        $data=array();
        while($a = $this->db->fetchByAssoc($result)) {
            $data[]=$a;
        }
       return $data;
    }
    function buscaCiudad(){
       $this->sql="SELECT a3.valor as ciudad,a3.id codigo
                    FROM CATALOGO a3
                    where a3.clase='ciudad' and a3.padre_id='".$this->parametro."'
                    order by  ciudad ";
        $result=$this->db->query($this->sql);
        $data=array();
        while($a = $this->db->fetchByAssoc($result)) {
            $data[]=$a;
        }
       return $data;
    }
    function buscaSector(){
        $this->sql='
                SELECT s.id idsector ,s.valor sector , z.id idzona,z.valor as zona,
                c.id,c.valor as ciudad,a1.valor as provincia, a2.valor as pais, a3.valor as pais2
		, c.codigo as cod_ciudad, a1.codigo as cod_provincia, a2.codigo as cod_pais, a3.codigo as cod_pais2
		FROM
                CATALOGO s  left join CATALOGO z on s.padre_id=z.id
                left join CATALOGO c on z.padre_id=c.id
                left join CATALOGO a1 on c.padre_id = a1.id
		left join CATALOGO a2 on a1.padre_id = a2.id
		left join CATALOGO a3 on c.padre_id = a3.id and a3.clase = \'pais\'
		where s.clase = \'sector\' and s.valor like \'%'.$this->parametro.'%\'
		order by sector,zona,ciudad, provincia, pais
 ';
        //echo $this->sql;
        $result=$this->db->query($this->sql);
        $data=array();
        while($a = $this->db->fetchByAssoc($result)) {
            $data[]=$a;
        }
       return $data;
    }


    function buscaZonas(){
        $this->sql='SELECT s.id idsector,s.valor sector , z.id idzona,z.valor as zona,
                    c.id,c.valor as ciudad,a1.valor as provincia, a2.valor as pais, a3.valor as pais2
		, c.codigo as cod_ciudad, a1.codigo as cod_provincia, a2.codigo as cod_pais, a3.codigo as cod_pais2
		FROM CATALOGO z left join CATALOGO s  on z.id=s.padre_id
                left join CATALOGO c on z.padre_id=c.id
                left join CATALOGO a1 on c.padre_id = a1.id
		left join CATALOGO a2 on a1.padre_id = a2.id
		left join CATALOGO a3 on c.padre_id = a3.id and a3.clase = \'pais\'
		where (z.clase = \'zona\'  and z.valor like \'%'.$this->parametro.'%\') or (s.clase = \'sector\'  and s.valor like \'%'.$this->parametro.'%\')
		order by zona,ciudad, provincia, pais
 ';
       // echo $this->sql;
        $result=$this->db->query($this->sql);
        $data=array();
        while($a = $this->db->fetchByAssoc($result)) {
            $data[]=$a;
        }
       return $data;
    }
    /**/
     function buscaZona(){
        $this->sql="SELECT a3.valor as zona,a3.id codigo
                    FROM CATALOGO a3
                    where a3.clase='zona' and a3.padre_id like '".$this->parametro."'
                    order by  zona ";
        $result=$this->db->query($this->sql);
        $data=array();
        while($a = $this->db->fetchByAssoc($result)) {
            $data[]=$a;
        }
       return $data;
        
    }

    /*Despliega las zonas dependiendo de parametro de busqueda*/
    /**
     * var @data array
     */
    function despliegaZonas($data=array()){
        $cadena='';
        if(is_array($data)){
            $cadena='';
            $cadena.='<table width="100%">';
	$cadena.='<tr>';
                $cadena.='<th>Zona</th>';
                $cadena.='<th>Sector</th>';
		$cadena.='<th>Ciudad</th>';
		$cadena.='<th>Provincia</th>';
		$cadena.='<th>País</th>';
	$cadena.='</tr>';


	foreach ($data as $row):
		$pais = !empty($row['pais']) ? $row['pais'] : $row['pais2'];
		$ciudad = $row['ciudad'];
		$prov = $row['provincia'];
                $zona=$row['zona'];
                $sector=$row['sector'];

		
		$js = "selectCiudad('$zona','$sector','$ciudad','$prov','$pais')";

		$cadena.='<tr>';
			$cadena.='<td><a href="javascript:'.$js.'">'.$zona.'</a></td>';
                        $cadena.='<td><a href="javascript:'.$js.'">'.$sector.'</a></td>';
			$cadena.='<td>'. $ciudad .'</td>';
                        $cadena.='<td>'. $prov .'</td>';
			$cadena.='<td>'.$pais.'</td>';
		$cadena.='</tr>';
        endforeach;

                $cadena.='</table>';

        }
        return $cadena;
    }


    function buscaDetalle(){
        if(!empty($this->familia))
        $filtro="and f.id=".$this->familia;
        $this->sql='SELECT d.id producto_id,d.descripcion ,d.secuencia,
                    d.valor AS producto,d.clase as clas,d.codigo as cod,
                    f.id padre_id, f.valor AS familia_name,f.descripcion serie
                    FROM CATALOGO d
                    inner JOIN CATALOGO f ON d.padre_id = f.id
                    where f.clase = "familia_producto"
                    AND d.valor like "%'.$this->parametro.'%"
                    AND d.clase = "detalle_producto" '.$filtro.'
                    ORDER BY producto, familia_name';
       // echo $this->sql;
        $result=$this->db->query($this->sql);
        $data=array();
        while($a = $this->db->fetchByAssoc($result)) {
            $data[]=$a;
        }
       return $data;
    }
    /*Despliega las zonas dependiendo de parametro de busqueda*/
    /**
     * var @data array
     */
    function despliegaDetalle($data=array()){
        $cadena='';
        if(is_array($data)){
            $cadena='';
            $cadena.='<table width="100%">';
            $cadena.='<tr>';
                $cadena.='<th>Item</th>';
		$cadena.='<th>Descripcion-Serie</th>';
                $cadena.='<th>Codigo WP</th>';
		$cadena.='<th>Codigo Proveedor</th>';
                $cadena.='<th>PVP</th>';
		
	$cadena.='</tr>';


	foreach ($data as $row):
		$item = !empty($row['producto']) ? $row['producto'] : $row['producto'];
		$descripcion= explode("|",$row['descripcion']);
		$clase = $row['clas'];
                $cod=$row['cod'];
                $valor=(empty($descripcion[2]))? 0 : $descripcion[2];
                $codigo_producto=(empty($descripcion[0]))? 0 : $descripcion[0];
                $codigo_proveedor=(empty($descripcion[1]))? '' : $descripcion[1];
                $codigo_catalogo=$row['producto_id'];
                $tableId='OpportunitiesAmbienteTable';
                $serie=(empty($descripcion[3]))? '' : $descripcion[3];
                $cantidad=0;
                $texto=$row['padre_id'].'|'.$row['familia_name'].'|'.$row['serie'].'|'.$codigo_proveedor;
	        $js = "addMaterial('$tableId','','$codigo_catalogo','$item','$cantidad','$codigo_producto','".$serie."','$valor','$texto')";

		$cadena.='<tr>';

			$cadena.='<td><a href="javascript:'.$js.'">'.$item.'</a></td>';
			$cadena.='<td>'. $serie .'</td>';
                        $cadena.='<td>'. $codigo_producto .'</td>';
                        $cadena.='<td>'. $codigo_proveedor .'</td>';
			$cadena.='<td>'.$valor.'</td>';
		$cadena.='</tr>';
        endforeach;

                $cadena.='</table>';

        }
        return $cadena;
    }






    function buscaMedio($var){
        
        $filtro=$var;
        
        $this->sql='SELECT id ,name
                    FROM bos_mediocontacto where name like "%'.$filtro.'%"
                    ORDER BY name';
       // echo $this->sql;
        $result=$this->db->query($this->sql);
        $data=array();
        while($a = $this->db->fetchByAssoc($result)) {
            $data[]=$a;
        }
       return $data;
    }
    /*Despliega las zonas dependiendo de parametro de busqueda*/
    /**
     * var @data array
     */
    function despliegaMedio($data=array()){
        $cadena='';
        if(is_array($data)){
            $cadena='';
            $cadena.='<table width="100%">';
	$cadena.='<tr>';
                $cadena.='<th>Nombre</th>';
		
	$cadena.='</tr>';


	foreach ($data as $row):
		$id=$row['id'];
                $name=$row['name'];
               
	        $js = "addMedio('$id','$name')";
		$cadena.='<tr>';
		$cadena.='<td><a href="javascript:'.$js.'">'.$name.'</a></td>';
		$cadena.='<td></td>';
		$cadena.='</tr>';
        endforeach;

                $cadena.='</table>';

        }
        return $cadena;
    }






    function despliegaZona($data=array()){
        if(is_array($data)){

            foreach($data as $row){
                 $cadena.="<option value='".$row['codigo']."'>".$row['zona']."</option>";
            }
            return $cadena;
        }
    }
    function despliegaCiudad($data=array()){
        if(is_array($data)){

            foreach($data as $row){
                    $cadena.="<option value='".$row['codigo']."'>".$row['ciudad']."</option>";
            }
            return $cadena;
        }
    }

    function despliegaProvincia($data){
        if(is_array($data)){

            foreach($data as $row){
                    $cadena.="<option value='".$row['codigo']."'>".$row['provincia']."</option>";
            }
            return $cadena;
        }

    }
function despliegaSector($data){
        if(is_array($data)){

            foreach($data as $row){
                    $cadena.="<option value='".$row['idzona']."'>".$row['sector']."</option>";
            }
            return $cadena;
        }

    }
    /* Busca todos los tecnicos registrados en el catalogo */
    /*
     *
     * @return $data array
     */
    function buscaTecnicos(){
         $this->sql='SELECT clase, valor tecnico ,descripcion , id as codigo,codigo cod
		FROM CATALOGO where clase="tecnico"
		order by tecnico';
        $result=$this->db->query($this->sql);
        $data=array();
        while($a = $this->db->fetchByAssoc($result)) {
            $data[]=$a;
        }
       return $data;

    }
    /*
     * Despliega todos los tecnicos
     */
    function despliegaTecnicos($data,$view=''){
     $cadena='';
        if(is_array($data)){
            $cadena='';
            $cadena.='<table width="100%">';
	$cadena.='<tr>';
                $cadena.='<th>Nombre Tecnico</th>';
		$cadena.='<th>Descripcion</th>';
		$cadena.='<th>Clase</th>';

	$cadena.='</tr>';


	foreach ($data as $row):
		$tecnico = !empty($row['tecnico']) ? $row['tecnico'] : $row['tecnico'];
		$descripcion= $row['descripcion'];
		$clase = $row['clase'];
               // $codigo=$row['codigo'];
                $cod=$row['cod'];
              
                $tableId='bos_OrdenInstalacionDomesticaAmbienteTable1';
                $cantidad=0;
                $valor=0;
	        $js = "addTecnicos('$tableId','$codigo','$cod','$clase','$tecnico','$cantidad','$valor','$descripcion')";

		$cadena.='<tr>';

			$cadena.='<td><a href="javascript:'.$js.'">'.$tecnico.'</a></td>';
			$cadena.='<td>'. $descripcion .'</td>';
                
			$cadena.='<td>'.$clase.'</td>';
		$cadena.='</tr>';
        endforeach;

                $cadena.='</table>';

        }
        return $cadena;

    }


    /* Busca todos las familias  registrados en el catalogo */
    /*
     *
     * @return $data array
     */
    function buscaFamila(){
         $this->sql='SELECT clase, valor tecnico ,descripcion , id as codigo
		FROM CATALOGO where clase="familia_producto" and padre_id is null
                order by tecnico';
         
        $result=$this->db->query($this->sql);
        $data=array();
        while($a = $this->db->fetchByAssoc($result)) {
            $data[]=$a;
        }
       return $data;

    }
    /*
     * Despliega todos los tecnicos
     */
    function despliegaCatalogo($data){
     $cadena='';
        if(is_array($data)){
            $cadena='';
            $cadena.='<table width="100%">';
	$cadena.='<tr>';
                $cadena.='<th>Nombre Tecnico</th>';
		$cadena.='<th>Descripcion</th>';
		$cadena.='<th>Clase</th>';

	$cadena.='</tr>';


	foreach ($data as $row):
		$tecnico = !empty($row['tecnico']) ? $row['tecnico'] : $row['tecnico'];
		$descripcion= $row['descripcion'];
		$clase = $row['clase'];
                $clase=$row['codigo'];
	        $js = "selectCiudad('$zona','$ciudad','$prov','$pais')";

		$cadena.='<tr>';

			$cadena.='<td><a href="javascript:'.$js.'">'.$tecnico.'</a></td>';
			$cadena.='<td>'. $descripcion .'</td>';

			$cadena.='<td>'.$clase.'</td>';
		$cadena.='</tr>';
        endforeach;

                $cadena.='</table>';

        }
        return $cadena;

    }




    
    /* Busca todos los materiales registrados en el catalogo */
    /*
     *
     * @return $data array
     */
    function buscaMateriales(){

        if(!empty($this->familia))
        $filtro="and f.id=".$this->familia;
        $this->sql='SELECT d.valor AS producto,d.id producto_id,d.descripcion,d.secuencia,
                    d.clase as clas,d.codigo as cod,d.clase, 
                    f.id padre_id, f.valor AS familia_name,f.descripcion serie
                    FROM CATALOGO d
                    inner JOIN CATALOGO f ON d.padre_id = f.id
                    where f.clase = "familia_producto"
                    AND d.valor like "%'.$this->parametro.'%"
                    AND d.clase = "materiales" '.$filtro.'
                    ORDER BY producto, familia_name';
       // echo $this->sql;
        $result=$this->db->query($this->sql);
        $data=array();
        while($a = $this->db->fetchByAssoc($result)) {
            $data[]=$a;
        }
       return $data;

//         $this->sql='SELECT clase, valor tecnico ,descripcion , id as codigo,codigo as cod
//		FROM CATALOGO where clase="materiales"
//		order by tecnico';
//        // var_dump($this->sql);
//        $result=$this->db->query($this->sql);
//        $data=array();
//        while($a = $this->db->fetchByAssoc($result)) {
//            $data[]=$a;
//        }
//       return $data;

    }
    /*
     * Despliega todos los materiales
     */
    function despliegaMateriales($data){
     $cadena='';
        if(is_array($data)){
            $cadena='';
            $cadena.='<table width="100%">';
	$cadena.='<tr>';
                $cadena.='<th>Nombre Material</th>';
		$cadena.='<th>Descripcion</th>';
                $cadena.='<th>Valor</th>';
		$cadena.='<th>Tipo Catalogo</th>';
        	$cadena.='</tr>';


	foreach ($data as $row):
		$tecnico = !empty($row['producto']) ? $row['producto'] : $row['producto'];
		$descripcion= explode("|",$row['descripcion']);
                $serie=$descripcion[3];
		$clase = $row['clase'];
                $codigo=$row['producto_id'];
                $cod='';
                $valor=$descripcion[2];

                $tableId='bos_OrdenInstalacionDomesticaAmbienteTable';
                $cantidad=0;
                $texto=$descripcion[0]."|".$descripcion[1]."|".str_replace("&#039"," ",$descripcion[3])."|".str_replace("&#039"," ",$descripcion[4]);
                
	        $js = "addMaterial('$tableId','','$codigo','$clase','$tecnico','$cantidad','$valor','$texto')";

		$cadena.='<tr>';

			$cadena.='<td><a href="javascript:'.$js.'">'.$tecnico.'</a></td>';
			$cadena.='<td>'. $serie .'</td>';
                        $cadena.='<td>'. $valor .'</td>';

			$cadena.='<td>'.$clase.'</td>';
		$cadena.='</tr>';
        endforeach;

                $cadena.='</table>';

        }
        return $cadena;

    }

    /* Busca todos los materiales registrados en el catalogo */
    /*
     *
     * @return $data array
     */
    function buscaRepuestos(){

        if(!empty($this->familia))
        $filtro="and f.id=".$this->familia;
        $this->sql='SELECT d.valor AS producto,d.id producto_id,d.descripcion,d.secuencia,
                    d.clase as clas,d.codigo as cod,d.clase,
                    f.id padre_id, f.valor AS familia_name,f.descripcion serie
                    FROM CATALOGO d
                    inner JOIN CATALOGO f ON d.padre_id = f.id
                    where f.clase = "familia_producto"
                    AND d.valor like "%'.$this->parametro.'%"
                    AND d.clase = "repuestos" '.$filtro.'
                    ORDER BY producto, familia_name';
       // echo $this->sql;
        $result=$this->db->query($this->sql);
        $data=array();
        while($a = $this->db->fetchByAssoc($result)) {
            $data[]=$a;
        }
       return $data;

//         $this->sql='SELECT clase, valor tecnico ,descripcion , id as codigo,codigo as cod
//		FROM CATALOGO where clase="materiales"
//		order by tecnico';
//        // var_dump($this->sql);
//        $result=$this->db->query($this->sql);
//        $data=array();
//        while($a = $this->db->fetchByAssoc($result)) {
//            $data[]=$a;
//        }
//       return $data;

    }
    /*
     * Despliega todos los materiales
     */
    function despliegaRepuestos($data){
     $cadena='';
        if(is_array($data)){
            $cadena='';
            $cadena.='<table width="100%">';
	$cadena.='<tr>';
                $cadena.='<th>Nombre Material</th>';
		$cadena.='<th>Descripcion</th>';
                $cadena.='<th>Valor</th>';
		$cadena.='<th>Tipo Catalogo</th>';

	$cadena.='</tr>';


	foreach ($data as $row):
		$tecnico = !empty($row['producto']) ? $row['producto'] : $row['producto'];
		$descripcion= explode("|",$row['descripcion']);
                $serie=$descripcion[3];
		$clase = $row['clase'];
                $codigo=$row['producto_id'];
                $cod='';
                $valor=$descripcion[2];

                $tableId='bos_OrdenInstalacionDomesticaAmbienteTable';
                $cantidad=0;
                $texto=$descripcion[0]."|".$descripcion[1]."|".str_replace("&#039"," ",$descripcion[3])."|".str_replace("&#039"," ",$descripcion[4]);

	        $js = "addMaterial('$tableId','','$codigo','$clase','$tecnico','$cantidad','$valor','$texto')";

		$cadena.='<tr>';

			$cadena.='<td><a href="javascript:'.$js.'">'.$tecnico.'</a></td>';
			$cadena.='<td>'. $serie .'</td>';
                        $cadena.='<td>'. $valor .'</td>';

			$cadena.='<td>'.$clase.'</td>';
		$cadena.='</tr>';
        endforeach;

                $cadena.='</table>';

        }
        return $cadena;

    }



    /*Funciones para edicio */

    function buscaPorCodigo($id=null){
        $this->sql='SELECT c.id codigo, c.descripcion, c.valor, c.secuencia
                    FROM CATALOGO c
                    where id='.$id;
       // echo $this->sql;
        $result=$this->db->query($this->sql);
        $data=array();
        $a = $this->db->fetchByAssoc($result);
        return $a;
    }
    /* modifica valores como valor y descripcion*/

    function modificar($form=array()){
        $this->sql="update CATALOGO set valor='".$form['valor']."', descripcion='".trim($form['descripcion'])."' where id=".$form['id'];
        
        $result=$this->db->query($this->sql);
        return $result;
    }

    function modificarDetalle($form=array()){
        $descripcion=$form['codigowp'].'|'.$form['codigopr'].'|'.$form['precio'].'|'.$form['serie'];
        $this->sql="update CATALOGO set valor='".$form['valor']."', descripcion='".$descripcion."', secuencia='".trim($form['secuencia'])."' where id=".$form['id'];
        $result=$this->db->query($this->sql);
        return $result;
    }
  function modificarMateriales($form=array()){
        $descripcion=$form['codigowp'].'|'.$form['codigopr'].'|'.$form['precio'].'|'.trim($form['serie'])."|".trim($form['secuencia']);
        $this->sql="update CATALOGO set valor='".$form['valor']."', descripcion='".$descripcion."', secuencia='".trim($form['secuencia'])."' where id=".$form['id'];
        $result=$this->db->query($this->sql);
        return $result;
    }
  
} 


/**
 * Representa un nodo dentro de la secuencia de herencia. Experimental
 */
class Node {

	public $codigo;
	public $desc;
	public $objeto;
	public $children = array();

	function __construct($codigo, $desc='') {
		$this->codigo = $codigo;
		$this->desc = $desc;
	}

	function addChild(Node $child) {
		$this->children[$child->codigo] = $child;
	}

	public function __toString() {
		return "$this->codigo : $this->desc";
	}

	function flatten() {
		foreach ($this->children as $child)
			$stack[] = array('', $child);

		$res = array();
		while (count($stack) > 0) {
			/* @var $node Node */
			list($padre, $node) = array_shift($stack);
			$key = $padre . $node->codigo;
			//$res[$key] = $node->desc;
			$res[$node->codigo] = $key;
			if ($node->children) :
				$rev = array_reverse($node->children);
				$pkey = $key . '.';
				foreach ($rev as $child)
					array_unshift($stack, array($pkey, $child));
			endif;
		}
		return $res;
	}

}
?>
