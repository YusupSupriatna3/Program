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
		<span>Match Setting</span>
	</div>
</nav>
<div class="main-content">
	<div class="bg-white box-shadow p-5">
		<form>
			<div class="form-group mb-4">
				<h3>Match Reporting</h3>
				<div><label class="mb-1"><small>Enable Participant Reporting?</small></label></div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="reporting" id="yes" value="yes">
					<label class="form-check-label" for="yes">Yes</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="reporting" id="no" value="no">
					<label class="form-check-label" for="no">No</label>
				</div>
			</div>
			<div class="form-group col-md-6 col-12 p-0 mb-4">
				<h3>Match Format</h3>
				<div><label class="mb-1"><small>Format</small></label></div>
				<select class="selectpicker w-100" data-live-search="true">
					<option>inherited Format</option>
					<option>No Games</option>
					<option>Single Game</option>
					<option>Home and Away</option>
					<option>Best-of</option>
					<option>Fixed games</option>
				</select>
			</div>
			<button type="submit" class="btn btn-success d-flex">
				<i class="material-icons mr-2">update</i> Update
			</button>
		</form>
	</div>
</div>
</div><!-- end content-app -->