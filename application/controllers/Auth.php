<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	  public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Model_auth');
		//Do your magic here
	}


	public function login()



	{
		$this->form_validation->set_rules('username','Username','required',['required'=>'wajib di isi']);
		$this->form_validation->set_rules('password','Password','required',['required'=>'wajib di isi']);


		if ($this->form_validation->run() == FALSE) {
			# code...
             redirect('welcome');
			
		
		}else {
			$auth=$this->Model_auth->cek_login();
		 if ($auth == FALSE) {
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					username atau password salah
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>');
				redirect('welcome');
				# code...
			}else{
		       
		         $this->session->set_userdata('username',$auth->username);
		         $this->session->set_userdata('role_id',$auth->role_id);

		         switch ($auth->role_id) {
		         	case 1:redirect('admin/admin');
		         		# code...
		         		break;
		         	
		         	case 2:redirect('user/user');
		         	    break;

		         	    default:break;
		         }
			}
			# code...
		}
		
	}

	public function Logout()
	{
	$this->session->sess_destroy();
	redirect('welcome');
		# code...
	}

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */