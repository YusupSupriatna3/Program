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
			<span>Select A Match Type</span>
		</div>
	</nav>
	<div class="main-content">
		<div class="row">
			<div class="col-md-6 col-lg-4 col-12 mb-3">
				<a href="<?php echo base_url()?>structure/single_elemination/<?php echo $this->uri->segment(3); ?>">
					<div class="content-card create p-4">
						<div class="text-center">
							<div class="card-cover-duel mb-2">
								<img src="<?php echo base_url()?>assets/img/icon/duel-se.svg" class="card-image-structure">
							</div>
							<div class="font-bold font-20">Single Elimination (Duel)</div>
							<div><small>Bracket in which participants are eliminated after one loss.</small></div>
						</div>
					</div>
				</a>
			</div>
			<!-- <div class="col-md-6 col-lg-4 col-12 mb-3">
				<a href="<?php echo base_url()?>structure/double-elimination">
					<div class="content-card create p-4">
						<div class="text-center">
							<div class="card-cover-duel mb-2">
								<img src="<?php echo base_url()?>assets/img/icon/duel-de.svg" class="card-image-structure">
							</div>
							<div class="font-bold font-20">Double Elimination (Duel)</div>
							<div><small>Bracket in which participants must lose twice to get eliminated.</small></div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-6 col-lg-4 col-12 mb-3">
				<a href="<?php echo base_url()?>structure/gauntlet">
					<div class="content-card create p-4">
						<div class="text-center">
							<div class="card-cover-duel mb-2">
								<img src="<?php echo base_url()?>assets/img/icon/duel-g.svg" class="card-image-structure">
							</div>
							<div class="font-bold font-20">Gauntlet</div>
							<div><small>Bracket in which participants of lower seed play progressively against opponents of higher seed.</small></div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-6 col-lg-4 col-12 mb-3">
				<a href="<?php echo base_url()?>structure/bracket-group">
					<div class="content-card create p-4">
						<div class="text-center">
							<div class="card-cover-duel mb-2">
								<img src="<?php echo base_url()?>assets/img/icon/duel-bg.svg" class="card-image-structure">
							</div>
							<div class="font-bold font-20">Bracket Groups (Duel)</div>
							<div><small>Groups in which participants play in small single or double elimination brackets.</small></div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-6 col-lg-4 col-12 mb-3">
				<a href="<?php echo base_url()?>structure/round-robin">
					<div class="content-card create p-4">
						<div class="text-center">
							<div class="card-cover-duel mb-2">
								<img src="<?php echo base_url()?>assets/img/icon/duel-rrg.svg" class="card-image-structure">
							</div>
							<div class="font-bold font-20">Round Robin Groups</div>
							<div><small>Small groups in which participants play against every other player from their group.</small></div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-6 col-lg-4 col-12 mb-3">
				<a href="<?php echo base_url()?>structure/league-system">
					<div class="content-card create p-4">
						<div class="text-center">
							<div class="card-cover-duel mb-2">
								<img src="<?php echo base_url()?>assets/img/icon/duel-ls.svg" class="card-image-structure">
							</div>
							<div class="font-bold font-20">League System</div>
							<div><small>Large divisions in which participants play against every other participant from their division.</small></div>
						</div>
					</div>
				</a>
			</div> 
			<div class="col-md-6 col-lg-4 col-12 mb-3">
				<a href="<?php echo base_url()?>structure/swiss-system">
					<div class="content-card create p-4">
						<div class="text-center">
							<div class="card-cover-duel mb-2">
								<img src="<?php echo base_url()?>assets/img/icon/duel-swiss.svg" class="card-image-structure">
							</div>
							<div class="font-bold font-20">Swiss System</div>
							<div><small>Stage in which participants will play against opponents closest to their skill level.</small></div>
						</div>
					</div>
				</a>
			</div>-->
		</div>
	</div>
</div><!-- end content-app -->