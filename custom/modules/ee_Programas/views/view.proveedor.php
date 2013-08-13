<?php
/**
 *Verifica la informacion , 
 * @author Jose Sambrano
 */
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");


class ee_ProgramasViewProveedor extends ViewEdit {

 	function ee_ProgramasViewProveedor(){
 		parent::ViewEdit();
 	}

 	function process() {
		$this->display();
 	}

 	function display(){



           global $db;

           $sql="SELECT  c.name name
                 FROM ee_proveedor c where  c.deleted =0  and c.name like '%".$_REQUEST['term']."%'";


       
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
