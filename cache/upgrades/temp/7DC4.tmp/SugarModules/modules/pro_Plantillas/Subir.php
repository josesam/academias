<script type="text/javascript"  src="custom/include/scripts/jquery.js"></script>
<script type="text/javascript"  src="custom/include/jquery/js/jquery-ui.min.js"></script>
<script type="text/javascript"  src="custom/include/scripts/jquery.alphanumeric.pack.js"></script>
<script type="text/javascript" src="custom/include/scripts/jquery.delegate.js"></script>
<link rel="stylesheet" type="text/css" href="custom/include/jquery/css/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="custom/include/jquery/css/jquery-ui.css" />
 <script src="custom/include/scripts/jquery.form.js"></script>
<script type="text/javascript" src="custom/include/scripts/jquery.dataTables.js"></script>
<link rel="stylesheet" type="text/css" href="custom/include/scripts/demo_page.css" />
<link rel="stylesheet" type="text/css" href="custom/include/scripts/demo_table.css" />
<script type="text/javascript" src="custom/include/lightbox/js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" href="custom/include/lightbox/css/jquery.lightbox-0.5.css" type="text/css" media="screen" />
<style>
    label{
width: 8em;
float: left;
text-align: right;
margin-right: 0.5em;
display: block
}
.nolinea{
    text-decoration: none;

}
ul.galeria {
list-style-type: none;
background-image: url(navi_bg.png);
height: 80px;
width: 663px;
margin: auto;
}
li.imggaleria {
float: left;
}
ul.galeria a {
background-image: url(navi_bg_divider.png);
background-repeat: no-repeat;
background-position: right;
padding-right: 32px;
padding-left: 32px;
display: block;
line-height: 80px;
text-decoration: none;
font-family: Georgia, "Times New Roman", Times, serif;
font-size: 21px;
color: #371C1C;
}
.submit input
{
margin-left: 4.5em;
}
textarea{
    width: 260px;
    height: 140px;
}
</style>

<h4>Adjuntar Imagenes a este proyecto</h4>
<b>Tipos de archivo válidos</b> <br>
Con el fin de mantener la seguridad en el sistema, solo se permiten los siguientes formatos de archivo los cuales se
distinguen por la extensión final del mismo. La extensión del archivo suelen ser las últimas tres o cuatro letras luego del punto
en el nombre del archivo.
<br>
<ul>
	<li>Imágenes: .JPG, .JPEG, .BMP, .GIF, .TIFF</li>
</ul>

El tamaño máximo del archivo es de 750kb.

<hr>
<form method="post" id="form_carga" enctype="multipart/form-data">
<label>Archivo</label>
<input type="file" name="archivo" id="archivo" size="60">
<br>
<label>Titulo</label>
<input type="text" name="tipo" id="tipo" size="60" maxlenght="70">
<input type="hidden" name="cambiar" id="tipo" size="60" value="1" maxlenght="70">
<br>

<label>Descripción</label>
<textarea name="descripcion" id="descripcion" size="40" maxlength="100" ></textarea>
<br>
<input type="submit" value="Cargar" name="Cargar" id="Cargar">
<input type="hidden" value="true" name="cargar" id="cargar">
</form>
<hr>
<div id="mensaje" style="display:none;">
	Actualizando lista...
</div>
<div id='lista' style="min-height: 200px">Actualizando lista...</div>

<script type="text/javascript">

	var url_carga = 'index.php?&module=Accounts&action=file&id=plantillas';

	function eliminar(id, nombre,parent) {
		if(!confirm('Seguro desea eliminar el archivo '+nombre))
			return;
                var data={
                    id:id,
                    parent_id:parent
                }
		$('#mensaje').show();
		$('#lista').load(
			'index.php?&module=Accounts&action=eliminar'
			, data
			, function(){ $('#mensaje').hide(); }
		);
	}
    function limpiar(){

                                $('input#archivo').val("");
                                                               $('#archivo').val("");
                                                               $("input:file").val("");
                               $('input#tipo').val("");
				$('textarea#descripcion').val("");


        $('#mensaje').hide();


    }
	$(document).ready(function() {
		var options = {
			target: '#lista',
			url: url_carga,
			iframe: true,
			beforeSubmit: function() {
				$('#mensaje').show();
			},
			complete: function() { // puede ser success si hay algo que hacer cuando termine
				limpiar();

			}
		};

		$('#form_carga').submit(function() {
                       if ($('input#archivo').val()!="")
                        $(this).ajaxSubmit(options);
                        else{
                            $('#mensaje').text("Escoja un archivo");
                                $('#mensaje').show();
                           }
                   	return false;
		});
		$('#lista').load(url_carga);
});


</script>
