<?php
/**
 *Verifica la informacion , 
 * @author Jose Sambrano
 */
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");


class ee_ProgramasViewItems extends ViewEdit {

 	function ee_ProgramasViewItems(){
 		parent::ViewEdit();
 	}

 	function process() {
		$this->display();
 	}

 	function display(){



           global $db;

           $sql="SELECT  c.name name
                 FROM ee_items c where  c.deleted =0  and c.name like '%".$_REQUEST['term']."%' and categoria like '%".$_REQUEST['categoria']."%'";


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
