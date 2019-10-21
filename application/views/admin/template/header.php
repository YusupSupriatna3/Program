<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMK NEGERI 2 BANJAR</title>

  <!-- Bootstrap -->
  <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css">
  <link href="<?php echo base_url()?>assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet" />
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/smk.ico">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <style media="screen">
  img.zoom {
  width: 350px;
  height: 200px;
  -webkit-transition: all .2s ease-in-out;
  -moz-transition: all .2s ease-in-out;
  -o-transition: all .2s ease-in-out;
  -ms-transition: all .2s ease-in-out;
}

.transisi {
  -webkit-transform: scale(1.8);
  -moz-transform: scale(1.8);
  -o-transform: scale(1.8);
  transform: scale(1.8);
}
  </style>
  <!-- =======================================================
    Theme Name: Company
    Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
  <script>
    function cekuser(a) {
		re = /^[A-Za-z .,]{1,}$/;
		return re.test(a);
    }
    
    function cekusername(a) {
		re = /^[A-Za-z 0-9]{1,}$/;
    return re.test(a);
    }
    
    function cekalamat(a) {
		re = /^[A-Za-z 0-9.,]{1,}$/;
		return re.test(a);
	}

	function validasiNama() //function validasi
	{
        var nama = document.getElementById("nama").value; //inisialisasi variabel nama, diambil dari id input nama

		if (!cekuser(nama)) {
			alert("Nama Harus HURUF!");
			nama.focus();
			return false;
		}
    }
    
    function validasiAlamat() //function validasi
	{
        var alamat = document.getElementById("alamat").value; //inisialisasi variabel nama, diambil dari id input nama

		if (!cekalamat(alamat)) {
			alert("Alamat Harus HURUF atau Angka!");
			alamat.focus();
			return false;
		}
    }

    function validasiUsername() //function validasi
	{
        var username = document.getElementById("username").value; //inisialisasi variabel nama, diambil dari id input nama

		if (!cekusername(username)) {
			alert("Username Harus HURUF atau ANGKA!");
			username.focus();
			return false;
		}
    }

    function validasiPassword() //function validasi
	{
        var password = document.getElementById("pwd").value; //inisialisasi variabel nama, diambil dari id input nama

		if (!cekusername(password)) {
			alert("Password Harus HURUF atau Angka!");
			password.focus();
			return false;
		}
    }
  </script>
</head>

<body>
  <header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
            <div class="navbar-brand">
              <a href="<?php echo base_url()?>"><h1><span>SMK NEGERI 2 BANJAR</span></h1></a>
            </div>
          </div>

          <div class="navbar-collapse collapse">
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
                <?php if (isset($_SESSION['logged_in']) && $this->session->userdata('username')=='admin') { ?>
                  <li role="presentation"><a href="<?php echo base_url()?>" class="active">Home</a></li>
                  <li role="presentation"><a href="<?php echo base_url()?>data-guru">Data Guru</a></li>
                  <li role="presentation"><a href="<?php echo base_url()?>data-siswa">Data Siswa</a></li>
                  <li role="presentation"><a href="<?php echo base_url()?>tanggal-prakerin">Tanggal Prakerin</a></li>
                  <li role="presentation"><a href="<?php echo base_url()?>logout">Logout</a></li>
              <?php }else if (isset($_SESSION['logged_in']) && $this->session->userdata('role')=='guru') { ?>
                  <li role="presentation"><a href="<?php echo base_url()?>" class="active">Home</a></li>
                  <li role="presentation"><a href="<?php echo base_url()?>data-prakerin-guru">Pengelolaan Prakerin</a></li>
                  <li role="presentation"><a href="<?php echo base_url()?>logout">Logout</a></li>
              <?php }else if (isset($_SESSION['logged_in']) && $this->session->userdata('role')=='siswa') { ?>
                  <li role="presentation"><a href="<?php echo base_url()?>" class="active">Home</a></li>
                  <li role="presentation"><a href="<?php echo base_url()?>pengajuan-prakerin">Pengajuan Siswa</a></li>
                  <li role="presentation"><a href="<?php echo base_url()?>logout">Logout</a></li>
              <?php }else{ ?>
                  <li role="presentation"><a href="<?php echo base_url()?>" class="active">Home</a></li>
                  <li role="presentation"><a href="<?php echo base_url()?>login">Login</a></li>
              <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
