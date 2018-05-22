<?php 
	class Admin_hot extends CI_Controller{
		public function index(){
			$data['query']=$this->db->get('makanan_hot');
			$data['content']='Admin/hot/hot';
			$this->load->view('Admin/admin',$data); 
		}
		function tambah(){
			$data['content']='Admin/hot/add';
			$this->load->view('Admin/admin',$data); 
		}
		function save(){
			$judul = $this->input->post('judul');
			$alat = $this->input->post('alat_bahan');
			$langkah = $this->input->post('langkah_langkah');

			$config = array(
				'upload_path'=> './upload/hot/',
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
			
						$this->db->insert('makanan_hot',$data);
						redirect('Admin_hot');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
		function edit($id){
			$data['query']=$this->db->get_where('makanan_hot',['hot_id'=>$id])->row();
			$data['content']='Admin/hot/edit';
			$this->load->view('Admin/admin',$data);
		}
		function update(){
			$id =$this->input->post("id");
			$judul = $this->input->post('judul');
			$alat = $this->input->post('alat_bahan');
			$langkah = $this->input->post('langkah_langkah');
			$config = array(
				'upload_path'=> './upload/hot/',
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
						$this->db->where('hot_id',$id);
						$this->db->update('makanan_hot',$data);
						redirect('Admin_hot');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
		function hapus($id){
			if($this->db->delete('makanan_hot',['hot_id'=>$id])){
				?>
				<script type="text/javascript">
					alert("Data Berhasil di hapus");
					window.location="<?php echo base_url('index.php/admin_hot'); ?>";
				</script>
				<?php
			}
		}
	}
 ?>