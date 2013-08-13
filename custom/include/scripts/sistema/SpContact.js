/* 
 * @author Jose Sambrano
 */
jQuery.noConflict();
jQuery(document).ready(function() {
        jQuery("#fuente").attr("readonly",true)
        jQuery("#salutation").bind('change',function(){
            if (this.value=="Mr."){
                jQuery("#genero_c").val("Masculino");
            }else
                jQuery("#genero_c").val("Femenino");
        });

        jQuery("#genero_c").bind('change',function(){
            if (this.value=="Masculino"){
                jQuery("#salutation").val("Mr.");
            }else
                jQuery("#salutation").val("Ms.");
        });

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



        jQuery("#do_not_call").bind('click',function (){
            if (jQuery('#do_not_call').is(':checked')) {
                  jQuery("#razones_c").show();
                  jQuery("#l_razones_c_label").show();
                   if(jQuery("#razones_c").val()=='Otro'){
                    jQuery("#l_detalle_c_label").show();
                    jQuery("#detalle_c").show();
                  }else{
                    jQuery("#l_detalle_c_label").hide();
                    jQuery("#detalle_c").hide();
                    jQuery("#detalle_c").val('');
                  }
                  
            } else {
                  jQuery("#razones_c").hide();
                  jQuery("#l_razones_c_label").hide();

                  jQuery("#l_detalle_c_label").hide();
                  jQuery("#detalle_c").hide();
                  jQuery("#detalle_c").val('');

                 
            }
        })


        jQuery("#area_c").bind('change',function (){

            if(jQuery("#area_c").val()=='Otros'){
                  jQuery("#l_otraarea_label").show();
                  jQuery("#otraarea").show();
                  jQuery("#otraarea").val('');
            }else{
                  jQuery("#l_otraarea_label").hide();
                  jQuery("#otraarea").hide();
                  jQuery("#otraarea").val('');

            }

        })


        if(jQuery("#area_c").val()=='Otros'){
                  jQuery("#l_otraarea_label").show();
                  jQuery("#otraarea").show();
                  jQuery("#otraarea").val('');
            }else{
                  jQuery("#l_otraarea_label").hide();
                  jQuery("#otraarea").hide();
                  jQuery("#otraarea").val('');

            }

        jQuery("#razones_c").bind('change',function (){

            if(jQuery("#razones_c").val()=='Otro'){
                  jQuery("#l_detalle_c_label").show();
                  jQuery("#detalle_c").show();
                  jQuery("#detalle_c").val('');
            }else{
                 jQuery("#l_detalle_c_label").hide();
                  jQuery("#detalle_c").hide();
                  jQuery("#detalle_c").val('');
                  
            }

        })
        // PRECARGA
        if (jQuery('#do_not_call').is(':checked')) {
                  jQuery("#razones_c").show();
                  jQuery("#l_razones_c_label").show();
                  if(jQuery("#razones_c").val()=='Otro'){
                    jQuery("#l_detalle_c_label").show();
                    jQuery("#detalle_c").show();
                  }else{
                    jQuery("#l_detalle_c_label").hide();
                    jQuery("#detalle_c").hide();
                    jQuery("#detalle_c").val('');
                  }
                  
            } else {
                  jQuery("#razones_c").hide();
                  jQuery("#l_razones_c_label").hide();
                  jQuery("#l_detalle_c_label").hide();
                  jQuery("#detalle_c").hide();
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





});
function check_custom_data(){

    openVerificacion();
    return false;
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
guardar=function(){
    jQuery('input[name=action]').val('Save')
    jQuery("#save_personalizado").attr("disabled",true);
//if(check_form('EditView')){
  SUGAR.ajaxUI.submitForm(document.forms['EditView']);return false;
// }else
  // alert('Existio un problema ... Comuniquese con el administrador');
return false;

}

openVerificacion=function(){
jQuery('input[name=action]').val('verificainfo')
var a=JSON.stringify(jQuery("#EditView").serializeObject());

var data=jQuery.parseJSON(a);

var flag=false;



flag=check_form('EditView');

if(flag==false){

 return false;
}else{

           jQuery("#verifica_dlg").dialog({
                            closeOnEscape: true,
                            height: 500 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Verificador de Informacion',
                            width: 600
                            });


if(flag==false){
 jQuery.each(errores, function(i, val) {
          if(typeof(val)!="undefined")
            jQuery("#verficainfo").append(val + "<br/>");
            jQuery("#verficainfo").attr("style","color:red");
        });
        Limpiar();
}else{
                var urllista = "index.php?module=Contacts&action=verificainfo";

                jQuery("#verficainfo").text("verificando informacion...");
                jQuery("#verficainfo").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#verficainfo").html(response);
                    }else
                        return false;
                });
  }
}
 return false;

}



llenar=function(){


        jQuery("#first_name").val(jQuery("#primernombre").val()+" "+jQuery("#segundonombre").val());
        jQuery("#last_name").val(jQuery("#primerapellido").val()+" "+jQuery("#segundoapellido").val());


}

encontrarpais=function(){
       var data={
            parametro:jQuery("#pais_filtro").val(),
            pos:jQuery("#posicion_pais").val()
        }

        var urllista = "index.php?module=Contacts&action=pais";


                jQuery("#pais_div").text("buscando informacion...");

                jQuery("#pais_div").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#pais_div").html(response);
                    }else
                        return false;
                });

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
            jQuery("#phone_work").val('');
            jQuery("#phone_other").val('');



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


encontrarnacionalidad=function(){
       var data={
            parametro:jQuery("#nacionalidad_filtro").val(),


        }

        var urllista = "index.php?module=Contacts&action=nacionalidad";


                jQuery("#nacionalidad_div").text(" buscando...");

                jQuery("#nacionalidad_div").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#nacionalidad_div").html(response);
                    }else
                        return false;
                });

}


nacionalidad=function(){


jQuery("#nacionalidad_dlg").dialog({
                            closeOnEscape: true,
                            height: 500 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Pais',
                            width: 600
                            });

encontrarnacionalidad();
}

buscarpais=function(valor){
jQuery("#pais_div").text("");
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

selectPais=function(pais,pos){
  //  alert(pos)
    if(pos=="principal"){
        jQuery("#pais_principal").val(pais);
    }else{
        jQuery("#pais_envio").val(pais);
    }
    jQuery("#pais_dlg").dialog("close");

}


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
encontrar();
}
paste=function(ciudad,provincia,pais,pos,ext){
    if(pos=="principal"){
        jQuery("#pais_principal").val(pais);
        jQuery("#provincia_principal").val(provincia);
        jQuery("#ciudad_principal").val(ciudad);
        if ((jQuery("#phone_mobile").val()=='593 92 000 0000') || (jQuery("#phone_mobile").val()==''))
            jQuery("#phone_mobile").val("593 92 000 0000");
        if ((jQuery("#phone_work").val()=='593 2 000 0000') || (jQuery("#phone_work").val()==''))
            jQuery("#phone_work").val(ext);
        if ((jQuery("#phone_other").val()=='593 2 000 0000') || (jQuery("#phone_other").val()==''))
            jQuery("#phone_other").val(ext);
//        jQuery("#phone_other").val(ext);
//        jQuery("#phone_work").val(ext);
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
        
        var urllista = "index.php?module=Contacts&action=direccion";


                jQuery("#resultado_div").text("buscando informacion...");

                jQuery("#resultado_div").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#resultado_div").html(response);
                    }else
                        return false;
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

verifica=function (val){
        if(typeof(val)=='undefined')
        return ''
         if(val==null)
        return ''
        return val;
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

