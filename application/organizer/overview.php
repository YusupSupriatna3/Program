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
		<img src="<?php echo base_url()?>assets/img/icon/icon-overview.svg" class="icon-app icon-invert mr-2">
		<span>Overview</span>
	</div>
	<div class="nav-action-app d-flex v-center">
		<a class="btn btn-primary d-flex" href="<?php echo base_url()?>organizer/archive"><i class="material-icons mr-2">pageview</i> Preview Page</a>
	</div>
</nav>
<div class="main-content">
	<div class="row">
		<div class="col-md-6 mb-4">
			<div class="card overview first">
				<div class="card-header bg-white">
					<div class="row">
						<div class="col-6 card-icon d-flex v-center">
							<img src="<?php echo base_url()?>assets/img/fortnite.png" class="mr-2">
							<div class="card-title w-100 m-0">
								<div class="ellipsis font-14" style="font-weight: 600; width: 75%;">
									Fortnite Fantastic Night Battle
								</div>
								<div><small>Frotnite</small></div>
							</div>
						</div>
						<div class="col-6 d-flex v-center flex-end">
							<div class="badge-app mx-2">draft</div>
							<div class="mx-2">
								<a href="">
									<i class="material-icons" style="line-height: unset;">settings</i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="row font-12">
						<div class="col-4">
							SETUP
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<div class="col-4">
							PENDING
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<div class="col-4">
							RUNNING
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
					<div class="row font-14 mt-4 d-flex v-center">
						<div class="col-12 col-md-12 col-lg-8 mb-3">
							You should now enable the registration or manually add participants. You could also create 	the tournament structure.
						</div>
						<div class="col-12 col-md-12 col-lg-8">
							<a href="<?php echo base_url()?>organizer/publish/<?php echo $this->uri->segment(3); ?>" class="btn btn-primary w-100 d-flex justify-content-center">
								<i class="material-icons mr-2">publish</i> <span>Publish</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 mb-4">
			<div class="card overview">
				<div class="card-header">
					<div>
						<img src="<?php echo base_url()?>assets/img/icon/icon-participants.svg" class="icon-app mr-2 icon-invert"> 
						<span>Participans</span>
					</div>
				</div>
				<div class="card-body">
					<div class="mb-3">You can manually create participants, especially if you do not use the registration. You may configure the check-in either way.</div>
					<div class="row justify-content-center v-center">
						<div class="col-lg-6 col-md-12 col-12">
							<a href="<?php echo base_url()?>participant/participant_add/<?php echo $this->uri->segment(3); ?>" class="btn btn-success d-flex justify-content-center mb-3">
								<i class="material-icons mr-2">add</i> Add Participant
							</a>
						</div>
						<div class="col-lg-6 col-md-12 col-12">
							<a href="<?php echo base_url()?>organizer/participant_setting/<?php echo $this->uri->segment(3); ?>" class="d-flex justify-content-center">
								<i class="material-icons mr-2">settings</i> Configure Check-in
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 mb-4">
			<div class="card overview">
				<div class="card-header">
					<div>
						<img src="<?php echo base_url()?>assets/img/icon/icon-structure.svg" class="icon-app mr-2 icon-invert"> 
						<span>Structure</span>
					</div>
				</div>
				<div class="card-body">
					<div class="mb-3">The tournament does not have any stage yet. You should create the first stage and may use our Structure Guide if you are not sure of which stage to create.</div>
					<div class="row justify-content-center v-center">
						<div class="col-12">
							<a href="<?php echo base_url()?>structure/add_structure/<?php echo $this->uri->segment(3); ?>" class="btn btn-success d-flex mr-3 justify-content-center">
								<i class="material-icons mr-2">add</i> Create New Stage
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 mb-4">
			<div class="card overview">
				<div class="card-header">
					<div>
						<img src="<?php echo base_url()?>assets/img/icon/icon-registration.svg" class="icon-app mr-2"> 
						<span>Registration</span>
					</div>
				</div>
				<div class="card-body">
					<div class="mb-3">Enable the registration to have participants register to the tournament. They will enjoy all the participant features the platform offers: check-in, matches list, results report ...</div>
					<div class="row justify-content-center v-center">
						<div class="col-12">
							<a href="<?php echo base_url()?>organizer/registration_setting/<?php echo $this->uri->segment(3); ?>" class="btn btn-primary d-flex mr-3 justify-content-center">
								<i class="material-icons mr-2">settings</i> Enable Registration
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 mb-4">
			<div class="card overview">
				<div class="card-header bg-white text-center">
					<div>
						<img src="<?php echo base_url()?>assets/img/icon/icon-widget.svg" class="icon-app mr-2"> 
						<span>Widgets</span>
					</div>
				</div>
				<div class="card-body">
					<div class="mb-3 font-12">Enable the registration to have participants register to the tournament. They will enjoy all the participant features the platform offers: check-in, matches list, results report ...</div>
					<div class="row justify-content-center v-center">
						<a href="" class="btn d-flex mr-3 text-black">
							View All Widgets
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 mb-4">
			<div class="card overview">
				<div class="card-header bg-white text-center">
					<div>
						<img src="<?php echo base_url()?>assets/img/icon/icon-tv.svg" class="icon-app mr-2"> 
						<span>Tournament TV</span>
					</div>
				</div>
				<div class="card-body">
					<div class="mb-3 font-12">Enable the registration to have participants register to the tournament. They will enjoy all the participant features the platform offers: check-in, matches list, results report ...</div>
					<div class="row justify-content-center v-center">
						<a href="" class="btn d-flex mr-3 text-black">
							Configure TV
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 mb-4">
			<div class="card overview">
				<div class="card-header bg-white text-center">
					<div>
						<img src="<?php echo base_url()?>assets/img/icon/icon-mobile.svg" class="icon-app mr-2"> 
						<span>Mobile Friendly</span>
					</div>
				</div>
				<div class="card-body">
					<div class="mb-3 font-12">Enable the registration to have participants register to the tournament. They will enjoy all the participant features the platform offers: check-in, matches list, results report ...</div>
					<div class="row justify-content-center v-center">
						<a href="" class="btn d-flex mr-3 text-black">
							Learn More
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div><!-- end content-app -->