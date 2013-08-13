<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class CargaScripts{

    function cargar(){

        echo '
               <script type="text/javascript"  src="custom/include/scripts/genericas/varios/jquery.js"></script>
               <script type="text/javascript"  src="custom/include/scripts/genericas/jquery/js/jquery-ui.min.js"></script>
               <link rel="stylesheet" type="text/css" href="custom/include/scripts/genericas/jquery/css/jquery-ui.css" />
               <script language="JavaScript" src="custom/include/scripts/genericas/varios/jquery.maskedinput.js"></script>
               <script language="JavaScript" src="custom/include/scripts/genericas/varios/jquery.numeric.pack.js"></script>
               <script language="JavaScript" src="custom/include/scripts/genericas/varios/jquery.floatnumber.js"></script>
               <script type="text/javascript" src="custom/include/scripts/sistema/SpOportunidad.js"></script>

               ';
                if(file_exists('custom/include/clases/popups/EtapasPopup.php'))
                include_once 'custom/include/clases/popups/EtapasPopup.php';
                 if(file_exists('custom/include/clases/popups/popMedios.php'))
                include_once 'custom/include/clases/popups/popMedios.php';
if(file_exists('custom/include/clases/popups/popDetalles.php'))
                include_once 'custom/include/clases/popups/popDetalles.php';

               

    }
}
?>
