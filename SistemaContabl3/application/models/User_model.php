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
   
   function id_user($id_user_facebook, $user_name){
     $this->db->select('id_user');
     if ($id_user_facebook!=null) {
         $this->db->where('id_user_facebook', $id_user_facebook);
     }else{
         if($user_name != null){
            $this->db->where('user_name', $user_name);
         }
     }
     $query = $this->db->get('users');
     if ($query->num_rows()>0) {
       return $query->row();
     }else{
        return false;
     }
   }
   
   function user_range($id){
      $this->db->select('user_range');
      $query = $this->db->get('users');
      if ($query->num_rows()>0) {
         return $query->result();
      }
   }
   
}

?>
