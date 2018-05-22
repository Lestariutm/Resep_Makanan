<?php 
	class Admin_minuman extends CI_Controller{
		public function index(){
			$data['query']=$this->db->get('minuman');
			$data['content']='Admin/minuman/minuman';
			$this->load->view('Admin/admin',$data);
		}
		function tambah(){
			$data['query']=$this->db->get('minuman')->row();
			$data['content']='Admin/minuman/add_minuman';
			$this->load->view('Admin/admin',$data);
		}
		function save(){
			$judul = $this->input->post("judul_minuman");
			$desc	= $this->input->post("deskripsi");
			$albah = $this->input->post("alat_bahan");
			$step =	$this->input->post("langkah_langkah");

			$data=array(
				'judul_minuman'=>$judul,
				'deskripsi'=>$desc,
				'alat_bahan'=>$albah,
				'langkah_langkah'=>$step
			);
			
						$this->db->insert('minuman',$data);
						redirect('Admin_minuman');
		}
		function edit($id){
			$data['query']=$this->db->get_where('minuman',['minuman_id'=>$id])->row();
			$data['content']='Admin/minuman/edit';
			$this->load->view('Admin/admin',$data);
		}
		function update(){
			$id =$this->input->post("id");
			$judul = $this->input->post("judul_minuman");
			$desc	= $this->input->post("deskripsi");
			$albah = $this->input->post("alat_bahan");
			$step =	$this->input->post("langkah_langkah");

			$data=array(
				'judul_minuman'=>$judul,
				'deskripsi'=>$desc,
				'alat_bahan'=>$albah,
				'langkah_langkah'=>$step
			);
						$this->db->where('minuman_id',$id);
						$this->db->update('minuman',$data);
						redirect('Admin_minuman');
			
		}
		function hapus($id){
			if($this->db->delete('minuman',['minuman_id'=>$id])){
				?>
				<script type="text/javascript">
					alert("Data Berhasil di hapus");
					window.location="<?php echo base_url('index.php/Admin_minuman'); ?>";
				</script>
				<?php
			}
		}
	}
 ?>