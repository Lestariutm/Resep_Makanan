<?php 
	 class Home Extends CI_Controller{
	 	public function index(){
	 	$data['content']="page/home_view";
	 	$this->load->view('page/index',$data);
	 }
	 }
 ?>