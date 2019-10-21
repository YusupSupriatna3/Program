<div class="content-app">
<nav class="nav-app-mobile d-flex p-1 d-none d-sm-block d-md-none">
	<div class="btnMenu">
		<i class="material-icons" style="line-height: unset;">menu</i>
	</div>
	<div class="logo m-auto" style="width: 100px;">
		<a href="<?php echo base_url()?>organizer"><img src="<?php base_url()?>assets/img/logo.png" class="w-100 icon-invert"></a>
	</div>
</nav>
<nav class="nav-app">
	<div class="title-app mr-auto">
		<img src="<?php base_url()?>assets/img/icon/icon-widget.svg" class="icon-app mr-2">
		<span>Stage Widget</span>
	</div>
</nav>
<div class="main-content">
	<div class="bg-white box-shadow p-5">
		<div class="row">
			<div class="col-lg-4 col-md-12 col-12">
				<h4>Embedding Parameter</h4>
				<div class="form-group mb-3">
					<div><label class="mb-1"><small>Embed Size</small></label></div>
					<select class="selectpicker w-100" data-live-search="true">
						<option>300</option>
						<option>640</option>
						<option>853</option>
					</select>
				</div>
				<div class="form-group mb-3">
					<div><label class="mb-1"><small>Language</small></label></div>
					<select class="selectpicker w-100" data-live-search="true">
						<option>Indonesia</option>
					</select>
				</div>
				<div class="form-group mb-3">
					<div><label class="mb-1"><small>Language</small></label></div>
					<select class="selectpicker w-100" data-live-search="true">
						<option>(UTC+07:00) - Jakarta - Indonesia</option>
					</select>
				</div>
				<div class="row">
					<div class="col-8">
						<div class="input-daterange" id="datepicker">
							<div class="form-group mb-3">
								<label class="mb-0"><small>Registration Opening</small></label>
								<div class="input-group">
									<input type="text" class="form-control text-left" name="start" autocomplete="off" placeholder="DD/MM/YYYY" />
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="material-icons">date_range</i></span>
									</div>
								</div>
							</div>
							<div class="form-group mb-3">
								<label class="mb-0"><small>Registration Closing</small></label>
								<div class="input-group">
									<input type="text" class="form-control text-left" name="end" autocomplete="off" placeholder="DD/MM/YYYY" />
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="material-icons">date_range</i></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="form-group mb-3">
							<label class="mb-0"><small></small></label>
							<input class="form-control" type="text" name="time" id="time" placeholder="HH:MM">
						</div>
						<div class="form-group mb-3">
							<label class="mb-0"><small></small></label>
							<input class="form-control" type="text" name="time" id="time" placeholder="HH:MM">
						</div>
					</div>
				</div>
				<div>
					<small>To embed this widget on your site, copy and paste the following HTML code:</small>
				</div>
				<div class="p-2" style="background: #f5f5f5;">
					<pre><code id="code-tournament" data-tournamentid="2519677958285803520">&lt;iframe width="640" height="360" src="https://widget.toornament.com/tournaments/2519677958285803520/matches/schedule/?_locale=en_US&amp;theme=light" frameborder="0" allowfullscreen="true"&gt;&lt;/iframe&gt;</code></pre>
				</div>
			</div>
			<div class="col-lg-8 col-md-12 col-12">
				<iframe width="640" height="360" src="https://widget.toornament.com/tournaments/2519677958285803520/matches/schedule/?_locale=en_US&theme=light" frameborder="0" allowfullscreen="true"></iframe>
			</div>
		</div>
	</div>
</div>
</div>