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
		<span>Configure Stage Bracket Groups (FFA)</span>
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
					<label class="mb-0"><small>Number of Groups</small></label>
					<input type="number" class="form-control" name="groupNumb" id="groupNumb" placeholder="Number of Groups">
				</div>
				<div class="form-group col-md-6 col-12">
				</div>
				<div class="form-group col-md-6 col-12">
					<label class="mb-0"><small>Participan per Match</small></label>
					<input type="number" class="form-control" name="participant" id="participant" placeholder="Participan per Match">
				</div>
				<div class="form-group col-md-6 col-12">
				</div>
				<div class="form-group col-md-6 col-12">
					<label class="mb-0"><small>Winner per Match</small></label>
					<input type="number" class="form-control" name="winner" id="winner" placeholder="Winner per Match">
				</div>
			</div>

			<div class="row m-0 mb-3">
				<div class="col-12">
					<h3>Advenced</h3>
				</div>
				<div class="form-group col-md-6 col-12">
					<div><label class="mb-1"><small>Group Composition</small></label></div>
					<select class="selectpicker bracket-group w-100 p-0" data-live-search="true">
						<option data-subtext="Seed numbers are distributed so as to fully fill group in order.">Adjacent</option>
						<option selected data-subtext="Seed numbers are distributed so as to balance the effort required by each seed number to win over the others. Note: this does not ensure a skill balance between groups.">Efort balanced</option>
						<option data-subtext="Seed numbers are distributed so as to favor the highest seed numbers by grouping them with diametrically opposed seed numbers. Note: this method is also referred as 'snake' because the distribution process looks like a snake.">Seed Optimized (Snake)</option>
						<option data-subtext="Seed numbers are distributed in the groups by avoiding grouping those that should normally meet in the bracket (ie 1v8 2v7 3v6 4v5). This preserves the classic bracket seeding and is optimal when directly followed by a single or double elimination bracket.">Bracket Optimized</option>
					</select>
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