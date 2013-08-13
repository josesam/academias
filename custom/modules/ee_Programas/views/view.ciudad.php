<?php
/**
 *Verifica la informacion , 
 * @author Jose Sambrano
 */
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");


class ee_ProgramasViewCiudad extends ViewEdit {

 	function ee_ProgramasViewCiudad(){
 		parent::ViewEdit();
 	}

 	function process() {
		$this->display();
 	}

 	function display(){



           global $db;
           
           $sql="SELECT  c.name name
                 FROM ee_pais p
                 INNER JOIN ee_pais_ee_provincia_c r1 ON p.id = r1.ee_pais_ee_provinciaee_pais_ida
                 AND p.deleted =0
                 INNER JOIN ee_provincia pr ON pr.id = r1.ee_pais_ee_provinciaee_provincia_idb
                 AND r1.deleted =0
                 INNER JOIN ee_provincia_ee_ciudad_c r2 ON r2.ee_provincia_ee_ciudadee_provincia_ida = pr.id
                 INNER JOIN ee_ciudad c ON c.id = r2.ee_provincia_ee_ciudadee_ciudad_idb
                AND c.deleted =0  and c.name like '%".$_REQUEST['term']."%'";
           

       //    echo $sql;
           $result=$db->query($sql);
           while ($row = $db->fetchByAssoc($result)) {
               $data[]=$row;
           }

                    $json = new JSON(JSON_LOOSE_TYPE);
		//echo $retorno;
                    echo $_GET['callback'] . '(' . $json->encode($data). ')';


                
 	}
       
}


?>
