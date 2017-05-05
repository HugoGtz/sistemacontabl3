<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {
      
	public function __construct(){
		parent::__construct();
		$this->load->model('chat_model');
	}
	
	function messages(){
    	$this->load->view('header');
		$this->load->view('adminchat');
	}
	
	function chat_status(){
	    $id_user = $this->session->userdata('id');
	    if ($this->session->userdata('logueado')) {
	        
         $status =  $this->chat_model->check_status($id_user);
         if ($status) {
             echo "t";
             return true;
         }else{
             echo "f";
             return false;
         }
	    }
	}
	
	function new_chat(){
	    $id = $this->session->userdata('id');
	    if ($this->session->userdata('logueado')) {
	       if ($this->chat_status()) {
	        return false;
	    }else{
	        $this->chat_model->new_chat($id);
	       return true;
	    }
	    }
	    
	}
	
	function send_message(){
	    if ($this->session->userdata('logueado')) {
	    $id_user = $this->session->userdata('id');
	    $chat_id = $this->chat_model->get_id_chat($id_user);
	    $msg = $this->input->get("msg");
	    echo $msg;
	    $insert_msg = $this->chat_model->message_insert($chat_id->id, $id_user, $msg);
	    return $insert_msg;
	    }
	}
	
	function get_messages(){
	    $id_user = $this->session->userdata('id');
	    $chat_id = $this->chat_model->get_id_chat($id_user);
	    
	    $messages = $this->chat_model->get_messages($chat_id->id);
	    echo json_encode($messages);
	    return json_encode($messages);
	}
	
	
	
	
	
}
