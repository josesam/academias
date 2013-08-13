/* 
 * Gestiona la busqueda de los dispositivos
 * @author Jose Sambrano
 */
function buscarDispositivo(){

   var data={
       busqueda:$("#dispositivo_filtro").val(),
       modulo:'Dispositivo'
       
   }

   var urllista = "index.php?&module=gtl_DispositivoCliente&action=dispositivo";
                $("#dispositivo_div").text("buscando ...");

                $("#dispositivo_div").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        $("#dispositivo_div").html(response);
                    }else
                        return false;
                });

}


function abrirDispositivo(){

           $("#dispositivo_dlg").dialog({
                            closeOnEscape: true,
                            height: 300 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Busqueda de Dispositivos',
                            width: 500
                            });

}

function copiar(id,name){
    $("#iddispositivo").val(id);
    $("#dispositivoasociado").val(name);
    $("#dispositivo_dlg").dialog("close");

}

