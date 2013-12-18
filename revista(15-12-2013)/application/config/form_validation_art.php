<?php
$config=array
(
    /**
	 * Formulario
	 */

    'usuarios/articulo_nuevo'
    => array(
      
            array('field' => 'titulo',            'label' => 'Nombre',    
           'rules' => 'required|is_string|trim|xss_clean'),
            array('field' => 'bajada',            'label' => 'Correo',    
           'rules' => 'required|is_string|trim|xss_clean'),
            array('field' => 'noticia',           'label' => 'Login',   
           'rules' => 'required|is_string|trim|xss_clean'),
            array('field' => 'publicador',            'label' => 'Password',    
           'rules' => 'required|is_string|trim|xss_clean'),
            array('field' => 'fecha',           'label' => 'Cargo',   
           'rules' => 'required|is_string|trim|xss_clean'),
             
    ),
        
    
        
); 