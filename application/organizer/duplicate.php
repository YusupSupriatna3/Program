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
			<span>Duplicate</span>
		</div>
	</nav>
	<div class="main-content">
		<div class="bg-white border-radius p-5">
			<form>
				<div class="col-md-6 col-12">
					<div class="mb-3">This will allow you to copy your tournament and its information.</div>
					<div class="form-group mb-3">
						<label class="m-0"><small>Name</small></label>
						<input type="text" class="form-control" name="name" id="name" value="Toornament Name">
					</div>
					<div class="form-group mb-3">
						<label class="m-0"><small>Complete Name</small></label>
						<input type="text" class="form-control" name="complete_name" id="complete_name">
					</div>
					<div class="form-check mb-3">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
						<label class="form-check-label" for="defaultCheck1">
							General Settings (logo, country, description, rules, ...)
						</label>
					</div>
					<div class="form-check mb-3">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
						<label class="form-check-label" for="defaultCheck2">
							Discipline parameters (map, mod or characters)
						</label>
					</div>
					<div class="form-check mb-3">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
						<label class="form-check-label" for="defaultCheck2">
							Participant settings (check-in, team size, ...)
						</label>
					</div>
					<div class="form-check mb-3">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
						<label class="form-check-label" for="defaultCheck2">
							Participant custom fields
						</label>
					</div>
					<div class="form-check mb-3">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
						<label class="form-check-label" for="defaultCheck2">
							Registration settings (enabled, open/close date, messages)
						</label>
					</div>
					<div class="form-check mb-3">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
						<label class="form-check-label" for="defaultCheck2">
							Match settings (match report and match format)
						</label>
					</div>
					<div class="form-check mb-3">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
						<label class="form-check-label" for="defaultCheck2">
							All permissions
						</label>
					</div>
					<div class="form-check mb-3">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
						<label class="form-check-label" for="defaultCheck2">
							All streams
						</label>
					</div>
					<button type="submit" class="btn btn-success d-flex mt-5"><i class="material-icons mr-2">file_copy</i> Duplicate</button>
				</div>
			</form>
		</div>
	</div>
</div><!-- end content-app -->