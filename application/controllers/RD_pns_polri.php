<?php 


class RD_pns_polri extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('Model_rdpnspolri');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['total_gol4kuat'] = $this->Model_rdpnspolri->hitunggol4kuat();
		$data['total_gol4pot'] = $this->Model_rdpnspolri->hitunggol4pot();
		$data['total_gol3kuat'] = $this->Model_rdpnspolri->hitunggol3kuat();
		$data['total_gol3pot'] = $this->Model_rdpnspolri->hitunggol3pot();
		$data['total_gol2kuat'] = $this->Model_rdpnspolri->hitunggol2kuat();
		$data['total_gol2pot'] = $this->Model_rdpnspolri->hitunggol2pot();
		$data['total_jmlhkuat'] = $this->Model_rdpnspolri->hitungjmlkuat();
		$data['total_jmlhpot'] = $this->Model_rdpnspolri->hitungjmlpot();
		$data['rdpnspolri'] = $this->Model_rdpnspolri->tampil_data()->result();
		$this->load->view('rdpnspolri/v_tampil',$data);
	}
 
	function tambah(){
		$this->load->view('rdpnspolri/v_input');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->Model_rdpnspolri->hapus_data($where,'tb_potongan_pns');
		redirect('RD_pns_polri');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['rdpnspolri'] = $this->Model_rdpnspolri->edit_data($where,'tb_potongan_pns')->result();
		$this->load->view('rdpnspolri/v_edit',$data);
	}
	function update(){
		$id = $this->input->post('id');
		$satker = $this->input->post('satker');
		$gol4_kuat = $this->input->post('gol4_kuat');
		$gol4_pot = $this->input->post('gol4_pot');	
		$gol3_kuat = $this->input->post('gol3_kuat');
		$gol3_pot = $this->input->post('gol3_pot');
		$gol2_kuat = $this->input->post('gol2_kuat');
		$gol2_pot = $this->input->post('gol2_pot');
		$jml_kuat = $this->input->post('jml_kuat');
		$jml_pot = $this->input->post('jml_pot');
		$ket = $this->input->post('ket');
 
		$data = array(
			'satker' => $satker,
			'gol4_kuat' => $gol4_kuat,
			'gol4_pot' => $gol4_pot,
			'gol3_kuat' => $gol3_kuat,
			'gol3_pot' => $gol3_pot,
			'gol2_kuat' => $gol2_kuat,
			'gol2_pot' => $gol2_pot,
			'jml_kuat' => $jml_kuat,
			'jml_pot' => $jml_pot,
			'ket' => $ket
			);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->Model_rdpnspolri->update_data($where,$data,'tb_potongan_pns');
		redirect('RD_pns_polri');
}

	function tambah_aksi(){
		$satker = $this->input->post('satker');
		$gol4_kuat = $this->input->post('gol4_kuat');
		$gol4_pot = $this->input->post('gol4_pot');	
		$gol3_kuat = $this->input->post('gol3_kuat');
		$gol3_pot = $this->input->post('gol3_pot');
		$gol2_kuat = $this->input->post('gol2_kuat');
		$gol2_pot = $this->input->post('gol2_pot');
		$jml_kuat = $this->input->post('jml_kuat');
		$jml_pot = $this->input->post('jml_pot');
		$ket = $this->input->post('ket');
 
		$data = array(
			'satker' => $satker,
			'gol4_kuat' => $gol4_kuat,
			'gol4_pot' => $gol4_pot,
			'gol3_kuat' => $gol3_kuat,
			'gol3_pot' => $gol3_pot,
			'gol2_kuat' => $gol2_kuat,
			'gol2_pot' => $gol2_pot,
			'jml_kuat' => $jml_kuat,
			'jml_pot' => $jml_pot,
			'ket' => $ket
			);
		$this->Model_rdpnspolri->input_data($data,'tb_potongan_pns');
		redirect('RD_pns_polri');
	}
}

?>