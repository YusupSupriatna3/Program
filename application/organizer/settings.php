<div class="content-app">
	<nav class="nav-app-mobile d-flex p-1 d-none d-sm-block d-md-none">
		<div class="btnMenu">
			<i class="material-icons" style="line-height: unset;">menu</i>
		</div>
		<div class="logo m-auto" style="width: 100px;">
			<a href="<?php echo base_url()?>organizer/index"><img src="<?php echo base_url()?>assets/img/logo.png" class="w-100 icon-invert"></a>
		</div>
	</nav>
	<nav class="nav-app">
		<div class="title-app mr-auto">
			<img src="<?php echo base_url()?>assets/img/icon/icon-settings-overview.svg" class="icon-app icon-invert mr-2">
			<span>Settings</span>
		</div>
		<div class="nav-action-app d-flex v-center">
			<a class="btn btn-primary d-flex" href="<?php echo base_url()?>organizer/archive"><i class="material-icons mr-2">pageview</i> Tournament Public Page</a>
		</div>
	</nav>
	<div class="main-content">
		<div class="row">
			<div class="col-md-6 col-lg-4 col-12 mb-4">
				<a href="<?php echo base_url()?>settings/general/<?php echo $this->uri->segment(3); ?>">
					<div class="content-card p-4">
						<div class="text-center">
							<div class="font-bold font-20 p-4">
								<img src="<?php echo base_url()?>assets/img/icon/icon-general.svg" class="icon-app mr-2">
								<span>General</span>
							</div>
							<div><small>Manage the highest level of information about your tournament, its description, size, logo and contact information for your participants to reach you.</small></div>
						</div>
					</div>
				</a>
			</div>
			<!-- <div class="col-md-6 col-lg-4 col-12 mb-4">
				<a href="<?php //echo base_url()?>settings/match">
					<div class="content-card p-4">
						<div class="text-center">
							<div class="font-bold font-20 p-4">
								<img src="<?php //echo base_url()?>assets/img/icon/icon-matches.svg" class="icon-app mr-2 icon-invert">
								<span>Match</span>
							</div>
							<div><small>anage the configuration of the match format to be used in your tournament, and whether you want the participants to be able to report their results or not.</small></div>
						</div>
					</div>
				</a>
			</div> -->
			<div class="col-md-6 col-lg-4 col-12 mb-4">
				<a href="<?php echo base_url()?>settings/registration">
					<div class="content-card p-4">
						<div class="text-center">
							<div class="font-bold font-20 p-4">
								<img src="<?php echo base_url()?>assets/img/icon/icon-registration.svg" class="icon-app mr-2">
								<span>Registration</span>
							</div>
							<div><small>Manage the registration, to have participants be able to register to your tournament during a set period, and configure automated messages to be sent to them.</small></div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-6 col-lg-4 col-12 mb-4">
				<a href="<?php echo base_url()?>settings/participant/<?php echo $this->uri->segment(3); ?>">
					<div class="content-card p-4">
						<div class="text-center">
							<div class="font-bold font-20 p-4">
								<img src="<?php echo base_url()?>assets/img/icon/icon-participants.svg" class="icon-app icon-invert mr-2">
								<span>Participant</span>
							</div>
							<div><small>Manage the participant settings like the minimum and maximum size of teams, and enable the check-in.</small></div>
						</div>
					</div>
				</a>
			</div>
			<!-- <div class="col-md-6 col-lg-4 col-12 mb-4">
				<a href="<?php //echo base_url()?>settings/custom-fields">
					<div class="content-card p-4">
						<div class="text-center">
							<div class="font-bold font-20 p-4">
								<img src="<?php //echo base_url()?>assets/img/icon/icon-custom-fields.svg" class="icon-app mr-2">
								<span>Custom Fields</span>
							</div>
							<div><small>Manage the participant settings like the minimum and maximum size of teams, and enable the check-in.</small></div>
						</div>
					</div>
				</a>
			</div> -->
			<div class="col-md-6 col-lg-4 col-12 mb-4">
				<a href="<?php echo base_url()?>settings/stream">
					<div class="content-card p-4">
						<div class="text-center">
							<div class="font-bold font-20 p-4">
								<img src="<?php echo base_url()?>assets/img/icon/icon-stream.svg" class="icon-app mr-2">
								<span>Streams</span>
							</div>
							<div><small>Manage the streams that will be used to broadcast your tournament and its matches. Streams created on the tournament level may then be applied to specific matches.</small></div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-6 col-lg-4 col-12 mb-4">
				<a href="<?php echo base_url()?>settings/permissions">
					<div class="content-card p-4">
						<div class="text-center">
							<div class="font-bold font-20 p-4">
								<img src="<?php echo base_url()?>assets/img/icon/icon-permissions.svg" class="icon-app mr-2">
								<span>Permissions</span>
							</div>
							<div><small>Manage the streams that will be used to broadcast your tournament and its matches. Streams created on the tournament level may then be applied to specific matches.</small></div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-6 col-lg-4 col-12 mb-4">
				<div class="content-card p-4">
					<div class="text-center">
						<div class="font-bold font-20 p-4">
							<img src="<?php echo base_url()?>assets/img/icon/icon-global-operations.svg" class="icon-app mr-2">
							<span>Global Operations</span>
						</div>
						<div class="row">
							<div class="col-6 mb-3">
								<a href="<?php echo base_url()?>organizer/publish">
									<div><i class="material-icons">publish</i></div>
									<div>Publish</div>
								</a>
							</div>
							<div class="col-6 mb-3">
								<a href="<?php echo base_url()?>organizer/duplicate">
									<div><i class="material-icons">file_copy</i></div>
									<div>Duplicate</div>
								</a>
							</div>
							<div class="col-6 mb-3">
								<a href="">
									<div><i class="material-icons">archive</i></div>
									<div>Archive</div>
								</a>
							</div>
							<div class="col-6 mb-3">
								<a href="">
									<div><i class="material-icons">delete</i></div>
									<div>Delete</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- end content-app -->