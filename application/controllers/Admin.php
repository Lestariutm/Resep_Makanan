<?php 
	class Admin extends CI_controller{
		public function index(){
			$data['content']="admin/view_home";
			$this->load->view('admin/admin',$data);
		}
	}

 ?>