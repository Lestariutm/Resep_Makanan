<?php 
	class Admin_ringan extends CI_Controller{
		public function index(){
			$data['query']=$this->db->get('makanan_ringan');
			$data['content']='Admin/ringan/ringan';
			$this->load->view('Admin/admin',$data); 
		}
		function tambah(){
			$data['content']='Admin/ringan/add';
			$this->load->view('Admin/admin',$data); 
		}
		function save(){
			$judul = $this->input->post('judul');
			$alat = $this->input->post('alat_bahan');
			$langkah = $this->input->post('langkah_langkah');

			$config = array(
				'upload_path'=> './upload/ringan/',
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
			
						$this->db->insert('makanan_ringan',$data);
						redirect('Admin_ringan');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
		function edit($id){
			$data['query']=$this->db->get_where('makanan_ringan',['ringan_id'=>$id])->row();
			$data['content']='Admin/ringan/edit';
			$this->load->view('Admin/admin',$data);
		}
		function update(){
			$id =$this->input->post("id");
			$judul = $this->input->post('judul');
			$alat = $this->input->post('alat_bahan');
			$langkah = $this->input->post('langkah_langkah');
			$config = array(
				'upload_path'=> './upload/ringan/',
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
						$this->db->where('ringan_id',$id);
						$this->db->update('makanan_ringan',$data);
						redirect('Admin_ringan');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
		function hapus($id){
			if($this->db->delete('makanan_ringan',['ringan_id'=>$id])){
				?>
				<script type="text/javascript">
					alert("Data Berhasil di hapus");
					window.location="<?php echo base_url('index.php/admin_ringan'); ?>";
				</script>
				<?php
			}
		}
	}
 ?>