<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	private $session_id;
    public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('template1');
        $this->session_id = $this->session->userdata('login');
    }
    
	public function index()
	{
		if(!empty($this->session_id))
        {
             $nombre = $this->session_id;
             $this->layout->view('saludo',compact("nombre"));   
             //$this->layout->view('index');  

        }else
        {
            redirect(base_url().'usuarios/login',  301);
        }
        
	}
 
    public function login()
    {
        if ( $this->input->post() )
        {
            //die(sha1($this->input->post("pass",true)));
            $datos=$this->usuarios_model->logueo($this->input->post("login",true),/*sha1*/($this->input->post("pass",true)));
           //echo $datos;exit;
           if($datos==1)
           {
                $this->session->set_userdata("taller_ci");
                $this->session->set_userdata('login', $this->input->post('login',true));
                //$this->session->set_userdata('saludo','hola te saludo desde la sessión');
                //$session_id = $this->session->userdata('login');
                //echo $this->session->userdata('saludo');
                redirect(base_url().'usuarios',  301);
           }else
           {
            $this->session->set_flashdata('ControllerMessage', 'Usuario y/o clave inválida.');
					           redirect(base_url().'usuarios/login',  301);
           }
        }
        $this->layout->view("login");
    }
    public function logout()
    {
            $this->session->unset_userdata(array('login' => ''));
            $this->session->sess_destroy("taller_ci");
            //redirect(base_url().'usuarios/login',  301);
            redirect(base_url().'index',  301);
    }
   /* public function usuario()
    {
        $data = array
        (
            'nombre'=>$this->input->post("nombre",true),
            'correo'=>$this->input->post("correo",true),
            'login'=>$this->input->post("login",true),
            'pass'=>$this->input->post("pass",true),
            'id_articulo'=>$this->input->post("id_articulo",true),
            'cargo'=>$this->input->post("cargo",true)
        );
        $guardar = $this->usuarios_model->agregar($data);
        $this->layout->view('crear_usuario');
       //falta mandar los datos del formulario al modelo para realizar la consulta
    } */
     public function usuario()
        {
           /* if($this->input->post()) 
            {
                
                if ($this->form_validation->run("usuarios/usuario"))
                {
                    $data = array
                    (

                            'nombres'=>$this->input->post("nombres",true),
                            'apellidos'=>$this->input->post("apellidos",true),
                            'rut'=>$this->input->post("rut",true),
                            'login'=>$this->input->post("login",true),
                            'pass'=>$this->input->post("pass",true)
                    );
                    $guardar = $this->usuarios_model->agregar($data);
                    if($guardar)
                    {
                        $this->session->set_flashdata('ControllerMessage', 'Se ha agregado el adminsitrador exitosamente');
                        redirect(base_url().'usuarios/listar',301);
                    }
                    else
                    {
                        $this->session->set_flashdata('ControllerMessage', 'Se ha producido un error, intente nuevamente');
                        redirect(base_url().'usuarios/usuario',301);
                    }
                }
            }
            $this->layout->view("crear_usuario");
            */
            $data = array
                    (

                            'nombres'=>$this->input->post("nombres",true),
                            'apellidos'=>$this->input->post("apellidos",true),
                            'rut'=>$this->input->post("rut",true),
                            'login'=>$this->input->post("login",true),
                            'pass'=>$this->input->post("pass",true)
                    );
            $guardar = $this->usuarios_model->agregar($data);
            $this->layout->view("crear_usuario");
        }
    public function listar()
    {
        $datos=$this->usuarios_model->lista();
        $this->layout->view('registros',compact("datos"));
    }
    
    public function listar_articulo()
    {
        $datos=$this->usuarios_model->lista_articulo();
        $this->layout->view('lista_articulo',compact("datos"));
    }

    public function listar_categoria()
    {
        $datos=$this->usuarios_model->lista_categoria();
        $this->layout->view('lista_categoria',compact("datos"));
    }

    public function articulo_nuevo()
    {
       /* if($this->input->post()) 
            {
                
                if ($this->form_validation->run('usuarios/nuevo_articulo'))//("usuarios/articulo_nuevo"))
                {
                    $data = array
                    (
                            'titulo'=>$this->input->post("titulo",true),
                            'bajada'=>$this->input->post("bajada",true),
                            'noticia'=>$this->input->post("noticia",true),
                            'fecha'=>$this->input->post("fecha",true),
                            'autor_fk'=>$this->input->post("autor_fk",true),
                            'categoria'=>$this->input->post("categoria",true)
                    );
                    $guardar = $this->usuarios_model->agregar_articulo($data);
                    if($guardar)
                    {
                        $this->session->set_flashdata('ControllerMessage', 'Se ha agregado el articulo exitosamente');
                        redirect(base_url().'usuarios/listar_articulo',301);
                    }
                    else
                    {
                        $this->session->set_flashdata('ControllerMessage', 'Se ha producido un error, intente nuevamente');
                        redirect(base_url().'usuarios/articulo_nuevo',301);
                    }
             }
        }
        $this->layout->view("nuevo_articulo");
        */
        $data = array
                    (
                            'titulo'=>$this->input->post("titulo",true),
                            'bajada'=>$this->input->post("bajada",true),
                            'noticia'=>$this->input->post("noticia",true),
                            'fecha'=>$this->input->post("fecha",true),
                            'autor_fk'=>$this->input->post("autor_fk",true),
                            'categoria'=>$this->input->post("categoria",true)
                    );
        $guardar = $this->usuarios_model->agregar_articulo($data);
        $this->layout->view("nuevo_articulo");
    }
    public function nueva_categoria()
    {
        /*if($this->input->post()) 
            {
                
                if ($this->form_validation->run('usuarios/crear_categoria'))
                {
                    $data = array
                    (
                            'nombre'=>$this->input->post("nombre",true),
                            'descripcion'=>$this->input->post("descripcion",true)
                            
                    );
                    $guardar = $this->usuarios_model->agregar_categoria($data);
                    if($guardar)
                    {
                        $this->session->set_flashdata('ControllerMessage', 'Se ha agregado el articulo exitosamente');
                        redirect(base_url().'usuarios/lista_categoria',301);
                    }
                    else
                    {
                        $this->session->set_flashdata('ControllerMessage', 'Se ha producido un error, intente nuevamente');
                        redirect(base_url().'usuarios/agregar_categoria',301);
                    }
             }
        }
        $this->layout->view("crear_categoria");
        */
        $data = array
                    (
                            'nombre'=>$this->input->post("nombre",true),
                            'descripcion'=>$this->input->post("descripcion",true)
                            
                    );
        $guardar = $this->usuarios_model->agregar_categoria($data);
        $this->layout->view("crear_categoria");
    }
   
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */