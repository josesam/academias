<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class pro_PlantillasController extends SugarController
{
  function  action_save() {
        parent::action_save();
        include_once 'custom/include/clases/documentos/RepositorioPlantillas.php';
        $html=new RepositorioPlantillas();
        $html->guardarContenido($_REQUEST['archivo_c'],from_html($_REQUEST['tiny']));
    }
    function action_Descargar(){
        $this->view='descargar';
    }
}
?>
