		
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Admin_model');
		if ($this->session->userdata('role_id')!='1') {
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				anda belum login
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('welcome');
		}

	}
	
		// List all your items
	public function index()
	{
		$this->load->view('template admin/sidebar');
		$this->load->view('template admin/navbar');
		$data['kategori']=$this->Admin_model->gett();
		$data['menu']=$this->Admin_model->get_m();
		$data['sub_n']=$this->Admin_model->get_n();
		$data['sub_o']=$this->Admin_model->get_o();
		$data['sub_e']=$this->Admin_model->get_e();
		$data['sub_t']=$this->Admin_model->get_t();
		$this->load->view('admin/admin',$data);
		$this->load->view('template admin/footer');

	}
	public function muncul()
	{   
		$data['tampil']=$this->Admin_model->get();
		$this->load->view('template admin/sidebar');
		$this->load->view('template admin/navbar');
		$this->load->view('admin/data_berita',$data);
		$this->load->view('template admin/footer');

	}
	
		// Add a new item
	public function add()
	{
		$judul= $this->input->post('judul');
		$descripsi= $this->input->post('descripsi');
		$kategori=$this->input->post('kategori');
		$type=$this->input->post('type');
		$sub=$this->input->post('sub');
		$nm=$this->input->post('nama_uploder');
		$tgl_upload=$this->input->post('tgl_upload');
		$foto=$_FILES['foto']['name'];
		if ($foto='') {}else{
			$config['upload_path']   ='./assets/img/';
			$config['allowed_types']  ='jpg|png|jpeg';
			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('foto')) {
				echo "upload gagal"; die();
			}else {
				$foto=$this->upload->data('file_name');
			}
		}
		$datasimpan=array('judul'=>$judul,'foto'=>$foto,'descripsi'=>$descripsi,'kategori'=>$kategori,'type'=>$type,'suberita'=>$sub,'nama_uploder'=>$nm,'tgl_upload'=>$tgl_upload);
		$save=$this->Admin_model->tambah($datasimpan);
		if ($save == true) {

			redirect('admin/Admin');
			# code...
		}else{
			echo"gagal disimapan";
		}



	}

	public function data_update($where)
	{

		$this->load->view('template admin/sidebar');
		$this->load->view('template admin/navbar');
		$data['tampil']=$this->Admin_model->gett();
		$data['menu']=$this->Admin_model->get_m();
		$data['sub_n']=$this->Admin_model->get_n();
		$data['sub_o']=$this->Admin_model->get_o();
		$data['sub_e']=$this->Admin_model->get_e();
		$data['sub_t']=$this->Admin_model->get_t();
		$data['update']=$this->Admin_model->getdetail($where)->row();
		$this->load->view('admin/update',$data);
		$this->load->view('template admin/footer',$data);

		# code...
	}
	
		//Update one item
	public function update()
	{
		$judul= $this->input->post('judul');
		$descripsi= $this->input->post('descripsi');
		$kategori=$this->input->post('kategori');
		$type=$this->input->post('type');
		$sub=$this->input->post('sub');
		$nm=$this->input->post('nama_uploder');
		$tgl_upload=$this->input->post('tgl_upload');
		$foto=$_FILES['foto']['name'];
		if ($foto='') {}else{
			$config['upload_path']   ='./assets/img/';
			$config['allowed_types']  ='jpg|png|jpeg';
			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('foto')) {
				echo "upload gagal"; die();
			}else {
				$foto=$this->upload->data('file_name');
			}
		}
		$datasimpan=array('judul'=>$judul,'foto'=>$foto,'descripsi'=>$descripsi,'kategori'=>$kategori,'type'=>$type,'suberita'=>$sub,'nama_uploder'=>$nm,'tgl_upload'=>$tgl_upload);
		$save=$this->Admin_model->update($datasimpan);
		if ($save == true) {

			redirect('admin/Admin/muncul');
			# code...
		}else{
			echo"gagal disimapan";
		}


	}
	
		//Delete one item
	public function delete($id)
	{
		$this->Admin_model->hapus($id);
		redirect('admin/Admin/muncul');

	}
}

