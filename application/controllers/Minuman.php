<?php 
	class Minuman extends CI_Controller{
		public function index(){
			$data['data']= array(
			'drink' => $this->db->get('minuman')
		);
			$data['content']="page/drink";
			$this->load->view('page/index',$data);
		}
	}
 ?>