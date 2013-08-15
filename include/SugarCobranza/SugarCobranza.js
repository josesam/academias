/*
 *
 * @author Jose Sambrano
 */




jQuery(document).ready(function() {
  var decimal=2;
  var separador=".";
    jQuery(".numeric").numeric(".");
    jQuery(".numeric").floatnumber(separador,decimal);
    jQuery("#tarjeta").hide();
    jQuery("#tipopago").hide();
    jQuery("#l_tarjeta").hide();
    jQuery("#l_tipopago").hide();
    jQuery("#formapago_pop").change(function(){
        
        if (this.value=="TarjetaCredito"){
            jQuery("#tarjeta").show();
            jQuery("#tipopago").show();
            jQuery("#l_tarjeta").show();
            jQuery("#l_tipopago").show();
        }else{
            
            jQuery("#tarjeta").hide();

            jQuery("#tipopago").hide();
            jQuery("#l_tarjeta").hide();
            jQuery("#l_tipopago").hide();
            jQuery("#tarjeta").val("");
            jQuery("#tipopago").val("");
        }

    })


    });

        
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

        cargarMaterial=function(tableId,o){



        for(k=0;k<o.length;k++){
           
            addMaterial(
            tableId,
            o[k].id,
            o[k].persona,
            o[k].fechapago,
            o[k].valor,
            o[k].formapago,
            o[k].tarjeta,
            o[k].tipo,
            o[k].factura,
            o[k].observaciones

            );
         
        }
            
}


         addMaterial=function(tableId,
                             id,
                             persona,
                             fechapago,
                             valor,
                             formapago,
                             tarjeta,
                             tipo,
                             factura,
                             observaciones
                             ){

             var el = document.getElementById("prod_row_"+fila);
             if(el) return
             if(typeof(valor)=='undefined')
                 return ;
             
             if (persona=='')
                    return;
             if (fechapago=='')
                    return;
             if (valor=='')
                    return;
             if(factura==='')
                 return ;
             if(isNaN(parseFloat(valor)))
                 return ;
            if(valor===0){
                alert(" No puede ingresar una cuota con valor 0");
                return;
            }
            if(sumar(valor)===false){
                alert(" Ya esta cancelada la cuota");
                return ;
            }
		id_control = "<input type='hidden' name='prod_"+fila+"' id='prod_"+fila+"' value='"+verifica(fila)+"' />";
                idtxt = "<input type='hidden' name='id_"+fila+"' id='id_"+fila+"' value='"+verifica(id)+"' />";
                personatxt = "<input type='text' readonly='true' name='personatxt_"+fila+"' id='personatxt_"+fila+"' value='"+verifica(persona)+"' size='50' />";
		
		
                fechatxt = "<input type='text' readonly='true' name='fechapagotxt_"+fila+"' id='fechapagotxt_"+fila+"' value='"+verifica(fechapago)+"' size='10' />";
		valortxt = "<input type='text' readonly='true' name='valortxt_"+fila+"' id='valortxt_"+fila+"' value='"+verifica(valor)+"' size='10'  />";

                formapagotxt = "<input type='text' name='formatxt_"+fila+"' id='formatxt_"+fila+"' value='"+verifica(formapago)+"' size='15'  />";
                tarjetatxt = "<input type='hidden' readonly='true' name='tarjetatxt_"+fila+"' id='tarjetatxt_"+fila+"' value='"+verifica(tarjeta)+"' size='15'  />";
                tipotxt = "<input type='hidden' readonly='true' name='tipotxt_"+fila+"' id='tipotxt_"+fila+"' value='"+verifica(tipo)+"' size='20'  />";
                observacionestxt = "<input type='text'  name='observacionestxt_"+fila+"' id='observacionestxt_"+fila+"' value='"+verifica(observaciones)+"' size='20'  />";
                facturatxt = "<input type='text' readonly='true' name='facturatxt_"+fila+"' id='facturatxt_"+fila+"' value='"+verifica(factura)+"' size='20'  />";           
                remove_control = "<a href='javascript:void(0);' onclick='borrar(\""+fila+"\");'>X</a>";
//         
             celdas=[
                 personatxt,fechatxt,valortxt,formapagotxt,facturatxt,observacionestxt,
                 remove_control,idtxt,id_control,tarjetatxt,tipotxt
             ];
            row = this.hacerFila('prod_row_'+fila, celdas);
	    jQuery('#'+tableId).append(row);
            fila++;
            
            sumar();
            jQuery("#valor_pop").val(restar())
        }

   
   borrar=function (fila){
       jQuery("#prod_row_"+fila).remove();
       
      
   };
   verifica=function (val){
        if(typeof(val)==='undefined')
        return '';
         if(val===null)
        return '';

        return val;
    };

sumar=function (val){

    var valor=new Number(0.00);
    for (i=0;i<fila;i++){
         if(!isNaN(parseFloat(jQuery("#valortxt_"+i).val())))
                valor+=parseFloat(jQuery("#valortxt_"+i).val());
     }
     valor+=parseFloat(val);
     
   if (valor>parseFloat(jQuery("#montopago").val().replace(/\,/g,"")))
     return false;
   else
       return true;
};

restar=function (){

    var valor=new Number(0.00);
    for (i=0;i<fila;i++){
         if(!isNaN(parseFloat(jQuery("#valortxt_"+i).val())))
                valor+=parseFloat(jQuery("#valortxt_"+i).val());
     }
     
   return parseFloat(jQuery("#montopago").val().replace(/\,/g,"")) - valor;
   
};

abrir=function(){
                jQuery("#programa").dialog({
                            closeOnEscape: true,
                            height: 400 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Detalle Pagos',
                            width: 500
                });
    jQuery("#valor_pop").val(restar());
};
generar_linea=function(){
            addMaterial('ee_CobranzasAmbienteTable','',
             jQuery("#persona_pop").val(),
             jQuery("#fechaincio_pop").val(),
             jQuery("#valor_pop").val(),
             jQuery("#formapago_pop").val(),
             jQuery("#tarjeta").val(),
             jQuery("#tipopago").val(),
             jQuery("#factura_pop").val(),
             jQuery("#observaciones").val()


            );
    
};

