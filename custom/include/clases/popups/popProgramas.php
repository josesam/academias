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
<div id="programa" style="display:none;">
<div class="seccion" >
    <div class="seccion_head">
            Datos
    </div>
<label>Modulo</label>
<input type="text" class="datos" name="pcaudal_disenio" id="pcaudal_disenio" value="">
<br>
<label>Profesor</label>
<input type="text" class="datos" name="ppresion_disenio" id="ppresion_disenio" value="">
<br>
<label>Tipo</label>
<input type="text" class="datos" name="pdiametro_conexion" id="pdiametro_conexion" value="">
<br>

</div>
<br>
<input type="button" name="anadir" id="anadir" value="Añadir" onclick="copiar();"></button>
