<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function get()
	{
       return $this->db->get_where('tb_berita',array('type'=>'Horizontal'));
   }
   public function get_nasional()
   {
     return $this->db->get_where('tb_berita',array('kategori'=>'Nasional','type'=>'Horizontal'));
 }
 public function get_nasional_v()
 {
    return $this->db->get_where('tb_berita',array('kategori'=>'Nasional','type'=>'Vertical'));
}
public function politik()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Nasional','type'=>'Vertical','suberita'=>'Politik'));
}
public function hk()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Nasional','type'=>'Vertical','suberita'=>'Hukum&Kriminal'));
}
public function pristiwa()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Nasional','type'=>'Vertical','suberita'=>'Peristiwa'));
}
public function politik_H()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Nasional','type'=>'Horizontal','suberita'=>'Politik'));
}
public function hk_H()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Nasional','type'=>'Horizontal','suberita'=>'Hukum&Kriminal'));
}
public function pristiwa_H()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Nasional','type'=>'Horizontal','suberita'=>'Peristiwa'));
}


public function get_olahraga()
{
 return $this->db->get_where('tb_berita',array('kategori'=>'Olahraga','type'=>'Horizontal'));
}
public function get_olahraga_v()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Olahraga','type'=>'Vertical'));
}
public function sepakbola()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Olahraga','type'=>'Vertical','suberita'=>'SepakBola'));
}
public function motorgp()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Olahraga','type'=>'Vertical','suberita'=>'MotorGP'));
}
public function f1()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Olahraga','type'=>'Vertical','suberita'=>'F1'));
}
public function raket()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Olahraga','type'=>'Vertical','suberita'=>'Raket'));
}
public function sepakbola_h()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Olahraga','type'=>'Horizontal','suberita'=>'SepakBola'));
}
public function motorgp_h()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Olahraga','type'=>'Horizontal','suberita'=>'MotorGP'));
}
public function f1_h()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Olahraga','type'=>'Horizontal','suberita'=>'F1'));
}
public function raket_h()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Olahraga','type'=>'Horizontal','suberita'=>'Raket'));
}


public function get_teknologi()
{
 return $this->db->get_where('tb_berita',array('kategori'=>'Teknologi','type'=>'Horizontal'));

}
public function get_teknologi_v()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Teknologi','type'=>'Vertical'));
}
public function ti()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Teknologi','type'=>'Vertical','suberita'=>'TeknologiInformasi'));
}
public function sains()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Teknologi','type'=>'Vertical','suberita'=>'Sains'));
}
public function telkomunikasi()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Teknologi','type'=>'Vertical','suberita'=>'Telekomunikasi'));
}
public function otomotif()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Teknologi','type'=>'Vertical','suberita'=>'Otomotif'));
}
public function ti_h()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Teknologi','type'=>'Horizontal','suberita'=>'TeknologiInformasi'));
}
public function sains_h()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Teknologi','type'=>'Horizontal','suberita'=>'Sains'));
}
public function telkomunikasi_h()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Teknologi','type'=>'Horizontal','suberita'=>'Telekomunikasi'));
}
public function otomotif_h()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Teknologi','type'=>'Horizontal','suberita'=>'Otomotif'));
}


public function get_ekonomi()
{
 return $this->db->get_where('tb_berita',array('kategori'=>'Ekonomi','type'=>'Horizontal'));
}
public function get_ekonomi_v()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Ekonomi','type'=>'Vertical'));
}
public function keuangan()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Ekonomi','type'=>'Vertical','suberita'=>'Keuangan'));
}

public function energi()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Ekonomi','type'=>'Vertical','suberita'=>'Energi'));
}

public function bisnis()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Ekonomi','type'=>'Vertical','suberita'=>'Bisnis'));
}

public function makro()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Ekonomi','type'=>'Horizontal','suberita'=>'Makro'));
}
public function keuangan_h()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Ekonomi','type'=>'Horizontal','suberita'=>'Keuangan'));
}

public function energi_h()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Ekonomi','type'=>'Horizontal','suberita'=>'Energi'));
}

public function bisnis_h()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Ekonomi','type'=>'Horizontal','suberita'=>'Bisnis'));
}

public function makro_h()
{
    return $this->db->get_where('tb_berita',array('kategori'=>'Ekonomi','type'=>'Horizontal','suberita'=>'Makro'));
}


public function getdetail($whare)
{

 return $this->db->get_where('tb_berita',['id'=> $whare]);

}
public function vertical()
{
    return $this->db->get_where('tb_berita',array('type'=>'Vertical'));
}
public function populer($id)
{
    $this->db->set('hit', 'hit+1', FALSE);
    $this->db->where('id', $id);
    $this->db->update('tb_berita');

}

public function hist()
{
    $this->db->select('*');
    $this->db->from('tb_berita');
    $this->db->order_by('hit','DESC');
    return $this->db->get();
        # code...
}
public function hist_n()
{
    $this->db->select('*');
        // $this->db->from('tb_berita');
    $this->db->order_by('hit','DESC');
    return $this->db->get_where('tb_berita',array('kategori'=>'Nasional'));
        # code...
}



public function terbaru()
{
    $this->db->select('*');
    $this->db->from('tb_berita');
    $this->db->order_by('id','DESC');
    return $this->db->limit(1)->get();
        # code...
}
public function terbaru_n()
{
    $this->db->select('*');
    $this->db->from('tb_berita');
    $this->db->order_by('id','DESC');
    return $this->db->limit(3)->get();

        # code...
}

public function komentar($masuk)
{
 return $this->db->insert('komentar',$masuk);
}
public function t_komentar($where)
{
    return $this->db->get_where('komentar',['id_berita'=> $where]);
}


public function terbaru_naional()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(1)->get_where('tb_berita',array('kategori'=>'Nasional'));
        # code...
}
public function terbaru_nasional_n()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(3)->get_where('tb_berita',array('kategori'=>'Nasional'));
        # code...
}


public function terbaru_politik()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(1)->get_where('tb_berita',array('kategori'=>'Nasional','suberita'=>'Politik'));
        # code...
}
public function terbaru_politik_p()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(3)->get_where('tb_berita',array('kategori'=>'Nasional','suberita'=>'Politik'));
        # code...
}
public function politik_hi()
{
    $this->db->select('*');
        
    $this->db->order_by('hit','DESC');
    return $this->db->get_where('tb_berita',array('kategori'=>'Nasional','suberita'=>'Politik'));
        # code...
}

public function terbaru_hk()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(1)->get_where('tb_berita',array('kategori'=>'Nasional','suberita'=>'Hukum&Kriminal'));
        # code...
}
public function terbaru_hk_h()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(3)->get_where('tb_berita',array('kategori'=>'Nasional','suberita'=>'Hukum&Kriminal'));
        # code...
}
public function hk_hi()
{
    $this->db->select('*');
        
    $this->db->order_by('hit','DESC');
    return $this->db->get_where('tb_berita',array('kategori'=>'Nasional','suberita'=>'Hukum&Kriminal'));
        # code...

}
public function terbaru_peristiwa()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(1)->get_where('tb_berita',array('kategori'=>'Nasional','suberita'=>'Peristiwa'));
        # code...
}
public function terbaru_peristiwa_p()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(3)->get_where('tb_berita',array('kategori'=>'Nasional','suberita'=>'Peristiwa'));
        # code...
}
public function peristiwa_hi()
{
    $this->db->select('*');
        
    $this->db->order_by('hit','DESC');
    return $this->db->get_where('tb_berita',array('kategori'=>'Nasional','suberita'=>'Peristiwa'));
        # code...
}

public function balas($balas)
{
   return $this->db->insert('bls_komentar',$balas);
}
public function b_komentar($where)
{
    
   return $this->db->get('bls_komentar');
    // $query = ;


}
public function hist_e()
{
    $this->db->select('*');
        // $this->db->from('tb_berita');
    $this->db->order_by('hit','DESC');
    return $this->db->get_where('tb_berita',array('kategori'=>'Ekonomi'));
        # code...
}

public function terbaru_e()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(1)->get_where('tb_berita',array('kategori'=>'Ekonomi'));
        # code...
}
public function terbaru_ekonomi_e()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(3)->get_where('tb_berita',array('kategori'=>'Ekonomi'));
        # code...
}


public function terbaru_keuangan()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(1)->get_where('tb_berita',array('kategori'=>'Ekonomi','suberita'=>'Keuangan'));
        # code...
}
public function terbaru_keuangan_k()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(3)->get_where('tb_berita',array('kategori'=>'Ekonomi','suberita'=>'keuangan'));
        # code...
}
public function keuangan_hi()
{
    $this->db->select('*');
        
    $this->db->order_by('hit','DESC');
    return $this->db->get_where('tb_berita',array('kategori'=>'Ekonomi','suberita'=>'keuangan'));
        # code...
}

public function terbaru_energi()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(1)->get_where('tb_berita',array('kategori'=>'Ekonomi','suberita'=>'Energi'));
        # code...
}
public function terbaru_energi_e()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(3)->get_where('tb_berita',array('kategori'=>'Ekonomi','suberita'=>'Energi'));
        # code...
}
public function energi_hi()
{
    $this->db->select('*');
        
    $this->db->order_by('hit','DESC');
    return $this->db->get_where('tb_berita',array('kategori'=>'Ekonomi','suberita'=>'Energi'));
        # code...

}
public function terbaru_bisnis()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(1)->get_where('tb_berita',array('kategori'=>'Ekonomi','suberita'=>'bisnis'));
        # code...
}
public function terbaru_bisnis_b()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(3)->get_where('tb_berita',array('kategori'=>'Ekonomi','suberita'=>'bisnis'));
        # code...
}
public function bisnis_hi()
{
    $this->db->select('*');
        
    $this->db->order_by('hit','DESC');
    return $this->db->get_where('tb_berita',array('kategori'=>'Ekonomi','suberita'=>'bisnis'));
        # code...
}

public function terbaru_makro()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(1)->get_where('tb_berita',array('kategori'=>'Ekonomi','suberita'=>'Makro'));
        # code...
}
public function terbaru_makro_m()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(3)->get_where('tb_berita',array('kategori'=>'Ekonomi','suberita'=>'Makro'));
        # code...
}
public function makro_hi()
{
    $this->db->select('*');
        
    $this->db->order_by('hit','DESC');
    return $this->db->get_where('tb_berita',array('kategori'=>'Ekonomi','suberita'=>'Makro'));
        # code...
}

public function hist_o()
{
    $this->db->select('*');
        // $this->db->from('tb_berita');
    $this->db->order_by('hit','DESC');
    return $this->db->get_where('tb_berita',array('kategori'=>'Olahraga'));
        # code...
}

public function terbaru_o()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(1)->get_where('tb_berita',array('kategori'=>'Olahraga'));
        # code...
}
public function terbaru_olahraga_o()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(3)->get_where('tb_berita',array('kategori'=>'Olahraga'));
        # code...
}
public function terbaru_sepakbola()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(1)->get_where('tb_berita',array('kategori'=>'Olahraga','suberita'=>'SepakBola'));
        # code...
}
public function terbaru_sepakbola_s()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(3)->get_where('tb_berita',array('kategori'=>'Olahraga','suberita'=>'SepakBola'));
        # code...
}
public function sepakbola_hi()
{
    $this->db->select('*');
        
    $this->db->order_by('hit','DESC');
    return $this->db->get_where('tb_berita',array('kategori'=>'Olahraga','suberita'=>'SepakBola'));
        # code...
}
public function terbaru_motorgp()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(1)->get_where('tb_berita',array('kategori'=>'Olahraga','suberita'=>'MotorGP'));
        # code...
}
public function terbaru_motorgp_m()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(3)->get_where('tb_berita',array('kategori'=>'Olahraga','suberita'=>'MotorGP'));
        # code...
}
public function motorgp_hi()
{
    $this->db->select('*');
        
    $this->db->order_by('hit','DESC');
    return $this->db->get_where('tb_berita',array('kategori'=>'Olahraga','suberita'=>'MotorGP'));
        # code...
}
public function terbaru_f1()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(1)->get_where('tb_berita',array('kategori'=>'Olahraga','suberita'=>'F1'));
        # code...
}
public function terbaru_f1_f()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(3)->get_where('tb_berita',array('kategori'=>'Olahraga','suberita'=>'F1'));
        # code...
}
public function f1_hi()
{
    $this->db->select('*');
        
    $this->db->order_by('hit','DESC');
    return $this->db->get_where('tb_berita',array('kategori'=>'Olahraga','suberita'=>'F1'));
        # code...
}
public function terbaru_raket()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(1)->get_where('tb_berita',array('kategori'=>'Olahraga','suberita'=>'Raket'));
        # code...
}
public function terbaru_raket_r()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(3)->get_where('tb_berita',array('kategori'=>'Olahraga','suberita'=>'Raket'));
        # code...
}
public function raket_hi()
{
    $this->db->select('*');
        
    $this->db->order_by('hit','DESC');
    return $this->db->get_where('tb_berita',array('kategori'=>'Olahraga','suberita'=>'Raket'));
        # code...
}
public function hist_t()
{
    $this->db->select('*');
        // $this->db->from('tb_berita');
    $this->db->order_by('hit','DESC');
    return $this->db->get_where('tb_berita',array('kategori'=>'Teknologi'));
        # code...
}

public function terbaru_t()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(1)->get_where('tb_berita',array('kategori'=>'Teknologi'));
        # code...
}
public function terbaru_teknologi_t()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(3)->get_where('tb_berita',array('kategori'=>'Teknologi'));
        # code...
}
public function terbaru_ti()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(1)->get_where('tb_berita',array('kategori'=>'Teknologi','suberita'=>'TeknologiInformasi'));
        # code...
}
public function terbaru_ti_t()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(3)->get_where('tb_berita',array('kategori'=>'Teknologi','suberita'=>'TeknologiInformasi'));
        # code...
}
public function ti_hi()
{
    $this->db->select('*');
        
    $this->db->order_by('hit','DESC');
    return $this->db->get_where('tb_berita',array('kategori'=>'Teknologi','suberita'=>'TeknologiInformasi'));
        # code...
}
public function terbaru_sains()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(1)->get_where('tb_berita',array('kategori'=>'Teknologi','suberita'=>'Sains'));
        # code...
}
public function terbaru_sains_s()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(3)->get_where('tb_berita',array('kategori'=>'Teknologi','suberita'=>'Sains'));
        # code...
}
public function sains_hi()
{
    $this->db->select('*');
        
    $this->db->order_by('hit','DESC');
    return $this->db->get_where('tb_berita',array('kategori'=>'Teknologi','suberita'=>'Sains'));
        # code...
}
public function terbaru_telekomunikasi()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(1)->get_where('tb_berita',array('kategori'=>'Teknologi','suberita'=>'Telekomunikasi'));
        # code...
}
public function terbaru_telekomunikasi_t()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(3)->get_where('tb_berita',array('kategori'=>'Teknologi','suberita'=>'Telekomunikasi'));
        # code...
}
public function telekomunikasi_hi()
{
    $this->db->select('*');
        
    $this->db->order_by('hit','DESC');
    return $this->db->get_where('tb_berita',array('kategori'=>'Teknologi','suberita'=>'Telekomunikasi'));
        # code...
}
public function terbaru_otomotif()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(1)->get_where('tb_berita',array('kategori'=>'Teknologi','suberita'=>'Otomotif'));
        # code...
}
public function terbaru_otomotif_o()
{
    $this->db->select('*');
    
    $this->db->order_by('id','DESC');
    return $this->db->limit(3)->get_where('tb_berita',array('kategori'=>'Teknologi','suberita'=>'Otomotif'));
        # code...
}
public function otomotif_hi()
{
    $this->db->select('*');
        
    $this->db->order_by('hit','DESC');
    return $this->db->get_where('tb_berita',array('kategori'=>'Teknologi','suberita'=>'Otomotif'));
        # code...
}

    public function gett()
    {


        # code...
    }

        public function search_m($keyword)
    {
        $this->db->select('*');
        $this->db->from('tb_berita');
        $this->db->like('judul',$keyword);
        return $this->db->get();
        
        # code...,
    }












}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */