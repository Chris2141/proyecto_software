<?php
$config=array
(
    /**
	 * Formulario
	 */
	'usuarios/usuario'
		=> array(
			
            array('field' => 'nombres',						'label' => 'Nombres',		
           'rules' => 'required|is_string|trim|xss_clean'),
            array('field' => 'apellidos',						'label' => 'Apellidos',		
           'rules' => 'required|valid_email|trim|xss_clean'),
            array('field' => 'rut',						'label' => 'RUT',		
           'rules' => 'required|is_string|trim|xss_clean'),
            array('field' => 'login',						'label' => 'login',		
           'rules' => 'required|is_string|trim|xss_clean'),
            array('field' => 'pass',						'label' => 'Password',		
           'rules' => 'required|is_string|trim|xss_clean'),
             
		),
    
          
);

$config=array
(
     'usuarios/nuevo_articulo'
     =>array(

            array('field' => 'titulo',            'label' => 'Titulo',    
           'rules' => 'required|is_string|trim|xss_clean'),
            array('field' => 'bajada',            'label' => 'Bajada',    
           'rules' => 'required|is_string|trim|xss_clean'),
            array('field' => 'noticia',           'label' => 'Noticia',   
           'rules' => 'required|is_string|trim|xss_clean'),
            array('field' => 'fecha',            'label' => 'Fecha',    
           'rules' => 'required|is_string|trim|xss_clean'),
            array('field' => 'autor_fk',            'label' => 'Autor_fk',    
           'rules' => 'required|is_string|trim|xss_clean'),
            array('field' => 'categoria_fk',           'label' => 'Categoria_fk',   
           'rules' => 'required|trim|xss_clean'),

      ),


); 

