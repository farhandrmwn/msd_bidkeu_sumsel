<?php 
 
class Model_rdpolri extends CI_Model{
	function tampil_data(){
		return $this->db->get('tb_potongan_polri');
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

	function hitungpmnkuat()
	{
		$this->db->select_sum('pamen_kuat');
		$query = $this->db->get('tb_potongan_polri');
		if($query->num_rows()>0)
		{
			return $query->row()->pamen_kuat;
		}
		else
		{
			return 0;
		}
	}
	function hitungpmnpot()
	{
		$this->db->select_sum('pamen_pot');
		$query = $this->db->get('tb_potongan_polri');
		if($query->num_rows()>0)
		{
			return $query->row()->pamen_pot;
		}
		else
		{
			return 0;
		}
	}
	function hitungpmkuat()
	{
		$this->db->select_sum('pama_kuat');
		$query = $this->db->get('tb_potongan_polri');
		if($query->num_rows()>0)
		{
			return $query->row()->pama_kuat;
		}
		else
		{
			return 0;
		}
	}
	function hitungpmpot()
	{
		$this->db->select_sum('pama_pot');
		$query = $this->db->get('tb_potongan_polri');
		if($query->num_rows()>0)
		{
			return $query->row()->pama_pot;
		}
		else
		{
			return 0;
		}
	}
	function hitungbntrkuat()
	{
		$this->db->select_sum('bintara_kuat');
		$query = $this->db->get('tb_potongan_polri');
		if($query->num_rows()>0)
		{
			return $query->row()->bintara_kuat;
		}
		else
		{
			return 0;
		}
	}
	function hitungbntrpot()
	{
		$this->db->select_sum('bintara_pot');
		$query = $this->db->get('tb_potongan_polri');
		if($query->num_rows()>0)
		{
			return $query->row()->bintara_pot;
		}
		else
		{
			return 0;
		}
	}
	function hitungjmlkuat()
	{
		$this->db->select_sum('jml_kuat');
		$query = $this->db->get('tb_potongan_polri');
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
		$query = $this->db->get('tb_potongan_polri');
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