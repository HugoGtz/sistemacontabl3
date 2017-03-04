<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sections extends CI_Controller {
      
	public function __construct(){
		parent::__construct();
	}
    function soporte(){
        $this->load->view('header');
    	  $this->load->view('chat');
        $this->load->view('sections/soporte');
        $this->load->view('footer');
    }
      function faq(){
        $this->load->view('header');
    	  $this->load->view('chat');
        $this->load->view('sections/faq');
        $this->load->view('footer');
    }
      function contacto(){
        $this->load->view('header');
    	  $this->load->view('chat');
        $this->load->view('sections/contacto');
        $this->load->view('footer');
    }
    
      function quiensomos(){
        $this->load->view('header');
    	  $this->load->view('chat');
        $this->load->view('sections/quiensomos');
        $this->load->view('footer');
    }
    
  
}
?>