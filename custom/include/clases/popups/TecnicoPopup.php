<?php
/*
 * Popup para listar los tecnicos
 * @author Jose Sambrano
 * B.O.S
 */
?>

<div id="tecnico_dlg" style="display:none;">
    <label>Ingrese el nombre del tecnico</label>
    <input type="text" name="filtro_tecnico" id="filtro_tecnico" value="">
    
    <button onclick="javascript:buscarTecnico('Tecnicos');">Buscar</button>
    <h3>Listado Tecnicos</h3>
    <hr>

    <div id="tecnico_div"></div>
</div>