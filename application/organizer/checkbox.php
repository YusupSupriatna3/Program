<div class="content-app">
	<nav class="nav-app-mobile d-flex p-1 d-none d-sm-block d-md-none">
		<div class="btnMenu">
			<i class="material-icons" style="line-height: unset;">menu</i>
		</div>
		<div class="logo m-auto" style="width: 100px;">
			<a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>assets/img/logo.png" class="w-100 icon-invert"></a>
		</div>
	</nav>
	<nav class="nav-app">
		<div class="title-app mr-auto">
			<img src="<?php echo base_url()?>assets/img/icon/icon-settings-overview.svg" class="icon-app icon-invert mr-2">
			<span>New Player Custom Field</span>
		</div>
	</nav>
	<div class="main-content">
		<div class="p-5 bg-white box-shadow">
			<form>
				<div class="row">
					<div class="col-md-6 col-12">
						<div class="form-group mb-3">
							<label class="m-0"><small>Label</small></label>
							<input type="text" class="form-control" name="label" id="label" value="Checkbox">
						</div>
						<div class="form-group mb-3">
							<label class="m-0"><small>Machine Name</small></label>
							<input type="text" class="form-control" name="machineName" id="label" value="checkbox">
						</div>
						<div><label class="m-0"><small>Defaul Value</small></label></div>
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="defaultVal">
							<label class="form-check-label" for="defaultVal">Label</label>
						</div>
					</div>
					<div class="col-md-6 col-12">
						<div class="form-group mb-5">
							<label class="m-0"><small>Order</small></label>
							<input type="number" class="form-control" name="order" id="order" value="2">
						</div>
						<div class="form-group">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="required" value=required">
								<label class="form-check-label" for="required">Required</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="public" value="public">
								<label class="form-check-label" for="public">Public</label>
							</div>
						</div>
					</div>
					<div class="col-12">
						<button type="submit" class="btn btn-success d-flex mt-5"><i class="material-icons mr-2">add</i> Add</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div><!-- end content-app -->