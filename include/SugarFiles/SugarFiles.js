/*
 *
 * @author Jose Sambrano
 */


        
        var filaf=0;

        this.hacerFilaf = function(id, celdas){
		html = "<tr id="+id+">";
		for(var i=0;i<celdas.length;i++)
			html += "<td>"+celdas[i]+"</td>";
		html += "</tr>";
		return html;
	};
        this.limpiarProductosf = function(){
		jQuery('tr[id^=prod_row_]').remove();
	};

        

         addFile=function(tableId){

             var el = document.getElementById("prod_rowf_"+filaf);
             if(el) return
             
             if (tableId=='')
                    return;
             
              

		id_control = "<input type='hidden' name='prodf_"+filaf+"' id='prodf_"+filaf+"' value='"+filaf+"' />";
                
                
                filetxt = "<input type='file' readonly='true' name='filetxt_"+filaf+"' id='filetxt_"+filaf+"' value='' size='25' />";
		
           
                remove_control = "<a href='javascript:void(0);' onclick='borrarf(\""+filaf+"\");'>X</a>";
                
                
                

             celdas=[
                 filetxt,remove_control,id_control
             ];
            row = this.hacerFilaf('prod_rowf_'+filaf, celdas);
	    jQuery('#'+tableId).append(row);
            filaf++;
            
   
        }

   
   borrarf=function (filaf){
       jQuery("#prod_rowf_"+filaf).remove();
       
      
   }
  
