<?php 
	class Cake extends CI_Controller{
		public function index(){
			$data['content']="page/cake";
			$this->load->view('page/index',$data);
		}
	}
 ?>