<?php

class usuarios_model extends CI_Model 
{

    function __construct()
    {
        parent::__construct();
    }
   public function logueo($login,$pass)
   {
         $query=$this->db
        ->select("id,login,pass")
       // ->from("usuarios")
        ->from("administrador")
        ->where(array("login"=>$login,"pass"=>$pass))
        ->count_all_results();
        //echo $this->db->last_query();
        return $query;
   }

   public function agregar($datos = array())
   {
      $this->db->insert("administrador",$datos);
      return true;
   }
   public function agregar_articulo($datos=array())
   {
      $this->db->insert("articulos",$datos);
      return true;
   }
   public function agregar_categoria($datos=array())
   {
      $this->db->insert("categorias",$datos);
   }
   public function lista()
   {
      $query=$this->db
      ->select("nombres, apellidos, rut")
      ->from("administrador")
      ->order_by("pk","desc")
      ->get();
      return $query->result();
   }
   public function lista_articulo()
   {
      $query=$this->db
      ->select("titulo, bajada, noticia, fecha, autor_fk, categoria_fk")
      ->from("articulos")
      ->order_by("pk","desc")
      ->get();
      return $query->result();
   }
   public function lista_categoria()
   {
      $query=$this->db
      ->select("nombre, descripcion")
      ->from("categorias")
      ->order_by("pk","desc")
      ->get();
      return $query->result();
   }


}