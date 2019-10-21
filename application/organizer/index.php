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
		<span class="mr-2 mt-1 btnGrid p-1 d-none d-sm-block d-md-none" href=""><i class="material-icons">view_module</i></span>
		<span class="mr-3 mt-1 btnList p-1 d-none d-sm-block d-md-none" href=""><i class="material-icons">view_list</i></span>
		<a class="btn btn-primary d-flex mr-2" href="<?php echo base_url()?>organizer/create"><i class="material-icons mr-2">add</i> Create</a>
		<a class="btn btn-success d-flex" href="<?php echo base_url()?>organizer/archive"><i class="material-icons mr-2">archive</i> Archives</a>
	</div>
</nav>
<div class="main-content">
	<div class="grid-view">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-12 mb-3">
				<a href="<?php echo base_url()?>organizer/create">
					<div class="content-card create">
						<div class="text-center">
							<div><i class="material-icons">add</i></div>
							<div>Create New Tournament</div>
						</div>
					</div>
				</a>
			</div>
			<?php foreach ($toornament['data'] as $key): ?>
			<div class="col-md-6 col-lg-4 col-12 mb-3">
				<a href="<?php echo base_url()?>organizer/settings/<?php echo $this->dataencryption->enc_dec('encrypt',$key['id']); ?>">

						<div class="content-card">
							<div class="card-cover">
								<img src="<?php echo $key['logo']['logo_original']?>" class="card-image">
							</div>
							<div class="game-name">
								<img src="<?php echo $key['logo']['logo_small']?>" class="game-icon">
								<span><?php echo $key['name']?></span>
							</div>
							<div class="tournament-name ellipsis" title="Fortnite Fantastic Night Battle">
								<span><?php echo $key['discipline']; ?></span>
							</div>
						</div>

				</a>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
	<div class="list-view d-none">
		<div class="list-card">
			<div class="list-card-header">
				<div class="row">
					<div class="col-6 card-title">List of tournaments</div>
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
								<div class="col-md-6 mb-4">
									<input type="text" class="form-control" placeholder="Name">
								</div>
								<div class="col-md-6 mb-4">
									<select class="selectpicker w-100" data-live-search="true">
										<option class="d-none">Page Size</option>
										<option>10</option>
										<option>50</option>
										<option>100</option>
									</select>
								</div>
								<div class="col-md-6">
									<select class="selectpicker w-100" data-live-search="true">
										<option class="d-none">Dicipline</option>
										<option>Game Name 1</option>
										<option>Game Name 2</option>
										<option>Game Name 3</option>
										<option>Game Name 4</option>
									</select>
								</div>
								<div class="col-md-6">
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

				<div class="row m-2 p-2 game-list">
					<div class="col-1 game-icon text-center">
						<img src="<?php echo base_url()?>assets/img/fortnite.png">
					</div>
					<div class="col-7 game-name">
						<a href="<?php echo base_url()?>organizer/overview">
							<div class="tournament-name"><span>Fortnite Fantastic Night Battle</span></div>
							<div><small>Fortnite (PC / Playstation 4</small></div>
						</a>
					</div>
					<div class="col-2 d-flex v-center">
						<span>100 player</span>
					</div>
					<div class="col-2 d-flex v-center">
						<a href="" class="d-flex"><i class="material-icons mr-1">settings_applications</i> Setting</a>
					</div>
				</div>
				<div class="row m-2 p-2 game-list">
					<div class="col-1 game-icon text-center">
						<img src="<?php echo base_url()?>assets/img/fortnite.png">
					</div>
					<div class="col-7 game-name">
						<a href="<?php echo base_url()?>organizer/overview">
							<div class="tournament-name"><span>Fortnite Fantastic Night Battle</span></div>
							<div><small>Fortnite (PC / Playstation 4</small></div>
						</a>
					</div>
					<div class="col-2 d-flex v-center">
						<span>100 player</span>
					</div>
					<div class="col-2 d-flex v-center">
						<a href="" class="d-flex"><i class="material-icons mr-1">settings_applications</i> Setting</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div><!-- end content-app -->
