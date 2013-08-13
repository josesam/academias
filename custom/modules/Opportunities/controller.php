<?php
/**
 *Verifica la informacion , requerida y el numero de cedula
 * @author Jose Sambrano
 */
class OpportunitiesController extends SugarController
{
     function action_Medios(){
        $this->view = 'medios';
    }
     function action_Contactos(){
        $this->view = 'contactos';
    }
    function action_Controletapas(){
        $this->view = 'controletapas';
    }
    function action_Detalles(){
        $this->view = 'detalles';
    }
    function action_Programas(){
        $this->view = 'programas';
    }

     function action_Contenido(){
        $this->view = 'contenido';
    }
    function action_Verificainfo(){
        $this->view = 'verificainfo';
    }
    function action_Participantes(){
        $this->view = 'participantes';
    }
}
?>