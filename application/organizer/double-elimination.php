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
		<img src="<?php echo base_url()?>assets/img/icon/icon-structure.svg" class="icon-app icon-invert mr-2">
		<span>Configure Stage Double Elimination (Duel)</span>
	</div>
</nav>
<div class="main-content">
	<div class="bg-white p-5">
		<form>
			<div class="row m-0 mb-3">
				<div class="col-12">
					<h3>General</h3>
				</div>
				<div class="form-group col-md-6 col-12">
					<label class="mb-0"><small>Number</small></label>
					<input type="number" class="form-control" name="number" id="number" placeholder="Number">
				</div>
				<div class="form-group col-md-6 col-12">
					<label class="mb-0"><small>Size</small></label>
					<input type="number" class="form-control" name="size" id="size" placeholder="Size">
				</div>
				<div class="form-group col-md-6 col-12">
					<label class="mb-0"><small>Name</small></label>
					<input type="text" class="form-control" name="duelName" id="duelName" placeholder="Name">
				</div>
				<div class="form-group col-md-6 col-12">
					<div><label class="mb-1"><small>Enable Grand Final</small></label></div>
					<select class="selectpicker w-100 p-0" data-live-search="true">
						<option>None</option>
						<option selected>Simple</option>
						<option>Double</option>
					</select>
				</div>
				<div class="form-group col-md-6 col-12">
				</div>
				<div class="form-group col-md-6 col-12">
					<div class="form-group mb-3">
						<div><label class="mb-1"><small>3rd/4th decider match?</small></label></div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="decider" id="yes" value="yes">
							<label class="form-check-label" for="yes">Yes</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="decider" id="no" value="no">
							<label class="form-check-label" for="no">No</label>
						</div>
					</div>
				</div>
			</div>

			<div class="row m-0 mb-3">
				<div class="col-12">
					<h3>Advenced</h3>
				</div>
				<div class="form-group col-md-6 col-12">
					<label class="mb-0"><small>Threshold</small></label>
					<input type="number" class="form-control" name="threshold" id="threshold" placeholder="Threshold" value="0">
				</div>
			</div>

			<div class="row m-0 mb-3">
				<div class="col-12">
					<h3>Match Setting</h3>
				</div>
				<div class="form-group col-md-6 col-12">
					<div><label class="mb-1"><small>Format</small></label></div>
					<select class="selectpicker w-100 p-0" data-live-search="true">
						<option>inherited Format</option>
						<option>No Games</option>
						<option>Single Game</option>
						<option>Home and Away</option>
						<option>Best-of</option>
						<option>Fixed games</option>
					</select>
				</div>
			</div>
			<div class="col-12">
				<button type="submit" class="btn btn-primary d-flex mt-5">
					<i class="material-icons mr-1">add</i> Create
				</button>
			</div>
		</form>
	</div>
</div>
</div><!-- end content-app -->