<div class="content-app">
	<nav class="nav-app-mobile d-flex p-1 d-none d-sm-block d-md-none">
		<div class="<?php echo base_url()?>organizer"><img src="<?php echo base_url()?>assets/img/logo.png" class="w-100 icon-invert"></a>
		</div>
	</nav>
	<nav class="nav-app">
		<div class="title-app mr-auto">
			<img src="<?php echo base_url()?>assets/img/icon/icon-setting.svg" class="icon-app icon-invert mr-2">
			<span>Email</span>
		</div>
	</nav>
	<div class="main-content">
		<div class="bg-white box-shadow p-5">
			<form>
				<div class="row">
					<div class="col-12">
						<div class="mb-3">
							<label class="mb-0"><small>Current Email</small></label>
							<div class="d-flex mb-2">
								<span class="font-bold mr-2">johndoe@gmail.com</span> 
								<small class="d-flex v-center badge-app">
									<i class="material-icons mr-1" style="font-size: 16px;">check</i> verified
								</small>
							</div>
							<div class="col-lg-6 col-md-12 col-12 p-0">
								<small>To be able to access the Organizer and Developer features of the platform, you must have a validated email.</small>
							</div>
						</div>
						<div class="form-group mb-3">
							<label class="mb-0"><small>New Email</small></label>
							<input type="email" class="form-control col-lg-6 col-md-12 col-12" name="email" id="email" placeholder="New Email" value="">
						</div>
						<div class="form-group mb-3">
							<label class="mb-0"><small>Password</small></label>
							<div class="input-group col-lg-6 col-md-12 col-12 p-0">
								<input class="form-control form-text input-pwd" type="password" id="password" name="password" placeholder="password">
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