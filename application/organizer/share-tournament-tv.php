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
		<img src="<?php echo base_url()?>assets/img/icon/icon-tv.svg" class="icon-app mr-2">
		<span>Tournament TV Setting</span>
	</div>
</nav>
<div class="main-content">
	<div class="bg-white box-shadow p-5">
		<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="one-tab" data-toggle="pill" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">General</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="two-tab" data-toggle="pill" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Theme</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="three-tab" data-toggle="pill" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Logo</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="four-tab" data-toggle="pill" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">External Content</a>
			</li>
		</ul>
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="one-tab">
				<h3>Presentation</h3>
				<p>
					The Toornament TV is designed to provide an automated smart HD display of all your results live, enriched with external content like photos or #hashtagged tweets.
					The toornament TV is free and customizable, from colors to skins and rotating logos. It's pixel perfect for a full screen display on 1920x1080 resolution (HD TV resolution).
				</p>
				<img src="<?php echo base_url()?>assets/img/ttv-presentation.jpg" class="w-100">
			</div>
			<div class="tab-pane fade show" id="tab-2" role="tabpanel" aria-labelledby="two-tab">
				<form>
					<div class="row">
						<div class="col-md-6 col-12">
							<h3>Set Your Theme</h3>
							<div class="form-group mb-3">
								<div class="form-group">
									<label class="mb-0"><small>Back Background Image</small></label>
									<input type="file" accept="image/x-png,image/gif,image/jpeg" class="form-control-file btn btn-primary">
								</div>
							</div>
							<div class="form-group mb-3">
								<div class="form-group">
									<label class="mb-0"><small>Front Background Image</small></label>
									<input type="file" accept="image/x-png,image/gif,image/jpeg" class="form-control-file btn btn-primary">
								</div>
							</div>
							<div class="form-group mb-3">
								<label class="mb-0"><small>Separator Color</small></label>
								<div id="cp1" class="input-group colorpicker-component">
									<input id="cp1" type="text" class="form-control" value="#5367ce" />
									<div class="input-group-prepend">
										<span class="input-group-text input-group-addon"><i></i></span>
									</div>
								</div>
							</div>
							<div class="form-group mb-3">
								<label class="mb-0"><small>Title Color</small></label>
								<div id="cp2" class="input-group colorpicker-component">
									<input id="cp1" type="text" class="form-control" value="#5367ce" />
									<div class="input-group-prepend">
										<span class="input-group-text input-group-addon"><i></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-12">
							<h3>Default Theme</h3>
							<p>Without specific information, your theme will use the following layers:</p>
							<div class="row">
								<div class="col-6">
									<img src="<?php echo base_url()?>assets/img/preview_tv_front.jpg" class="mb-2 w-100">
									<p><small>Front default layer image <br>PNG 1920x1080</small></p>
								</div>
								<div class="col-6">
									<img src="<?php echo base_url()?>assets/img/preview_tv_back.jpg" class="mb-2 w-100">
									<p><small>Back default layer image <br>JGG 1920x1080</small></p>
								</div>
							</div>
							<p><small>Download the <a href="">PSD template of the default theme</a> to create yours.</small></p>
						</div>
						<div class="col-12">
							<button type="submit" class="btn btn-success d-flex mt-5"><i class="material-icons mr-2">update</i> Update</button>
						</div>
					</div>
				</form>
			</div>
			<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="three-tab">
				<form>
					<div class="row">
						<div class="col-md-6 col-12">
							<h3>Main Fixed Logo</h3>
							<p>This position is typically designed for your tournament's logo and name:</p>
							<div class="form-group mb-3">
								<div class="form-group">
									<label class="mb-0"><small>16/9 image - 320x180 min</small></label>
									<input type="file" accept="image/x-png,image/gif,image/jpeg" class="form-control-file btn btn-primary">
								</div>
							</div>
							<h3>Additional rotating logos</h3>
							<p>This position is typically designed for your tournament's sponsors:</p>
							<div class="form-group mb-3">
								<div class="form-group">
									<label class="mb-0"><small>16/9 image - 320x180 min</small></label>
									<input type="file" accept="image/x-png,image/gif,image/jpeg" class="form-control-file btn btn-primary">
								</div>
							</div>
						</div>
						<div class="col-md-6 col-12">
							<h3>Default Logos</h3>
							<p>Without specific information, your theme will use the following layers:</p>
							<div class="row">
								<div class="col-6">
									<img src="<?php echo base_url()?>assets/img/logo_default_main.jpg" class="mb-2 w-100">
									<p><small>Main fixed logo <br>16/9 format - 320x180 pixels</small></p>
								</div>
								<div class="col-6">
									<img src="<?php echo base_url()?>assets/img/logo_default_sponsor.jpg" class="mb-2 w-100">
									<p><small>Back default layer image <br>JPG 1920x1080</small></p>
								</div>
							</div>
							<p><small>Download the <a href="">PSD template of the default theme</a> to create yours.</small></p>
						</div>
						<div class="col-12">
							<button type="submit" class="btn btn-success d-flex mt-5"><i class="material-icons mr-2">update</i> Update</button>
						</div>
					</div>
				</form>
				</div>
				<div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="four-tab">
					<form>
						<div class="row">
							<div class="col-md-6 col-12">
								<h3>Twitter</h3>
								<p><small>Display #hashtagged tweets in the scrolling messages of your Toornament TV:</small></p>
								<div class="form-group b-3">
									<label class="mb-0"><small>Consumer Key</small></label>
									<input type="text" class="form-control" name="key">
								</div>
								<div class="form-group b-3">
									<label class="mb-0"><small>Consumer Secret</small></label>
									<input type="text" class="form-control" name="secret">
								</div>
								<div class="form-group b-3">
									<label class="mb-0"><small>Hastag</small></label>
									<input type="text" class="form-control" name="hastag">
								</div>
								<div class="form-group b-3">
									<label class="mb-0"><small>Account</small></label>
									<input type="text" class="form-control" name="account">
								</div>
							</div>
							<div class="col-md-6 col-12">
								<h3>Facebook</h3>
								<p><small>Include you Facebook photo gallery in the Toornament TV, as rotating content between results:</small></p>
								<div class="form-group b-3">
									<label class="mb-0"><small>Album ID</small></label>
									<input type="text" class="form-control" name="album">
								</div>
								<div class="form-group b-3">
									<label class="mb-0"><small>Access Token</small></label>
									<input type="text" class="form-control" name="album">
								</div>
							</div>
							<div class="col-12">
								<button type="submit" class="btn btn-success d-flex mt-5"><i class="material-icons mr-2">update</i> Update</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div><!-- end content-app -->