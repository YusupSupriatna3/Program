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
		<img src="<?php echo base_url()?>assets/img/icon/icon-settings-overview.svg" class="icon-app icon-invert mr-2">
		<span>General Setting</span>
	</div>
</nav>
<div class="main-content">
	<div class="bg-white box-shadow p-5">
		<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="general-tab" data-toggle="pill" href="#general" role="tab" aria-controls="general" aria-selected="true">General</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="pills-details-tab" data-toggle="pill" href="#pills-details" role="tab" aria-controls="pills-details" aria-selected="false">Details</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
			</li>
		</ul>
		<?php foreach ($toornament['data'] as $key): ?>
		<form action="<?php echo base_url(); ?>setting/general" method="post" enctype="multipart/form-data">
			<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
					<div class="row">
						<div class="col-md-6 col-12">
							<div class="form-group mb-3">
								<label class="m-0"><small>Name</small></label>
								<input type="text" class="form-control" name="GameName" id="name" value="<?php echo $key['name']; ?>">
							</div>
							<div class="form-group mb-3">
								<label class="m-0"><small>Complete Name</small></label>
								<input type="text" class="form-control" name="completeGameName" id="complete_name" value="<?php echo $key['full_name']; ?>">
							</div>
							<div class="form-group mb-3">
								<div><label class="mb-1"><small>Dicipline</small></label></div>
								<select class="selectpicker w-100" data-live-search="true" name="discipline">
									<option value="<?php echo $key['id']; ?>"><?php echo $key['discipline']; ?></option>
								</select>
								<input type="hidden" name="disciplinee" value="<?php echo $key['discipline']; ?>">
								<input type="hidden" name="toornamentId" value="<?php echo $this->uri->segment(3); ?>">
							</div>
							<div class="form-group mb-3" id="platform">
								<div><label class="mb-1"><small>Platforms</small></label></div>
								<select class="selectpicker w-100" data-live-search="true" multiple data-selected-text-format="count > 4" name="platForms[]" id="platforms">
									<option selected data-content="<span class='badge-app-select'>PC</span>" value="PC" id="platform">PC</option>
									<option data-content="<span class='badge-app-select'>Playstation 4</span>" value="Playstation 4" id="platform">Playstation 4</option>
									<option data-content="<span class='badge-app-select'>XBOX One</span>" value="XBOX One" id="platform">XBOX One</option>
									<option data-content="<span class='badge-app-select'>Switch</span>" value="Switch" id="platform">Switch</option>
									<option data-content="<span class='badge-app-select'>Playstation 3</span>" value="Playstation 3" id="platform">Playstation 3</option>
									<option data-content="<span class='badge-app-select'>XBOX 360</span>" value="XBOX 360" id="platform">XBOX 360</option>
								</select>
							</div>
							<div class="form-group mb-3">
								<label class="m-0"><small>Organizer</small></label>
								<input type="text" class="form-control" name="organizerName" id="organizer">
							</div>
							<div class="form-group mb-3">
								<label class="m-0"><small>Website</small></label>
								<input type="link" class="form-control" name="website" id="website" placeholder="http://www.yourwebsite.com">
							</div>
							<div class="form-group mb-3">
								<label class="m-0"><small>Size</small></label>
								<input type="Number" class="form-control" name="size" id="size" value="<?php echo $key['size']; ?>">
							</div>
							<div class="form-group mb-3">
								<div class="form-group">
									<label class="mb-0"><small>Logo</small></label>
									<input type="file" accept="image/x-png,image/gif,image/jpeg" name="userfile" class="form-control-file btn btn-primary">
								</div>
							</div>
						</div>
						<div class="col-md-6 col-12">
							<div class="form-group mb-4">
								<div><label class="mb-1"><small>Played on the Internet</small></label></div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="onlineGame" id="yes" value="yes">
									<label class="form-check-label" for="yes">Yes</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="onlineGame" id="no" value="no">
									<label class="form-check-label" for="no">No</label>
								</div>
							</div>
							<div class="form-group mb-3">
								<label class="m-0"><small>Location</small></label>
								<input type="text" class="form-control" name="location" id="location">
							</div>
							<div class="form-group mb-3">
								<div><label class="mb-1"><small>Country</small></label></div>
								<select class="selectpicker w-100" data-live-search="true" title="Select Country" name="country">
									<option value="Indonesia">Indonesia</option>
								</select>
							</div>
							<div class="input-daterange" id="datepicker">
								<div class="form-group mb-3">
									<label class="mb-0"><small>Start Date</small></label>
									<div class="input-group">
										<input type="text" class="form-control text-left" name="startDate" autocomplete="off" placeholder="DD/MM/YYYY" />
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="material-icons">date_range</i></span>
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label class="mb-0"><small>End Date</small></label>
									<div class="input-group">
										<input type="text" class="form-control text-left" name="endDate" autocomplete="off" placeholder="DD/MM/YYYY" />
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="material-icons">date_range</i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group mb-3">
								<div><label class="mb-1"><small>Bracket</small></label></div>
								<select class="selectpicker w-100" data-live-search="true" title="Select Bracket" name="bracket">
									<option value="single_elimination">Single Elimination</option>
								</select>
							</div>
							<div class="form-group mb-3">
								<div><label class="mb-1"><small>Timezone</small></label></div>
								<select class="selectpicker w-100" data-live-search="true" name="timeZone">
									<option value="Jakarta">(UTC+07:00) - Jakarta - Indonesia</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-details" role="tabpanel" aria-labelledby="pills-details-tab">
					<div class="row">
						<div class="col-md-6 col-12">
							<div class="form-group mb-3">
								<div><label class="mb-1"><small>Description</small></label></div>
								<textarea class="form-control" rows="10" name="description"></textarea>
							</div>
							<div class="form-group mb-3">
								<div><label class="mb-1"><small>Prize</small></label></div>
								<textarea class="form-control" rows="10" name="prize"></textarea>
							</div>
						</div>
						<div class="col-md-6 col-12">
							<div class="form-group mb-3">
								<div><label class="mb-1"><small>Rules</small></label></div>
								<textarea class="form-control" rows="22" name="rules"></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
					<div class="col-md-6 col-12 p-0">
						<div class="form-group mb-3">
							<label class="m-0"><small>Email</small></label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="material-icons">email</i></span>
								</div>
								<input type="email" class="form-control" name="contactEmail" id="email">
							</div>
						</div>
						<div class="form-group mb-3">
							<label class="m-0"><small>Discord Invite Link</small></label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i class="material-icons">link</i></span>
								</div>
								<input type="link" class="form-control" name="discordLink" id="discord">
							</div>
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-success d-flex mt-5"><i class="material-icons mr-2">update</i> Update</button>
			</div>
		</form>
		<?php endforeach; ?>
	</div>
</div>
</div><!-- end content-app -->
