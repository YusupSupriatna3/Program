<div class="content-app">
<nav class="nav-app-mobile d-flex p-1 d-none d-sm-block d-md-none">
	<div class="btnMenu">
		<i class="material-icons" style="line-height: unset;">menu</i>
	</div>
	<div class="logo m-auto" style="width: 100px;">
		<a href="index.html"><img src="../../assets/img/logo.png" class="w-100 icon-invert"></a>
	</div>
</nav>
<nav class="nav-app">
	<div class="title-app mr-auto">
		<img src="../../assets/img/icon/icon-setting.svg" class="icon-app icon-invert mr-2">
		<span>Delete Account</span>
	</div>
</nav>
<div class="main-content">
	<div class="bg-white box-shadow p-5">
		<form>
			<div class="row">
				<div class="col-12">
					<h3 class="mb-4"><i class="material-icons">warning</i> Delete This Account</h3>
					<div class="form-group mb-3">
						<label class="mb-0"><small>Password</small></label>
						<div class="input-group col-lg-6 col-md-12 col-12 p-0">
							<input class="form-control form-text input-pwd" type="password" id="password" name="password" placeholder="Password">
							<div class="input-group-prepend">
								 <span class="input-group-text btn-pwd font-14">
								 	<span>Show</span>
								</span>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-12 p-0">
						<div class="alert alert-danger" role="alert">
							<small >Are you sure you want to permanently delete your account? This action is irreversible!</small>
						</div>
					</div>
				</div>

				<div class="col-12">
					<button type="submit" class="btn btn-danger d-flex mt-5">
						<i class="material-icons mr-1">delete</i> Delete
					</button>
				</div>
			</div>
		</form>
	</div>
</div>
</div><!-- end content-app -->
