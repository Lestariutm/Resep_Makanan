<?php 
	class Daging extends CI_Controller{
		public function index(){
			$data['data']= array(
			'daging' => $this->db->get('daging')
		);
			$data['content']="page/daging";
			$this->load->view('page/index',$data);
		}
	}
 ?>