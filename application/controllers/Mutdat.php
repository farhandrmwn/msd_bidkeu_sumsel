<?php 
 
 
class Mutdat extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('Model_mutdat');
		$this->load->model('Model_user');
		$this->load->helper(array('url','download'));
 		
	}
 
	function index(){
		$data['mutdat'] = $this->Model_mutdat->tampil_data()->result();
		$this->load->view('mutdat/v_tampil',$data , array('error' => ' ' ));
	}

	private function _uploadImage()
	{
	    $config['upload_path']          = './uploads/';
	    $config['allowed_types']        = 'xls|xlsx|xlsm';
	    // $config['max_width']            = 1024;
	    // $config['max_height']           = 768;

	    $this->load->library('upload', $config);
	    // if ($this->upload->do_upload('foto')) {
	    //     return $this->upload->data("file_name");
	    // }
	    if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('mutdat/v_tampil', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('mutdat/v_tampil', $data);
		}
	    
	    return $this->upload->data("file_name");
	}
 
	function tambah(){
		$this->load->view('mutdat/v_input');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->Model_mutdat->hapus_data($where,'tb_mutdat');
		redirect('mutdat');
	}

	function edit($id){
		$where = array('id_pyb' => $id);
		$data['mutdat'] = $this->Model_mutdat->edit_data($where,'tb_pyb')->result();
		$this->load->view('mutdat/v_edit',$data);
	}

// 	function update(){
// 		$id_pyb = $this->input->post('id_pyb');
// 		$nama = $this->input->post('nama');
// 		$pangkat = $this->input->post('pangkat');
// 		$nrp = $this->input->post('nrp');	
// 		$jenis_kasus = $this->input->post('jenis_kasus');
	 
// 		$data = array(
// 			'nama' => $nama,
// 			'pangkat' => $pangkat,
// 			'nrp' => $nrp,
// 			'jenis_kasus' => $jenis_kasus,
// 			);
	 
// 		$where = array(
// 			'id_pyb' => $id_pyb
// 		);
	 
// 		$this->Model_mutdat->update_data($where,$data,'tb_pyb');
// 		redirect('mutdat');
// }

	function tambah_aksi(){
		$satker = $this->input->post('satker');
		$bulan = $this->input->post('bulan');
		$file = $this->_uploadImage();
		// if($foto = ""){}else{
		// 	$config['upload_path']          = './foto_tugas/';
	 //    	$config['allowed_types']        = 'gif|jpg|png';

	 //    	$this->load->library('upload', $config);
	 //    	if(!$this->upload->do_upload('foto')){
	 //    		var_dump($_FILES['foto']);exit;
	 //   	    	}else{
	 //    		$foto = $this->upload->data('file_name');
	 //    	}
		// }
		$data = array(
			'satker' => $satker,
			'bulan' => $bulan,
			'file' => $file
		);
		$this->Model_mutdat->input_data($data,'tb_mutdat');
		redirect('Mutdat');
	}
	function download($id)
	{
		$data = $this->db->get_where('tb_mutdat',['id'=>$id])->row();
		force_download('uploads/'.$data->file,"berkas");
	}

}