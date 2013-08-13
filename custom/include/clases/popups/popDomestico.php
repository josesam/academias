<style>
    label{
        width:150px;
        float:left;
        font-weight: bold;
    }
    input.datos{
        
        margin: 0 5px;
    }
.seccion{
	border: 1px solid black;
	padding: 5px;
	margin:5px;
	width:40%;
	float:left;
}
.seccion_head{
	font-weight: bold;
	padding:2px;
	text-align: center;
	background-image: url("./custom/include/images/bg_top.jpg");
	color:#CCC;
}

</style>
<div id="domestico" style="display:none;">
<div class="seccion" >
    <div class="seccion_head">
        Datos de tecnicos de instalación
    </div>
<label>Caudal de Diseño</label>
<input type="text" class="datos" name="pcaudal_disenio" id="pcaudal_disenio" value="">
<br>
<label>Presion diseño</label>
<input type="text" class="datos" name="ppresion_disenio" id="ppresion_disenio" value="">
<br>
<label>Diámetro Conexión</label>
<input type="text" class="datos" name="pdiametro_conexion" id="pdiametro_conexion" value="">
<br>
<label>Potencia</label>
<input type="text"  class="datos" name="ppotencia" id="ppotencia" value="">
<br>
<label>Dimensiones</label>
<input type="text" class="datos" name="pdimesiones" id="pdimensiones" value="">
<br>
<label>Capacidad Rata</label>
<input type="text" class="datos" name="pcapacidad_rata" id="pcapacidad_rata" value="">
<br>
<label>Instalación Tipo</label>
<input type="text" class="datos" name="pinstalacion_tipo" id="pinstalacion_tipo" value="">
<br>
<label>Fecuencia</label>
<input type="text" class="datos" name="pfrecuencia" id="pfrecuencia" value="">
<br>
<label>Membrana Tipo</label>
<input type="text" class="datos" name="pmem_tipo" id="pmem_tipo" value="">
<br>
<label>Inyeccion Química</label>
<input type="text" class="datos" name="pinyeccion_quimica" id="pinyeccion_quimica" value="">
<br>
<input type="hidden" name="pfila_actual" id="pfila_actual" value="">

</div>


    <div class="seccion" >
    <div class="seccion_head">
        Datos de comisiones
    </div>


    <label>Proceso Tipo</label>
    <input type="text"  name="pprocesoTipo" id="pprocesoTipo" value="">
    <br>
    <label>Proveedor</label>
    <input type="text" name="pproveedor" id="pproveedor" value="">
    <br>
    <label>Tipo Proveedor</label>
    <select name="ptipoProveedor" id="ptipoProveedor">
        <option value="LOCAL" selected>Local</option>
        <option value="EXTERIOR">Exterior</option>
    </select>
    
    <br>
    <label>Comisión Area Técnica</label>
    <input type="text" class="datos" name="pcomisionAreaTecnica" id="pcomisionAreaTecnica" value="">
    <br>
    <label>Comisión Area Ventas</label>
    <input type="text" class="datos" name="pcomisionVentas" id="pcomisionVentas" value="">
    <br>
    <label>Utilidad</label>
    <input type="text" class="datos" name="putilidad" id="putilidad" value="">
    <br>
    <label>Comisión Tarjetas</label>
    <input type="text" class="datos" name="pcomisionTarjetas" id="pcomisionTarjetas" value="">
    <br>
    </div>
    <br style="clear:both;">
   <input type="button" name="anadir" id="anadir" value="Añadir" onclick="copiar();"></button>
 <div id="progressbar"></div>

</div>