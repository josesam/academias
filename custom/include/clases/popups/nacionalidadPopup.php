<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<div id="nacionalidad_dlg" style="display:none;">
    <div class="seccion" >
    <div class="seccion_head">Búsqueda de Países</div>
    <label>Ingrese el país</label>
    <input type="text" name="nacionalidad_filtro" id="nacionalidad_filtro" value="Ecuador">
    
    <button onclick="javascript:encontrarnacionalidad();">Buscar</button>
    </div>
    <hr>
    <div id="nacionalidad_div"></div>
</div>