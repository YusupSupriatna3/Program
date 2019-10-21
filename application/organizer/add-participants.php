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
		<img src="<?php echo base_url()?>assets/img/icon/icon-participants.svg" class="icon-app icon-invert mr-2">
		<span>Add New Participants</span>
	</div>
</nav>
<div class="main-content">
	<div class="bg-white p-5">
		<form action="<?php echo base_url(); ?>participant/participant_add_proses/<?php echo $this->uri->segment(3); ?>" method="post" enctype="multipart/form-data">
			<div class="row m-0">
				<div class="form-group col-md-6 col-12">
					<label class="mb-0"><small>Player Name</small></label>
					<input type="text" class="form-control" name="playerName" placeholder="Player Name" required>
				</div>
				<div class="form-group col-md-6 col-12">
					<label class="mb-0"><small>Player Email</small></label>
					<div class="input-group">
						<input type="text" class="form-control" name="playerEmail" placeholder="Player Email" required>
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><i class="material-icons">mail</i></span>
						</div>
					</div>
				</div>
				<div class="form-group col-md-6 col-12">
					<label class="mb-0"><small>Phone Number</small></label>
					<input type="text" class="form-control" name="phoneNumber" placeholder="Phone Number">
				</div>
				<div class="form-group col-12">
					<div class="form-group">
						<label class="mb-0"><small>Logo Square</small></label>
						<input type="file" name="userfile" class="form-control-file btn btn-primary">
					</div>
				</div>

				 
			</div>
			<div class="col-12">
				<button type="submit" class="btn btn-primary d-flex mt-5">
					<i class="material-icons mr-1" >add</i> Add
				</button>
			</div>
		</form>
	</div>
</div>
</div><!-- end content-app -->
