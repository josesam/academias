<?php return array(   
         'profesores'=> 
          array(      
              '0'=>array( 
                  'tipo'=>'dias_antes',
                  'dias'=>15,       
                  'plantilla'=>'profesor15', 
                  'Subject'=>'Inicio de Curso', 
                  'default'=>'mjaramillo@usfq.edu.ec',  
                  'bcc'=>array(         
                      'Karla Diaz'=>'kdiaz@usfq.edu.ec',
                      'Gabriela Palma'=>'gpalma@usfq.edu.ec',
                      'Giannina Yepez'=>'gyepez@usfq.edu.ec',    
                      'Javier Ribadeniera'=>'jjribadeneira@usfq.edu.ec', 
                      'Maria Antonienta Jaramillo'=>'mjaramillo@usfq.edu.ec',
                      'Francisco Sosa'=>'sistemasciceron@usfq.edu.ec'      
                    ) 
                  ),
              '1'=>array( 
                  'tipo'=>'dias_antes',
                  'dias'=>21, 
                  'plantilla'=>'profesor21',
                  'Subject'=>'Inicio de Curso',
                  'default'=>'mjaramillo@usfq.edu.ec', 
                  'bcc'=>array( 
                      'Karla Diaz'=>'kdiaz@usfq.edu.ec',
                      'Gabriela Palma'=>'gpalma@usfq.edu.ec',
                      'Giannina Yepez'=>'gyepez@usfq.edu.ec', 
                      'Javier Ribadeniera'=>'jjribadeneira@usfq.edu.ec',
                      'Maria Antonienta Jaramillo'=>'mjaramillo@usfq.edu.ec',
                      'Francisco Sosa'=>'sistemasciceron@usfq.edu.ec'  
                      )
                  ), 
              ), 
    'programas'=>
        array( 
            '0'=>array( 
                'tipo'=>'dias_antes',
                'dias'=>1,
                'plantilla'=>'programa_finalizar',
                'Subject'=>'Finalizó Programa',
                'default'=>'mjaramillo@usfq.edu.ec', 
                'emails'=>array(
                    'josesambrano@hotmail.com',
                    'mjaramillo@usfq.edu.ec',
                    ),
                ),
            '1'=>array(    
                'tipo'=>'dias_despues',
                'dias'=>1, 
                'plantilla'=>'programa_creado',
                'Subject'=>'Creación de Programa',
                'default'=>'josesambrano@hotmail.com',
                'emails'=>array(  
                    'josesambrano@hotmail.com',
                    'mjaramillo@usfq.edu.ec', 
                    ),
                ), 
            '2'=>array( 
                'tipo'=>'recordatorio',
                'dias'=>15,
                'plantilla'=>'programa_recordatorio',
                'Subject'=>'Recordatorio de Inicio de Programa',
                'default'=>'josesambrano@hotmail.com',
                'emails'=>array( 
                    'josesambrano@hotmail.com','mjaramillo@usfq.edu.ec',
                    ),
                ),
            ),
    'participante'=>
        array( 
            '0'=>array( 
                'tipo'=>'dias_antes',
                'dias'=>7,
                'plantilla'=>'aviso_usuario',
                'Subject'=>'Estatus Programa',  
                'default'=>'mjaramillo@usfq.edu.ec',
                ),
            '1'=>array( 
                'tipo'=>'recordatorio',
                'dias'=>5, 
                'plantilla'=>'recordatorio_participante',
                'Subject'=>'Recordatorio para el participante del Inicio de Programa', 
                'default'=>'mjaramillo@usfq.edu.ec',  
                'emails'=>array(  
                    'josesambrano@hotmail.com','jose.fernandez@greenfieldcrm.com',
                    ),
                 'bcc'=>array(
                     'Gabriela Palma'=>'gpalma@usfq.edu.ec',
                     'Javier Ribadeniera'=>'jjribadeneira@usfq.edu.ec',
                     ),
                ),
              '2'=>array( 
                'tipo'=>'recordatorio',
                'dias'=>1, 
                'plantilla'=>'recordatorio_participante',
                'Subject'=>'Recordatorio para el participante del Inicio de Programa', 
                'default'=>'mjaramillo@usfq.edu.ec',  
                'emails'=>array(  
                    'josesambrano@hotmail.com','jose.fernandez@greenfieldcrm.com',
                    ),
                 'bcc'=>array(
                     'Gaby Palma'=>'gpalma@usfq.edu.ec',

                     ),
                ),
             '3'=>array( 
                'tipo'=>'recordatorio_d2l',
                'descripcion'=>'Envio por inicio de curso de los programas', 
                 
                'dias'=>2, 
                'plantilla'=>'recordatorio_participante_d2l',
                'Subject'=>'Recordatorio uso Herramienta Virtual D2L y Evaluación de Participantes', 
                'default'=>'mjaramillo@usfq.edu.ec',  
                'emails'=>array(  
                    'josesambrano@hotmail.com','jose.fernandez@greenfieldcrm.com',
                 ),
                 'bcc'=>array(
                     'Gaby Palma'=>'gpalma@usfq.edu.ec',
                    //'Javier Ribadeniera'=>'encomunicacion@usfq.edu.ec',
                     ),
                ),   
            ),
    );
?>