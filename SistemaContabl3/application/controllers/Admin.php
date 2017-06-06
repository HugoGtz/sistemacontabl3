 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Admin extends CI_Controller {
     
     public function __construct(){
		parent::__construct();
	}
	
	function index(){
	    $this->load->view('header');
	    $this->load->view('admin/index.php');
	}
	
	function container(){
    	$this->load->view('header');
    	$this->load->view('admin/container.php');
	}
	
	function slider(){
    	$this->load->view('header');
    	$this->load->view('admin/slider.php');
	}
 }
 
 ?>