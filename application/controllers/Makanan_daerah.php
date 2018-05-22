<?php 
	class Makanan_daerah extends CI_Controller{
		public function index(){
			$data['content']="page/makanan_daerah";
			$this->load->view('page/index',$data);
		}
	}
 ?>