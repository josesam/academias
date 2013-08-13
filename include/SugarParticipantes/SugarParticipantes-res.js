/*
 *
 * @author Jose Sambrano
 */       
        var filap=0;
        this.hacerFilap = function(id, celdas){
		html = "<tr id="+id+">";
		for(var i=0;i<celdas.length;i++)
			html += "<td>"+celdas[i]+"</td>";
		html += "</tr>";
		return html;
	};
        this.limpiarProductosp = function(){
		jQuery('tr[id^=prod_rowp_]').remove();
	};

        cargarParticipante=function(tableId,o){

        


        for(contp=0;contp<o.length;contp++){
           
            addParticipante(
            tableId,
            o[contp].id,
            o[contp].idcontacto,
            o[contp].nombrecontacto,
            o[contp].apellidocontacto,
            o[contp].direccion,
            o[contp].telefono,
            o[contp].cedula,
            o[contp].fuente,
            o[contp].correo
            
            );
         
        }
            
        }


         addParticipante=function(tableId,
                             id,
                             idcontacto,
                             nombrecontacto,
                             apellidocontacto,
                             direccion,
                             telefono,
                             cedula,
                             fuente,
                             correo   
                             ){
             
             var el = document.getElementById("prod_rowp_"+filap);
             if(el) return
             
            if (nombrecontacto=='')
                    return;
            if (apellidocontacto=='')
                    return;
            if (correo==''){
                    alert("El correo es un campo requerido")
                    return;  
            }       
            if(typeof(nombrecontacto)=='undefined')
                return;
            if(typeof(correo)=='undefined'){
             alert("El correo es un campo requerido")
             return;
            }   
            if(typeof(apellidocontacto)=='undefined')
                return;
            
            if(verificar_participantes()){
                  alert("El numero total de particantes alcanzo el limite máximo");
                  return;
              }
           
            if(buscar(id)==true){
                alert('Se ha ingresado este participante');
                 return;
             }


             if(buscarCedula(cedula)==true){
                alert('Se ha ingresado este cedula en la lista de participantes');
                 return;
             }
  
              
		id_control = "<input type='hidden' name='prodp_"+filap+"' id='prodp_"+filap+"' value='"+verifica(filap)+"' />";
                idtxt = "<input type='hidden' name='idp_"+filap+"' id='idp_"+filap+"' value='"+verifica(id)+"' />";
                idcontactotxt = "<input type='hidden' readonly='true' name='idcontactotxt_"+filap+"' id='idcontactotxt_"+filap+"' value='"+verifica(idcontacto)+"' />";
                nombrecontactotxt = "<input type='text' readonly='true' name='nombrecontactotxt_"+filap+"' id='nombrecontactotxt_"+filap+"' value='"+verifica(nombrecontacto)+"' size='25' />";
                apellidocontactotxt = "<input type='text' readonly='true' name='apellidocontactotxt_"+filap+"' id='apellidocontactotxt_"+filap+"' value='"+verifica(apellidocontacto)+"' size='25' />";
		direcciontxt = "<input name='direcciontxt_"+filap+"' id='direcciontxt_"+filap+"' value='"+verifica(direccion)+"' size='40'  />";
                telefonotxt = "<input type='text' name='telefonotxt_"+filap+"' id='telefonotxt_"+filap+"' value='"+verifica(telefono)+"' size='12'/>";
                cedulatxt = "<input readonly='true' type='text' name='cedulatxt_"+filap+"' id='cedulatxt_"+filap+"' value='"+verifica(cedula)+"' size='10'/>";
                fuentetxt = "<input readonly='true'  type='hidden' name='fuentetxt_"+filap+"' id='fuentetxt_"+filap+"' value='"+verifica(fuente)+"' size='15'/>";
                correotxt = "<input  type='text' name='correotxt_"+filap+"' id='correotxt_"+filap+"' value='"+verifica(correo)+"' size='35'/>";
                
                remove_control = "<a href='javascript:void(0);' onclick='borrarp(\""+filap+"\");'>X</a>";
                
                                
             celdas=[
                 nombrecontactotxt,apellidocontactotxt,cedulatxt,direcciontxt,telefonotxt,correotxt,
                 remove_control,idtxt,id_control,idcontactotxt,fuentetxt
             ];
            row = this.hacerFilap('prod_rowp_'+filap, celdas);
	    jQuery('#'+tableId).append(row);
            filap++;
            
   
        }

   
   borrarp=function (filap){
       jQuery("#prod_rowp_"+filap).remove();
       
      
   }
   verifica=function (val){
        if(typeof(val)=='undefined')
        return ''
         if(val==null)
        return ''

        return val;
    }

abrirparticipante=function(){
                jQuery("#participante").dialog({
                            closeOnEscape: true,
                            height: 600 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Participante',
                            width: 800
                });

}
buscar_participantes=function(){
    if(jQuery("#opcion_participante").val()=="database"){
        if(jQuery('#account_id').val()==''){
            jQuery("#busqueda_participante").text("Escoja el cliente");
            return '';
        }
        var data={
            medio:jQuery("#participante_pop").val(),
            cliente:jQuery('#account_id').val()
        }

                var urllista = "index.php?&module=Opportunities&action=participantes";
                jQuery("#busqueda_participante").text("buscando participantes...");
                jQuery("#busqueda_participante").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#busqueda_participante").html(response);
                    }else
                        return false;
                });

    }else if(jQuery("#opcion_participante").val()=="manual"){
        addParticipante('OpportunitiesAmbienteTableP',
                         '',
                         '-99',
                         jQuery("#nombre_pop").val(),
                         jQuery("#apellidos_pop").val(),
                         jQuery("#direccion_pop").val(),
                         jQuery("#telefono_pop").val(),
                         jQuery("#cedula_pop").val(),
                         jQuery("#opcion_participante").val(),
                         jQuery("#correo_pop").val()
                        );
    }else{
            var data1={
                 medio:jQuery("#participante_pop").val(),
                cliente:jQuery('#account_id').val()
            }

                var urllista1 = "index.php?&module=Opportunities&action=contactos";
                jQuery("#busqueda_participante").text("buscando participantes...");
                jQuery("#busqueda_participante").load(urllista1,data1, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#busqueda_participante").html(response);
                    }else
                        return false;
                });

    }
}

verificar_participantes=function(){
   
    var cont=0;
    for (il=0;il<filap;il++){
        
         if((jQuery("#nombrecontactotxt_"+il).val()!="")&&(typeof(jQuery("#nombrecontactotxt_"+il).val())!="undefined")){
            cont++;
         }
    }
    
    if(cont>=parseInt(jQuery("#numeroparticipantes").val())){
        return true;
    }else{
        return false
    }
   
}

function buscar(id){
    if(id=='-99')
       return false;

    for (ip=0;ip<=filap;ip++){

        if(id==jQuery("#idcontactotxt_"+ip).val())
            return true;
    }
    return false;
}

function buscarCedula(cedula){
    
             if (cedula=='')
                    return false;
              if (cedula==null)
                  return false;
             if(typeof(cedula)=='undefined')
                return false;

    for (ic=0;ic<=filap;ic++){

        if(cedula==jQuery("#cedulatxt_"+ic).val())
            return true;
    }
    return false;
}