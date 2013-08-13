/* 
 * 
 * @author Jose Sambrano
 */
//(function(){

jQuery(document).ready(function() {
  var decimal=2;
  var separador=".";
  
  jQuery("#numemp_c").numeric();
  jQuery("#nrodocumento_c").numeric();
  
  
  jQuery(".numeric").numeric();
  jQuery(".numeric").floatnumber(separador,decimal);
});
//})();


