/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//(function(){

jQuery(document).ready(function() {
  var format="999 9 999 9999";
  var format1="999 99 999 9999";

  jQuery("#phone_office").mask(format);
  jQuery("#phone_fax").mask(format);
  jQuery("#celular2").mask(format);
  jQuery("#phone_alternate").mask(format1);
  jQuery("#phone_work").mask(format);
  jQuery("#phone_home").mask(format);
  jQuery("#phone_other").mask(format);
  jQuery("#telefonoasistente_c").mask(format);
  jQuery("#assistant_phone").mask(format);
  jQuery("#phone_mobile").mask(format1);
  jQuery('#numerocelular_c').mask(format);

  jQuery('#telefonofacturacion_c').mask(format);
  jQuery('#telefonoretiro_c').mask(format);
  jQuery('#celularfacturacion_c').mask(format1);
  jQuery('#celularretiro_c').mask(format1);
  jQuery('#faxfacturacion_c').mask(format);
  jQuery('#faxretiro_c').mask(format);

  jQuery('#telefonoprincipal123_c').mask(format);
  jQuery('#celularprincipal123_c').mask(format1);
  jQuery('#faxprincipal123_c').mask(format);
});
//})();