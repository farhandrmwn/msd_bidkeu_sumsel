<?php 


class RD_polri extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('Model_rdpolri');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['rdpolri'] = $this->Model_rdpolri->tampil_data()->result();
		$this->load->view('rdpolri/v_tampil',$data);
	}
 
	function tambah(){
		$this->load->view('rdpolri/v_input');
	}

	function hapus($id){
		$where = array('id_pyb' => $id);
		$this->Model_rdpolri->hapus_data($where,'tb_potongan_polri');
		redirect('rdpolri/v_edit');
	}

	function edit($id){
		$where = array('id_pyb' => $id);
		$data['rdpolri'] = $this->Model_rdpolri->edit_data($where,'tb_potongan_polri')->result();
		$this->load->view('rdpolri/v_edit',$data);
	}

	function tambah_aksi(){
		$jumlah_kuat = $pamen_kuat + $pama_kuat + $bintara_kuat;
		$jumlah_pot = $pamen_pot + $pama_pot + $bintara_pot;
		$total_kuat = $this->db->query("SELECT SUM(jml_kuat");

		$satker = $this->input->post('satker');
		$pamen_kuat = $this->input->post('pamen_kuat');
		$pamen_pot = $this->input->post('pamen_pot');	
		$pama_kuat = $this->input->post('pama_kuat');
		$pama_pot = $this->input->post('pama_pot');
		$bintara_kuat = $this->input->post('bintara_kuat');
		$bintara_pot = $this->input->post('bintara_pot');
		$jml_kuat = $this->input->post($jumlah_kuat);
		$jml_pot = $this->input->post($jumlah_pot);
		$tot_kuat = $this->input->post('tot_kuat');
		$tot_pot = $this->input->post('tot_pot');
		$date = $this->input->post('date');
		$ket = $this->input->post('ket');
 
		$data = array(
			'satker' => $satker,
			'pamen_kuat' => $pamen_kuat,
			'pamen_pot' => $pamen_pot,
			'pama_kuat' => $pama_kuat,
			'pama_pot' => $pama_pot,
			'bintara_kuat' => $bintara_kuat,
			'bintara_pot' => $bintara_pot,
			'jml_kuat' => $jml_kuat,
			'jml_pot' => $jml_pot,
			'tot_kuat' => $tot_kuat,
			'tot_pot' => $tot_pot,
			'date' => $date,
			'ket' => $ket
			);
		$this->Model_rdpolri->input_data($data,'tb_potongan_polri');
		redirect('RD_polri');
	}
}

?>