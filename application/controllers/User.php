<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Model_user');
		$this->load->helper('url');
	}

	function index()
	{
        if(!$this->session->userdata('logged_in'))
        {
            $pemberitahuan = "<div class='alert alert-warning'>Anda harus login dulu </div>";
            $this->session->set_flashdata('pemberitahuan', $pemberitahuan);
            redirect('login');
        }

        $session_data = $this->session->userdata('logged_in');
        $sesi['username'] = $session_data['username'];
		$this->load->view('v_user',$sesi);
	}
	function konfigurasi(){
		$this->load->view('user/konfigurasi.php');
	}
	function tambah(){
		$nama_kabag = $this->input->post('nama_kabag');
		$jabatan_kabag = $this->input->post('jabatan_kabag');
		$nrp_kabag = $this->input->post('nrp_kabag');	
		$nama_kasikeu = $this->input->post('nama_kasikeu');
		$jabatan_kasikeu = $this->input->post('jabatan_kasikeu');
		$nrp_kasikeu = $this->input->post('nrp_kasikeu');
		$nama_kasi = $this->input->post('nama_kasi');
		$jabatan_kasi = $this->input->post('jabatan_kasi');
		$nrp_kasi = $this->input->post('nrp_kasi');
		$nama_kepala = $this->input->post('nama_kepala');
		$jabatan_kepala = $this->input->post('jabatan_kepala');
		$nrp_kepala = $this->input->post('nrp_kepala');
 
		$data = array(
			'nama_kabag' => $nama_kabag,
			'jabatan_kabag' => $jabatan_kabag,
			'nrp_kabag' => $nrp_kabag,
			'nama_kasikeu' => $nama_kasikeu,
			'jabatan_kasikeu' => $jabatan_kasikeu,
			'nrp_kasikeu' => $nrp_kasikeu,
			'nama_kasi' => $nama_kasi,
			'jabatan_kasi' => $jabatan_kasi,
			'nrp_kasi' => $nrp_kasi,
			'nama_kepala' => $nama_kepala,
			'jabatan_kepala' => $jabatan_kepala,
			'nrp_kepala' => $nrp_kepala
			);
		$where = $this->db->where('username', $username);
		$this->Model_user->input_data($data,'tb_user', $where);
		redirect('user');
	}

}

?>