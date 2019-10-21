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
		<div class="col-md-6 col-12 mb-3">
			<a href="<?php echo base_url()?>structure/duel/<?php echo $this->uri->segment(3); ?>">
				<div class="content-card create">
					<div class="text-center">
						<div><img src="<?php echo base_url()?>assets/img/icon/icon-duel.svg" class="icon-app mb-2" style="width: 82px !important;"></div>
						<div class="font-bold font-22">Duel</div>
						<div class="p-4"><small>Matches involving two participants (either two players or two teams) require a structure using duel-based stages such as single or double elimination, gauntlet, round-robin or swiss system.</small></div>
					</div>
				</div>
			</a>
		</div>
		<!-- <div class="col-md-6 col-12 mb-3">
			<a href="<?php echo base_url()?>structure/ffa">
				<div class="content-card create">
					<div class="text-center">
						<div><img src="<?php echo base_url()?>assets/img/icon/icon-ffa.svg" class="icon-app mb-2" style="width: 82px !important;"></div>
						<div class="font-bold font-22">FFA</div>
						<div class="p-4"><small>Matches involving more than two participants, usually called Free-For-All (FFA) matches require a structure using stages specifically designed for FFA.</small></div>
					</div>
				</div>
			</a>
		</div> -->
	</div>
</div>
</div><!-- end content-app -->