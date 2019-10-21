<div class="content-app">
	<nav class="nav-app-mobile d-flex p-1 d-none d-sm-block d-md-none">
		<div class="btnMenu">
			<i class="material-icons" style="line-height: unset;">menu</i>
		</div>
		<div class="logo m-auto" style="width: 100px;">
			<a href="<?php echo base_url()?>organizer"><img src="<?php echo base_url()?>assets/img/logo.png" class="w-100 icon-invert"></a>
		</div>
	</nav>
	<nav class="nav-app">
		<div class="title-app mr-auto">
			<img src="<?php echo base_url()?>assets/img/icon/icon-structure.svg" class="icon-app icon-invert mr-2">
			<span>Structure</span>
		</div>
	</nav>
	<div class="main-content">
		<div class="row">
			<div class="col-md-6 col-lg-4 col-12 mb-3">
				<a href="<?php echo base_url()?>structure/add_structure/<?php echo $this->uri->segment(3); ?>">
					<div class="content-card create">
						<div class="text-center">
							<div><i class="material-icons">add</i></div>
							<div>Create New Stage</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-6 col-lg-4 col-12 mb-3">
				<a href="<?php echo base_url()?>organizer/overview">
					<div class="content-card">
						<div class="card-cover-structure">
							<img src="<?php echo base_url()?>assets/img/icon/duel-se.svg" style="width: 200px;">
						</div>
						<div class="structure-name px-3 pt-2">
							<div><span>1. PlayOffs</span></div>
							<div><small>Single Ellemination Duel</small></div>
						</div>
						<div class="px-3 d-flex">
							<a href="<?php echo base_url()?>structure/single_elemination/<?php echo $this->uri->segment(3); ?>" class="btn btn-primary btn-sm mr-2">Configure</a>
							<div class="dropdown structure">
								<button class="btn btn-primary btn-sm v-center d-flex dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="material-icons">more_horiz</i>
								</button>
								  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								  	<a class="dropdown-item" href="<?php echo base_url()?>structure/single_elemination/<?php echo $this->uri->segment(3); ?>">Modify Bracket</a>
								  	<a class="dropdown-item" href="<?php echo base_url()?>structure/single_elemination/<?php echo $this->uri->segment(3); ?>">Result</a>
								  	<!-- <a class="dropdown-item" href="<?php //echo base_url()?>structure/placement_overview/<?php //echo $this->uri->segment(3); ?>">Placement</a> -->
								  </div>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div><!-- end content-app -->