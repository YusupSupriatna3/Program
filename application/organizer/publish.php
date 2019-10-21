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
		<img src="<?php echo base_url()?>assets/img/icon/icon-status.svg" class="icon-app mr-2">
		<span>Publish the Tournament</span>
	</div>
</nav>
<div class="main-content">
	<div class="bg-white p-5">
		<form>
			<div class="input-daterange input-group" id="datepicker">
				<div class="form-group col-md-6 col-12">
					<label class="mb-0"><small>Start Date</small></label>
					<div class="input-group">
						<input type="text" class="form-control" name="start" autocomplete="off" placeholder="Start Date" />
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><i class="material-icons">date_range</i></span>
						</div>
					</div>
				</div>
				<div class="form-group col-md-6 col-12">
					<label class="mb-0"><small>End Date</small></label>
					<div class="input-group">
						<input type="text" class="form-control" name="end" autocomplete="off" placeholder="End Date" />
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><i class="material-icons">date_range</i></span>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group mt-4 col-12">
				<div><label class="mb-1"><small>Timezone</small></label></div>
				<select class="selectpicker w-100 p-0" data-live-search="true">
					<option>(UTC+07:00) - Jakarta - Indonesia</option>
				</select>
			</div>
			<div class="col-12">
				<button type="submit" class="btn btn-primary d-flex mt-5">
					<i class="material-icons mr-1">publish</i> Publish
				</button>
			</div>
		</form>
	</div>
</div>
</div><!-- end content-app -->