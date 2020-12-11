<?php 
 
class Model_user extends CI_Model{
	// function tampil_data(){
	// 	return $this->db->get('user');
	// }
 
	function input_data($data,$table,$where){
		$this->db->insert($table,$data,$where);
	}
}