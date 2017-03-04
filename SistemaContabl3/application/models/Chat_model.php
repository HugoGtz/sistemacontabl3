<?php 
class Chat_model extends CI_Model {

   function __construct(){
      parent::__construct();
      $this->load->database();
   }
   
   //check status chat on db.
   function check_status($id_user){
       $this->db->where('id_user',$id_user);
      $query = $this->db->get('chat');
      if ($query->num_rows()>0) {
         return true;
      }
      else{
         return false;
      }
       
   
   }
   // create new chat on db.
   function new_chat($id){
    $data = array('status'=>false,'id_user' => $id, 'id_admin'=>null);
    $this->db->insert('chat',$data);
    // recuperar ultimo id insertado y retornarlo.
    
   }
   
   function get_id_chat($id_user){
        $this->db->select('id');
      $query = $this->db->get('chat');
      if ($query->num_rows()>0) {
         return $query->row();
      }
   }
   
   // insert message with user.
   function message_insert($chat_id, $id_user,$msg){
    $data = array('chat_id' => $chat_id, 'user_id' => $id_user, 'line_text' => $msg);
    $this->db->trans_start();
       $this->db->insert('messages',$data);
    $this->db->trans_complete();
    
    if ($this->db->trans_status() === FALSE) {
               return false;
           } else {
               return true;
           }
   }
   
   function get_messages($chat_id){
      $this->db->where('chat_id',$chat_id);
      $query = $this->db->get('messages');
      if ($query->num_rows()>0) {
          return $query->result();
      }else{
          return false;
      }
   }
}
?>