<?php 
	class Admin_cake extends CI_Controller{
		public function index(){
			$data['query']=$this->db->get('cake');
			$data['content']='Admin/cake/cake';
			$this->load->view('Admin/admin',$data); 
		}
		function tambah(){
			$data['content']='Admin/cake/add';
			$this->load->view('Admin/admin',$data); 
		}
		function save(){
			$judul = $this->input->post('judul');
			$alat = $this->input->post('alat_bahan');
			$langkah = $this->input->post('langkah_langkah');

			$config = array(
				'upload_path'=> './upload/cake/',
				'allowed_types'=> 'png|jpg|jpeg'
			);
			$this->load->library('upload',$config);
			if ($this->upload->do_upload('gambar')) {
			$data=array(
				'judul'=>$judul,
				'alat_bahan'=>$alat,
				'langkah_langkah'=>$langkah,
				'gambar'=> $this->upload->data('file_name')
			);
			
						$this->db->insert('cake',$data);
						redirect('Admin_cake');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
		function edit($id){
			$data['query']=$this->db->get_where('cake',['cake_id'=>$id])->row();
			$data['content']='Admin/cake/edit';
			$this->load->view('Admin/admin',$data);
		}
		function update(){
			$id =$this->input->post("id");
			$judul = $this->input->post('judul');
			$alat = $this->input->post('alat_bahan');
			$langkah = $this->input->post('langkah_langkah');
			$config = array(
				'upload_path'=> './upload/cake/',
				'allowed_types'=> 'png|jpg|jpeg'
			);
			$this->load->library('upload',$config);
			if ($this->upload->do_upload('gambar')) {
			$data=array(
				'judul'=>$judul,
				'alat_bahan'=>$alat,
				'langkah_langkah'=>$langkah,
				'gambar'=> $this->upload->data('file_name')
			);
						$this->db->where('cake_id',$id);
						$this->db->update('cake',$data);
						redirect('Admin_cake');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
		function hapus($id){
			if($this->db->delete('cake',['cake_id'=>$id])){
				?>
				<script type="text/javascript">
					alert("Data Berhasil di hapus");
					window.location="<?php echo base_url('index.php/admin_cake'); ?>";
				</script>
				<?php
			}
		}
	}
 ?>