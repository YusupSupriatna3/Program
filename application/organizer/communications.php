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
			<img src="<?php echo base_url()?>assets/img/icon/icon-account.svg" class="icon-app icon-invert mr-2">
			<span>Communications</span>
		</div>
	</nav>
	<div class="main-content">
		<div class="bg-white box-shadow p-5">
			<form>
				<div class="row">
					<h3 class="mb-4 col-12">Manage Your Communications Email</h3>
					<div class="col-md-6 col-12">
						<div class="form-group mb-3">
							<div><label class="mb-0"><small>Tournament Newsletter</small></label></div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="newsletter" id="yes" value="yes">
								<label class="form-check-label" for="yes">Yes</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="newsletter" id="no" value="no">
								<label class="form-check-label" for="no">No</label>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-12">
						<div class="form-group mb-3">
							<div><label class="mb-0"><small>Tournament Bussines Associates</small></label></div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="associates" id="yes" value="yes">
								<label class="form-check-label" for="yes">Yes</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="associates" id="no" value="no">
								<label class="form-check-label" for="no">No</label>
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