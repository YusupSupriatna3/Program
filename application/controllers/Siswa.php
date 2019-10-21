<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('prakerin_model');
	}

	public function index()
	{
    $data['content'] = 'admin/data_siswa';
    $data['siswa'] = $this->prakerin_model->getSiswa();
	$this->load->view('admin/template/layout',$data);
	}

	public function add_siswa()
	{
		$data['content'] = 'admin/add_siswa';
		$this->load->view('admin/template/layout',$data);
	}

	public function proses_add_siswa()
	{
		$nis = $this->input->post('nis');
		$data['siswa'] = $this->prakerin_model->getSiswaByNip($nis);
		if(!$nis==$data['siswa'][0]['nis']){
			$data['siswa'] = $this->prakerin_model->proses_add_siswa();
			if($data['siswa']==true){
					$this->session->set_flashdata('msg', array('class' => 'info', 'message'=>'Data Berhasil di Tambahkan'));
					redirect(base_url().'siswa');
			}else{
				$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=>'Data Tidak Bisa di Tambahkan'));
				redirect('siswa/add_siswa');
			}
		}else{
			$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=>'Nomor Induk Siswa / NIS Sudah Terdaftar'));
			redirect('siswa/add_siswa');
		}
	}

	public function edit_siswa($nis)
	{
		$nis = $this->uri->segment(3);
		$data['content'] = 'admin/edit_siswa';
		$data['siswa'] = $this->prakerin_model->getSiswaByNip($nis);
		$this->load->view('admin/template/layout',$data);
	}

	public function proses_edit_siswa($nis)
	{
		$data['siswa'] = $this->prakerin_model->proses_edit_siswa($nis);
		if($data['siswa']==true){
			$this->session->set_flashdata('msg', array('class' => 'info', 'message'=>'Data Berhasil di Edit'));
			redirect(base_url().'siswa/edit_siswa/'.$nis);
		}else{
			$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=>'Data Tidak Bisa di Edit'));
			redirect('siswa/edit_siswa'.$nis);
		}
	}

	public function proses_delete_siswa($nis)
	{
		$data['siswa'] = $this->prakerin_model->proses_delete_siswa($nis);
		if($data['siswa']==true){
			$this->session->set_flashdata('msg', array('class' => 'info', 'message'=>'Data Berhasil di Hapus'));
			redirect(base_url().'siswa');
		}else{
			$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=>'Data Tidak Bisa Di hapus'));
			redirect(base_url().'siswa');
		}
	}

}
