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
			<li>
				<a href="<?php echo base_url()?>organizer/index/<?php echo $this->uri->segment(3); ?>" class="item-app">
					<img src="<?php echo base_url()?>assets/img/icon/icon-mytournament.svg" class="icon-app icon-18">
					<span>My Tournaments</span>
				</a>
			</li>
		</ul>
		<ul class="my-tournament">
			<li>
				<a href="#" class="item-app d-flex v-center">
					<img src="<?php echo base_url()?>assets/img/fortnite.png" class="icon-app">
					<span class="ellipsis w-100 d-block">
						Fortnite Fantastic Night Battle
					</span>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url()?>organizer/overview/<?php echo $this->uri->segment(3); ?>" class="item-app">
					<img src="<?php echo base_url()?>assets/img/icon/icon-overview.svg" class="icon-app icon-18">
					<span>Overview</span>
					<span class="badge-app ml-2">draft</span>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url()?>organizer/settings/<?php echo $this->uri->segment(3); ?>" class="item-app">
					<img src="<?php echo base_url()?>assets/img/icon/icon-settings-overview.svg" class="icon-app icon-18">
					<span>Settings</span>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url()?>structure/index/<?php echo $this->uri->segment(3); ?>" class="item-app">
					<img src="<?php echo base_url()?>assets/img/icon/icon-structure.svg" class="icon-app icon-18">
					<span>Structure</span>
				</a>
			</li>
			<li>
				<div class="item-app mb-0" data-toggle="collapse" href="#participantsCollapse" aria-expanded="false">
					<img src="<?php echo base_url()?>assets/img/icon/icon-participants.svg" class="icon-app icon-18">
					<span>Participants</span>
				</div>
				<div class="collapse" id="participantsCollapse">
					<div class="collapse-content mt-2">
						<ul>
							<li><a class="item-app" href="<?php echo base_url()?>participant/participant_list/<?php echo $this->uri->segment(3); ?>">List</a></li>
							<li><a class="item-app" href="<?php echo base_url()?>participant/participant_edit_all/<?php echo $this->uri->segment(3); ?>">Edit All</a></li>
						</ul>
					</div>
				</div>
			</li>
			<!-- <li>
				<div class="item-app mb-0" data-toggle="collapse" href="#placementCollapse" aria-expanded="false">
					<img src="<?php //echo base_url()?>assets/img/icon/icon-placement.svg" class="icon-app icon-18">
					<span>Placement</span>
				</div>
				<div class="collapse" id="placementCollapse">
					<div class="collapse-content mt-2">
						<ul>
							<li><a class="item-app" href="<?php //echo base_url()?>placement/index/<?php //echo $this->uri->segment(3); ?>">Overview</a></li>
						</ul>
					</div>
				</div>
			</li> -->
			<li>
				<div class="item-app mb-0" data-toggle="collapse" href="#matchesCollapse" aria-expanded="false">
					<img src="<?php echo base_url()?>assets/img/icon/icon-matches.svg" class="icon-app icon-18">
					<span>Matches</span>
				</div>
				<div class="collapse" id="matchesCollapse">
					<div class="collapse-content mt-2">
						<ul>
							<li><a class="item-app" href="<?php echo base_url()?>matches/index/<?php echo $this->uri->segment(3); ?>">Overview</a></li>
						</ul>
					</div>
				</div>
			</li>
			<li>
				<div class="item-app mb-0" data-toggle="collapse" href="#shareCollapse" aria-expanded="false">
					<img src="<?php echo base_url()?>assets/img/icon/icon-share.svg" class="icon-app icon-18">
					<span>Share</span>
				</div>
				<div class="collapse" id="shareCollapse">
					<div class="collapse-content mt-2">
						<ul>
							<li><a class="item-app" href="<?php echo base_url()?>share/overview/<?php echo $this->uri->segment(3); ?>">Overview</a></li>
							<li><a class="item-app" href="<?php echo base_url()?>share/widgets/<?php echo $this->uri->segment(3); ?>">Widgets</a></li>
							<li><a class="item-app" href="<?php echo base_url()?>share/tournament-tv/<?php echo $this->uri->segment(3); ?>">Tournament TV</a></li>
						</ul>
					</div>
				</div>
			</li>
		</ul>
		<ul class="second-menu-app">
			<li><a href="<?php echo base_url()?>help">Help Center</a></li>
			<li><a href="<?php echo base_url(); ?>">Back to esport-padiciti.com</a></li>
		</ul>
	</div><!-- end menu-app -->
</div><!-- end sidebar-app --> -->