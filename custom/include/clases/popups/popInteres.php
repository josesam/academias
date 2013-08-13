<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>


<div id="programas_dlg" style="display:none;">

    <div class="seccion" >
        <div class="seccion_head">Seleccionar el programa de interés</div>
    
    <ul>
        <li>Buscar de Programas existentes:  Carga los programas que la Escuela tiene para ofertar</li>
        <li>Ingreso Manual: Sugerencia o interés de cliente por algún programa</li>
    </ul>

    <label>Ingrese el programa de interés</label>
    <input type="text" name="programa" id="programa" value="" size="25">
    <br>
    <label>Fuente:</label>
    <select id="seleccionar" name="seleccionar">
        <option value="1"> Buscar Programas existentes</option>
        <option value="2">Ingresar Manualmente</option>
    </select>
    <br>
    <button onclick="javascript:buscarPrograma();" id="botonmedios">Buscar</button>
    </div>
    
    
    <hr>
    <div id="programas_div"></div>
</div>