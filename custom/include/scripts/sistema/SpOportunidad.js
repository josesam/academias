/* 
 @author Jose Sambrano
 */
jQuery.noConflict();
jQuery(document).ready(function() {
  var decimal=2;
  var separador=".";
  var existe=false;
  var existeout=false;
  var format="999 9 999 9999";
  jQuery("#numemp_c").numeric();
  jQuery("#nrodocumento_c").numeric();
  jQuery("#telefono_pop").mask(format);

  jQuery(".numeric").numeric();
  jQuery(".numeric").floatnumber(separador,decimal);
  jQuery("#amountreal").floatnumber(separador,decimal);
  jQuery("#fechavalidez_c").attr('readonly',true);
  jQuery("#fechavalidez_c_trigger").hide();
  jQuery("#amount").attr('readonly',true);
  jQuery("#numeroparticipantes").numeric();
  jQuery("#amountreal").floatnumber(separador,decimal);

jQuery(".int").numeric();
    jQuery(".datos").numeric(".");
    jQuery(".datos").floatnumber(".",2);
    jQuery(".numeric").numeric(".");
    jQuery(".numeric").floatnumber(".",2);


    jQuery("#opcion_participante").bind('change',function (){

          if (this.value==="database"){
                jQuery("#contacto_manual").hide();
                jQuery("#anadir").val('Buscar');
                jQuery("#participante_pop").show();
                jQuery("#busqueda_participante").text("");

          }else if(this.value==="manual"){
                jQuery("#contacto_manual").show();
                jQuery("#anadir").val('Anadir');
                jQuery("#participante_pop").hide();
                jQuery("#busqueda_participante").text("");
          }else{
                  jQuery("#contacto_manual").hide();
                jQuery("#anadir").val('Buscar');
                jQuery("#participante_pop").show();
                jQuery("#busqueda_participante").text("");
          }
        });

      jQuery("#amountreal").bind('blur',function (){
               if(jQuery("#categoria_c").val()!=='Incompany'){
                   jQuery("#amountreal").val(jQuery("#valortxt_0").val());
                    jQuery("#amount").val(multiplicar(jQuery("#numeroparticipantes").val(),jQuery("#amountreal").val()));
               }else{
                   jQuery("#amountreal").val(jQuery("#valortxt_0").val());
                    jQuery("#amount").val(multiplicar("1",jQuery("#amountreal").val()));
               }

        });

    if(jQuery("#categoria_c")!=='Incompany'){
       jQuery("#amountreal").attr('readonly',true);
    }



jQuery("#numeroparticipantes").bind('blur',function (){

               if(jQuery("#categoria_c").val()!=='Incompany'){
                   jQuery("#amountreal").val(jQuery("#valortxt_0").val());
                   jQuery("#amount").val(multiplicar(jQuery("#numeroparticipantes").val(),jQuery("#amountreal").val()));
               }else{
                   jQuery("#amountreal").val(jQuery("#valortxt_0").val());
                   jQuery("#amount").val(multiplicar("1",jQuery("#valortxt_0").val()));
               }

});


        if(jQuery("#categoria_c").val()!=='Incompany'){
                   jQuery("#amountreal").val(jQuery("#valortxt_0").val());
        
                    jQuery("#amount").val(multiplicar(jQuery("#numeroparticipantes").val(),jQuery("#valortxt_0").val()));
               }else{
                   jQuery("#amountreal").val(jQuery("#valortxt_0").val());
                    jQuery("#amount").val(multiplicar("1",jQuery("#valortxt_0").val()));
               }

        jQuery("#fuente_programa").bind('change',function (){
          jQuery("#busqueda_programas").text('');
          if (this.value==="database"){
                jQuery("#manual_programa").hide();
                jQuery("#anadirpop").val('Buscar');
                jQuery("#programa_pop").show();

          }else{
                jQuery("#manual_programa").show();
                jQuery("#anadirpop").val('Anadir');
                jQuery("#programa_pop").hide();
          }
        });


    jQuery("#categoria_c").bind('change',function (){
           borrar_existencia();
           jQuery("#busqueda_programas").text('');
           jQuery("#sales_stage").val('');
           jQuery("#probability").val('');
           jQuery("#name").val('');
           jQuery("#amount").val('');
           jQuery("#amountreal").val('');
           jQuery("#date_closed").val('');
           jQuery("#detalle_programa").text('');


          if (this.value==="Incompany"){
                jQuery("#tab1").hide();
                if (jQuery("#descuento_c").val()==='')
                    jQuery("#descuento_c").val('0.00');




          }else{
                jQuery("#tab1").show();
                if (jQuery("#descuento_c").val()===' ')
                    jQuery("#descuento_c").val('0.00');

           
          }
        });



     if (jQuery("#categoria_c").val()==="Incompany"){
                jQuery("#tab1").hide();
                if (jQuery("#descuento_c").val()==='');
                    jQuery("#descuento_c").val('0.00');

          }else{
                jQuery("#tab1").show();
                if (jQuery("#descuento_c").val()==='');
                    jQuery("#descuento_c").val('0.00');
          }

    jQuery("#motivo_c").bind('change',function (){


          existe1=false;
       jQuery("#motivo_c option:selected").each(function () {
                if(jQuery(this).text()==="Otro"){
                    existe1=true;

                }

              });


          if (existe1===true){
                jQuery("#otrodescuento").show();
                jQuery("#otrodescuento_l").show();

          }else{
                jQuery("#otrodescuento").hide();
                jQuery("#otrodescuento_l").hide();
                jQuery("#otrodescuento").val("");
          }
        });

        if (jQuery("#motivo_c").val()==="Otro"){
                jQuery("#otrodescuento").show();
                jQuery("#otrodescuento_l").show();

        }else{
            jQuery("#otrodescuento").hide();
                jQuery("#otrodescuento_l").hide();
        }


jQuery("#programa_pop").keypress(function(event) {
   if ( event.which === 13) { buscar_programas(); }

});

jQuery("#participante_pop").keypress(function(event) {
   if ( event.which === 13) { buscar_participantes(); }

});

jQuery("#buscarMedios").keypress(function(event) {
   if ( event.which === 13) { buscar_programas(); }

});



    if(jQuery("#sales_stage").val()!=='Perdido'){

        jQuery("#l_motivoperdida_c").hide();
        jQuery("#l_adicional_c").hide();
        jQuery("#motivoperdida_c").hide();
        jQuery("#adicional_c").hide();

    }

// Evento change 
    jQuery("#tomacontactoin").change(function(){
        existe=false;
       jQuery("#tomacontactoin option:selected").each(function () {                             
                if(jQuery(this).text()==="Otros"){
                    existe=true;

                }

              });
              if(existe){
                  jQuery("#otroin").show();
                  jQuery("#l_otroin").show();
              }else{
                  jQuery("#otroin").hide();
                     jQuery("#otroin").val('');
                     jQuery("#l_otroin").hide();
              }
    });
    jQuery("#tomacontactoout").change(function(){
        existeout=false;
       jQuery("#tomacontactoout option:selected").each(function () {
                if(jQuery(this).text()==="Otros"){
                    existeout=true;
                }
              });
              if(existeout){
                  jQuery("#otroout").show();
                  jQuery("#l_otroout").show();
              }else{
                  jQuery("#otroout").hide();
                     jQuery("#otroout").val('');
                     jQuery("#l_otroout").hide();
              }
    });
// OnLoad Event
jQuery("#otroout").hide();
jQuery("#otroin").hide();
jQuery("#l_otroout").hide();
jQuery("#l_otroin").hide();

jQuery("#tomacontactoout option:selected").each(function () {
                if(jQuery(this).text()==="Otros"){
                    jQuery("#otroout").show();
                    jQuery("#l_otroout").show();


                }
              });


jQuery("#tomacontactoin option:selected").each(function () {
                if(jQuery(this).text()==="Otros"){
                    jQuery("#otroin").show();
                    jQuery("#l_otroin").show();
                }
              });
              
/// Fin Toma de contacto

        jQuery("#filtro_medios").keypress(function(event) {
                if ( event.which === 13) { buscarMedios(); }

        });



    


});


openDetalle=function(){
      var data={
            nombre:jQuery("#mediocontacto").val()
        };

             jQuery("#detalle_dlg").dialog({
                            closeOnEscape: true,
                            height: 600 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Detalles',
                            width: 600
                });


if(jQuery("#mediocontacto").val()!==''){
 var urllista = "index.php?&module=Opportunities&action=detalles";
                jQuery("#detalle_div").text("Buscando etapas de ventas...");
                jQuery("#detalle_div").load(urllista,data, function(response, status, xhr){
                    if(status==="success"){
                        jQuery("#detalle_div").html(response);
                    }else
                        return false;
                });
}else{
    jQuery("#detalle_div").html("Escoja el medio de contacto");
}

};


openEtapas=function(etapa){
      var data={
            clase:jQuery("#categoria_c").val(),
            etapa:etapa
        };

             jQuery("#etapas_dlg").dialog({
                            closeOnEscape: true,
                            height: 600 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Etapas',
                            width: 600
                });



 var urllista = "index.php?&module=Opportunities&action=controletapas";
                jQuery("#etapas_div").text("Buscando etapas de ventas...");
                jQuery("#etapas_div").load(urllista,data, function(response, status, xhr){
                    if(status==="success"){
                        jQuery("#etapas_div").html(response);
                    }else
                        return false;
                });
};


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
 
};

buscarMedios=function (){
  var data={


            medio:jQuery("#filtro_medios").val()

        };

 var urllista = "index.php?&module=Opportunities&action=medios";
                jQuery("#medios_div").text("verificando informacion...");
                jQuery("#medios_div").load(urllista,data, function(response, status, xhr){
                    if(status==="success"){
                        jQuery("#medios_div").html(response);
                    }else
                        return false;
                });
};

copiarMedio=function(valor){
    jQuery("#mediocontacto").val(valor);
       jQuery("#etapas_dlg").dialog("close");
};

copiarEtapa=function(valor,probabilidad){
    jQuery("#probability").val(probabilidad);
    jQuery("#sales_stage").val(valor);


   if(valor==='Perdido'){

        jQuery("#l_motivoperdida_c").show();
        jQuery("#l_adicional_c").show();
        jQuery("#motivoperdida_c").show();
        jQuery("#adicional_c").show();

    }else{
        jQuery("#l_motivoperdida_c").hide();
        jQuery("#l_adicional_c").hide();
        jQuery("#motivoperdida_c").hide();
        jQuery("#adicional_c").hide();
        jQuery("#motivoperdida_c").val('');
    }
  jQuery("#etapas_dlg").dialog("close");
};
borra_medios_sp=function(){
     jQuery("#mediocontacto").val('');
     jQuery("#detallemedio").val('');
};
borra_detalle_sp=function(){
     
     jQuery("#detallemedio").val('');
};

selectMedio=function(valor){
        jQuery("#mediocontacto").val(valor);
        jQuery("#detallemedio").val('');
        if(jQuery("#mediocontacto").val()==='Otro'){
            jQuery("#detallemedio").attr('readonly',false);
            jQuery("#detalle_link").hide();
        }else{
            jQuery("#detallemedio").attr('readonly',true);
            jQuery("#detalle_link").show();
        }
       jQuery("#medios_dlg").dialog("close");
};

selectDetalle=function(valor){
       jQuery("#detallemedio").val(valor);
       jQuery("#detalle_dlg").dialog("close");
};
/// Validacion en servidor
openVerificacion=function(){
var data=formato(jQuery("#EditView").serializeArray());
var flag=false;
flag=check_form('EditView');

if(flag===false){
 jQuery("#detalle_dlg").dialog("close");
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
    
     var urllista = "index.php?module=Opportunities&action=verificainfo";

                jQuery("#verficainfo").text("verificando informacion...");
                jQuery("#verficainfo").load(urllista,data, function(response, status, xhr){
                    if(status==="success"){
                        jQuery("#verficainfo").html(response);
                    }else
                        return false;
                });

    return false;
 }
 return false;
};
guardar=function(){
    jQuery("#save_personalizado").attr("disabled",true);
    SUGAR.ajaxUI.submitForm(document.forms['EditView']);return false;
  return false;

};
success=function (){
    return false;
};
function formato(data)
{
    var string='{';
    jQuery.each(data, function(i, field){
        if((field.name!=='action')&&(field.name!=='return_module') && (field.name!=='return_action') && (field.value!=='return_id')){
            if(field.value!=='')
               string+='"'+field.name+'":"'+field.value+'",';
            else
               string+='"'+field.name+'":"",';
        }   
      });
      string=string.substring(0,string.length-1);
      string+='}';
    
    return jQuery.parseJSON(string);
}
check_custom_data=function(){
    openVerificacion();
    return false;
};