/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {
//  $("#example").dataTable( {
//                "oLanguage": {
//			"sSearch": "Search all columns:"
//		},
//                "sPaginationType": "full_numbers",
//                "sDom": 'T<"clear">lfrtip',
//		"oTableTools": {
//                        "sSwfPath": "custom/include/Reportes/scripts/tabletools/media/swf/copy_cvs_xls_pdf.swf",
//			"aButtons": [
//				"copy",
//				"csv",
//				"xls",
//				{
//					"sExtends": "pdf",
//					"sPdfOrientation": "landscape",
//					"sPdfMessage": ""
//				},
//				"print"
//			]
//		}
//	} );
//
  
 } );



function seleccionarTodo(obj,objSeleccionador){

if ($('#'+objSeleccionador.id).is(':checked')) {
        $("#"+obj).each(function(){
            $("#"+obj+" option").attr("selected","selected");
        });
}else{
        $("#"+obj).each(function(){
            $("#"+obj+" option").removeAttr("selected")
        });
}
}




//                "fnFooterCallback": function ( nRow, aaData, iStart, iEnd, aiDisplay ) {
//                    /*
//                     * Calculate the total market share for all browsers in this table (ie inc. outside
//                     * the pagination)
//                     */
//                    var iTotalMarket = 0;
//                    for ( var i=0 ; i<aaData.length ; i++ ){
//                        iTotalMarket += aaData[i][4]*1;
//                    }
//
//                    /* Calculate the market share for browsers on this page */
//                    var iPageMarket = 0;
//                    for ( var i=iStart ; i<iEnd ; i++ ){
//                        iPageMarket += aaData[ aiDisplay[i] ][4]*1;
//                    }
//                   /* Modify the footer row to match what we want */
//                    var nCells = nRow.getElementsByTagName('th');
//                    nCells[3].innerHTML = parseInt(iPageMarket * 100)/100 +
//                        '% ('+ parseInt(iTotalMarket * 100)/100 +'% total)';
//                },