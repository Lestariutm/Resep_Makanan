<?php 
	class Admin_daging extends CI_Controller{
		public function index(){
			$data['query']= $this->db->get('daging');
			$data['content']='Admin/daging/daging';
			$this->load->view('Admin/admin',$data);
		}
		function tambah(){
			$data['query']=$this->db->get('daging')->row();
			$data['content']='Admin/daging/add_daging';
			$this->load->view('Admin/admin',$data);
		}
		function save(){
			$judul = $this->input->post("judul");
			$desc	= $this->input->post("deskripsi");
			$albah = $this->input->post("alat_bahan");
			$step =	$this->input->post("langkah_langkah");

			$data=array(
				'judul'=>$judul,
				'deskripsi'=>$desc,
				'alat_bahan'=>$albah,
				'langkah_langkah'=>$step
			);
			
						$this->db->insert('daging',$data);
						redirect('admin_daging');
		}
		function edit($id){
			$data['query']=$this->db->get_where('daging',['daging_id'=>$id])->row();
			$data['content']='Admin/daging/edit';
			$this->load->view('Admin/admin',$data);
		}
		function update(){
			$id =$this->input->post("id");
			$judul = $this->input->post("judul");
			$desc	= $this->input->post("deskripsi");
			$albah =   $this->input->post("alat_bahan");
			$step =	$this->input->post("langkah_langkah");

			$data=array(
				'judul'=>$judul,
				'deskripsi'=>$desc,
				'alat_bahan'=>$albah,
				'langkah_langkah'=>$step
			);
						$this->db->where('daging_id',$id);
						$this->db->update('daging',$data);
						redirect('admin_daging');
			
		}
		function hapus($id){
			if($this->db->delete('daging',['daging_id'=>$id])){
				?>
				<script type="text/javascript">
					alert("Data Berhasil di hapus");
					window.location="<?php echo base_url('index.php/admin_daging'); ?>";
				</script>
				<?php
			}
		}
	}
 ?>