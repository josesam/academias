function cargarCiudades(){
	$('#ciudades').html('<option selected>Cargando</option>');

        $('#provinciaTexto').val($('#provincia option:selected').text());

 	var linea= $('#provincia').val();
         var toLoad = "index.php?&module=Accounts&action=ciudad&provincia="+ linea ;



	$.post(toLoad,function (responseText){

	$('#ciudades').html(responseText);

							});

}
function textoCiudades(){

        $('#ciudadTexto').val($('#ciudades option:selected').text());



}