<?php 
	class Admin_kripik extends CI_Controller{
		public function index(){
			$data['query']=$this->db->get('kripik');
			$data['content']='Admin/kripik/kripik';
			$this->load->view('Admin/admin',$data); 
		}
		function tambah(){
			$data['content']='Admin/kripik/add';
			$this->load->view('Admin/admin',$data); 
		}
		function save(){
			$judul = $this->input->post('judul');
			$alat = $this->input->post('alat_bahan');
			$langkah = $this->input->post('langkah_langkah');

			$config = array(
				'upload_path'=> './upload/kripik/',
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
			
						$this->db->insert('kripik',$data);
						redirect('Admin_kripik');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
		function edit($id){
			$data['query']=$this->db->get_where('kripik',['kripik_id'=>$id])->row();
			$data['content']='Admin/kripik/edit';
			$this->load->view('Admin/admin',$data);
		}
		function update(){
			$id =$this->input->post("id");
			$judul = $this->input->post('judul');
			$alat = $this->input->post('alat_bahan');
			$langkah = $this->input->post('langkah_langkah');
			$config = array(
				'upload_path'=> './upload/kripik/',
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
						$this->db->where('kripik_id',$id);
						$this->db->update('kripik',$data);
						redirect('Admin_kripik');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
		function hapus($id){
			if($this->db->delete('kripik',['kripik_id'=>$id])){
				?>
				<script type="text/javascript">
					alert("Data Berhasil di hapus");
					window.location="<?php echo base_url('index.php/admin_kripik'); ?>";
				</script>
				<?php
			}
		}
	}
 ?>