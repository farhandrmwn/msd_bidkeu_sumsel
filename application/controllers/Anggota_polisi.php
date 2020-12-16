<?php 


class Anggota_polisi extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('Model_anggotapolisi');
		$this->load->model('Model_pangkat');
		$this->load->helper('url');
 
	}
 
	function index(){
		// ['total_gol3kuat'] = $this->Model_anggotapolisi->hitunggol3kuat();
		// ['total_gol3pot'] = $this->Model_anggotapolisi->hitunggol3pot();
		// ['total_gol2kuat'] = $this->Model_anggotapolisi->hitunggol2kuat();
		// ['total_gol2pot'] = $this->Model_anggotapolisi->hitunggol2pot();
		// ['total_jmlhkuat'] = $this->Model_anggotapolisi->hitungjmlkuat();
		// ['total_jmlhpot'] = $this->Model_anggotapolisi->hitungjmlpot();
		$data = array(
			'total_spim'=> $this->Model_anggotapolisi->hitungspim(),
			'total_itwasda' => $this->Model_anggotapolisi->hitungitwasda(),
			'total_ops' => $this->Model_anggotapolisi->hitungops(),
			'total_rena' => $this->Model_anggotapolisi->hitungrena(),
			'total_sdm' => $this->Model_anggotapolisi->hitungsdm(),
			'total_sarpras' => $this->Model_anggotapolisi->hitungsarpras(),
			'total_propam' => $this->Model_anggotapolisi->hitungpropam(),
			'total_ti' => $this->Model_anggotapolisi->hitungti(),
			'total_dokkes' => $this->Model_anggotapolisi->hitungdokkes(),
			'total_keu' => $this->Model_anggotapolisi->hitungkeu(),
			'total_kum' => $this->Model_anggotapolisi->hitungkum(),
			'total_humas' => $this->Model_anggotapolisi->hitunghumas(),
			'total_lantas' => $this->Model_anggotapolisi->hitunglantas(),
			'total_krimum' => $this->Model_anggotapolisi->hitungkrimum(),
			'total_krimsus' => $this->Model_anggotapolisi->hitungkrimsus(),
			'total_intel' => $this->Model_anggotapolisi->hitungintel(),
			'total_bimas' => $this->Model_anggotapolisi->hitungbimas(),
			'total_sabhara' => $this->Model_anggotapolisi->hitungsabhara(),
			'total_obvit' => $this->Model_anggotapolisi->hitungobvit(),
			'total_polair' => $this->Model_anggotapolisi->hitungpolair(),
			'total_narkoba' => $this->Model_anggotapolisi->hitungnarkoba(),
			'total_brimob' => $this->Model_anggotapolisi->hitungbrimob(),
			'total_spn' => $this->Model_anggotapolisi->hitungspn(),
			'total_labfor' => $this->Model_anggotapolisi->hitunglabfor(),
			'total_yanma' => $this->Model_anggotapolisi->hitungyanma(),
			'total_rumkit' => $this->Model_anggotapolisi->hitungrumkit(),
			'total_resta' => $this->Model_anggotapolisi->hitungresta(),
			'total_muba' => $this->Model_anggotapolisi->hitungmuba(),
			'total_b_asin' => $this->Model_anggotapolisi->hitungb_asin(),
			'total_oki' => $this->Model_anggotapolisi->hitungoki(),
			'total_oi' => $this->Model_anggotapolisi->hitungoi(),
			'total_m_enim' => $this->Model_anggotapolisi->hitungm_enim(),
			'total_prabu' => $this->Model_anggotapolisi->hitungprabu(),
			'total_lahat' => $this->Model_anggotapolisi->hitunglahat(),
			'total_p_alam' => $this->Model_anggotapolisi->hitungp_alam(),
			'total_oku' => $this->Model_anggotapolisi->hitungoku(),
			'total_okut' => $this->Model_anggotapolisi->hitungokut(),
			'total_okus' => $this->Model_anggotapolisi->hitungokus(),
			'total_linggau' => $this->Model_anggotapolisi->hitunglinggau(),
			'total_mura' => $this->Model_anggotapolisi->hitungmura(),
			'total_lawang' => $this->Model_anggotapolisi->hitunglawang(),
			'total_pali' => $this->Model_anggotapolisi->hitungpali(),
			'total_muratara' => $this->Model_anggotapolisi->hitungmuratara(),
			'total_jumlah' => $this->Model_anggotapolisi->hitungjumlah(),
			'anggotapolisi' => $this->Model_anggotapolisi->tampil_data()->result(),
		   	'pangkat' => $this->Model_pangkat->tampil()->result()
			  
		);
		$this->load->view('anggotapolisi/v_tampil',$data);
	}
 
	function tambah(){
		$data['pangkat'] = $this->Model_pangkat->tampil()->result();
		$this->load->view('anggotapolisi/v_input', $data);
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->Model_anggotapolisi->hapus_data($where,'tb_anggota_polisi');
		redirect('Anggota_polisi');
	}

	function edit($id){
		$where = array('id' => $id);
		$data_anggotapolisi = $this->Model_anggotapolisi->edit_data($where,'tb_anggota_polisi')->result();
		// $data['pangkat'] =$this->Model_pangkat->tampil()->result();
		$data = array(
			'pangkat' => $this->Model_pangkat->tampil()->result(),
			'anggotapolisi' => $data_anggotapolisi
		);
		$this->load->view('anggotapolisi/v_edit',$data);
	}
	function update(){
		$id = $this->input->post('id');
		$pangkat = $this->input->post('pangkat');
		$spim = $this->input->post('spim');
		$itwasda = $this->input->post('itwasda');	
		$ops = $this->input->post('ops');
		$rena = $this->input->post('rena');
		$sdm = $this->input->post('sdm');
		$sarpras = $this->input->post('sarpras');
		$propam = $this->input->post('propam');
		$ti = $this->input->post('ti');
		$dokkes = $this->input->post('dokkes');
		$keu = $this->input->post('keu');
		$kum = $this->input->post('kum');
		$humas = $this->input->post('humas');
		$lantas = $this->input->post('lantas');
		$krim_um = $this->input->post('krim_um');
		$krimsus = $this->input->post('krimsus');
		$intel = $this->input->post('intel');
		$bimas = $this->input->post('bimas');
		$sabhara = $this->input->post('sabhara');
		$obvit = $this->input->post('obvit');
		$polair = $this->input->post('polair');
		$narkoba = $this->input->post('narkoba');
		$brimob = $this->input->post('brimob');
		$spn = $this->input->post('spn');
		$labfor = $this->input->post('labfor');
		$yanma = $this->input->post('yanma');
		$rumkit = $this->input->post('rumkit');
		$resta = $this->input->post('resta');
		$muba = $this->input->post('muba');
		$b_asin = $this->input->post('b_asin');
		$oki = $this->input->post('oki');
		$oi = $this->input->post('oi');
		$m_enim = $this->input->post('m_enim');
		$prabu = $this->input->post('prabu');
		$lahat = $this->input->post('lahat');
		$p_alam = $this->input->post('p_alam');
		$oku = $this->input->post('oku');
		$okut = $this->input->post('okut');
		$okus = $this->input->post('okus');
		$linggau = $this->input->post('linggau');
		$mura = $this->input->post('mura');
		$lawang = $this->input->post('lawang');
		$pali = $this->input->post('pali');
		$muratara = $this->input->post('muratara');
		$jumlah = $this->input->post('jumlah');
 
		$data = array(
			'pangkat' => $pangkat,
			'spim' => $spim,
			'itwasda' => $itwasda,
			'ops' => $ops,
			'rena' => $rena,
			'sdm' => $sdm,
			'sarpras' => $sarpras,
			'propam' => $propam,
			'ti' => $ti,
			'dokkes' => $dokkes,
			'keu' => $keu,
			'kum' => $kum,
			'humas' => $humas,
			'lantas' => $lantas,
			'krim_um' => $krim_um,
			'krimsus' => $krimsus,
			'intel' => $intel,
			'bimas' => $bimas,
			'sabhara' => $sabhara,
			'obvit' => $obvit,
			'polair' => $polair,
			'narkoba' => $narkoba,
			'brimob' => $brimob,
			'spn' => $spn,
			'labfor' => $labfor,
			'yanma' => $yanma,
			'rumkit' => $rumkit,
			'resta' => $resta,
			'muba' => $muba,
			'b_asin' => $b_asin,
			'oki' => $oki,
			'oi' => $oi,
			'm_enim' => $m_enim,
			'prabu' => $prabu,
			'lahat' => $lahat,
			'p_alam' => $p_alam,
			'oku' => $oku,
			'okut' => $okut,
			'okus' => $okus,
			'linggau' => $linggau,
			'mura' => $mura,
			'lawang' => $lawang,
			'pali' => $pali,
			'muratara' => $muratara,
			'jumlah' => $jumlah
			);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->Model_anggotapolisi->update_data($where,$data,'tb_anggota_polisi');
		redirect('Anggota_polisi');
}

	function tambah_aksi(){
		$pangkat = $this->input->post('pangkat');
		$spim = $this->input->post('spim');
		$itwasda = $this->input->post('itwasda');	
		$ops = $this->input->post('ops');
		$rena = $this->input->post('rena');
		$sdm = $this->input->post('sdm');
		$sarpras = $this->input->post('sarpras');
		$propam = $this->input->post('propam');
		$ti = $this->input->post('ti');
		$dokkes = $this->input->post('dokkes');
		$keu = $this->input->post('keu');
		$kum = $this->input->post('kum');
		$humas = $this->input->post('humas');
		$lantas = $this->input->post('lantas');
		$krim_um = $this->input->post('krim_um');
		$krimsus = $this->input->post('krimsus');
		$intel = $this->input->post('intel');
		$bimas = $this->input->post('bimas');
		$sabhara = $this->input->post('sabhara');
		$obvit = $this->input->post('obvit');
		$polair = $this->input->post('polair');
		$narkoba = $this->input->post('narkoba');
		$brimob = $this->input->post('brimob');
		$spn = $this->input->post('spn');
		$labfor = $this->input->post('labfor');
		$yanma = $this->input->post('yanma');
		$rumkit = $this->input->post('rumkit');
		$resta = $this->input->post('resta');
		$muba = $this->input->post('muba');
		$b_asin = $this->input->post('b_asin');
		$oki = $this->input->post('oki');
		$oi = $this->input->post('oi');
		$m_enim = $this->input->post('m_enim');
		$prabu = $this->input->post('prabu');
		$lahat = $this->input->post('lahat');
		$p_alam = $this->input->post('p_alam');
		$oku = $this->input->post('oku');
		$okut = $this->input->post('okut');
		$okus = $this->input->post('okus');
		$linggau = $this->input->post('linggau');
		$mura = $this->input->post('mura');
		$lawang = $this->input->post('lawang');
		$pali = $this->input->post('pali');
		$muratara = $this->input->post('muratara');
		$jumlah = $this->input->post('jumlah');
 
		$data = array(
			'pangkat' => $pangkat,
			'spim' => $spim,
			'itwasda' => $itwasda,
			'ops' => $ops,
			'rena' => $rena,
			'sdm' => $sdm,
			'sarpras' => $sarpras,
			'propam' => $propam,
			'ti' => $ti,
			'dokkes' => $dokkes,
			'keu' => $keu,
			'kum' => $kum,
			'humas' => $humas,
			'lantas' => $lantas,
			'krim_um' => $krim_um,
			'krimsus' => $krimsus,
			'intel' => $intel,
			'bimas' => $bimas,
			'sabhara' => $sabhara,
			'obvit' => $obvit,
			'polair' => $polair,
			'narkoba' => $narkoba,
			'brimob' => $brimob,
			'spn' => $spn,
			'labfor' => $labfor,
			'yanma' => $yanma,
			'rumkit' => $rumkit,
			'resta' => $resta,
			'muba' => $muba,
			'b_asin' => $b_asin,
			'oki' => $oki,
			'oi' => $oi,
			'm_enim' => $m_enim,
			'prabu' => $prabu,
			'lahat' => $lahat,
			'p_alam' => $p_alam,
			'oku' => $oku,
			'okut' => $okut,
			'okus' => $okus,
			'linggau' => $linggau,
			'mura' => $mura,
			'lawang' => $lawang,
			'pali' => $pali,
			'muratara' => $muratara,
			'jumlah' => $jumlah,
			);
		$this->Model_anggotapolisi->input_data($data,'tb_anggota_polisi');
		redirect('Anggota_polisi');
	}
}

?>