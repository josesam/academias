/* 
 * @author Jose Sambrano
 */


var errores=new Array(40);
function openVerificacion(){
   var flag=true;



        var data={

            cedula:$("#cedula").val(),
            tipo_documento:$("#tipo").val(),
            cliente:$("#accounts_bos_referidos_name").val(),
            zona:$("#zona").val(),
            nombre_cuenta:$("#name").val(),
            record_actual:$("input[name=record]").val(),
            modulo:'bos_Referidos',
            phone_office:$("#phone_alternate").val(),
            phone_alternate:$("#phone_office").val()

        }
           $("#verifica_dlg").dialog({
                            closeOnEscape: true,
                            height: 300 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Verificador de Informacion',
                            width: 500
                            });


if(flag==false){
 jQuery.each(errores, function(i, val) {
          if(typeof(val)!="undefined")
            $("#verficainfo").append(val + "<br/>");
            $("#verficainfo").attr("style","color:red");
        });
        Limpiar();
}else{

//        etapa_actual=$("#sales_stage").val();
//        if((etapa_actual!='Cotizacion')&&(etapa_actual!='Perdido')){
                var urllista = "index.php?&module=Accounts&action=verificainfo";
                $("#verficainfo").text("verificando informacion...");
                $("#verficainfo").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        $("#verficainfo").html(response);
                    }else
                        return false;
                });
//        }else{
//           var urlduplicidad = "index.php?&module=Accounts&action=verificaduplicidad";
//                $("#verficainfo").text("verificando informacion...");
//                $("#verficainfo").load(urlduplicidad,data, function(response, status, xhr){
//                    if(status=="success"){
//                         $("#verficainfo").html(response);
//
//                    }else
//                        return false;
//                });
//          // $("#verficainfo").html('<h1>La validacion ha sido exitosa </h1><br><center><input onclick="guarda()" type="submit" name="button" value="Guardar"></center>');
//        }
  }
 return false;

}
 function Limpiar(){

    errores=new Array(20);
}
function check_custom_data(){

    openVerificacion();

    return false;
}

function guarda(){


       $("#EditView").attr("action","Save");
       $("#EditView").submit();

}


function esFechaValida(fecha){

   if (fecha != undefined && fecha != "" ){

        if (!/^\d{2}\/\d{2}\/\d{4}$/.test(fecha)){

           return false;
        }
       var dia  =  parseInt(fecha.substring(0,2),10);
       var mes  =  parseInt(fecha.substring(3,5),10);
       var anio =  parseInt(fecha.substring(6),10);

    switch(mes){
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            numDias=31;
            break;
        case 4: case 6: case 9: case 11:
            numDias=30;
            break;
        case 2:
            if (comprobarSiBisisesto(anio)){ numDias=29 }else{ numDias=28};
            break;
        default:

            return false;
    }



        if (dia>numDias || dia==0){

            return false;
        }
        return true;
    }
    return false;

}


function comprobarSiBisisesto(anio){
if ( ( anio % 100 != 0) && ((anio % 4 == 0) || (anio % 400 == 0))) {
    return true;
   }
else {
    return false;
    }
}


function openEtapas(etapa){
      var data={

            clase:$("#clase_c").val()


        }

 $("#etapas_dlg").dialog({
                            closeOnEscape: true,
                            height: 300 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Etapas',
                            width: 500
                            });



 var urllista = "index.php?&module=Accounts&action=controletapas";
                $("#etapas_div").text("verificando informacion...");
                $("#etapas_div").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        $("#etapas_div").html(response);
                    }else
                        return false;
                });
}

function abrirMedios(){
$("#medios_dlg").dialog({
                            closeOnEscape: true,
                            height: 300 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Medios',
                            width: 500
                            });


}

function buscarMedios(){
      var data={
            clase:$("#filtro_medios").val()


        }



                var urllista = "index.php?&module=Accounts&action=medios";
                alert(urllista);
                $("#medios_div").text("buscando medios...");
                $("#medios_div").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        $("#medios_div").html(response);
                    }else
                        return false;
                });
}

function addMedio(id,name){
        $("#idmedio").val(id);
        $("#mediocontacto").val(name);
        //$("#medios_dlg").html(response);
}
