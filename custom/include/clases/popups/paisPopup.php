<?php
/* 
 * 
 * @josesambrano
 */

?>

<div id="pais_dlg" style="display:none;">
    <div class="seccion" >
        <div class="seccion_head">Búsqueda de Países</div>
    <label>Ingrese el pais</label>
    <input type="text" name="pais_filtro" id="pais_filtro" value="">
    <input type="hidden" name="posicion_pais" id="posicion_pais" value="">
    <button onclick="javascript:encontrarpais();">Buscar</button>
    </div>
    <div style="display:block; "></div>
    <hr>
    <div id="pais_div"></div>
</div>