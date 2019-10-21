<div class="content-app">
	<nav class="nav-app-mobile d-flex p-1 d-none d-sm-block d-md-none">
		<div class="btnMenu">
			<i class="material-icons" style="line-height: unset;">menu</i>
		</div>
		<div class="logo m-auto" style="width: 100px;">
			<a href="<?php echo base_url()?>organizer/index"><img src="<?php echo base_url()?>assets/img/logo.png" class="w-100 icon-invert"></a>
		</div>
	</nav>
	<nav class="nav-app">
		<div class="title-app mr-auto">
			<img src="<?php echo base_url()?>assets/img/icon/icon-account.svg" class="icon-app icon-invert mr-2">
			<span>Account Information</span>
		</div>
	</nav>
	<div class="main-content">
		<div class="bg-white box-shadow p-5">
			<form action="<?php echo base_url(); ?>organizer/update_account" method="post">
				<div class="row">
					<?php if ($account['response_code']=="00" && !$account['data']=="") {
						?>
						<div class="col-md-6 col-12">
							<h3 class="mb-4">General</h3>
							<div class="form-group mb-3">
								<label class="mb-0"><small>Nickname</small></label>
								<input type="text" class="form-control" name="nickname" id="nickname" placeholder="Nickname" value="<?php echo $account['data']['nickName']; ?>">
							</div>
							<div class="form-group mb-3">
								<div><label class="mb-1"><small>Country</small></label></div>
								<select class="selectpicker w-100 p-0" data-live-search="true" name="country" >
									<option selected="<?php echo $account['data']['countryName'] ?> " disabled><?php echo $account['data']['countryName']; ?> </option>
									<option value="Indonesia">Indonesia</option>
									<option value="Australia">Australia</option>
								</select>
							</div>
							<div class="form-group mb-3">
								<label class="mb-0"><small>First Name</small></label>
								<input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name" value="<?php echo $account['data']['firstName']; ?>">
							</div>
							<div class="form-group mb-3">
								<label class="mb-0"><small>Last Name</small></label>
								<input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name" value="<?php echo $account['data']['lastName']; ?>">
							</div>
							<div class="form-group mb-3">
								<div><label class="mb-1"><small>Timezone</small></label></div>
								<select class="selectpicker w-100 p-0" data-live-search="true" name="timeZone" selected="<?php echo $account['data']['timeZone']; ?>">
									<option selected="<?php echo $account['data']['timeZone'] ?> " disabled><?php echo $account['data']['timeZone']; ?> </option>
									<option value="(UTC+07:00) - Jakarta - Indonesia">(UTC+07:00) - Jakarta - Indonesia</option>
									<option value="(UTC+03:00) - Sidney - Australia">(UTC+03:00) - Sidney - Australia</option>
								</select>
							</div>
						</div>
						<div class="col-md-6 col-12">
							<h3 class="mb-4">Organizer</h3>
							<div class="form-group mb-3">
								<label class="mb-0"><small>Organization</small></label>
								<input type="text" class="form-control" name="organization" id="organization" placeholder="Organization" value="<?php echo $account['data']['organization']; ?>">
							</div>
							<div class="form-group mb-3">
								<label class="mb-0"><small>Position</small></label>
								<input type="text" class="form-control" name="position" id="position" placeholder="Position" value="<?php echo $account['data']['position']; ?>">
							</div>
						</div>
						<input type="hidden" class="form-control" name="username" id="nickname" placeholder="Nickname" value="<?php echo $account['data']['userName']; ?>">
						<input type="hidden" class="form-control" name="type" id="nickname" placeholder="Nickname" value="<?php echo $account['data']['type']; ?>">
						<input type="hidden" class="form-control" name="statusResult" id="nickname" placeholder="Nickname" value="<?php echo $account['data']['statusResult']; ?>">
						<input type="hidden" class="form-control" name="newsLetter" id="nickname" placeholder="Nickname" value="<?php echo $account['data']['newsLetter']; ?>">	
						<input type="hidden" class="form-control" name="ageVerification" id="nickname" placeholder="Nickname" value="<?php echo $account['data']['ageVerification']; ?>">	
						<input type="hidden" class="form-control" name="statusUser" id="nickname" placeholder="Nickname" value="<?php echo $account['data']['statusUser']; ?>">
						<input type="hidden" class="form-control" name="emailUser" id="nickname" placeholder="Nickname" value="<?php echo $account['data']['emailUser']; ?>">
						<input type="hidden" class="form-control" name="phoneNumber" id="nickname" placeholder="Nickname" value="<?php echo $account['data']['phoneNumber']; ?>">
						<input type="hidden" class="form-control" name="countryCode" id="nickname" placeholder="Nickname" value="<?php echo $account['data']['countryCode']; ?>">
						<div class="col-12">
							<button type="submit" class="btn btn-primary d-flex mt-5">
								<i class="material-icons mr-1">update</i> update
							</button>
						</div>

					<?php } else { ?>
						No Data
					<?php } ?>
				</div>
			</form>
		</div>
	</div>
</div><!-- end content-app -->
