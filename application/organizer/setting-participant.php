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
		<span>Participant Setting</span>
	</div>
</nav>
<div class="main-content">
	<div class="bg-white box-shadow p-5">
		<form>
			<div class="row">
				<div class="col-md-6 col-12">
					<div class="form-group mb-4">
						<div><label class="mb-1"><small>Enable Tournament Check-in?</small></label></div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="checkin" id="participant" value="participant">
							<label class="form-check-label" for="participant">Participant</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="checkin" id="organizer" value="organizer">
							<label class="form-check-label" for="organizer">Organizer</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="checkin" id="no" value="no">
							<label class="form-check-label" for="no">No</label>
						</div>
					</div>
					<div class="row">
						<div class="col-8">
							<div class="input-daterange" id="datepicker">
								<div class="form-group mb-3">
									<label class="mb-0"><small>Registration Opening</small></label>
									<div class="input-group">
										<input type="text" class="form-control text-left" name="start" autocomplete="off" placeholder="DD/MM/YYYY" />
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="material-icons">date_range</i></span>
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label class="mb-0"><small>Registration Closing</small></label>
									<div class="input-group">
										<input type="text" class="form-control text-left" name="end" autocomplete="off" placeholder="DD/MM/YYYY" />
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="material-icons">date_range</i></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="form-group mb-3">
								<label class="mb-0"><small></small></label>
								<input class="form-control" type="text" name="time" id="time" placeholder="HH:MM">
							</div>
							<div class="form-group mb-3">
								<label class="mb-0"><small></small></label>
								<input class="form-control" type="text" name="time" id="time" placeholder="HH:MM">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-12">
					<div class="disable">
						<div class="form-group mb-4">
							<div><label class="mb-1"><small>Type of Participant</small></label></div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="checkin" id="player" value="player" checked>
								<label class="form-check-label" for="player">Player</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="checkin" id="team" value="team">
								<label class="form-check-label" for="team">Team</label>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 mt-3">
					<button type="submit" class="btn btn-success d-flex">
						<i class="material-icons mr-2">update</i> Update
					</button>
				</div>
			</div>
		</form>
	</div>
</div>
</div><!-- end content-app -->