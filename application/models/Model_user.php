<?php 
 
class Model_user extends CI_Model{
	function tampil_data(){
		return $this->db->get('tb_user');
	}
 
	function input_data($data,$table,$where){
		$this->db->insert($table,$data,$where);
	}
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}