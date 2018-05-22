<?php 
	class kripik extends  CI_Controller{
		public function index(){
			$data['content']="page/kripik";
			$this->load->view('page/index',$data);
		}
	}
 ?>