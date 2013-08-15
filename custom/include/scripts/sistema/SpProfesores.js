/* 
 * @author Jose Sambrano
 */


jQuery(document).ready(function() {
       jQuery("#ciudad").keypress(function(event) {
                if ( event.which === 13) { encontrar(); }

        });
        var decimal=2;
  var separador=".";
  jQuery("#nivelconocimiento").numeric();
jQuery("#nivelconocimiento").floatnumber(separador,decimal);

});


var errores=new Array(40);

buscar=function(valor){
                jQuery("#resultado_div").text("");
jQuery("#posicion").val(valor);
jQuery("#ciudad_dlg").dialog({
                            closeOnEscape: true,
                            height: 300 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Ciudad',
                            width: 500
                            });

};
paste=function(ciudad,provincia,pais,pos){
    if(pos==="principal"){
        jQuery("#pais_principal").val(pais);
        jQuery("#provincia_principal").val(provincia);
        jQuery("#ciudad_principal").val(ciudad);
       
    }else{
        jQuery("#pais_envio").val(pais);
        jQuery("#provincia_envio").val(provincia);
        jQuery("#ciudad_envio").val(ciudad);
    }
    jQuery("#ciudad_dlg").dialog("close");
};
encontrar=function(){
       var data={
            parametro:jQuery("#ciudad").val(),
            pos:jQuery("#posicion").val()
            
        };
        
        var urllista = "index.php?module=ee_Profesores&action=direccion";


                jQuery("#resultado_div").text("buscando informacion...");

                jQuery("#resultado_div").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#resultado_div").html(response);
                    }else
                        return false;
                });
    
};

openVerificacion=function(){
   var flag=true;
       var data={
            name:jQuery("#last_name").val(),
            tipo_documento:jQuery("#tipodocumento").val(),
            ruc:jQuery("#documentoidentidad_c").val(),
            equipo:jQuery("#id_EditView_team_name_collection_0").val(),
            record_actual:jQuery("input[name=record]").val(),
            codigobanner:jQuery("#codigobanner").val(),
            modulo:'ee_Profesores'
        };
           jQuery("#verifica_dlg").dialog({
                            closeOnEscape: true,
                            height: 300 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Verificador de Informacion',
                            width: 500
                            });


if(flag===false){
 jQuery.each(errores, function(i, val) {
          if(typeof(val)!=="undefined")
            jQuery("#verficainfo").append(val + "<br/>");
            jQuery("#verficainfo").attr("style","color:red");
        });
        Limpiar();
}else{


                var urllista = "index.php?module=ee_Profesores&action=verificainfo";

                jQuery("#verficainfo").text("verificando informacion...");
                jQuery("#verficainfo").load(urllista,data, function(response, status, xhr){
                    if(status==="success"){
                        jQuery("#verficainfo").html(response);
                    }else
                        return false;
                });
  }
 return false;

};
Limpiar=function(){
    errores=new Array(20);
};
check_custom_data=function(){
   // alert("ca");
    openVerificacion();

    return false;
};

guardar=function(){

if(check_form('EditView')){
  SUGAR.ajaxUI.submitForm(document.forms['EditView']);return false;
 }


return false;

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

cambiar=function(){
            if ((jQuery("#tipocliente_c").val()=='Natural')||(jQuery("#tipocliente_c").val()=='Extranjero')){
             jQuery("#razonsocial").val('')
             jQuery("#nombrecomercial").val('')
              jQuery("#razonsocial").attr("readonly",true)
             jQuery("#nombrecomercial").attr("readonly",true)
             jQuery("#primernombre").attr("readonly",false)
             jQuery("#segundonombre").attr("readonly",false)
             jQuery("#primerapellido").attr("readonly",false)
             jQuery("#segundoapellido").attr("readonly",false)
              jQuery("#tab3").hide();
             jQuery("#descuento_c").val('0')
                          jQuery("#tab2").show();
                          jQuery("#name").val('');
             
              jQuery("#primernombre").show();
             jQuery("#segundonombre").show();
             jQuery("#primerapellido").show();
             jQuery("#segundoapellido").show();

             jQuery("#l_primernombre").show();
             jQuery("#l_segundonombre").show();
             jQuery("#l_primerapellido").show();
             jQuery("#l_segundoapellido").show();

             jQuery("#razonsocial").hide();
             jQuery("#nombrecomercial").hide();
             jQuery("#l_razonsocial").hide();
             jQuery("#l_nombrecomercial").hide();

            }
             if (jQuery("#tipocliente_c").val()=='Juridico'){
             jQuery("#primernombre").val('')
             jQuery("#segundonombre").val('')
             jQuery("#primerapellido").val('')
             jQuery("#segundoapellido").val('')
             jQuery("#primernombre").attr("readonly",true)
             jQuery("#segundonombre").attr("readonly",true)
             jQuery("#primerapellido").attr("readonly",true)
             jQuery("#segundoapellido").attr("readonly",true)

             jQuery("#razonsocial").attr("readonly",false)
             jQuery("#nombrecomercial").attr("readonly",false)

         
             jQuery("#l_razonsocial").show();
             jQuery("#l_nombrecomercial").show();
             jQuery("#razonsocial").show();
             jQuery("#nombrecomercial").show();


            jQuery("#primernombre").hide();
             jQuery("#segundonombre").hide();
             jQuery("#primerapellido").hide();
             jQuery("#segundoapellido").hide();
             jQuery("#l_primernombre").hide();
             jQuery("#l_segundonombre").hide();
             jQuery("#l_primerapellido").hide();
             jQuery("#l_segundoapellido").hide();

             jQuery("#tab2").hide();
             jQuery("#tab3").show();
             jQuery("#descuento_c").val('0')
             jQuery("#name").val('');
            }

}


llenar=function(){

    if((jQuery("#tipocliente_c").val()=='Natural')|| (jQuery("#tipocliente_c").val()=='Extranjero')){
        jQuery("#name").val(jQuery("#primernombre").val()+" "+jQuery("#segundonombre").val()+" "+jQuery("#primerapellido").val()+" "+jQuery("#segundoapellido").val());
    }else{
        jQuery("#name").val(jQuery("#razonsocial").val());
        jQuery("#nombrecomercial").val(jQuery("#razonsocial").val());
    }


}




openDetalle=function(){
      var data={
            nombre:jQuery("#mediocontacto").val()
        }

             jQuery("#detalle_dlg").dialog({
                            closeOnEscape: true,
                            height: 300 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Detalles',
                            width: 500
                });


if(jQuery("#mediocontacto").val()!=''){
 var urllista = "index.php?&module=Accounts&action=detalles";
                jQuery("#detalle_div").text("Buscando etapas de ventas...");
                jQuery("#detalle_div").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#detalle_div").html(response);
                    }else
                        return false;
                });
}else{
    jQuery("#detalle_div").html("Escoja el medio de contacto");
}

}




openMedios=function(){

 jQuery("#medios_dlg").dialog({
                            closeOnEscape: true,
                            height: 300 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Medios',
                            width: 500
                            });




}

buscarMedios=function (){
  var data={


            medio:jQuery("#filtro_medios").val()

        }

 var urllista = "index.php?&module=Accounts&action=medios";
                jQuery("#medios_div").text("verificando informacion...");
                jQuery("#medios_div").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#etapas_div").html(response);
                    }else
                        return false;
                });
}

copiarMedio=function(valor){
    jQuery("#mediocontacto").val(valor);
       jQuery("#etapas_dlg").dialog("close");
}


selectMedio=function(valor){
    SUGAR.util.doWhen(function(){ return (typeof $ != 'undefined')}, function(){
        jQuery("#mediocontacto").val(valor);
        jQuery("#detallemedio").val('');
       jQuery("#medios_dlg").dialog("close");
});

}

selectDetalle=function(valor){
    SUGAR.util.doWhen(function(){ return (typeof $ != 'undefined')}, function(){
        jQuery("#detallemedio").val(valor);
       jQuery("#detalle_dlg").dialog("close");
});
}