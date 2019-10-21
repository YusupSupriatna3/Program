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
		<span>Registration Setting</span>
	</div>
</nav>
<div class="main-content">
	<div class="bg-white box-shadow p-5">
		<form>
			<div class="row">
				<div class="col-md-6 col-12">
					<div class="form-group mb-4">
						<h3>Activation</h3>
						<div><label class="mb-1"><small>Enable Registration?</small></label></div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="registration" id="yes" value="yes">
							<label class="form-check-label" for="yes">Yes</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="registration" id="no" value="no">
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
					<div class="form-group mb-4">
						<h3>Option</h3>
						<div><label class="mb-1"><small>Accept Registration Automatically?</small></label></div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="accept" id="yes" value="yes">
							<label class="form-check-label" for="yes">Yes</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="accept" id="no" value="no">
							<label class="form-check-label" for="no">No</label>
						</div>
					</div>
					<div class="form-group mb-3">
						<div><label class="mb-1"><small>Enable Organizer Notification Email?</small></label></div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="notification" id="yes" value="yes">
							<label class="form-check-label" for="yes">Yes</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="notification" id="no" value="no">
							<label class="form-check-label" for="no">No</label>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-12">
					<div class="form-group mb-3">
						<label class="mb-0"><small>Form Message</small></label>
						<textarea class="form-control" rows="3"></textarea>
					</div>
					<div class="form-group mb-3">
						<label class="mb-0"><small>Validation Message</small></label>
						<textarea class="form-control" rows="3"></textarea>
					</div>
					<div class="form-group mb-3">
						<label class="mb-0"><small>Refusal Message</small></label>
						<textarea class="form-control" rows="3"></textarea>
					</div>
					<div class="row">
						<div class="col-6">
							<div class="form-group mb-3">
								<div><label class="mb-1"><small>Add Ypur Own Legal Regulations?</small></label></div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="regulations" id="yes" value="yes">
									<label class="form-check-label" for="yes">Yes</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="regulations" id="no" value="no">
									<label class="form-check-label" for="no">No</label>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group mb-3">
								<label class="m-0"><small>Regulation URL</small></label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="material-icons">link</i></span>
									</div>
									<input type="link" class="form-control" name="discord" id="discord">
								</div>
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