<?php
/*
 * @author Jose Sambrano
 */
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");


class AccountsViewProgramas extends ViewEdit {

 	function AccountsViewProgramas(){
 		parent::ViewEdit();
 	}

 	function process() {
		$this->display();
 	}

 	function display(){

            global $db,$timedate;
            $nombre= $_REQUEST['parametro'];

            $fecha_hoy= $timedate->to_db(date($timedate->get_date_format()));
            
            if(empty($nombre))
                $sql="Select id , name pais from ee_programas p
                     inner join ee_programas_cstm c on p.id=c.id_c where deleted=0 and (estado='Activo' or estado='EnEjecucion') 

                    ";
            else
                $sql="Select id , name pais from ee_programas p
                inner join ee_programas_cstm c on p.id=c.id_c where deleted=0 and name like '%$nombre%' and (estado='Activo' or estado='EnEjecucion')";
            
            $result = $db->query($sql);
                     while($a = $db->fetchByAssoc($result)) {
                            $data[] = $a;
                    }
            echo $this->cargaSectores($data);
 	}

        function cargaSectores($lista){
        global $app_list_strings,$timedate;
          $cadena='<table width="100%" id="hor-minimalist-b">
              <thead>
            <tr>
                <th scope="col">Nombre</th>
                
	</tr>
        </thead>';
          $path="custom/include/clases/varios/FormatUtil.php";
          if(file_exists($path)){
              include_once $path;
              $formato=new FormatUtil();
          }

        if(is_array($lista)){
        
        $cadena.="<tbody>";
          foreach ($lista as $key => $row):
                        $pais = !empty($row['pais']) ? $row['pais'] : $row['pais2'];
                
                        $cadena.='<tr>';
                            $cadena.='<td>
                                      <a href="javascript:void(0);" onclick="javascript:pastePrograma(\''.$pais.'\',\'cursosinteres\')">'.$pais.'</a>';
                            $cadena.='</td>';                        
                        $cadena.='</tr>';
            endforeach;
            $cadena.="</tbody>";
        }else{
            		$cadena.='<tr>';
			$cadena.='<td>No se encontraron programas';                       
                        $cadena.='</td>';
                        $cadena.='</tr>';

        }

$cadena.='</table>';
return $cadena;
        }
}
?>
