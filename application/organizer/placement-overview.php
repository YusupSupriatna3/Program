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
		<img src="<?php echo base_url()?>assets/img/icon/icon-placement.svg" class="icon-app icon-invert mr-2">
		<span>Palcement</span>
	</div>
</nav>
<div class="main-content">
	<div class="row">
		<!-- <div class="col-md-6 col-lg-4 col-12 mb-4">
			<a href="<?php echo base_url()?>placement/detail">
				<div class="content-card create p-4">
					<div class="text-center">
						<div class="card-cover-duel mb-2">
							<img src="https://organizer.toornament.com/structures/icon_single_elimination.svg?1558532568" class="card-image-structure">
						</div>
						<div class="font-bold font-20">Simple Stage</div>
						<div><small>Groups in which participants play free-for-all matches in single-elimination brackets.</small></div>
					</div>
				</div>
			</a>
		</div> -->
		<div class="col-md-6 col-lg-4 col-12 mb-4">
			<a href="<?php echo base_url()?>placement/detail/<?php echo $this->uri->segment(3); ?>">
				<div class="content-card create p-4">
					<div class="text-center">
						<div class="card-cover-duel mb-2">
							<img src="https://organizer.toornament.com/structures/icon_single_elimination.svg?1558532568" class="card-image-structure">
						</div>
						<div class="font-bold font-20">Single Elimination (FFA)</div>
						<div><small>Bracket with matches where a set number of participants qualifies for the next round.</small></div>
					</div>
				</div>
			</a>
		</div>
		<!-- <div class="col-md-6 col-lg-4 col-12 mb-4">
			<a href="<?php echo base_url()?>placement/detail">
				<div class="content-card create p-4">
					<div class="text-center">
						<div class="card-cover-duel mb-2">
							<img src="https://organizer.toornament.com/structures/icon_single_elimination.svg?1558532568" class="card-image-structure">
						</div>
						<div class="font-bold font-20">Bracket Groups (FFA)</div>
						<div><small>Groups in which participants play free-for-all matches in single-elimination brackets.</small></div>
					</div>
				</div>
			</a>
		</div> -->
	</div>
</div>
</div><!-- end content-app -->