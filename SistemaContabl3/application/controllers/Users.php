 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Users extends CI_Controller {
   
 	public function __construct(){
 		parent::__construct();
 
 		$this->load->model('user_model');
 		$this->load->model('chat_model');
 	
 
 	}
 	// Get id_user
   function id(){
    if($this->session->userdata('logueado')){
     $id = $this->session->userdata('id');
     echo json_encode(array("id" => $id));
   }
 }
 
 // Get name_user.
 function name(){
  if ($this->session->userdata('logueado')) {
   $name = $this->session->userdata('nombre');
   echo json_encode(array("name" => $name));
 }
 }
 // Log In.
 function logeado($id_user_facebook,$name,$user_name){
  
   $id = $this->user_model->id_user($id_user_facebook,$user_name);
   $range = $this->user_model->user_range($id->id_user);
   $status = $this->chat_model->check_status($id->id_user);
   
   if($id){
    $user_data = array(
     'id' => $id->id_user,
     'nombre' => $name,
     'logueado' => TRUE,
     'range' => $range,
     'status' => $status
     );
    $this->session->set_userdata($user_data);
    echo "Session creada";
  }else{
   echo "No se pudo inicar sesion.";
  }
 }
 
 function datas(){
  // Datas user get facebook.
  $id_user_facebook = $this->input->get('id_user_facebook');
  $name = $this->input->get('name');
  $user_name = $this->input->get('user_name');
  $password = $this->input->get('password');
  $phone = $this->input->get('phone');
  $email = $this->input->get('email');
  $user_range  = $this->input->get('user_range');
  $registration_date = $this->input->get('registration_date');
  
  // Find user on db.
  echo $id_user_facebook.$name.$email;
  $user = $this->user_model->search_user($id_user_facebook);
  
  // Log in
  if($user==true){
    echo json_encode("existe el usuario");
    $this->logeado($id_user_facebook, $name,$user_name);
    
  }else{
   
   // Sign up.
   $this->user_model->new_user($id_user_facebook,$name,$user_name,$password,$phone,$email,$user_range,$registration_date);
   echo json_encode("no existe el usuario");
 }
 
 
 }
 
 }
 ?>