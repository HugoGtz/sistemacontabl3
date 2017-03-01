<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    
	public function __construct(){
		parent::__construct();

		$this->load->model('user_model');

	}
	
	   function id(){
	    if($this->session->userdata('logueado')){
	     $id = $this->session->userdata('id');
	     echo json_encode(array("id" => $id));
	    }
	   }
	   
	   function name(){
	    if ($this->session->userdata('logueado')) {
	     $name = $this->session->userdata('nombre');
	     echo json_encode(array("name" => $name));
	    }
	   }
	   function logeado($id_user_facebook,$name){
    if($id_user_facebook){
     $user_data = array(
      'id' => $id_user_facebook,
      'nombre' => $name,
      'logueado' => TRUE
      );
      $this->session->set_userdata($user_data);
      echo "Session creada";
    }
   }
    function datas(){
     $id_user_facebook = $this->input->get('id_user_facebook');
     $name = $this->input->get('name');
     $user_name = $this->input->get('user_name');
     $password = $this->input->get('password');
     $phone = $this->input->get('phone');
     $email = $this->input->get('email');
     $user_range  = $this->input->get('user_range');
     $registration_date = $this->input->get('registration_date');
     echo $id_user_facebook.$name.$email;
     $user = $this->user_model->search_user($id_user_facebook);
     
     if($user==true){
         echo json_encode("existe el usuario");
         $this->logeado($id_user_facebook, $name);
         
     }else{
        
        
        $this->user_model->new_user($id_user_facebook,$name,$user_name,$password,$phone,$email,$user_range,$registration_date);
        echo json_encode("no existe el usuario");
     }
      

    }

}
?>