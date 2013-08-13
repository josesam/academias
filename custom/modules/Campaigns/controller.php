<?php
/**
 *Verifica la informacion , requerida y el numero de cedula
 * @author Jose Sambrano
 */
class CampaignsController extends SugarController
{
    function action_Contacto(){
        $this->view = 'contacto';
    }

    function action_Cuentas(){
        $this->view = 'cuentas';
    }

    function action_Cuentasb(){
        $this->view = 'cuentasb';
    }

    function action_Oportunidad(){
        $this->view = 'oportunidad';
    }

    function action_Participante(){
        $this->view = 'participante';
    }
    
    
}
?>