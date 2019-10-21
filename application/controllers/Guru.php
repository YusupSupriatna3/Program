<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('prakerin_model');
	}

	public function index()
	{
		$data['content'] = 'admin/data_guru';
		$data['guru'] = $this->prakerin_model->getGuru();
		$this->load->view('admin/template/layout',$data);
	}

	public function add_guru()
	{
		$data['content'] = 'admin/add_guru';
		$this->load->view('admin/template/layout',$data);
	}

	public function proses_add_guru()
	{
		$nip = $this->input->post('nip');
		$data['guru'] = $this->prakerin_model->getGuruByNip($nip);
		if (!$nip==$data['guru'][0]['nip']) {
			$data['guru'] = $this->prakerin_model->proses_add_guru();
			if($data['guru']==true){
					$this->session->set_flashdata('msg', array('class' => 'info', 'message'=>'Data Berhasil di Tambahkan'));
					redirect(base_url().'guru');
			}else{
				$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=>'Data Tidak Bisa di Tambahkan'));
				redirect('guru/add_guru');
			}	
		}else{
			$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=>'Nomor Induk Pegawai / NIP Sudah Terdaftar'));
			redirect('guru/add_guru');
		}
	}

	public function edit_guru($nip)
	{
		$nip = $this->uri->segment(3);
		$data['content'] = 'admin/edit_guru';
		$data['guru'] = $this->prakerin_model->getGuruByNip($nip);
		$this->load->view('admin/template/layout',$data);
	}

	public function proses_edit_guru($nip)
	{
		$data['guru'] = $this->prakerin_model->proses_edit_guru($nip);
		if($data['guru']==true){
			$this->session->set_flashdata('msg', array('class' => 'info', 'message'=>'Data Berhasil di Edit'));
			redirect(base_url().'guru/edit_guru/'.$nip);
		}else{
			$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=>'Data Tidak Bisa di Edit'));
			redirect('guru/edit_guru');
		}
	}

	public function proses_delete_guru($nip)
	{
		$data['guru'] = $this->prakerin_model->proses_delete_guru($nip);
		if($data['guru']==true){
			$this->session->set_flashdata('msg', array('class' => 'info', 'message'=>'Data Berhasil di Hapus'));
			redirect(base_url().'guru');
		}else{
			$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=>'Data Tidak Bisa di Hapus'));
			redirect('guru');
		}
	}
}
