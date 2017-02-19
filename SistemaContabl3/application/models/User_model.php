<?php 
class User_model extends CI_Model {

   function __construct(){
      parent::__construct();
      $this->load->database();
   }
   
   function search_user($id_user_facebook){
      $this->db->where('id_user_facebook',$id_user_facebook);
      $query = $this->db->get('users');
      if ($query->num_rows()>0) {
         return true;
      }
      else{
         return false;
      }
   }
   
   function new_user($id_user_facebook, $name, $user_name, $password, $phone, $email, $user_range, $registration_date){
       $data = array('id_user_facebook' => $id_user_facebook, 'name' => $name, 'user_name' => $user_name, 'password' => $password, 'phone' => $phone, 'email' => $email, 'user_range' => $user_range, 'registration_date' => $registration_date);
      	$this->db->insert('users',$data);
   }
}

?>
