<?php 
	class Ringan extends CI_Controller{
		public function index(){
			$data['content']="page/makanan_ringan";
			$this->load->view('page/index',$data);
		}
	}
 ?>