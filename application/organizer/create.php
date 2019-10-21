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
			<span>Create New Tournaments</span>
		</div>
	</nav>
	<div class="main-content px-5">
		<div class="bg-white p-5 box-shadow">
			<form action="<?php echo base_url(); ?>toornament/create-toornament" method="post">
				<div class="mb-5"><input type="text" name="name" class="form-control col-md-6 col-12" placeholder="Tournament Name"></div>
				<div class="mb-5"><input type="text" name="full_name" class="form-control col-md-6 col-12" placeholder="Tournament Full Name"></div>
				<div class="mb-4">
					<label class="m-0"><small>Dicipline</small></label>
					<div class="row" style="margin-right: -10px; margin-left: -10px;">
						<?php foreach ($discipline['data'] as $key): ?>
							<div class="col-md-2 col-6 popular-dicipline">
								<label class="radio-dicipline">
									<input type="radio" name="discipline" value="1">
									<span class="checkmark">
										<img class="image" data-gameId="<?php echo $key['id']; ?>" src="<?php echo $key['logo'] ?>" title="<?php echo $key['name']; ?>">
									</span>
								</label>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div>
					<!-- <input type="text" id="baka" value="" class="form-control col-md-6 col-12" placeholder="Select Discipline"> -->
					<select  id="discipline" name="discipline" class="form-control col-md-6">
						<option class="d-none">Select Dicipline</option>
						<?php foreach ($discipline['data'] as $key): ?>
							<option value="<?php echo $key['id']; ?>"><?php echo $key['name']; ?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<div>
					<label class="m-0"><small>Platform(s)</small></label>
				</div>
				<div class="row mb-5" id="platform">
					<div class="col-md-3 col-6 mb-2">
						<label class="platform-select">
							<input type="checkbox" name='platforms[]' value="PC" id="platform">
							<span class="checkmark">PC</span>
						</label>
					</div>
					<div class="col-md-3 col-6 mb-2">
						<label class="platform-select">
							<input type="checkbox" name='platforms[]' value="Playstation 4" id="platform">
							<span class="checkmark">Playstation 4</span>
						</label>
					</div>
					<div class="col-md-3 col-6 mb-2">
						<label class="platform-select">
							<input type="checkbox" name='platforms[]' value="Xbox One" id="platform">
							<span class="checkmark">Xbox One</span>
						</label>
					</div>
					<div class="col-md-3 col-6 mb-2">
						<label class="platform-select">
							<input type="checkbox" name='platforms[]' value="Switch" id="platform">
							<span class="checkmark">Switch</span>
						</label>
					</div>
					<div class="col-md-3 col-6 mb-2">
						<label class="platform-select">
							<input type="checkbox" name='platforms[]' value="Mobile" id="platform">
							<span class="checkmark">Mobile</span>
						</label>
					</div>
					<div class="col-md-3 col-6 mb-2">
						<label class="platform-select">
							<input type="checkbox" name='platforms[]' value="Playstation 3" id="platform">
							<span class="checkmark">Playstation 3</span>
						</label>
					</div>
					<div class="col-md-3 col-6 mb-2">
						<label class="platform-select">
							<input type="checkbox" name='platforms[]' value="Playstation 2" id="platform">
							<span class="checkmark">Playstation 2</span>
						</label>
					</div>
					<div class="col-md-3 col-6 mb-2">
						<div class="text-center mt-2 d-flex justify-content-center add-more" style="color: #ccc; cursor: pointer;">
							<i class="material-icons">add</i> Other
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div><label class="m-0"><small>Size</small></label></div>
						<input type="number" min="0" max="256" class="form-control" placeholder="Size" name="size">
					</div>
					<div class="col-md-3">
						<div><label class="mb-1"><small>Participans</small></label></div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="participant_type" id="inlineRadio1" value="player">
							<label class="form-check-label" for="inlineRadio1">Players</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="participant_type" id="inlineRadio2" value="time">
							<label class="form-check-label" for="inlineRadio2">Teams</label>
						</div>
					</div>
				</div>
				<div class="mt-4 mb-5">
					<div><label class="mb-1"><small>Timezone</small></label></div>
					<select class="selectpicker w-100 col-md-6 col-12 p-0" data-live-search="true" name="timezoneAmerica">
						<option value="Indonesia">(UTC+07:00) - Jakarta - Indonesia</option>
					</select>
				</div>
				<button type="submit" class="btn btn-success d-flex"><i class="material-icons">add</i> Create Tournament</button>
			</form>
		</div>
	</div>
</div><!-- end content-app -->
