<?php 
	class Sayuran extends CI_Controller{
		public function index(){
			$data['content']="page/sayuran";
			$this->load->view('page/index',$data);
		}
	}
?>