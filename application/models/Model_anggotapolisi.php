<?php 
 
class Model_anggotapolisi extends CI_Model{
	function tampil_data(){
		return $this->db->get('tb_anggota_polisi');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}	

	function hitungspim()
	{
		$this->db->select_sum('spim');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->spim;
		}
		else
		{
			return 0;
		}
	}
	function hitungitwasda()
	{
		$this->db->select_sum('itwasda');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->itwasda;
		}
		else
		{
			return 0;
		}
	}
	function hitungops()
	{
		$this->db->select_sum('ops');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->ops;
		}
		else
		{
			return 0;
		}
	}
	function hitungrena()
	{
		$this->db->select_sum('rena');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->rena;
		}
		else
		{
			return 0;
		}
	}
	function hitungsdm()
	{
		$this->db->select_sum('sdm');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->sdm;
		}
		else
		{
			return 0;
		}
	}
	function hitungsarpras()
	{
		$this->db->select_sum('sarpras');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->sarpras;
		}
		else
		{
			return 0;
		}
	}
	function hitungpropam()
	{
		$this->db->select_sum('propam');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->propam;
		}
		else
		{
			return 0;
		}
	}
	function hitungti()
	{
		$this->db->select_sum('ti');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->ti;
		}
		else
		{
			return 0;
		}
    }
    function hitungdokkes()
	{
		$this->db->select_sum('dokkes');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->dokkes;
		}
		else
		{
			return 0;
		}
    }
    function hitungkeu()
	{
		$this->db->select_sum('keu');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->keu;
		}
		else
		{
			return 0;
		}
    }
    function hitungkum()
	{
		$this->db->select_sum('kum');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->kum;
		}
		else
		{
			return 0;
		}
    }
    function hitunghumas()
	{
		$this->db->select_sum('humas');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->humas;
		}
		else
		{
			return 0;
		}
    }
    function hitunglantas()
    {
        $this->db->select_sum('lantas');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->lantas;
		}
		else
		{
			return 0;
		}
    }
    function hitungkrimum()
    {
        $this->db->select_sum('krim_um');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->krim_um;
		}
		else
		{
			return 0;
		}
    }
    function hitungkrimsus()
    {
        $this->db->select_sum('krimsus');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->krimsus;
		}
		else
		{
			return 0;
		}
    }
    function hitungintel()
    {
        $this->db->select_sum('intel');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->intel;
		}
		else
		{
			return 0;
		}
    }
    function hitungbimas()
    {
        $this->db->select_sum('bimas');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->bimas;
		}
		else
		{
			return 0;
		}
    }
    function hitungsabhara()
    {
        $this->db->select_sum('sabhara');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->sabhara;
		}
		else
		{
			return 0;
		}
    }
    function hitungobvit()
    {
        $this->db->select_sum('obvit');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->obvit;
		}
		else
		{
			return 0;
		}
    }
    function hitungpolair()
    {
        $this->db->select_sum('polair');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->polair;
		}
		else
		{
			return 0;
		}
    }
    function hitungnarkoba()
    {
        $this->db->select_sum('narkoba');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->narkoba;
		}
		else
		{
			return 0;
		}
    }
    function hitungbrimob()
    {
        $this->db->select_sum('brimob');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->brimob;
		}
		else
		{
			return 0;
		}
    }
    function hitungspn()
    {
        $this->db->select_sum('spn');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->spn;
		}
		else
		{
			return 0;
		}
    }
    function hitunglabfor()
    {
        $this->db->select_sum('labfor');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->labfor;
		}
		else
		{
			return 0;
		}
    }
    function hitungyanma()
    {
        $this->db->select_sum('yanma');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->yanma;
		}
		else
		{
			return 0;
		}
    }
    function hitungrumkit()
    {
        $this->db->select_sum('rumkit');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->rumkit;
		}
		else
		{
			return 0;
		}
    }
    function hitungresta()
    {
        $this->db->select_sum('resta');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->resta;
		}
		else
		{
			return 0;
		}
    }
    function hitungmuba()
    {
        $this->db->select_sum('muba');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->muba;
		}
		else
		{
			return 0;
		}
    }
    function hitungb_asin()
    {
        $this->db->select_sum('b_asin');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->b_asin;
		}
		else
		{
			return 0;
		}
    }
    function hitungoki()
    {
        $this->db->select_sum('oki');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->oki;
		}
		else
		{
			return 0;
		}
    }
    function hitungoi()
    {
        $this->db->select_sum('oi');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->oi;
		}
		else
		{
			return 0;
		}
    }
    function hitungm_enim()
    {
        $this->db->select_sum('m_enim');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->m_enim;
		}
		else
		{
			return 0;
		}
    }
    function hitungprabu()
    {
        $this->db->select_sum('prabu');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->prabu;
		}
		else
		{
			return 0;
		}
    }
    function hitunglahat()
    {
        $this->db->select_sum('lahat');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->lahat;
		}
		else
		{
			return 0;
		}
    }
    function hitungp_alam()
    {
        $this->db->select_sum('p_alam');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->p_alam;
		}
		else
		{
			return 0;
		}
    }
    function hitungoku()
    {
        $this->db->select_sum('oku');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->oku;
		}
		else
		{
			return 0;
		}
    }
    function hitungokut()
    {
        $this->db->select_sum('okut');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->okut;
		}
		else
		{
			return 0;
		}
    }
    function hitungokus()
    {
        $this->db->select_sum('okus');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->okus;
		}
		else
		{
			return 0;
		}
    }
    function hitunglinggau()
    {
        $this->db->select_sum('linggau');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->linggau;
		}
		else
		{
			return 0;
		}
    }
    function hitungmura()
    {
        $this->db->select_sum('mura');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->mura;
		}
		else
		{
			return 0;
		}
    }
    function hitunglawang()
    {
        $this->db->select_sum('lawang');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->lawang;
		}
		else
		{
			return 0;
		}
    }
    function hitungpali()
    {
        $this->db->select_sum('pali');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->pali;
		}
		else
		{
			return 0;
		}
    }
    function hitungmuratara()
    {
        $this->db->select_sum('muratara');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->muratara;
		}
		else
		{
			return 0;
		}
    }
    function hitungjumlah()
    {
        $this->db->select_sum('jumlah');
		$query = $this->db->get('tb_anggota_polisi');
		if($query->num_rows()>0)
		{
			return $query->row()->jumlah;
		}
		else
		{
			return 0;
		}
    }
}