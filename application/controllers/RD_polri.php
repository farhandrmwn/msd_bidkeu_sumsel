<?php 


class RD_polri extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('Model_rdpolri');
		$this->load->helper('url');
		$this->load->model('Model_rdpnspolri');
 
	}
 
	function index(){
		$data['total_pmnkuat'] = $this->Model_rdpolri->hitungpmnkuat();
		$data['total_pmnpot'] = $this->Model_rdpolri->hitungpmnpot();
		$data['total_pmkuat'] = $this->Model_rdpolri->hitungpmkuat();
		$data['total_pmpot'] = $this->Model_rdpolri->hitungpmpot();
		$data['total_bntrkuat'] = $this->Model_rdpolri->hitungbntrkuat();
		$data['total_bntrpot'] = $this->Model_rdpolri->hitungbntrpot();
		$data['total_jmlhkuat'] = $this->Model_rdpolri->hitungjmlkuat();
		$data['total_jmlhpot'] = $this->Model_rdpolri->hitungjmlpot();
		$data['total_gol4kuat'] = $this->Model_rdpnspolri->hitunggol4kuat();
		$data['total_gol4pot'] = $this->Model_rdpnspolri->hitunggol4pot();
		$data['total_gol3kuat'] = $this->Model_rdpnspolri->hitunggol3kuat();
		$data['total_gol3pot'] = $this->Model_rdpnspolri->hitunggol3pot();
		$data['total_gol2kuat'] = $this->Model_rdpnspolri->hitunggol2kuat();
		$data['total_gol2pot'] = $this->Model_rdpnspolri->hitunggol2pot();
		$data['total_jmlhkuat'] = $this->Model_rdpnspolri->hitungjmlkuat();
		$data['total_jmlhpot'] = $this->Model_rdpnspolri->hitungjmlpot();
		$data['rdpolri'] = $this->Model_rdpolri->tampil_data()->result();
		$this->load->view('rdpolri/v_tampil',$data);
	}
 
	function tambah(){
		$this->load->view('rdpolri/v_input');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->Model_rdpolri->hapus_data($where,'tb_potongan_polri');
		redirect('RD_polri');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['rdpolri'] = $this->Model_rdpolri->edit_data($where,'tb_potongan_polri')->result();
		$this->load->view('rdpolri/v_edit',$data);
	}
	function update(){
		$id = $this->input->post('id');
		$satker = $this->input->post('satker');
		$pamen_kuat = $this->input->post('pamen_kuat');
		$pamen_pot = $this->input->post('pamen_pot');	
		$pama_kuat = $this->input->post('pama_kuat');
		$pama_pot = $this->input->post('pama_pot');
		$bintara_kuat = $this->input->post('bintara_kuat');
		$bintara_pot = $this->input->post('bintara_pot');
		$jml_kuat = $this->input->post('jml_kuat');
		$jml_pot = $this->input->post('jml_pot');
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
			'ket' => $ket
			);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->Model_rdpolri->update_data($where,$data,'tb_potongan_polri');
		redirect('RD_polri');
}

	function tambah_aksi(){
		$satker = $this->input->post('satker');
		$pamen_kuat = $this->input->post('pamen_kuat');
		$pamen_pot = $this->input->post('pamen_pot');	
		$pama_kuat = $this->input->post('pama_kuat');
		$pama_pot = $this->input->post('pama_pot');
		$bintara_kuat = $this->input->post('bintara_kuat');
		$bintara_pot = $this->input->post('bintara_pot');
		$jml_kuat = $this->input->post('jml_kuat');
		$jml_pot = $this->input->post('jml_pot');
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
			'ket' => $ket
			);
		$this->Model_rdpolri->input_data($data,'tb_potongan_polri');
		redirect('RD_polri');
	}

	public function excel(){
		$month = date('F, Y');
		$year = date('Y');
		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

		$object = new PHPExcel();
		$object = $this->polri_excel($object);
		$object = $this->pns_excel($object);
		// $object = $this->keuangan_excel($object);

		$filename = "LAPORAN SEWA RUMDIN POLRES BLN ".$month.".xlsx";

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$filename. '"');
		header('Cache-Control: max-age=0');

		$writer = PHPExcel_IOFactory::createwriter($object, 'Excel2007');
		$writer->save('php://output');

		exit;
	}

	public function polri_excel($object){
		$month = date('F, Y');
		$BULAN = date('F');
		$year = date('Y');
		$data['rdpolri'] = $this->Model_rdpolri->tampil_data()->result();
		$user['user'] = $this->Model_user->tampil_data()->result();
		$sheets = $object->setActiveSheetIndex(0);
		$sheets->setTitle("POLRI ".$month);
		$sess_data = $this->session->userdata("logged_in");
		$u = $this->db->query('SELECT * FROM tb_user WHERE id_satker = '.$sess_data['id_satker'])->row();
		

		$object->getActiveSheet()->getColumnDimension('A')->setWidth(5);
		$object->getActiveSheet()->getColumnDimension('B')->setWidth(25);
		$object->getActiveSheet()->getColumnDimension('C')->setWidth(10);
		$object->getActiveSheet()->getColumnDimension('D')->setWidth(15);
		$object->getActiveSheet()->getColumnDimension('E')->setWidth(10);
		$object->getActiveSheet()->getColumnDimension('F')->setWidth(15);
		$object->getActiveSheet()->getColumnDimension('G')->setWidth(10);
		$object->getActiveSheet()->getColumnDimension('H')->setWidth(15);
		$object->getActiveSheet()->getColumnDimension('I')->setWidth(10);
		$object->getActiveSheet()->getColumnDimension('J')->setWidth(15);
		$object->getActiveSheet()->getColumnDimension('K')->setWidth(25);


		$lastRow = 22+count($data['rdpolri']);
		$object->getActiveSheet()->getStyle('A17:K'.$lastRow.'')->applyFromArray(array(
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
	        ),
	        'font'  => array(
		        'size'  => 10,
		        'name' => 'Arial',
		    )
	    );
	    $styleArray = array(
		    'font'  => array(
		        'size'  => 10,
		        'name' => 'Arial',
		        'bold' => true,
		    ));
	    $stylettd = array(
		    'font'  => array(
		        'bold' => true,
		        'underline'  => true,
		    ));

	    $object->getActiveSheet()->getStyle('A1:R'.$lastRow)->applyFromArray($style);
	    $object->getActiveSheet()->getStyle('A17:K19')->applyFromArray($styleArray);
	    $object->getActiveSheet()->getStyle('A13')->applyFromArray($styleArray);
	    $object->getActiveSheet()->getStyle('A14')->applyFromArray($stylettd);
	    $object->getActiveSheet()->getStyle('A10')->getFont()->setUnderline(true);


	    $object->getActiveSheet()->mergeCells('A17:A19');
	    $object->getActiveSheet()->mergeCells('B17:B19');
	    $object->getActiveSheet()->mergeCells('C17:H17');
		$object->getActiveSheet()->mergeCells('I17:J18');
		$object->getActiveSheet()->mergeCells('K17:K19');
		$object->getActiveSheet()->mergeCells('C18:D18');
		$object->getActiveSheet()->mergeCells('E18:F18');
		$object->getActiveSheet()->mergeCells('G18:H18');
		$object->getActiveSheet()->mergeCells('A8:C8');
		$object->getActiveSheet()->mergeCells('A9:C9');
		$object->getActiveSheet()->mergeCells('A10:C10');
		$object->getActiveSheet()->mergeCells('A13:K13');
		$object->getActiveSheet()->mergeCells('A14:K14');

		$object->getActiveSheet()->setCellValue('A8', 'KEPOLISIAN DAERAH SUMATERA SELATAN');
		$object->getActiveSheet()->setCellValue('A9', 'RESORT '.$u->satker);
		$object->getActiveSheet()->setCellValue('A10', $u->alamat);
		$die;
		$object->getActiveSheet()->setCellValue('A13', 'LAPORAN POTONGAN SEWA RUMAH DINAS POLRI');
		$object->getActiveSheet()->setCellValue('A14', 'BULAN : '.$month);
		$object->getActiveSheet()->setCellValue('A17', 'NO');
		$object->getActiveSheet()->setCellValue('B17', 'SATKER');
		$object->getActiveSheet()->setCellValue('C17', 'PANGKAT');
		$object->getActiveSheet()->setCellValue('C18', 'PAMEN');
		$object->getActiveSheet()->setCellValue('E18', 'PAMA');
		$object->getActiveSheet()->setCellValue('G18', 'BINTARA');
		$object->getActiveSheet()->setCellValue('I17', 'JUMLAH');
		$object->getActiveSheet()->setCellValue('C19', 'KUAT');
		$object->getActiveSheet()->setCellValue('D19', 'POT');
		$object->getActiveSheet()->setCellValue('E19', 'KUAT');
		$object->getActiveSheet()->setCellValue('F19', 'POT');
		$object->getActiveSheet()->setCellValue('G19', 'KUAT');
		$object->getActiveSheet()->setCellValue('H19', 'POT');
		$object->getActiveSheet()->setCellValue('I19', 'KUAT');
		$object->getActiveSheet()->setCellValue('J19', 'POT');
		$object->getActiveSheet()->setCellValue('K17', 'KETERANGAN');
		$object->getActiveSheet()->setCellValue('K16', '(POLRI)');
		$object->getActiveSheet()->setCellValue('C'.($lastRow+3), 'MENGETAHUI');
		$object->getActiveSheet()->setCellValue('C'.($lastRow+4), 'KEPALA KEPOLISIAN RESORT');
		$object->getActiveSheet()->setCellValue('C'.($lastRow+5), $u->satker);
		$object->getActiveSheet()->setCellValue('C'.($lastRow+9), $u->nama_kepala);
		$object->getActiveSheet()->setCellValue('C'.($lastRow+10), $u->jabatan_kepala.' NRP '.$u->nrp_kepala);
		$object->getActiveSheet()->setCellValue('I'.($lastRow+3), 'MENGETAHUI');
		$object->getActiveSheet()->setCellValue('I'.($lastRow+4), 'KEPALA SEKSI KEUANGAN');
		$object->getActiveSheet()->setCellValue('I'.($lastRow+5), $u->satker);
		$object->getActiveSheet()->setCellValue('I'.($lastRow+9), $u->nama_keuangan);
		$object->getActiveSheet()->setCellValue('I'.($lastRow+10), $u->jabatan_keuangan.' NRP '.$u->nrp_keuangan);


		$baris = 20;
		$no = 1;

		foreach ($data['rdpolri'] as $r){
			
			
			$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
			$object->getActiveSheet()->setCellValue('B'.$baris, $r->satker);
			$object->getActiveSheet()->setCellValue('C'.$baris, $r->pamen_kuat);
			$object->getActiveSheet()->setCellValue('D'.$baris, $r->pamen_pot);
			$object->getActiveSheet()->setCellValue('E'.$baris, $r->pama_kuat);
			$object->getActiveSheet()->setCellValue('F'.$baris, $r->pama_pot);
			$object->getActiveSheet()->setCellValue('G'.$baris, $r->bintara_kuat);
			$object->getActiveSheet()->setCellValue('H'.$baris, $r->bintara_pot);
			$object->getActiveSheet()->setCellValue('I'.$baris, $r->jml_kuat);
			$object->getActiveSheet()->setCellValue('J'.$baris, $r->jml_pot);
			$object->getActiveSheet()->setCellValue('K'.$baris, $r->ket);
			

			$baris++;
		}
		 	$object->getActiveSheet()->getStyle('B'.($baris+2).':J'.($baris+2))->applyFromArray($styleArray);
		 	$object->getActiveSheet()->getStyle('C'.($lastRow+9))->applyFromArray($stylettd);
	    	$object->getActiveSheet()->getStyle('I'.($lastRow+9))->applyFromArray($stylettd);
		 	$object->getActiveSheet()->getStyle('A'.($lastRow+3).':I'.($lastRow+10))->applyFromArray($style);
			$object->getActiveSheet()->setCellValue('B'.($baris+2), 'JUMLAH');
			$object->getActiveSheet()->setCellValue('C'.($baris+2), $data['total_pmnkuat'] = $this->Model_rdpolri->hitungpmnkuat());
			$object->getActiveSheet()->setCellValue('D'.($baris+2), 		$data['total_pmnpot'] = $this->Model_rdpolri->hitungpmnpot());
			$object->getActiveSheet()->setCellValue('E'.($baris+2), 		$data['total_pmkuat'] = $this->Model_rdpolri->hitungpmkuat());
			$object->getActiveSheet()->setCellValue('F'.($baris+2), 		$data['total_pmpot'] = $this->Model_rdpolri->hitungpmpot());
			$object->getActiveSheet()->setCellValue('G'.($baris+2), 		$data['total_bntrkuat'] = $this->Model_rdpolri->hitungbntrkuat());
			$object->getActiveSheet()->setCellValue('H'.($baris+2), 		$data['total_bntrpot'] = $this->Model_rdpolri->hitungbntrpot());
			$object->getActiveSheet()->setCellValue('I'.($baris+2), 		$data['total_jmlhkuat'] = $this->Model_rdpolri->hitungjmlkuat());
			$object->getActiveSheet()->setCellValue('J'.($baris+2), 		$data['total_jmlhpot'] = $this->Model_rdpolri->hitungjmlpot());
		return $object;
	}

	public function pns_excel($object){
		$month = date('F, Y');
		$BULAN = date('F');
		$year = date('Y');
		$data['rdpnspolri'] = $this->Model_rdpnspolri->tampil_data()->result();
		$user['user'] = $this->Model_user->tampil_data()->result();
		$object->createSheet();
		$sheets = $object->setActiveSheetIndex(1);
		$sheets->setTitle("PNS POLRI ".$month);
		$sess_data = $this->session->userdata("logged_in");
		$u = $this->db->query('SELECT * FROM tb_user WHERE id_satker = '.$sess_data['id_satker'])->row();
		

		$object->getActiveSheet()->getColumnDimension('A')->setWidth(5);
		$object->getActiveSheet()->getColumnDimension('B')->setWidth(25);
		$object->getActiveSheet()->getColumnDimension('C')->setWidth(10);
		$object->getActiveSheet()->getColumnDimension('D')->setWidth(15);
		$object->getActiveSheet()->getColumnDimension('E')->setWidth(10);
		$object->getActiveSheet()->getColumnDimension('F')->setWidth(15);
		$object->getActiveSheet()->getColumnDimension('G')->setWidth(10);
		$object->getActiveSheet()->getColumnDimension('H')->setWidth(15);
		$object->getActiveSheet()->getColumnDimension('I')->setWidth(10);
		$object->getActiveSheet()->getColumnDimension('J')->setWidth(15);
		$object->getActiveSheet()->getColumnDimension('K')->setWidth(25);


		$lastRow = 22+count($data['rdpnspolri']);
		$object->getActiveSheet()->getStyle('A17:K'.$lastRow.'')->applyFromArray(array(
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
	        ),
	        'font'  => array(
		        'size'  => 10,
		        'name' => 'Arial',
		    )
	    );
	    $styleArray = array(
		    'font'  => array(
		        'size'  => 10,
		        'name' => 'Arial',
		        'bold' => true,
		    ));
	    $stylettd = array(
		    'font'  => array(
		        'bold' => true,
		        'underline'  => true,
		    ));

	    $object->getActiveSheet()->getStyle('A1:R'.$lastRow)->applyFromArray($style);
	    $object->getActiveSheet()->getStyle('A17:K19')->applyFromArray($styleArray);
	    $object->getActiveSheet()->getStyle('A13')->applyFromArray($styleArray);
	    $object->getActiveSheet()->getStyle('A14')->applyFromArray($stylettd);
	    $object->getActiveSheet()->getStyle('A10')->getFont()->setUnderline(true);


	    $object->getActiveSheet()->mergeCells('A17:A19');
	    $object->getActiveSheet()->mergeCells('B17:B19');
	    $object->getActiveSheet()->mergeCells('C17:H17');
		$object->getActiveSheet()->mergeCells('I17:J18');
		$object->getActiveSheet()->mergeCells('K17:K19');
		$object->getActiveSheet()->mergeCells('C18:D18');
		$object->getActiveSheet()->mergeCells('E18:F18');
		$object->getActiveSheet()->mergeCells('G18:H18');
		$object->getActiveSheet()->mergeCells('A8:C8');
		$object->getActiveSheet()->mergeCells('A9:C9');
		$object->getActiveSheet()->mergeCells('A10:C10');
		$object->getActiveSheet()->mergeCells('A13:K13');
		$object->getActiveSheet()->mergeCells('A14:K14');

		$object->getActiveSheet()->setCellValue('A8', 'KEPOLISIAN DAERAH SUMATERA SELATAN');
		$object->getActiveSheet()->setCellValue('A9', 'RESORT '.$u->satker);
		$object->getActiveSheet()->setCellValue('A10', $u->alamat);
		$die;
		$object->getActiveSheet()->setCellValue('A13', 'LAPORAN POTONGAN SEWA RUMAH DINAS POLRI');
		$object->getActiveSheet()->setCellValue('A14', 'BULAN : '.$month);
		$object->getActiveSheet()->setCellValue('A17', 'NO');
		$object->getActiveSheet()->setCellValue('B17', 'SATKER');
		$object->getActiveSheet()->setCellValue('C17', 'PANGKAT');
		$object->getActiveSheet()->setCellValue('C18', 'GOL-IV');
		$object->getActiveSheet()->setCellValue('E18', 'GOL-III');
		$object->getActiveSheet()->setCellValue('G18', 'GOL-II');
		$object->getActiveSheet()->setCellValue('I17', 'JUMLAH');
		$object->getActiveSheet()->setCellValue('C19', 'KUAT');
		$object->getActiveSheet()->setCellValue('D19', 'POT');
		$object->getActiveSheet()->setCellValue('E19', 'KUAT');
		$object->getActiveSheet()->setCellValue('F19', 'POT');
		$object->getActiveSheet()->setCellValue('G19', 'KUAT');
		$object->getActiveSheet()->setCellValue('H19', 'POT');
		$object->getActiveSheet()->setCellValue('I19', 'KUAT');
		$object->getActiveSheet()->setCellValue('J19', 'POT');
		$object->getActiveSheet()->setCellValue('K17', 'KETERANGAN');
		$object->getActiveSheet()->setCellValue('K16', '(PNS)');
		$object->getActiveSheet()->setCellValue('C'.($lastRow+3), 'MENGETAHUI');
		$object->getActiveSheet()->setCellValue('C'.($lastRow+4), 'KEPALA KEPOLISIAN RESORT');
		$object->getActiveSheet()->setCellValue('C'.($lastRow+5), $u->satker);
		$object->getActiveSheet()->setCellValue('C'.($lastRow+9), $u->nama_kepala);
		$object->getActiveSheet()->setCellValue('C'.($lastRow+10), $u->jabatan_kepala.' NRP '.$u->nrp_kepala);
		$object->getActiveSheet()->setCellValue('I'.($lastRow+3), 'MENGETAHUI');
		$object->getActiveSheet()->setCellValue('I'.($lastRow+4), 'KEPALA SEKSI KEUANGAN');
		$object->getActiveSheet()->setCellValue('I'.($lastRow+5), $u->satker);
		$object->getActiveSheet()->setCellValue('I'.($lastRow+9), $u->nama_keuangan);
		$object->getActiveSheet()->setCellValue('I'.($lastRow+10), $u->jabatan_keuangan.' NRP '.$u->nrp_keuangan);


		$baris = 20;
		$no = 1;

		foreach ($data['rdpnspolri'] as $rp){
			
			
			$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
			$object->getActiveSheet()->setCellValue('B'.$baris, $rp->satker);
			$object->getActiveSheet()->setCellValue('C'.$baris, $rp->gol4_kuat);
			$object->getActiveSheet()->setCellValue('D'.$baris, $rp->gol4_pot);
			$object->getActiveSheet()->setCellValue('E'.$baris, $rp->gol3_kuat);
			$object->getActiveSheet()->setCellValue('F'.$baris, $rp->gol3_pot);
			$object->getActiveSheet()->setCellValue('G'.$baris, $rp->gol2_kuat);
			$object->getActiveSheet()->setCellValue('H'.$baris, $rp->gol2_pot);
			$object->getActiveSheet()->setCellValue('I'.$baris, $rp->jml_kuat);
			$object->getActiveSheet()->setCellValue('J'.$baris, $rp->jml_pot);
			$object->getActiveSheet()->setCellValue('K'.$baris, $rp->ket);
			

			$baris++;
		}
		 	$object->getActiveSheet()->getStyle('B'.($baris+3).':J'.($baris+2))->applyFromArray($styleArray);
		 	$object->getActiveSheet()->getStyle('C'.($lastRow+9))->applyFromArray($stylettd);
	    	$object->getActiveSheet()->getStyle('I'.($lastRow+9))->applyFromArray($stylettd);
		 	$object->getActiveSheet()->getStyle('A'.($lastRow+3).':I'.($lastRow+10))->applyFromArray($style);
			$object->getActiveSheet()->setCellValue('B'.($baris+2), 'JUMLAH');
			$object->getActiveSheet()->setCellValue('C'.($baris+2), $data['total_gol4kuat'] = $this->Model_rdpnspolri->hitunggol4kuat());
			$object->getActiveSheet()->setCellValue('D'.($baris+2), 		$data['total_gol4pot'] = $this->Model_rdpnspolri->hitunggol4pot());
			$object->getActiveSheet()->setCellValue('E'.($baris+2), 		$data['total_gol3kuat'] = $this->Model_rdpnspolri->hitunggol3kuat());
			$object->getActiveSheet()->setCellValue('F'.($baris+2), 		$data['total_gol3pot'] = $this->Model_rdpnspolri->hitunggol3pot());
			$object->getActiveSheet()->setCellValue('G'.($baris+2), 		$data['total_gol2kuat'] = $this->Model_rdpnspolri->hitunggol2kuat());
			$object->getActiveSheet()->setCellValue('H'.($baris+2), 		$data['total_gol2pot'] = $this->Model_rdpnspolri->hitunggol2pot());
			$object->getActiveSheet()->setCellValue('I'.($baris+2), 		$data['total_jmlhkuat'] = $this->Model_rdpnspolri->hitungjmlkuat());
			$object->getActiveSheet()->setCellValue('J'.($baris+2), 		$data['total_jmlhpot'] = $this->Model_rdpnspolri->hitungjmlpot());
		return $object;
	}

}

?>