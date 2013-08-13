/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function exportar(archivo,main_module,related_module){
        id=$("input[name=record]").val();
       
        myform=document.createElement("form");
        myform.setAttribute('name','newForm');
	myform.setAttribute('method','post');
        myform.setAttribute('action','index.php?&module=pro_Plantillas&action=descargar&nombre='+archivo+'&main_module='+main_module+'&id='+id+'&related_module='+related_module);
	document.body.appendChild(myform);
        myform.submit();

}

