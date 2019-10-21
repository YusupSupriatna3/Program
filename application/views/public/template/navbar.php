<nav class="navbar navbar-expand-lg navbar-app fixed-top">
	<div class="container">
		<a class="navbar-brand logo-app" href="<?php echo base_url()?>"><img src="https://sgp1.digitaloceanspaces.com/padiciti/contents/logo-esport.png"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="material-icons text-white">menu</span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link link-app" href="<?php echo base_url()?>home">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link link-app" href="<?php echo base_url()?>home/games">Games</a>
				</li>
				<li class="nav-item">
					<a class="nav-link link-app" href="<?php echo base_url()?>organizer">Organize</a>
				</li>
				<li class="nav-item">
					<a class="nav-link link-app" href="<?php echo base_url()?>home/blog">Blog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link link-app" href="<?php echo base_url()?>home/about">About</a>
				</li>
			</ul>
			<?php
				if ($this->session->userdata('username')) {
					$username=$this->session->userdata('username');
			?>
			<a href="">Welcome <?php echo strtoupper($username);?></a>&nbsp;&nbsp;
			<a href="<?php echo base_url()?>home/logout" class="btn btn-app">Log Out </a>
			<?php } else { ?>
			<a href="<?php echo base_url()?>home/login" class="btn btn-app">Log in </a>
			<?php } ?>
		</div>
	</div>
</nav>