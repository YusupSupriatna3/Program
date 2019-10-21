<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prakerin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('prakerin_model');
	}

	public function pengajuan_siswa()
	{
		$nis = $this->session->userdata('nis');
		$data['content'] = 'prakerin/data_prakerin';
		$data['prakerin'] = $this->prakerin_model->getPrakerinByNis($nis);
		$this->load->view('prakerin/template/layout',$data);
	}

	public function pengelolaan_prakerin()
	{
		$data['content'] = 'prakerin/data_prakerin';
		$data['prakerin'] = $this->prakerin_model->getPrakerinByJurusan();
		$data['notif'] = $this->prakerin_model->getDataSiswaPrakerin();
		$this->load->view('prakerin/template/layout',$data);
	}

	public function add_prakerin()
	{
		$data['content'] = 'prakerin/add_prakerin';
		$data['notif'] = $this->prakerin_model->getDataSiswaPrakerin();
		$this->load->view('prakerin/template/layout',$data);
	}

	public function proses_add_prakerin()
	{
		$nis = $this->input->post('nis');
		$status = 'ok';
		$data['siswa'] = $this->prakerin_model->getPrakerinByNisStatus($nis,$status);
		
		if($this->session->userdata('role')=='guru'){
			$data['content'] = 'prakerin/data_prakerin';
			if(empty($data['siswa'])){
				$data['prakerin'] = $this->prakerin_model->proses_add_prakerin();
				$this->session->set_flashdata('msg', array('class' => 'info', 'message'=>'Data Berhasil di Tambahkan'));
				redirect(base_url().'prakerin/pengelolaan_prakerin');
			}else{
				$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=>'Data Prakerin Sudah Di Setujui'));
				redirect(base_url().'prakerin/pengelolaan_prakerin');
			}
		}else{
			$data['content'] = 'prakerin/data_prakerin';
			if(empty($data['siswa'])){
				$data['prakerin'] = $this->prakerin_model->proses_add_prakerin();
				$this->session->set_flashdata('msg', array('class' => 'info', 'message'=>'Data Berhasil di Tambahkan'));
				redirect(base_url().'prakerin/pengajuan_siswa');
			}else{
				$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=>'Data Prakerin Sudah Di Setujui'));
				redirect(base_url().'prakerin/pengajuan_siswa');
			}
		}	
	}

	public function edit_prakerin($id,$tempat,$status,$kota)
	{
		$id = $this->uri->segment(3);
		$tempat = rawurldecode($tempat);
		$kota = rawurldecode($kota);
		$data['content'] = 'prakerin/edit_prakerin';
		$data['prakerin'] = $this->prakerin_model->getPrakerinById($id,$tempat,$status,$kota);
		$this->load->view('prakerin/template/layout',$data);	
	}

	public function proses_edit_prakerin($id,$tempat,$status,$kota)
	{
		$data['prakerin'] = $this->prakerin_model->proses_edit_prakerin($id);
		if($data['prakerin']==true){
			$this->session->set_flashdata('msg', array('class' => 'info', 'message'=>'Data Berhasil di Edit'));
			redirect(base_url().'prakerin/edit_prakerin/'.$id.'/'.$tempat.'/'.$status.'/'.$kota);
		}else{
			$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=>'Data Tidak Bisa di Edit'));
			redirect('prakerin/edit_prakerin/'.$id.'/'.$tempat.'/'.$status.'/'.$kota);
		}
	}

	public function proses_delete_prakerin($id)
	{
		$data['prakerin'] = $this->prakerin_model->proses_delete_prakerin($id);
		if($data['prakerin']==true){
			$this->session->set_flashdata('msg', array('class' => 'info', 'message'=>'Data Berhasil di Hapus'));
			redirect(base_url().'prakerin/pengelolaan_prakerin');
		}else{
			$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=>'Data Tidak Bisa Di hapus'));
			redirect(base_url().'prakerin/pengelolaan_prakerin');
		}
	}

	public function persetujuan_prakerin($id,$nis)
	{
		$data['prakerin'] = $this->prakerin_model->persetujuan_prakerin($id,$nis);
		if($data['prakerin']==true){
			// $data['other'] = $this->prakerin_model->delete_prakerin($nis);
			$this->session->set_flashdata('msg', array('class' => 'info', 'message'=>'Data Berhasil di Terima'));
			redirect(base_url().'prakerin/pengelolaan_prakerin');
		}else{
			$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=>'Data Tidak Bisa di Terima'));
			redirect('prakerin/pengelolaan_prakerin');
		}	
	}

	public function penolakan_prakerin($id,$nis)
	{
		$data['prakerin'] = $this->prakerin_model->penolakan_prakerin($id,$nis);
		if($data['prakerin']==true){
			$this->session->set_flashdata('msg', array('class' => 'info', 'message'=>'Data Berhasil di Tolak'));
			redirect(base_url().'prakerin/pengelolaan_prakerin');
		}else{
			$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=>'Data Tidak Bisa di Tolak'));
			redirect('prakerin/pengelolaan_prakerin');
		}	
	}

	public function cetak_surat($id,$tempat,$status,$kota)
	{
		$tempat = rawurldecode($tempat);
		$kota = rawurldecode($kota);
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "surat-prakerin.pdf";
		// $this->pdf->load_view('laporan_pdf', $data);
		$data['surat'] = $this->prakerin_model->getPrakerinById($id,$tempat,$status,$kota);
		$jurusan = $this->session->userdata('jurusan');
		$nip = $this->session->userdata('nip');
		$data['guru'] = $this->prakerin_model->getGuruJurusan($jurusan,$nip);
		$this->pdf->load_view('prakerin/surat_prakerin',$data);
	}

	public function cetak_sertifikat_depan($id)
	{
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "surat-prakerin-depan.pdf";
		$data['sertifikat'] = $this->prakerin_model->getPrakerinId($id);
		$this->pdf->load_view('prakerin/sertifikat_depan',$data);
	}

	public function cetak_sertifikat_belakang($id)
	{
		$this->load->library('pdf');
		$this->pdf->setPaper('F4', 'landscape');
		$this->pdf->filename = "sertifikat-prakerin-belakang.pdf";
		$data['sertifikat'] = $this->prakerin_model->getPrakerinId($id);
		$this->pdf->load_view('prakerin/sertifikat_belakang',$data);
	}

	public function tanggal_prakerin()
	{
		$data['content'] = 'prakerin/tanggal_prakerin';
		$data['tgl'] = $this->prakerin_model->getTanggal();
		$this->load->view('prakerin/template/layout',$data);
	}

	public function add_tanggal_prakerin()
	{
		$data['content'] = 'prakerin/add_tanggal_prakerin';
		$this->load->view('prakerin/template/layout',$data);
	}

	public function proses_add_tanggal_prakerin()
	{
		$data['content'] = 'prakerin/add_tanggal_prakerin';
		$data['tgl'] = $this->prakerin_model->addTanggal();
		if ($data['tgl']) {
			$this->session->set_flashdata('msg', array('class' => 'info', 'message'=>'Data Berhasil di Tambahkan'));
			redirect(base_url().'prakerin/tanggal_prakerin');
		}else{
			$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=>'Data Gagal di Tambahkan'));
			redirect(base_url().'prakerin/add_tanggal_prakerin');
		}
	}

	public function edit_tanggal_prakerin($id)
	{
		$data['content'] = 'prakerin/edit_tanggal_prakerin';
		$data['tgl'] = $this->prakerin_model->getTanggalId($id);
		$this->load->view('prakerin/template/layout',$data);
	}

	public function proses_edit_tanggal_prakerin($id)
	{
		$data['content'] = 'prakerin/edit_tanggal_prakerin';
		$data['tgl_edit'] = $this->prakerin_model->editTanggal($id);
		if ($data['tgl_edit']) {
			$this->session->set_flashdata('msg', array('class' => 'info', 'message'=>'Data Berhasil di Ubah'));
			redirect(base_url().'prakerin/edit_tanggal_prakerin/'.$id);
		}else{
			$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=>'Data Gagal di Ubah'));
			redirect(base_url().'prakerin/edit_tanggal_prakerin/'.$id);
		}	
	}

	public function delete_tanggal_prakerin($id)
	{
		$data['content'] = 'prakerin/edit_tanggal_prakerin';
		$data['tgl_delete'] = $this->prakerin_model->deleteTanggal($id);
		if ($data['tgl_delete']) {
			$this->session->set_flashdata('msg', array('class' => 'info', 'message'=>'Data Berhasil di Hapus'));
			redirect(base_url().'prakerin/tanggal_prakerin');
		}else{
			$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=>'Data Gagal di Hapus'));
			redirect(base_url().'prakerin/tanggal_prakerin');
		}
	}

	public function data_prakerin_siswa()
	{
		$data['content'] = 'prakerin/data_prakerin_siswa';
		$data['siswa'] = $this->prakerin_model->getDataSiswaPrakerinn();
		$data['notif'] = $this->prakerin_model->getDataSiswaPrakerin();
		$this->load->view('prakerin/template/layout',$data);
	}
}
