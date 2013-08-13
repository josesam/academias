<div id="catalogozona_dlg" style="display:none;">
    <label>Escoja la direccion</label>
    <select name="tipodireccion" id="tipodireccion">
        <option value="1">Principal</option>
        <option value="2">Envio</option>
        
    </select>
    <br>
    <label>Ingrese zona o sector</label>
    <input type="text" name="filtro_catalogozona" id="filtro_catalogozona" value="">

    <button onclick="javascript:buscarCatalogoZona('Zonas');">Buscar</button>
    <h3>Listado de Zonas</h3>
    <hr>

    <div id="catologozona_div"></div>
</div>