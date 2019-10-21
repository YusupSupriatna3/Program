<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('prakerin_model');
	}

	public function index()
	{
		$data['content'] = 'public/index';
		$data['notif'] = $this->prakerin_model->getDataSiswaPrakerin();
		$this->load->view('public/template/layout',$data);
	}

	public function login()
	{
		$data['content'] = 'public/login';
		$this->load->view('public/template/layout',$data);
	}

	public function proses_login()
	{
		$username = $this->input->post('username');
		$pwd = $this->input->post('pwd');
		$akses = $this->input->post('auth');
		$jurusan = $this->input->post('jurusan');
		$data['login'] = $this->prakerin_model->cek_admin();
		$data['siswa'] = $this->prakerin_model->cek_siswa($username,$pwd);
		$data['guru'] = $this->prakerin_model->cek_guru($username,$pwd);

		// echo "<pre>";
		// 	print_r($data['siswa']);
		// echo "</pre>";
		// die();
		$result;

		if ($data['login']>=1) {
			$data['login'] = $this->prakerin_model->login_admin();
			if ($username == $data['login'][0]['username'] and $pwd == $data['login'][0]['password']) {
				$sessdata = array(
					'username'  => $data['login'][0]['username'],
					'logged_in' => TRUE
			);
			$this->session->set_userdata($sessdata);
					$data['content'] = 'admin/index';
					$this->load->view('admin/template/layout',$data);
			}
		}

		if ($data['siswa']>=1) {
			$data['siswa'] = $this->prakerin_model->login_siswa($username,$pwd);
			if ($username == $data['siswa'][0]['username'] and $pwd == $data['siswa'][0]['password']) {
				$sessdata = array(
			        'username'  => $data['siswa'][0]['username'],
			        'nis'  => $data['siswa'][0]['nis'],
			        'role' => $data['siswa'][0]['role'],
			        'logged_in' => TRUE
			);
			$this->session->set_userdata($sessdata);
					$data['content'] = 'siswa/index';
					$this->load->view('siswa/template/layout',$data);
			}
		}
		
		if ($data['guru']>=1) {
			$data['guru'] = $this->prakerin_model->login_guru($username,$pwd);
			if ($username == $data['guru'][0]['username'] and $pwd == $data['guru'][0]['password']) {$sessdata = array(
				'username'  => $data['guru'][0]['username'],
				'nip' => $data['guru'][0]['nip'],
				'role' => $data['guru'][0]['role'],
				'jurusan' => $data['guru'][0]['jurusan'],
				'logged_in' => TRUE
			);
			$this->session->set_userdata($sessdata);

					$data['content'] = 'guru/index';
					$data['notif'] = $this->prakerin_model->getDataSiswaPrakerin();
					$this->load->view('guru/template/layout',$data);
			}
		}
		// if ($data['login']<1 || $data['siswa']<1 || $data['guru']<1) {
		// 	$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=>'Akun Tidak Di Temukan !!!'));
		// 	redirect('home/login');
		// }

		// if ($akses=='admin') {
		// 	$data['login'] = $this->prakerin_model->login_admin();
		// 	if ($username == $data['login'][0]['username'] and $pwd == $data['login'][0]['password']) {
		// 		$sessdata = array(
		// 			'username'  => $data['login'][0]['username'],
		// 			'logged_in' => TRUE
		// 	);
		// 	$this->session->set_userdata($sessdata);
		// 			$data['content'] = 'admin/index';
		// 			$this->load->view('admin/template/layout',$data);
		// 	}else{
		// 		$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=>'Akun Tidak Di Temukan !!!'));
		// 		redirect('home/login');
		// 	}
		// }else if($akses=='siswa') {
		// 	$data['siswa'] = $this->prakerin_model->login_siswa($username,$pwd);
		// 	if ($username == $data['siswa'][0]['username'] and $pwd == $data['siswa'][0]['password']) {
		// 		$sessdata = array(
		// 	        'username'  => $data['siswa'][0]['username'],
		// 	        'nis'  => $data['siswa'][0]['nis'],
		// 	        'role' => $data['siswa'][0]['role'],
		// 	        'logged_in' => TRUE
		// 	);
		// 	$this->session->set_userdata($sessdata);
		// 			$data['content'] = 'siswa/index';
		// 			$this->load->view('siswa/template/layout',$data);
		// 	}else{
		// 		$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=>'Akun Tidak Di Temukan !!!'));
		// 		redirect('home/login');
		// 	}
		// }else if($akses=='guru'){
		// 	$data['guru'] = $this->prakerin_model->login_guru($username,$pwd,$jurusan);
		// 	if ($username == $data['guru'][0]['username'] and $pwd == $data['guru'][0]['password']) {$sessdata = array(
		// 		'username'  => $data['guru'][0]['username'],
		// 		'nip' => $data['guru'][0]['nip'],
		// 		'role' => $data['guru'][0]['role'],
		// 		'jurusan' => $this->input->post('jurusan'),
		// 		'logged_in' => TRUE
		// );
		// $this->session->set_userdata($sessdata);

		// 			$data['content'] = 'guru/index';
		// 			$this->load->view('guru/template/layout',$data);
		// 	}else{
		// 		$this->session->set_flashdata('msg', array('class' => 'danger', 'message'=>'Akun Tidak Di Temukan !!!'));
		// 		redirect('home/login');
		// 	}
		// }
	}

	public function documentation()
	{
		$data['content'] = 'public/documentation';
		$this->load->view('public/template/layout',$data);
	}

	public function help()
	{
		$data['content'] = 'public/help';
		$this->load->view('public/template/layout',$data);	
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home/login');
	}

}
