<?php 
 
class Model_rdpnspolri extends CI_Model{
	function tampil_data(){
		return $this->db->get('tb_potongan_pns');
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

	function hitunggol4kuat()
	{
		$this->db->select_sum('gol4_kuat');
		$query = $this->db->get('tb_potongan_pns');
		if($query->num_rows()>0)
		{
			return $query->row()->gol4_kuat;
		}
		else
		{
			return 0;
		}
	}
	function hitunggol4pot()
	{
		$this->db->select_sum('gol4_pot');
		$query = $this->db->get('tb_potongan_pns');
		if($query->num_rows()>0)
		{
			return $query->row()->gol4_pot;
		}
		else
		{
			return 0;
		}
	}
	function hitunggol3kuat()
	{
		$this->db->select_sum('gol3_kuat');
		$query = $this->db->get('tb_potongan_pns');
		if($query->num_rows()>0)
		{
			return $query->row()->gol3_kuat;
		}
		else
		{
			return 0;
		}
	}
	function hitunggol3pot()
	{
		$this->db->select_sum('gol3_pot');
		$query = $this->db->get('tb_potongan_pns');
		if($query->num_rows()>0)
		{
			return $query->row()->gol3_pot;
		}
		else
		{
			return 0;
		}
	}
	function hitunggol2kuat()
	{
		$this->db->select_sum('gol2_kuat');
		$query = $this->db->get('tb_potongan_pns');
		if($query->num_rows()>0)
		{
			return $query->row()->gol2_kuat;
		}
		else
		{
			return 0;
		}
	}
	function hitunggol2pot()
	{
		$this->db->select_sum('gol2_pot');
		$query = $this->db->get('tb_potongan_pns');
		if($query->num_rows()>0)
		{
			return $query->row()->gol2_pot;
		}
		else
		{
			return 0;
		}
	}
	function hitungjmlkuat()
	{
		$this->db->select_sum('jml_kuat');
		$query = $this->db->get('tb_potongan_pns');
		if($query->num_rows()>0)
		{
			return $query->row()->jml_kuat;
		}
		else
		{
			return 0;
		}
	}
	function hitungjmlpot()
	{
		$this->db->select_sum('jml_pot');
		$query = $this->db->get('tb_potongan_pns');
		if($query->num_rows()>0)
		{
			return $query->row()->jml_pot;
		}
		else
		{
			return 0;
		}
	}
}