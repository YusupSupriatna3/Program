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
		<img src="<?php echo base_url()?>assets/img/icon/icon-mytournament.svg" class="icon-app icon-invert mr-2">
		<span>My Tournaments</span>
	</div>
	<div class="nav-action-app d-flex v-center">
		<a class="btn btn-primary d-flex mr-2" href="<?php echo base_url()?>organizer/create"><i class="material-icons mr-2">add</i> Create</a>
		<a class="btn btn-success d-flex v-center" href="<?php echo base_url()?>organizer/index">
			<img src="<?php echo base_url()?>assets/img/icon/icon-mytournament.svg" class="icon-app icon-18 mr-2">
		 	<span>My Tournaments</span>
		 </a>
	</div>
</nav>
<div class="main-content">
	<div class="list-view">
		<div class="list-card">
			<div class="list-card-header">
				<div class="row">
					<div class="col-6 card-title">List of archived tournaments</div>
					<div class="col-6 text-right filter d-flex v-center flex-end">
						<a data-toggle="collapse" href="#cardFilter" class="d-flex flex-end v-center">
							<i class="material-icons">sort</i> Show Filters
						</a>
					</div>
				</div>
			</div>
			<div class="list-card-content">
				<div class="collapse" id="cardFilter">
					<div class="list-card-filter">
						<form>
							<div class="row">
								<div class="col-md-6 mb-3">
									<input type="text" class="form-control" placeholder="Name">
								</div>
								<div class="col-md-6 mb-3">
									<select class="selectpicker w-100" data-live-search="true">
										<option class="d-none">Page Size</option>
										<option>10</option>
										<option>50</option>
										<option>100</option>
									</select>
								</div>
								<div class="col-md-6 mb-3">
									<select class="selectpicker w-100" data-live-search="true">
										<option class="d-none">Dicipline</option>
										<option>Game Name 1</option>
										<option>Game Name 2</option>
										<option>Game Name 3</option>
										<option>Game Name 4</option>
									</select>
								</div>
								<div class="col-md-6 mb-3">
									<select class="selectpicker w-100" data-live-search="true">
										<option class="d-none">Sort</option>
										<option>Game 1</option>
										<option>Game 2</option>
										<option>Game 3</option>
									</select>
								</div>
							</div>
						</form>
					</div>
				</div>

				<div class="row game-list py-3">
					<div class="col-3 col-md-1 game-icon text-center d-none d-sm-none d-md-block">
						<img src="<?php echo base_url()?>assets/img/fortnite.png">
					</div>
					<div class="col-8 col-md-7 game-name">
						<a href="">
							<div class="tournament-name"><span>Fortnite Fantastic Night Battle</span></div>
							<div><small>Fortnite (PC / Playstation 4</small></div>
						</a>
					</div>
					<div class="col-6 col-md-2 d-none d-sm-none d-md-block">
						<span>100 player</span>
					</div>
					<div class="col-4 col-md-2">
						<a href="" class="d-flex"><i class="material-icons mr-1">settings_applications</i> Setting</a>
					</div>
				</div>
				<div class="row game-list py-3">
					<div class="col-3 col-md-1 game-icon text-center d-none d-sm-none d-md-block">
						<img src="<?php echo base_url()?>assets/img/fortnite.png">
					</div>
					<div class="col-8 col-md-7 game-name">
						<a href="">
							<div class="tournament-name"><span>Fortnite Fantastic Night Battle</span></div>
							<div><small>Fortnite (PC / Playstation 4</small></div>
						</a>
					</div>
					<div class="col-6 col-md-2 d-none d-sm-none d-md-block">
						<span>100 player</span>
					</div>
					<div class="col-4 col-md-2">
						<a href="" class="d-flex"><i class="material-icons mr-1">settings_applications</i> Setting</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div><!-- end content-app -->
