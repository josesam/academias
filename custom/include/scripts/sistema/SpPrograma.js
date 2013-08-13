/* 
 * @author Jose Sambrano
 */
var fila=0;
var nombre;
var bandera=0;
jQuery.noConflict();
jQuery(document).ready(function() {

        

        jQuery("#name").bind('blur',function(){
            if(bandera==0){
                // solo la primera vez
                nombre=jQuery("#name").val();


                  if(typeof(nombre)=='undefined')
                    nombre=''
                  if(nombre==null)
                   nombre=''

        

                if (jQuery("#name").val()!="")
                    bandera=1;
            }

        });

        
        
       jQuery("#coordinador").autocomplete({
         source:"index.php?callback=?&module=ee_Programas&action=profesores&modulo=ee_Profesores&tipo=Coordinador Academico",
            select :function(event, ui) {
            jQuery("#coordinador").val(ui.item.name)     
         }
            //define callback to format results
//            source: function(req, add){
//                //pass request to server
//                jQuery.getJSON("index.php?callback=?&module=ee_Programas&action=profesores&modulo=ee_Profesores&tipo=Coordinador Academico", req, function(data) {
//                   //create array for response objects
//                    var suggestions = [];
//                    //process response
//                    jQuery.each(data, function(i, val){
//                    suggestions.push(val.name);
//                });
//                //pass array to callback
//                add(suggestions);
//            });
//        }
        });


        jQuery("#gerenteproyecto").autocomplete({
           source:"index.php?callback=?&module=ee_Programas&action=profesores&modulo=ee_Profesores&tipo=Gerente de Proyecto",
            select :function(event, ui) {
            jQuery("#gerenteproyecto").val(ui.item.name)
           }
            //define callback to format results
//            source: function(req, add){
//                //pass request to server
//                jQuery.getJSON("index.php?callback=?&module=ee_Programas&action=profesores&modulo=ee_Profesores&tipo=Gerente de Proyecto", req, function(data) {
//                   //create array for response objects
//                    var suggestions = [];
//                    //process response
//                    jQuery.each(data, function(i, val){
//                    suggestions.push(val.name);
//                });
//                //pass array to callback
//                add(suggestions);
//            });
//        }
        });



        jQuery("#asesorcomercial").autocomplete({
           source:"index.php?callback=?&module=ee_Programas&action=profesores&modulo=ee_Profesores&tipo=Asesor Comercial",
            select :function(event, ui) {
            jQuery("#asesorcomercial").val(ui.item.name)
           }
            //define callback to format results
//            source: function(req, add){
//                //pass request to server
//                jQuery.getJSON("index.php?callback=?&module=ee_Programas&action=profesores&modulo=ee_Profesores&tipo=Asesor Comercial", req, function(data) {
//                   //create array for response objects
//                    var suggestions = [];
//                    //process response
//                    jQuery.each(data, function(i, val){
//                    suggestions.push(val.name);
//                });
//                //pass array to callback
//                add(suggestions);
//            });
       // }
        });

           jQuery("#generadoroportunidad").autocomplete({
           source:"index.php?callback=?&module=ee_Programas&action=profesores&modulo=ee_Profesores&tipo=",
            select :function(event, ui) {
            jQuery("#generadoroportunidad").val(ui.item.name)
           }
            //define callback to format results
//            source: function(req, add){
//                //pass request to server
//                jQuery.getJSON("index.php?callback=?&module=ee_Programas&action=profesores&modulo=ee_Profesores&tipo=", req, function(data) {
//                   //create array for response objects
//                    var suggestions = [];
//                    //process response
//                    jQuery.each(data, function(i, val){
//                    suggestions.push(val.name);
//                });
//                //pass array to callback
//                add(suggestions);
//            });
//        }
        });





       jQuery("#item_pop").autocomplete({

            //define callback to format results
            source: function(req, add){
                //pass request to server
                jQuery.getJSON("index.php?callback=?&module=ee_Programas&action=items&modulo=ee_Profesores&categoria="+jQuery("#categoria_pop").val(), req, function(data) {
                   //create array for response objects
                    var suggestions = [];
                    //process response
                    jQuery.each(data, function(i, val){
                    suggestions.push(val.name);
                });
                //pass array to callback
                add(suggestions);
            });
        }
        });




 jQuery("#proveedor_pop").autocomplete({

            //define callback to format results
            source: function(req, add){
                //pass request to server
                jQuery.getJSON("index.php?callback=?&module=ee_Programas&action=proveedor", req, function(data) {
                   //create array for response objects
                    var suggestions = [];
                    //process response
                    jQuery.each(data, function(i, val){
                    suggestions.push(val.name);
                });
                //pass array to callback
                add(suggestions);
            });
        }
        });


jQuery("#categoria_pop").autocomplete({

            //define callback to format results
            source: function(req, add){
                //pass request to server
                jQuery.getJSON("index.php?callback=?&module=ee_Programas&action=categoria", req, function(data) {
                   //create array for response objects
                    var suggestions = [];
                    //process response
                    jQuery.each(data, function(i, val){
                    suggestions.push(val.name);
                });
                //pass array to callback
                add(suggestions);
            });
        }
        });









        jQuery("#lugar_pop").autocomplete({
            //define callback to format results
            source: function(req, add){
                //pass request to server
                jQuery.getJSON("index.php?callback=?&module=ee_Programas&action=ciudad", req, function(data) {
                    //create array for response objects
                    var suggestions2 = [];
                    //process response
                    jQuery.each(data, function(i, val){
                    suggestions2.push(val.name);
                });
                //pass array to callback
                add(suggestions2);
            });
        }
        });

        jQuery("#modulo_pop").autocomplete({
            //define callback to format results
            source:"index.php?callback=?&module=ee_Programas&action=modulo&modulo=ee_Modulo",
            select :function(event, ui) {
            jQuery("#modulo_pop").val(ui.item.name)
            jQuery("#idmodulo_pop").val(ui.item.id_tabla)

         }

        });

     jQuery("#profesor_pop").autocomplete({
            //define callback to format results
              source:"index.php?callback=?&module=ee_Programas&action=profesores&modulo=ee_Profesores&tipo=Instructor",
            select :function(event, ui) {
            jQuery("#profesor_pop").val(ui.item.name)
            jQuery("#idprofesor_pop").val(ui.item.id_tabla)

         }

        
        });

     jQuery("#profesor_pop1").autocomplete({
            //define callback to format results
              source:"index.php?callback=?&module=ee_Programas&action=profesores&modulo=ee_Profesores&tipo=Instructor",
            select :function(event, ui) {
            jQuery("#profesor_pop1").val(ui.item.name)
            jQuery("#idprofesor_pop1").val(ui.item.id_tabla)

         }

        
        });

        jQuery("#modulo_pop1").autocomplete({
            //define callback to format results
            source:"index.php?callback=?&module=ee_Programas&action=modulo&modulo=ee_Modulo",
            select :function(event, ui) {
            jQuery("#modulo_pop1").val(ui.item.name)
            jQuery("#idmodulo_pop1").val(ui.item.id_tabla)

         }

        });


});

borrar_nombre=function(){
    jQuery("#name").val("");
}

formar_nombre=function(){
    if(jQuery("#name").val()==""){
        jQuery("#mensajename").val("Escriba un nombre, para poder proseguir");
        return ''
    }

   jQuery("#mensajename").val("");
    var ia;

    var tipos= ver_tipos();
    if(jQuery("#tipoprograma").val()=="Incompany")
        ia="I";
    else
        ia="A";
    
    

    var cadena=jQuery("#name").val()+"-"+ia+"-"+jQuery("#codigo").val()+"-"+jQuery("#aux_c").val()+"-"+tipos;

    jQuery("#name").val(cadena);
    return '';

}

ver_tipos=function(){
    var contp=0;
    var conts=0;
    var conto=0;
    for (i=0;i<fila;i++){
        if(jQuery("#tipotxt_"+i).val()=="s"){
            conts++;
        }else if(jQuery("#tipotxt_"+i).val()=="p"){
            contp++;
        }else if(jQuery("#tipotxt_"+i).val()=="o"){
            conto++;
        }
    }
    if((conts>=contp)&&(conts>=conto)){
        return "s";
    }else if((contp>=conts)&&(contp>=conto)){
        return "p";
    }else if((conto>=contp)&&(conto>=conts)){
        return "o";
    }

    return "p";

}
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

}
paste=function(ciudad,provincia,pais,pos){
    if(pos=="principal"){
        jQuery("#pais_principal").val(pais);
        jQuery("#provincia_principal").val(provincia);
        jQuery("#ciudad_principal").val(ciudad);
         jQuery("#ciudad_principal_ndb").val(ciudad);
    }else{
        jQuery("#pais_envio").val(pais);
        jQuery("#provincia_envio").val(provincia);
        jQuery("#ciudad_envio").val(ciudad);
    }
    jQuery("#ciudad_dlg").dialog("close");
}
encontrar=function(){
       var data={
            parametro:jQuery("#ciudad").val(),
            pos:jQuery("#posicion").val()
            
        }
        
        var urllista = "index.php?module=Accounts&action=direccion";


                jQuery("#resultado_div").text("buscando informacion...");

                jQuery("#resultado_div").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#resultado_div").html(response);
                    }else
                        return false;
                });
    
}

openVerificacion=function(){
   var flag=true;
       var data={
            name:jQuery("#name").val(),
            fechaingreso:jQuery("#fechaingreso").val(),
            estado_c:jQuery("#estado_c").val(),
            tipo_documento:jQuery("#tipocliente_c").val(),
            ruc:jQuery("#nrodocumento_c").val(),
            nacionalidad_c:jQuery("#nacionalidad_c").val(),
            record_actual:jQuery("input[name=record]").val(),
            primer_nombre:jQuery("#primernombre").val(),
            segundo_nombre:jQuery("#segundonombre").val(),
            primer_apellido:jQuery("#primerapellido").val(),
            segundo_apellido:jQuery("#segundoapellido").val(),
            razon_social:jQuery("#razonsocial").val(),
            nombre_comercial:jQuery("#nombrecomercial").val(),

            
            modulo:'Accounts'
        }
           jQuery("#verifica_dlg").dialog({
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
            jQuery("#verficainfo").append(val + "<br/>");
            jQuery("#verficainfo").attr("style","color:red");
        });
        Limpiar();
}else{


                var urllista = "index.php?module=Accounts&action=verificainfo";

                jQuery("#verficainfo").text("verificando informacion...");
                jQuery("#verficainfo").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#verficainfo").html(response);
                    }else
                        return false;
                });
  }
 return false;

}
Limpiar=function(){
    errores=new Array(20);
}
check_custom_data=function(){
   // alert("ca");
    openVerificacion();

    return false;
}

guardar=function(){

if(check_form('EditView')){
  SUGAR.ajaxUI.submitForm(document.forms['EditView']);return false;
 }else
   alert('Existio un problema ... Comuniquese con el administrador');


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