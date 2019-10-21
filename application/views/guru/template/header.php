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
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">ss
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
  <style>
#notif {
  color:white;
  display: inline-block;
    border-radius: 50%;
    width: 20px;
    height: 20px;
  background: red;
}
</style>
  <!-- =======================================================
    Theme Name: Company
    Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
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
                  <li role="presentation"><a href="<?php echo base_url()?>logout">Logout</a></li>
              <?php }else if (isset($_SESSION['logged_in']) && $this->session->userdata('role')=='guru') { ?>
                  <li role="presentation"><a href="<?php echo base_url()?>" class="active">Home</a></li>
                  <li role="presentation"><a target="_blank" href="<?php echo base_url()?>data-prakerin-siswa"><i class="fa fa-bell"></i><span id="notif">&nbsp&nbsp<?php echo $notif[0]['jumlah']?></span></a></li>
                  <li role="presentation"><a href="<?php echo base_url()?>pengelolaan-prakerin">Pengelolaan Prakerin</a></li>
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
