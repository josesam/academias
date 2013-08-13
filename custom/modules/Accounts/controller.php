<?php
/**
 *Verifica la informacion , requerida y el numero de cedula
 * @author Jose Sambrano
 */
class AccountsController extends SugarController
{
    function action_Verificainfo(){
        $this->view = 'verificainfo';
    }

    function action_Direccion(){
        $this->view = 'direccion';
    }

    function action_Programas(){
        $this->view = 'programas';
    }

    function action_Medios(){
        $this->view = 'medios';
    }
    
    function action_Detalles(){
        $this->view = 'detalles';
    }
    function action_Nacionalidad(){
        $this->view = 'nacionalidad';
    }
    function action_Pais(){
        $this->view = 'pais';
    }
}
?>