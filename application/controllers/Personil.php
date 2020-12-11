<?php 
 
 
class Personil extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('Model_personil');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['personil'] = $this->Model_personil->tampil_data()->result();
		$this->load->view('personil/v_tampil',$data);
	}
 
	function tambah(){
		$this->load->view('personil/v_input');
	}

	function hapus($id){
		$where = array('id_pyb' => $id);
		$this->Model_personil->hapus_data($where,'tb_pyb');
		redirect('personil/v_edit');
	}

	function edit($id){
		$where = array('id_pyb' => $id);
		$data['personil'] = $this->Model_personil->edit_data($where,'tb_pyb')->result();
		$this->load->view('personil/v_edit',$data);
	}

	function update(){
		$nama = $this->input->post('nama');
		$pangkat = $this->input->post('pangkat');
		$nrp = $this->input->post('nrp');	
		$jenis_kasus = $this->input->post('jenis_kasus');
		$proses = $this->input->post('proses');
		$pidum_ps = $this->input->post('pidum_ps');
		$etikprofesi_ps = $this->input->post('etikprofesi_ps');
		$disiplin_ps = $this->input->post('disiplin_ps');
		$pidum_lp = $this->input->post('pidum_lp');
		$etikprofesi_lp = $this->input->post('etikprofesi_lp');
		$disiplin_lp = $this->input->post('disiplin_lp');
		$pidum_tmh = $this->input->post('pidum_tmh');
		$etikprofesi_tmh = $this->input->post('etikprofesi_tmh');
		$disiplin_tmh = $this->input->post('disiplin_tmh');
		$penghentian_smntr = $this->input->post('penghentian_smntr');
		$byr_gj_tjhlima = $this->input->post('byr_gj_tjhlima');
		$penghentian_tunkun = $this->input->post('penghentian_tunkun');
		$keterangan = $this->input->post('keterangan');
	 
		$data = array(
			'nama' => $nama,
			'pangkat' => $pangkat,
			'nrp' => $nrp,
			'jenis_kasus' => $jenis_kasus,
			'proses' => $proses,
			'pidum_ps' => $pidum_ps,
			'etikprofesi_ps' => $etikprofesi_ps,
			'disiplin_ps' => $disiplin_ps,
			'pidum_lp' => $pidum_lp,
			'etikprofesi_lp' => $etikprofesi_lp,
			'disiplin_lp' => $disiplin_lp,
			'pidum_tmh' => $pidum_tmh,
			'etikprofesi_tmh' => $etikprofesi_tmh,
			'disiplin_tmh' => $disiplin_tmh,
			'penghentian_smntr' => $penghentian_smntr,
			'byr_gj_tjhlima' => $byr_gj_tjhlima,
			'penghentian_tunkun' => $penghentian_tunkun,
			'keterangan' => $keterangan
			);
	 
		// $where = array(
		// 	'id_pyb' => $id
		// );
	 
		$this->Model_personil->update_data('id_pyb',$data,'tb_pyb');
		redirect('personil');
}

	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$pangkat = $this->input->post('pangkat');
		$nrp = $this->input->post('nrp');	
		$jenis_kasus = $this->input->post('jenis_kasus');
		$proses = $this->input->post('proses');
		$pidum_ps = $this->input->post('pidum_ps');
		$etikprofesi_ps = $this->input->post('etikprofesi_ps');
		$disiplin_ps = $this->input->post('disiplin_ps');
		$pidum_lp = $this->input->post('pidum_lp');
		$etikprofesi_lp = $this->input->post('etikprofesi_lp');
		$disiplin_lp = $this->input->post('disiplin_lp');
		$pidum_tmh = $this->input->post('pidum_tmh');
		$etikprofesi_tmh = $this->input->post('etikprofesi_tmh');
		$disiplin_tmh = $this->input->post('disiplin_tmh');
		$penghentian_smntr = $this->input->post('penghentian_smntr');
		$byr_gj_tjhlima = $this->input->post('byr_gj_tjhlima');
		$penghentian_tunkun = $this->input->post('penghentian_tunkun');
		$keterangan = $this->input->post('keterangan');
 
		$data = array(
			'nama' => $nama,
			'pangkat' => $pangkat,
			'nrp' => $nrp,
			'jenis_kasus' => $jenis_kasus,
			'proses' => $proses,
			'pidum_ps' => $pidum_ps,
			'etikprofesi_ps' => $etikprofesi_ps,
			'disiplin_ps' => $disiplin_ps,
			'pidum_lp' => $pidum_lp,
			'etikprofesi_lp' => $etikprofesi_lp,
			'disiplin_lp' => $disiplin_lp,
			'pidum_tmh' => $pidum_tmh,
			'etikprofesi_tmh' => $etikprofesi_tmh,
			'disiplin_tmh' => $disiplin_tmh,
			'penghentian_smntr' => $penghentian_smntr,
			'byr_gj_tjhlima' => $byr_gj_tjhlima,
			'penghentian_tunkun' => $penghentian_tunkun,
			'keterangan' => $keterangan
			);
		$this->Model_personil->input_data($data,'tb_pyb');
		redirect('Personil');
	}

	public function excel(){
		$month = date('F, Y');
		$data['personil'] = $this->Model_personil->tampil_data()->result();
		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

		$object = new PHPExcel();
		$object->getProperties()->setTitle("PERSONIL BRMSLH".$month);
		$object->setActiveSheetIndex(0);
		foreach(range('A','R') as $columnID) {
		    $object->getActiveSheet()->getColumnDimension($columnID)
		        ->setAutoSize(true);
		}
		$object->getActiveSheet()->getStyle('A11', 'R11')->applyFromArray(array(
		        'borders' => array(
		            'allborders' => array(
		                'style' => PHPExcel_Style_Border::BORDER_THIN
		            )
		        )
		    )
		);
		$style = array(
	        'alignment' => array(
	            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
	            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	            'bold' => true,
	        )
	    );

	    $object->getDefaultStyle()->applyFromArray($style);


		$object->getActiveSheet()->mergeCells('A11:A12');
		$object->getActiveSheet()->mergeCells('B11:B12');
		$object->getActiveSheet()->mergeCells('C11:C12');
		$object->getActiveSheet()->mergeCells('D11:D12');
		$object->getActiveSheet()->mergeCells('E11:E12');
		$object->getActiveSheet()->mergeCells('F11:H11');
		$object->getActiveSheet()->mergeCells('I11:K11');
		$object->getActiveSheet()->mergeCells('L11:N11');
		$object->getActiveSheet()->mergeCells('O11:Q11');
		$object->getActiveSheet()->mergeCells('R11:R12');

		$object->getActiveSheet()->setCellValue('A11', 'NO');
		$object->getActiveSheet()->setCellValue('B11', 'Nama');
		$object->getActiveSheet()->setCellValue('C11', 'PANGKAT/NRP');
		$object->getActiveSheet()->setCellValue('D11', 'JENIS KASUS');
		$object->getActiveSheet()->setCellValue('E11', 'PROSES S/D HARI INI');
		$object->getActiveSheet()->setCellValue('F11', 'PROSES SIDANG ( TMT INKRACHT )');
		$object->getActiveSheet()->setCellValue('F12', 'PIDANA UMUM');
		$object->getActiveSheet()->setCellValue('G12', 'ETIK / PROFESI');
		$object->getActiveSheet()->setCellValue('H12', 'DISIPLIN');
		$object->getActiveSheet()->setCellValue('I11', 'LAMA PUTUSAN');
		$object->getActiveSheet()->setCellValue('I12', 'PIDANA UMUM');
		$object->getActiveSheet()->setCellValue('J12', 'ETIK / PROFESI');
		$object->getActiveSheet()->setCellValue('K12', 'DISIPLIN');
		$object->getActiveSheet()->setCellValue('L11', 'TEMPAT MENJALIN HUKUMAN');
		$object->getActiveSheet()->setCellValue('L12', 'PIDANA UMUM');
		$object->getActiveSheet()->setCellValue('M12', 'ETIK / PROFESI');
		$object->getActiveSheet()->setCellValue('N12', 'DISIPLIN');
		$object->getActiveSheet()->setCellValue('O11', 'PEMBAYARAN PENGHASILAN');
		$object->getActiveSheet()->setCellValue('O12', 'PENGHENTIAN SEMENTARA GAJI ( TMT )');
		$object->getActiveSheet()->setCellValue('P12', 'PEMBAYARAN GAJI 75% ( TMT )');
		$object->getActiveSheet()->setCellValue('Q12', 'PENGHENTIAN TUNKUN ( TMT )');
		$object->getActiveSheet()->setCellValue('R11', 'KETERANGAN');

		$baris = 13;
		$no = 1;

		foreach ($data['personil'] as $p){
			$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
			$object->getActiveSheet()->setCellValue('B'.$baris, $p->nama);
			$object->getActiveSheet()->setCellValue('C'.$baris, $p->pangkat." / ". $p->nrp);
			$object->getActiveSheet()->setCellValue('D'.$baris, $p->jenis_kasus);
			$object->getActiveSheet()->setCellValue('E'.$baris, $p->proses);
			$object->getActiveSheet()->setCellValue('F'.$baris, $p->pidum_ps);
			$object->getActiveSheet()->setCellValue('G'.$baris, $p->etikprofesi_ps);
			$object->getActiveSheet()->setCellValue('H'.$baris, $p->disiplin_ps);
			$object->getActiveSheet()->setCellValue('I'.$baris, $p->pidum_lp);
			$object->getActiveSheet()->setCellValue('J'.$baris, $p->etikprofesi_lp);
			$object->getActiveSheet()->setCellValue('K'.$baris, $p->disiplin_lp);
			$object->getActiveSheet()->setCellValue('L'.$baris, $p->pidum_tmh);
			$object->getActiveSheet()->setCellValue('M'.$baris, $p->etikprofesi_tmh);
			$object->getActiveSheet()->setCellValue('N'.$baris, $p->disiplin_tmh);
			$object->getActiveSheet()->setCellValue('O'.$baris, $p->penghentian_smntr);
			$object->getActiveSheet()->setCellValue('P'.$baris, $p->byr_gj_tjhlima);
			$object->getActiveSheet()->setCellValue('Q'.$baris, $p->penghentian_tunkun);
			$object->getActiveSheet()->setCellValue('R'.$baris, $p->keterangan);

			$baris++;
		}

		$filename = "DATA PERSONIL YANG BERMASALAH BLN ".$month.".xlsx";
		$object->getActiveSheet()->setTitle("PERSONIL BRMSLH".$month);

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$filename. '"');
		header('Cache-Control: max-age=0');

		$writer = PHPExcel_IOFactory::createwriter($object, 'Excel2007');
		$writer->save('php://output');

		exit;
	}
 
}