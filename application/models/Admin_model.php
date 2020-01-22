<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function tambah($insert)
	{

		return $this->db->insert('tb_berita',$insert);
		# code...
	}

	public function get()
	{
		return $this->db->get('tb_berita');
	# code...
	}

	public function hapus($id)
	{
		
		$this->db->where('id',$id);
		return $this->db->delete('tb_berita');
    	# code...
	}

	public function getdetail($where)
	{

		return $this->db->get_where('tb_berita',['id'=> $where]);

	}

	public function gett()
	{

		return $this->db->get('kategori');

	}

	public function get_m()
	{

		return $this->db->get('menu');

	}
	public function get_e()
	{

		return $this->db->get('subertia_e');

	}
	public function get_n()
	{

		return $this->db->get('suberita_n');

	}
	public function get_o()
	{

		return $this->db->get('suberita_o');

	}
	public function get_t()
	{

		return $this->db->get('suberita_t');

	}
	public function update($update)
	{
		$this->db->where('id',$this->input->post('id'));
		return $this->db->update('tb_berita',$update);
	}

	

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */