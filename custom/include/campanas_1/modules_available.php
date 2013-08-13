<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
return array(

    'cuentas'=>array(
        'name'=>'Cuentas',
        'module'=>'Accounts',
        'bean'=>'Account',
        'image'=>'custom/include/campanas/images_modules/rsz_clientes.jpg',
        'publico'=>'cuenta',
    ),
    'instructor'=>array(
        'name'=>'Instructores',
        'module'=>'ee_Profesores',
        'bean'=>'ee_Profesores',
        'image'=>'custom/include/campanas/images_modules/rsz_1instructores.jpg',
        'publico'=>'instructor',
    ),
    'contactos'=>array(
        'name'=>'Contactos',
        'module'=>'Contacts',
        'bean'=>'Contact',
        'image'=>'custom/include/campanas/images_modules/rsz_contacto.png',
        'publico'=>'contacto',
    ),
    'clientes-contactos'=>array(
        'name'=>'Clientes-Contactos',
        'module'=>'Accounts',
        'bean'=>'Account',
        'relacion'=>'Contacts',// Define el modulo con el cual se relaciona los datos , 
        
        'image'=>'custom/include/campanas/images_modules/rsz_clientes.jpg',
        'publico'=>'clientescontactos',
    ),
);
?>
