
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('User_model');
		
	}

	// List all your items
	public function index()
	{   
		$data['terbaru']=$this->User_model->terbaru();
		$data['terbaru_n']=$this->User_model->terbaru_n();
		$data['hits']=$this->User_model->hist();
		$data['vertical']=$this->User_model->vertical();
		$data['tampil']=$this->User_model->get();
		$this->load->view('template home/sidebar');
		$this->load->view('template home/navbar');
		$this->load->view('welcome_message',$data);
		$this->load->view('user/login');
		$this->load->view('user/register');
		$this->load->view('template home/footer');


	}
	public function nasional()

	{
		$data['terbaru']=$this->User_model->terbaru_naional();
		$data['terbaru_n']=$this->User_model->terbaru_nasional_n();   
		$data['hits']=$this->User_model->hist_n();
		$data['vertical']=$this->User_model->get_nasional_v();
		$data['tampil']=$this->User_model->get_nasional();
		$this->load->view('template home/sidebar');
		$this->load->view('template home/navbar');
		$this->load->view('user/nasional/nasional',$data);
		$this->load->view('user/login');
		$this->load->view('user/register');
		$this->load->view('template home/footer');
		# code...
	}
	public function olahraga()
	{
		$data['terbaru']=$this->User_model->terbaru_o();
		$data['terbaru_n']=$this->User_model->terbaru_olahraga_o();  
		$data['hits']=$this->User_model->hist_o();   
		$data['vertical']=$this->User_model->get_olahraga_v();
		$data['tampil']=$this->User_model->get_olahraga();
		$this->load->view('template home/sidebar');
		$this->load->view('template home/navbar');
		$this->load->view('user/olahraga/olahraga',$data);
		$this->load->view('user/login');
		$this->load->view('user/register');
		$this->load->view('template home/footer');
		# code...
	}
	public function ekonomi()
	{ 
		$data['terbaru']=$this->User_model->terbaru_e();
		$data['terbaru_n']=$this->User_model->terbaru_ekonomi_e(); 
		$data['hits']=$this->User_model->hist_e();
		$data['vertical']=$this->User_model->get_ekonomi_v();   
		$data['tampil']=$this->User_model->get_ekonomi();
		$this->load->view('template home/sidebar');
		$this->load->view('template home/navbar');
		$this->load->view('user/ekonomi/ekonomi',$data);
		$this->load->view('user/login');
		$this->load->view('user/register');
		$this->load->view('template home/footer');
		# codhome
	}
	public function teknologi()
	{   $data['terbaru']=$this->User_model->terbaru_t();
	$data['terbaru_n']=$this->User_model->terbaru_teknologi_t(); 
	$data['hits']=$this->User_model->hist_t();
	$data['vertical']=$this->User_model->get_teknologi_v();
	$data['tampil']=$this->User_model->get_teknologi();
	$this->load->view('template home/sidebar');
	$this->load->view('template home/navbar');
	$this->load->view('user/teknologi/teknologi',$data);
	$this->load->view('user/login');
	$this->load->view('user/register');
	$this->load->view('template home/footer');
		# code...
}


public function politik()
{   

	$data['terbaru']=$this->User_model->terbaru_politik();
	$data['terbaru_n']=$this->User_model->terbaru_politik_p();
	$data['hits']=$this->User_model->politik_hi();
	$data['vertical']=$this->User_model->politik();
	$data['tampil']=$this->User_model->politik_H();
	$this->load->view('template home/sidebar');
	$this->load->view('template home/navbar');
	$this->load->view('user/nasional/politik',$data);
	$this->load->view('user/login');
	$this->load->view('user/register');
	$this->load->view('template home/footer');

}
public function hk()
{  
	$data['terbaru']=$this->User_model->terbaru_hk();
	$data['terbaru_n']=$this->User_model->terbaru_hk_h();
	$data['hits']=$this->User_model->hk_hi(); 
	$data['vertical']=$this->User_model->hk();
	$data['tampil']=$this->User_model->hk_H();
	$this->load->view('template home/sidebar');
	$this->load->view('template home/navbar');
	$this->load->view('user/nasional/hukum&kriminal',$data);
	$this->load->view('user/login');
	$this->load->view('user/register');
	$this->load->view('template home/footer');

}
public function peristiwa()
{   
	$data['terbaru']=$this->User_model->terbaru_peristiwa();
	$data['terbaru_n']=$this->User_model->terbaru_peristiwa_P();
	$data['hits']=$this->User_model->peristiwa_hi(); 
	$data['vertical']=$this->User_model->pristiwa();
	$data['tampil']=$this->User_model->pristiwa_H();
	$this->load->view('template home/sidebar');
	$this->load->view('template home/navbar');
	$this->load->view('user/nasional/pristiwa',$data);
	$this->load->view('user/login');
	$this->load->view('user/register');
	$this->load->view('template home/footer');

}

public function sepakbola()
{   

	$data['terbaru']=$this->User_model->terbaru_sepakbola();
	$data['terbaru_n']=$this->User_model->terbaru_sepakbola_s();
	$data['hits']=$this->User_model->sepakbola_hi(); 
	$data['vertical']=$this->User_model->sepakbola();
	$data['tampil']=$this->User_model->sepakbola_h();
	$this->load->view('template home/sidebar');
	$this->load->view('template home/navbar');
	$this->load->view('user/olahraga/sepakbola',$data);
	$this->load->view('user/login');
	$this->load->view('user/register');
	$this->load->view('template home/footer');

}

public function motorgp()
{   $data['terbaru']=$this->User_model->terbaru_motorgp();
$data['terbaru_n']=$this->User_model->terbaru_motorgp_m();
$data['hits']=$this->User_model->motorgp_hi(); 
$data['vertical']=$this->User_model->motorgp();
$data['tampil']=$this->User_model->motorgp_h();
$this->load->view('template home/sidebar');
$this->load->view('template home/navbar');
$this->load->view('user/olahraga/motorgp',$data);
$this->load->view('user/login');
$this->load->view('user/register');
$this->load->view('template home/footer');

}

public function f1()
{   $data['terbaru']=$this->User_model->terbaru_f1();
$data['terbaru_n']=$this->User_model->terbaru_f1_f();
$data['hits']=$this->User_model->f1_hi(); 
$data['vertical']=$this->User_model->f1();
$data['tampil']=$this->User_model->f1_h();
$this->load->view('template home/sidebar');
$this->load->view('template home/navbar');
$this->load->view('user/olahraga/f1',$data);
$this->load->view('user/login');
$this->load->view('user/register');
$this->load->view('template home/footer');

}

public function raket()
{   $data['terbaru']=$this->User_model->terbaru_raket();
$data['terbaru_n']=$this->User_model->terbaru_raket_r();
$data['hits']=$this->User_model->raket_hi(); 
$data['vertical']=$this->User_model->raket();
$data['tampil']=$this->User_model->raket_h();
$this->load->view('template home/sidebar');
$this->load->view('template home/navbar');
$this->load->view('user/olahraga/raket',$data);
$this->load->view('user/login');
$this->load->view('user/register');
$this->load->view('template home/footer');

}
public function ti()
{   $data['terbaru']=$this->User_model->terbaru_ti();
$data['terbaru_n']=$this->User_model->terbaru_ti_t();
$data['hits']=$this->User_model->ti_hi(); 
$data['vertical']=$this->User_model->ti();
$data['tampil']=$this->User_model->ti_h();
$this->load->view('template home/sidebar');
$this->load->view('template home/navbar');
$this->load->view('user/teknologi/ti',$data);
$this->load->view('user/login');
$this->load->view('user/register');
$this->load->view('template home/footer');

}

public function sains()
{   $data['terbaru']=$this->User_model->terbaru_sains();
$data['terbaru_n']=$this->User_model->terbaru_sains_s();
$data['hits']=$this->User_model->sains_hi(); 
$data['vertical']=$this->User_model->sains();
$data['tampil']=$this->User_model->sains_h();
$this->load->view('template home/sidebar');
$this->load->view('template home/navbar');
$this->load->view('user/teknologi/sains',$data);
$this->load->view('user/login');
$this->load->view('user/register');
$this->load->view('template home/footer');

}

public function telkomunikasi()
{   $data['terbaru']=$this->User_model->terbaru_telekomunikasi();
$data['terbaru_n']=$this->User_model->terbaru_telekomunikasi_t();
$data['hits']=$this->User_model->telekomunikasi_hi(); 
$data['vertical']=$this->User_model->telkomunikasi();
$data['tampil']=$this->User_model->telkomunikasi_h();
$this->load->view('template home/sidebar');
$this->load->view('template home/navbar');
$this->load->view('user/teknologi/telekomunikasi',$data);
$this->load->view('user/login');
$this->load->view('user/register');
$this->load->view('template home/footer');

}

public function otomotif()
{   $data['terbaru']=$this->User_model->terbaru_otomotif();
$data['terbaru_n']=$this->User_model->terbaru_otomotif_o();
$data['hits']=$this->User_model->otomotif_hi(); 
$data['vertical']=$this->User_model->otomotif();
$data['tampil']=$this->User_model->otomotif_h();
$this->load->view('template home/sidebar');
$this->load->view('template home/navbar');
$this->load->view('user/teknologi/otomotif',$data);
$this->load->view('user/login');
$this->load->view('user/register');
$this->load->view('template home/footer');

}
public function keuangan()
{   
	$data['terbaru']=$this->User_model->terbaru_keuangan();
	$data['terbaru_n']=$this->User_model->terbaru_keuangan_k();
	$data['hits']=$this->User_model->keuangan_hi();
	$data['vertical']=$this->User_model->keuangan();
	$data['tampil']=$this->User_model->keuangan_h();
	$this->load->view('template home/sidebar');
	$this->load->view('template home/navbar');
	$this->load->view('user/Ekonomi/keuangan',$data);
	$this->load->view('user/login');
	$this->load->view('user/register');
	$this->load->view('template home/footer');

}
public function energi()
{   
	$data['terbaru']=$this->User_model->terbaru_energi();
	$data['terbaru_n']=$this->User_model->terbaru_energi_e();
	$data['hits']=$this->User_model->keuangan_hi();
	$data['vertical']=$this->User_model->energi();
	$data['tampil']=$this->User_model->energi_h();
	$this->load->view('template home/sidebar');
	$this->load->view('template home/navbar');
	$this->load->view('user/Ekonomi/energi',$data);
	$this->load->view('user/login');
	$this->load->view('user/register');
	$this->load->view('template home/footer');

}
public function bisnis()
{   
	$data['terbaru']=$this->User_model->terbaru_bisnis();
	$data['terbaru_n']=$this->User_model->terbaru_bisnis_b();
	$data['hits']=$this->User_model->bisnis_hi();
	$data['vertical']=$this->User_model->bisnis();
	$data['tampil']=$this->User_model->bisnis_h();
	$this->load->view('template home/sidebar');
	$this->load->view('template home/navbar');
	$this->load->view('user/Ekonomi/bisnis',$data);
	$this->load->view('user/login');
	$this->load->view('user/register');
	$this->load->view('template home/footer');

}
public function makro()
{   
	$data['terbaru']=$this->User_model->terbaru_makro();
	$data['terbaru_n']=$this->User_model->terbaru_makro_m();
	$data['hits']=$this->User_model->makro_hi();
	$data['vertical']=$this->User_model->makro();
	$data['tampil']=$this->User_model->makro_h();
	$this->load->view('template home/sidebar');
	$this->load->view('template home/navbar');
	$this->load->view('user/Ekonomi/makro',$data);
	$this->load->view('user/login');
	$this->load->view('user/register');
	$this->load->view('template home/footer');

}
public function search()
{   
	
	$cari= $this->input->GET('keyword');
	$data['lits']= $this->User_model->search_m($cari);
	$this->load->view('template home/sidebar');
	$this->load->view('template home/navbar');
	$this->load->view('user/search',$data);

	// $this->load->view('template user/footer');

         # code...
}



}

/* End of file user.php */


/* En of file user.php */
/* Location: ./application/controllers/user/user.php */