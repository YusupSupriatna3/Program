<div class="sidebar-app">
	<div class="logo d-none d-sm-none d-md-block">
		<a href="<?php echo base_url()?>home"><img src="https://sgp1.digitaloceanspaces.com/padiciti/contents/logo-esport.png"></a>
	</div>
	<div class="menu-app">
		<div class="btnClose d-sm-block d-md-none text-right png-2">
			<i class="material-icons">close</i>
		</div>
		<ul>
			<li>
				<div class="item-app mb-0" data-toggle="collapse" href="#sidebarCollapse" aria-expanded="false">
					<img src="<?php echo base_url()?>assets/img/icon/icon-profile.svg" class="icon-app icon-18">
					<?php
						if ($this->session->userdata('username')) {
							$username=$this->session->userdata('username');
					?>
					<span><?php echo strtoupper($username)?><i class="material-icons">expand_more</i></span>
					<?php } else { ?>
						<span>Username <i class="material-icons">expand_more</i></span>	
					<?php } ?>
				</div>
				<div class="collapse" id="sidebarCollapse">
					<div class="collapse-content mt-2">
						<ul>
							<li><a href="<?php echo base_url()?>organizer/account" class="item-app" href="">My Account</a></li>
							<li><a href="#" class="item-app" href="">My Playlist</a></li>
							<li><a href="<?php echo base_url()?>home/logout" class="item-app" href="">Logout</a></li>
						</ul>
					</div>
				</div>
			</li>
		</ul>
		<ul class="my-account mt-3">
			<li>
				<div class="item-app mb-0" data-toggle="collapse" href="#profileCollapse" aria-expanded="false">
					<img src="<?php echo base_url()?>assets/img/icon/icon-account.svg" class="icon-app icon-18">
					<span>Profile</span>
				</div>
				<div class="collapse show" id="profileCollapse">
					<div class="collapse-content mt-2">
						<ul>
							<li><a class="item-app" href="<?php echo base_url()?>organizer/account">Information</a></li>
							<li><a class="item-app" href="<?php echo base_url()?>organizer/communications">Communications</a></li>
						</ul>
					</div>
				</div>
			</li>
			<li>
				<div class="item-app mb-0" data-toggle="collapse" href="#accountCollapse" aria-expanded="false">
					<img src="<?php echo base_url()?>assets/img/icon/icon-setting.svg" class="icon-app icon-18">
					<span>Account</span>
				</div>
				<div class="collapse" id="accountCollapse">
					<div class="collapse-content mt-2">
						<ul>
							<li><a class="item-app" href="<?php echo base_url()?>organizer/email">Email</a></li>
							<li><a class="item-app" href="<?php echo base_url()?>organizer/password">Password</a></li>
							<li><a class="item-app" href="<?php echo base_url()?>organizer/delete">Delete</a></li>
						</ul>
					</div>
				</div>
			</li>
			<li>
				<a href="<?php echo base_url()?>organizer/application" class="item-app">
					<img src="<?php echo base_url()?>assets/img/icon/icon-application.svg" class="icon-app icon-18">
					<span>Application</span>
				</a>
			</li>
		</ul>
		<ul class="second-menu-app">
			<li><a href="<?php echo base_url()?>help">Help Center</a></li>
			<li><a href="<?php echo base_url(); ?>">Back to esport-padiciti.com</a></li>
		</ul>
	</div><!-- end menu-app -->
</div><!-- end sidebar-app -->