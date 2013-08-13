/* 
 * @author Jose Sambrano
 */


jQuery(document).ready(function() {
        jQuery("#tipocliente_c").bind('change', function (){
            cambiar();
        });

        jQuery("#filtro_medios").keypress(function(event) {
                if ( event.which == 13) { buscarMedios(); }

        });

        jQuery("#nacionalidad_filtro").keypress(function(event) {
                if ( event.which == 13) { encontrarnacionalidad(); }

        });
        jQuery("#ciudad").keypress(function(event) {
                if ( event.which == 13) { encontrar(); }

        });
        jQuery("#pais_filtro").keypress(function(event) {
                if ( event.which == 13) { encontrarpais(); }

        });
        jQuery("#seleccionar").change(function(){
            jQuery("#programa").val();

            if(this.value==2){
                 jQuery("#programas_div").text("");
                  jQuery("#botonmedios").text("Añadir");
            }else{
                jQuery("#botonmedios").text("Buscar");
            }
        })

        jQuery("#ciudad_principal").blur(function (event){
            
                jQuery("#ciudad_principal_ndb").val(this.value);
            
        });





        jQuery("#primernombre").bind('blur',function(){
            llenar();
        });
        jQuery("#segundonombre").bind('blur',function(){
            llenar();
        });
        jQuery("#primerapellido").bind('blur',function(){
            llenar();
        });
        jQuery("#segundoapellido").bind('blur',function(){
            llenar();
        });
        jQuery("#razonsocial").bind('blur',function(){
            llenar();
        });



        if((jQuery("#mediocontacto").val()=='Otro')){
            jQuery("#detallemedio").attr('readonly',false)
            jQuery("#detalle_link").hide();
        }else{
            jQuery("#detallemedio").attr('readonly',true)
            jQuery("#detalle_link").show();
        }


var valor =jQuery("#nacionalidad_c").val();
    if ((valor!='Ecuador')&&(valor!='')){

            jQuery("#a_secundario").show();
            jQuery("#a_principal").show();
            jQuery("#ciudad_link").hide();
            jQuery("#ciudadse_link").hide();
        }else{
            jQuery("#a_secundario").hide();
            jQuery("#a_principal").hide();

            jQuery("#ciudad_link").show();
            jQuery("#ciudadse_link").show();
        }

jQuery("#tipodescuento_c").bind('change',function (){

          if (this.value=="Otro"){
                jQuery("#otrodescuento").show();
                jQuery("#otrodescuento_l").show();

          }else{
                jQuery("#otrodescuento").hide();
                jQuery("#otrodescuento_l").hide();
                jQuery("#otrodescuento").val("");
          }
        })

        if (jQuery("#tipodescuento_c").val()=="Otro"){
                jQuery("#otrodescuento").show();
                jQuery("#otrodescuento_l").show();

        }else{
            jQuery("#otrodescuento").hide();
                jQuery("#otrodescuento_l").hide();
        }


        if((jQuery("#tipocliente_c").val()=='Natural')|| (jQuery("#tipocliente_c").val()=='Extranjero')){
             jQuery("#razonsocial").attr("readonly",true)
             jQuery("#nombrecomercial").attr("readonly",true)
             jQuery("#razonsocial").hide();
             jQuery("#nombrecomercial").hide();
             jQuery("#l_razonsocial").hide();
             jQuery("#l_nombrecomercial").hide();
         
             jQuery("#l_phone_alternate").show();
             jQuery("#phone_alternate").show();

             jQuery("#email1_span").show();
             jQuery("#l_email1").show();
             jQuery("#ext").show();
             jQuery("#l_ext").show();

             //jQuery("#l_sectoreconomico_c").hide();
             //jQuery("#sectoreconomico_c").hide();

             jQuery("#l_website").hide();
             jQuery("#website").hide();




             jQuery("#tab3").hide();

             jQuery("#tab4").show();
             
        }else{
             jQuery("#primernombre").attr("readonly",true)
             jQuery("#segundonombre").attr("readonly",true)
             jQuery("#primerapellido").attr("readonly",true)
             jQuery("#segundoapellido").attr("readonly",true)
             jQuery("#primernombre").hide();
             jQuery("#segundonombre").hide();
             jQuery("#primerapellido").hide();
             jQuery("#segundoapellido").hide();
             jQuery("#l_primernombre").hide();
             jQuery("#l_segundonombre").hide();
             jQuery("#l_primerapellido").hide();
             jQuery("#l_segundoapellido").hide();


             jQuery("#l_phone_alternate").hide();
             jQuery("#phone_alternate").hide();

             jQuery("#email1_span").hide();
             jQuery("#l_email1").hide();

              jQuery("#ext").hide();
             jQuery("#l_ext").hide();

             jQuery("#l_sectoreconomico_c").show();
             jQuery("#sectoreconomico_c").show();

             jQuery("#l_website").show();
             jQuery("#website").show();


             jQuery("#tab3").show();

             jQuery("#tab4").hide();
             
       }


});
var errores=new Array(40);

buscar=function(valor){
                jQuery("#resultado_div").text("");
jQuery("#posicion").val(valor);
jQuery("#ciudad_dlg").dialog({
                            closeOnEscape: true,
                            height: 500 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Ciudad',
                            width: 600
                            });
encontrar();
}

buscarpais=function(valor){

jQuery("#posicion_pais").val(valor);
jQuery("#pais_dlg").dialog({
                            closeOnEscape: true,
                            height: 500 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Pais',
                            width: 600
                            });

}


buscar_programas=function(){

jQuery("#programas_dlg").dialog({
                            closeOnEscape: true,
                            height: 500 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Programas',
                            width: 600
                            });

}

nacionalidad=function(){


jQuery("#nacionalidad_dlg").dialog({
                            closeOnEscape: true,
                            height: 500 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Países',
                            width: 600
                            });

encontrarnacionalidad();
}


paste=function(ciudad,provincia,pais,pos,ext){
    if(pos=="principal"){
        jQuery("#pais_principal").val(pais);
        jQuery("#provincia_principal").val(provincia);
        jQuery("#ciudad_principal").val(ciudad);
        jQuery("#phone_alternate").val(ext);
        jQuery("#phone_office").val(ext);
         jQuery("#ciudad_principal_ndb").val(ciudad);
    }else{
        jQuery("#pais_envio").val(pais);
        jQuery("#provincia_envio").val(provincia);
        jQuery("#ciudad_envio").val(ciudad);
    }
    jQuery("#ciudad_dlg").dialog("close");
 
}


selectPais=function(pais,pos){
    if(pos=="principal"){
        jQuery("#pais_principal").val(pais);
    }else{
        jQuery("#pais_envio").val(pais);        
    }
    jQuery("#pais_dlg").dialog("close");

}


pastePrograma=function(repuesto,campo){
//    var repuestos;
//    if((jQuery("#"+campo).val()!='') && (typeof(jQuery("#"+campo).val())!='undefined')){
//        repuestos=jQuery("#"+campo).val()+repuesto+";";
//
//    }else{
//        repuestos=repuesto+";";
//
//    }
//    jQuery("#"+campo).val(repuestos);
//
addCurso('AccountsTable',repuesto);
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

encontrarpais=function(){
       var data={
            parametro:jQuery("#pais_filtro").val(),
            pos:jQuery("#posicion_pais").val()
        }

        var urllista = "index.php?module=Accounts&action=pais";


                jQuery("#pais_div").text("buscando informacion...");

                jQuery("#pais_div").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#pais_div").html(response);
                    }else
                        return false;
                });

}


buscarPrograma=function(){
    
    if (jQuery("#seleccionar").val()=="1"){
                var data={
                        parametro:jQuery("#programa").val()
                }
                var urllista = "index.php?module=Accounts&action=programas";
                jQuery("#programas_div").text("buscando informacion...");
                jQuery("#programas_div").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#programas_div").html(response);
                    }else
                        return false;
                });
    }else{
        jQuery("#programas_div").text("");
        pastePrograma(jQuery("#programa").val(),"cursosinteres");
    }

}

encontrarnacionalidad=function(){
       var data={
            parametro:jQuery("#nacionalidad_filtro").val()


        }

        var urllista = "index.php?module=Accounts&action=nacionalidad";


                jQuery("#nacionalidad_div").text("Buscando ......");

                jQuery("#nacionalidad_div").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#nacionalidad_div").html(response);
                    }else
                        return false;
                });

}

function formato(data)
{
    var string='{';
    jQuery.each(data, function(i, field){
        if((field.name!='action')&&(field.name!='return_module') && (field.name!='return_action') && (field.value!='return_id')){
            if(field.value!='')
               string+='"'+field.name+'":"'+field.value+'",';
            else
               string+='"'+field.name+'":"",';
        }
      });
      string=string.substring(0,string.length-1);
      string+='}';

    return jQuery.parseJSON(string);
}

jQuery.fn.serializeObject = function()
{
    var o = {};
    var a = this.serializeArray();
    jQuery.each(a, function() {
        if (o[this.name] !== undefined) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};

openVerificacion=function(){
        jQuery('input[name=action]').val('verificainfo')
        var a=JSON.stringify(jQuery("#EditView").serializeObject());
        var data=jQuery.parseJSON(a);
        var flag=false;
        flag=check_form('EditView');
                if(flag==false){
                     jQuery("#verifica_dlg").dialog("close");
                     return false;
                }else{
                        jQuery("#verifica_dlg").dialog({
                                    closeOnEscape: true,
                                    height: 500 ,
                                    hide: 'slide',
                                    modal: true ,
                                    title: 'Verificador de Información',
                                    width: 600
                                    });

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

//jQuery("#save_personalizado").attr("disabled",true);
//if(check_form('EditView')){
//
//  SUGAR.ajaxUI.submitForm(document.forms['EditView']);return false;
// }else
//   alert('Existio un problema ... Comuniquese con el administrador');
//return false;
jQuery('input[name=action]').val('Save')
jQuery("#save_personalizado").attr("disabled",true);
//if(check_form('EditView')){
SUGAR.ajaxUI.submitForm(document.forms['EditView']);return false;
// }else
  // alert('Existio un problema ... Comuniquese con el administrador');
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
    jQuery("#nrodocumento_c").val('')
            if ((jQuery("#tipocliente_c").val()=='Natural')||(jQuery("#tipocliente_c").val()=='Extranjero')){
             jQuery("#razonsocial").val('')
             jQuery("#nombrecomercial").val('')
              jQuery("#razonsocial").attr("readonly",true)
             jQuery("#nombrecomercial").attr("readonly",true)
             jQuery("#primernombre").attr("readonly",false)
             jQuery("#segundonombre").attr("readonly",false)
             jQuery("#primerapellido").attr("readonly",false)
             jQuery("#segundoapellido").attr("readonly",false)
             
             jQuery("#descuento_c").val('0')
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


             jQuery("#l_phone_alternate").show();
             jQuery("#phone_alternate").show();

             jQuery("#email1_span").show();
             jQuery("#l_email1").show();
             jQuery("#ext").show();
             jQuery("#l_ext").show();


            // jQuery("#l_sectoreconomico_c").hide();
            // jQuery("#sectoreconomico_c").hide();

             jQuery("#l_website").hide();
             jQuery("#website").hide();

             jQuery("#tab3").hide();

             jQuery("#tab4").show();

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

             jQuery("#l_phone_alternate").hide();
             jQuery("#phone_alternate").hide();

             jQuery("#email1_span").hide();
             jQuery("#l_email1").hide();
             jQuery("#ext").hide();
             jQuery("#l_ext").hide();



             jQuery("#l_sectoreconomico_c").show();
             jQuery("#sectoreconomico_c").show();

             jQuery("#l_website").show();
             jQuery("#website").show();


             jQuery("#tab3").show();
             jQuery("#tab4").hide();
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
                            height: 500 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Detalles',
                            width: 600
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
                            height: 500 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Medios',
                            width: 600
                            });


buscarMedios();

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


borra_medios_sp=function(){
     jQuery("#mediocontacto").val('');
     jQuery("#detallemedio").val('');
}
borra_detalle_sp=function(){

     jQuery("#detallemedio").val('');
}


selectMedio=function(valor){
    //SUGAR.util.doWhen(function(){ return (typeof $ != 'undefined')}, function(){
        jQuery("#mediocontacto").val(valor);
        jQuery("#detallemedio").val('');
        if(jQuery("#mediocontacto").val()=='Otro'){
            jQuery("#detallemedio").attr('readonly',false)
            jQuery("#detalle_link").hide();
        }else{
            jQuery("#detallemedio").attr('readonly',true)
            jQuery("#detalle_link").show();
        }
       jQuery("#medios_dlg").dialog("close");
//});

}

selectDetalle=function(valor){
  //  SUGAR.util.doWhen(function(){ return (typeof $ != 'undefined')}, function(){
        jQuery("#detallemedio").val(valor);
       jQuery("#detalle_dlg").dialog("close");
//});
}

selectNacionalidad=function(valor,id){
  //  SUGAR.util.doWhen(function(){ return (typeof $ != 'undefined')}, function(){
        jQuery("#nacionalidad_c").val(valor);
        jQuery("#ee_nacionalidad_id_c").val(id);
        if(valor!='Ecuador'){

            jQuery("#a_secundario").show();
            jQuery("#a_principal").show();


            jQuery("#ciudad_principal").attr('readonly',false);
            jQuery("#provincia_principal").attr('readonly',false);
            jQuery("#ciudad_envio").attr('readonly',false);
            jQuery("#provincia_envio").attr('readonly',false);

            jQuery("#ciudad_principal").val('');
            jQuery("#provincia_principal").val('');
            jQuery("#ciudad_envio").val('');
            jQuery("#provincia_envio").val('');
            jQuery("#pais_principal").val('');
            jQuery("#pais_envio").val('');
            jQuery("#ciudad_principal_ndb").val('');
            jQuery("#ciudad_link").hide();
            jQuery("#ciudadse_link").hide();
            jQuery("#phone_office").val('');
            jQuery("#phone_alternate").val('');



        }else{

            jQuery("#ciudad_link").show();
            jQuery("#ciudadse_link").show();
            jQuery("#ciudad_principal").attr('readonly',true);
            jQuery("#provincia_principal").attr('readonly',true);
            jQuery("#ciudad_envio").attr('readonly',true);
            jQuery("#provincia_envio").attr('readonly',true);



            jQuery("#ciudad_principal").val('');
            jQuery("#provincia_principal").val('');
            jQuery("#ciudad_envio").val('');
            jQuery("#provincia_envio").val('');
            jQuery("#pais_principal").val('');
            jQuery("#pais_envio").val('');

            jQuery("#ciudad_principal_ndb").val('');
            jQuery("#a_secundario").hide();
            jQuery("#a_principal").hide();
        }

       jQuery("#nacionalidad_dlg").dialog("close");
//});
}



 var fila=0;
        this.hacerFila = function(id, celdas){
		html = "<tr id="+id+">";
		for(var i=0;i<celdas.length;i++)
			html += "<td>"+celdas[i]+"</td>";
		html += "</tr>";
		return html;
	};
        this.limpiarProductos = function(){
		jQuery('tr[id^=prod_row_]').remove();
	};

        cargarCursos=function(tableId,o){



        for(k=0;k<o.length;k++){

            addCurso(
            tableId,            
            o[k].curso
            );

        }

}


         addCurso=function(tableId,
                             curso
                             
                             ){
             var el = document.getElementById("prod_row_"+fila);
             
             if(el) return           
             
             if (curso=='')
                    return;
             
             if(typeof(curso)=='undefined')
                 return;
             
		id_control = "<input type='hidden' name='prod_"+fila+"' id='prod_"+fila+"' value='"+verifica(fila)+"' />";
                cursotxt = "<input type='text' readonly='true' name='cursotxt_"+fila+"' id='cursotxt_"+fila+"' value='"+verifica(curso)+"' size='60' />";
                remove_control = "<a href='javascript:void(0);' onclick='borrar(\""+fila+"\");'>X</a>";
             celdas=[
                 cursotxt,remove_control,id_control
             ];
            row = this.hacerFila('prod_row_'+fila, celdas);
	    jQuery('#'+tableId).append(row);
            fila++;            
        }


    borrar=function (fila){
       jQuery("#prod_row_"+fila).remove();
   }
   verifica=function (val){
        if(typeof(val)=='undefined')
        return ''
         if(val==null)
        return ''
        return val;
    }

