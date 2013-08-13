/* 
 * 
 * @author josesambrano
 */

jQuery.noConflict();
jQuery(document).ready(function() {
  jQuery(".float").numeric(".");
  jQuery(".float").floatnumber(".",2);

    jQuery("#filtro_modulo").keypress(function(event) {
        if ( event.which == 13) { buscarModulos(); }

    });

jQuery("#filtro_profesor").keypress(function(event) {
   if ( event.which == 13) { buscarProfesor(); }

});

jQuery("#filtro_participante").keypress(function(event) {
   if ( event.which == 13) { buscarParticipante(); }

});


    });

abrirParticipante=function(){
             jQuery("#participante_dlg").dialog({
                            closeOnEscape: true,
                            height: 600 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Participantes',
                            width: 600
                });
}

abrirModulo=function(){
             jQuery("#modulo_dlg").dialog({
                            closeOnEscape: true,
                            height: 600 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Modulos',
                            width: 600
                });
}

abrirProfesor=function (){
             jQuery("#profesor_dlg").dialog({
                            closeOnEscape: true,
                            height: 600 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Instructor',
                            width: 600
                });
}

buscarModulo=function (){
    var data={
            ejecucion:jQuery("#ee_ejecucionprograma_ee_evaluacionglobalee_ejecucionprograma_ida").val(),
            nombre:jQuery("#filtro_modulo").val()
        }

    var urllista = "index.php?&module=ee_EvaluacionGlobal&action=modulos";
                jQuery("#modulos_div").text("Buscando modulos...");
                jQuery("#modulos_div").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#modulos_div").html(response);
                    }else
                        return false;
                });
}
buscarParticipante=function (){
    var data={
            ejecucion:jQuery("#ee_ejecucionprograma_ee_evaluacionglobalee_ejecucionprograma_ida").val(),
            nombre:jQuery("#filtro_participante").val(),
            modulo:jQuery("#idmodulo").val()
        }
    var urllista = "index.php?&module=ee_EvaluacionGlobal&action=participante";
                jQuery("#participantes_div").text("Buscando participante...");
                jQuery("#participantes_div").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#participantes_div").html(response);
                    }else
                        return false;
                });
}
buscarProfesor=function(){
    var data={
            ejecucion:jQuery("#ee_ejecucionprograma_ee_evaluacionglobalee_ejecucionprograma_ida").val(),
            nombre:jQuery("#filtro_profesor").val()
        }
       var urllista = "index.php?&module=ee_EvaluacionGlobal&action=profesor";
                jQuery("#profesor_div").text("Buscando profesor...");
                jQuery("#profesor_div").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#profesor_div").html(response);
                    }else
                        return false;
                });

}

selectModulo=function (modulo,idmodulo){
    jQuery("#modulo").val(modulo);
    jQuery("#idmodulo").val(idmodulo);
    jQuery("#participante").val("");
    jQuery("#idparticipante").val("");
    jQuery("#name").val("");
    jQuery("#modulo_dlg").dialog("close");
}
selectProfesor=function (profesor){
    jQuery("#profesor").val(profesor);
    jQuery("#profesor_dlg").dialog("close");
}

selectParticipante=function (participante,idparticipante){
    jQuery("#participante").val(participante);
    jQuery("#idparticipante").val(idparticipante);
    jQuery("#name").val("Evaluación -"+participante);
    jQuery("#participante_dlg").dialog("close");
}