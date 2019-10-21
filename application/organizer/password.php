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
		<img src="<?php echo base_url()?>assets/img/icon/icon-setting.svg" class="icon-app icon-invert mr-2">
		<span>Password</span>
	</div>
</nav>
<div class="main-content">
	<div class="bg-white box-shadow p-5">
		<form>
			<div class="row">
				<div class="col-12">
					<div class="form-group mb-3">
						<label class="mb-0"><small>Current Password</small></label>
						<div class="input-group col-md-6 col-12 p-0">
							<input class="form-control form-text input-pwd" type="password" id="currentPassword" name="currentPassword" placeholder="Current Password">
							<div class="input-group-prepend">
								 <span class="input-group-text btn-pwd font-14">
								 	<span>Show</span>
								</span>
							</div>
						</div>
					</div>
					<div class="form-group mb-3">
						<label class="mb-0"><small>New Password</small></label>
						<div class="input-group col-md-6 col-12 p-0">
							<input class="form-control form-text input-pwd" type="password" id="newPassword" name="newPassword"  placeholder="New Password">
							<div class="input-group-prepend">
								 <span class="input-group-text btn-pwd font-14">
								 	<span>Show</span>
								</span>
							</div>
						</div>
					</div>
					<div class="form-group mb-3">
						<label class="mb-0"><small>Retype New Password</small></label>
						<div class="input-group col-md-6 col-12 p-0">
							<input class="form-control form-text input-pwd" type="password" id="retypePassowrd" name="retypePassowrd" placeholder="Retype New Password">
							<div class="input-group-prepend">
								<span class="input-group-text btn-pwd font-14">
								 	Show
								</span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12">
					<button type="submit" class="btn btn-primary d-flex mt-5">
						<i class="material-icons mr-1">update</i> update
					</button>
				</div>
			</div>
		</form>
	</div>
</div>
</div><!-- end content-app -->