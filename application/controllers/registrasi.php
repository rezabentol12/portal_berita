<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('nama','Nama','required',['required'=>'wajib di isi']);
		$this->form_validation->set_rules('username','Username','required',['required'=>'wajib di isi']);
		$this->form_validation->set_rules('password_1','password','required|matches[password_2]',['required'=>'pasword wajib di isi','matches'=>'password tidak cocok']);
		$this->form_validation->set_rules('password_2','password','required|matches[password_1]');
		if ($this->form_validation->run() == FALSE) {
			
		 redirect('welcome');
	}else{
		$data= array(
			// 'id'=>'',
			'nama'=>$this->input->post('nama'),
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password_1'),
			'role_id'=>2,
		);
		$this->db->insert('tb_user',$data);
		redirect('welcome');
	}
		
		
	}

}

/* End of file registrasi.php */
/* Location: ./application/controllers/registrasi.php */