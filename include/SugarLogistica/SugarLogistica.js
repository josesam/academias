/*
 *
 * @author Jose Sambrano
 */


        
        
//        this.hacerFila = function(id, celdas){
//		html = "<tr id="+id+">";
//		for(var i=0;i<celdas.length;i++)
//			html += "<td>"+celdas[i]+"</td>";
//		html += "</tr>";
//		return html;
//	};
//        this.limpiarProductos = function(){
//		jQuery('tr[id^=prod_row_]').remove();
//	};
var filal=0;
        cargarMaterialLogistica=function(tableId,o){

        
        for(i=0;i<o.length;i++){
           
            addMaterialLogistica(
            tableId,
            o[i].id,
            o[i].categoria,
            o[i].item,
            o[i].proveedor,
            o[i].precio
                      
            );
         
        }
            
}


         addMaterialLogistica=function(tableId,
                             id,
                             categoria,
                             item,
                             
                             proveedor,
                             precio
                             

                             ){

             var el = document.getElementById("prod_row_l"+filal);
             if(el) return
             
              if(typeof(categoria)=='undefined')
                return;
            if(typeof(precio)=='undefined')
                return;


             if (categoria=='')
                    return;
             
             if (precio=='')
                    return;

             
             id_control = "<input type='hidden' name='prodl_"+filal+"' id='prodl_"+filal+"' value='"+verifica(filal)+"' />";
             idtxt = "<input type='hidden' name='idl_"+filal+"' idl='id_"+filal+"' value='"+verifica(id)+"' />";
             categoriatxt = "<input type='text' readonly='true' name='categoriatxt_"+filal+"' id='categoriatxt_"+filal+"' size='60' value='"+verifica(categoria)+"' />";
             itemtxt = "<input type='hidden' readonly='true' name='itemtxt_"+filal+"' id='itemtxt_"+filal+"' value='"+verifica(item)+"' />";
             
	     proveedortxt = "<input type='hidden' readonly='true' name='proveedortxt_"+filal+"' id='proveedortxt_"+filal+"' value='"+verifica(proveedor)+"' size='20' />";
             
	     preciotxt = "<input type='text' name='preciotxt_"+filal+"' id='preciotxt_"+filal+"' value='"+verifica(precio)+"' size='3'/>";
                
           
                remove_control = "<a href='javascript:void(0);' onclick='borrar_l(\""+filal+"\");'>X</a>";
//         
             celdas=[
                 categoriatxt,preciotxt,itemtxt,proveedortxt,remove_control,idtxt,id_control
             ];
            row = this.hacerFila('prod_row_l'+filal, celdas);
	    jQuery('#'+tableId).append(row);
            filal++;
            
          
   
        }

   
   borrar_l=function (fila){
       jQuery("#prod_row_l"+fila).remove();
       
      
   }
//   verifica=function (val){
//        if(typeof(val)=='undefined')
//        return ''
//         if(val==null)
//        return ''
//
//        return val;
//    }
//
//sumar=function (){
//
//    var valor=new Number(0.00);
//    for (i=0;i<fila;i++){
//         if(!isNaN(parseFloat(jQuery("#horastxt_"+i).val())))
//                valor+=parseFloat(jQuery("#horastxt_"+i).val())
//     }
//   if(parseFloat(valor)>0)
//        jQuery("#nrohoras_c").val(valor.toFixed(2));
//   else
//        jQuery("#nrohoras_c").val("0.00");
//}

abrirl=function(){
                jQuery("#logistica").dialog({
                            closeOnEscape: true,
                            height: 300 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Items Presupuesto',
                            width: 500
                });

}
generar_lineal=function(){
            addMaterialLogistica('ee_ProgramasAmbienteTablel','',
             jQuery("#categoria_pop").val(),
             jQuery("#item_pop").val(),
             jQuery("#proveedor_pop").val(),
             jQuery("#precio_pop").val()
             

            );
    
}
