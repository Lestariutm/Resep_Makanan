<?php 
	class Makanan_hot extends CI_Controller{
		public function index(){
			$data['content']="page/hot";
			$this->load->view('page/index',$data);
		}
	}
 ?>