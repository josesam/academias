<?php
/**
 *Verifica la informacion , requerida y el numero de cedula
 * @author Jose Sambrano
 */
class ee_ProfesoresController extends SugarController
{
    function action_Verificainfo(){
        $this->view = 'verificainfo';
    }
    function action_Direccion(){
        $this->view = 'direccion';
    }

}
?>