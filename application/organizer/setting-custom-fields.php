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
			<span>Custom Field Setting</span>
		</div>
	</nav>
	<div class="main-content">
		<div class="p-5">
			<div class="row">
				<div class="col-md-4 col-12 mb-3">
					<a href="<?php echo base_url()?>custom-fields">
						<div class="content-card create">
							<div class="text-center">
								<div><i class="material-icons">add</i></div>
								<div>Add New Custom Fields</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-12 mb-3">
					<div class="content-card">
						<div class="text-center">
							<img src="<?php echo base_url()?>assets/img/icon/icon-custom-fields.svg" style="width: 50px; margin: 3rem 0">
						</div>
						<div class="structure-name px-3 pt-2 mb-5">
							<div><span>Checkbox</span></div>
							<div>
								<span class="badge-app">Required</span>
								<span class="badge-app">Public</span>
							</div>
						</div>
						<div class="px-3 d-flex">
							<a href="#" class="btn btn-primary btn-sm mr-2 d-flex v-center">
								<i class="material-icons mr-1" style="font-size: 16px;">edit</i>Edit
							</a>
							<button class="btn btn-primary btn-sm mr-2 d-flex v-center">
								<i class="material-icons mr-1" style="font-size:  16px;">delete</i> Delete
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- end content-app -->