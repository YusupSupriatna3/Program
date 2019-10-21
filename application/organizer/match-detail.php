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
		<img src="../../assets/img/icon/icon-matches.svg" class="icon-app icon-invert mr-2">
		<span>Match Name</span>
	</div>
</nav>
<div class="main-content">
	<div class="match bg-white box-shadow mb-4">
		<div class="match-header py-3 px-4 text-center">Playoffs - Main Bracket - Round 1</div>
		<div class="p-4">
			<div class="row">
				<div class="col-5 text-center team">
					To be Determined
				</div>
				<div class="col-2 text-center vs">
					VS
				</div>
				<div class="col-5 text-center team">
					To be Determined
				</div>
			</div>
		</div>
		<div class="match-footer py-3 px-4 d-flex justify-content-center">
			<i class="material-icons mr-2">av_timer</i> Match Pending
		</div>
	</div>
	<div class="match-setting bg-white box-shadow p-4">
		<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="result-tab" data-toggle="pill" href="#result" role="tab" aria-controls="result" aria-selected="true">Result</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="pills-info-tab" data-toggle="pill" href="#pills-info" role="tab" aria-controls="pills-info" aria-selected="false">Info</a>
			</li>
		</ul>
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="result" role="tabpanel" aria-labelledby="result-tab">
				<div class="pt-3">
					<h3>Match</h3>
				</div>
				<table class="table">
					<thead>
						<tr>
							<th>Name</th>
							<th style="width: 50px;">Forfeit</th>
							<th style="width: 150px;">Score</th>
							<th>Result</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>To be Determined</td>
							<td class="text-center">
								<div class="form-check form-check-inline m-0">
									<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								</div></td>
							<td>
								<input class="form-control" type="number">
							</td>
							<td>
								<div class="row">
									<div class="col-md-3 p-0 radio">
										<label class="radio-setting">
											<input type="radio" name="radio" value="1">
											<span class="checkmark win">
												W
											</span>
										</label>
									</div>
									<div class="col-md-3 p-0 radio">
										<label class="radio-setting">
											<input type="radio" name="radio" value="2">
											<span class="checkmark draw">
												D
											</span>
										</label>
									</div>
									<div class="col-md-3 p-0 radio">
										<label class="radio-setting">
											<input type="radio" name="radio" value="3">
											<span class="checkmark lose">
												L
											</span>
										</label>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>To be Determined</td>
							<td class="text-center">
								<div class="form-check form-check-inline m-0">
									<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								</div></td>
							<td>
								<input class="form-control" type="number">
							</td>
							<td>
								<div class="row">
									<div class="col-md-3 p-0 radio">
										<label class="radio-setting">
											<input type="radio" name="radio" value="1">
											<span class="checkmark win">
												W
											</span>
										</label>
									</div>
									<div class="col-md-3 p-0 radio">
										<label class="radio-setting">
											<input type="radio" name="radio" value="2">
											<span class="checkmark draw">
												D
											</span>
										</label>
									</div>
									<div class="col-md-3 p-0 radio">
										<label class="radio-setting">
											<input type="radio" name="radio" value="3">
											<span class="checkmark lose">
												L
											</span>
										</label>
									</div>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="tab-pane fade" id="pills-info" role="tabpanel" aria-labelledby="pills-info-tab">
				<div class="row">
					<div class="col-8 mb-3">
						<label class="mb-0"><small>Start Date <span style="font-size: 10px;">(timezone: Asia/Jakarta)</span></small></label>
						<div class="input-group">
							<input type="text" class="form-control date">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="material-icons">date_range</i></span>
							</div>
						</div>
					</div>	
					<div class="col-4 mb-3">
						<label class="mb-0"><small></small></label>
						<input class="form-control" type="text" name="time" id="time" placeholder="HH:MM">
					</div>
					<div class="col-12 mb-3">
						<label class="mb-0"><small>Private Notes <span style="font-size: 10px;">(Optional)</span></small></label>
						<textarea class="form-control" rows="5"></textarea>
					</div>
					<div class="col-12">
						<label class="mb-0"><small>Public Notes <span style="font-size: 10px;">(Optional)</span></small></label>
						<textarea class="form-control" rows="5"></textarea>
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-success d-flex mt-5"><i class="material-icons mr-2">update</i> Update</button>
		</div>
	</div>
</div>
</div><!-- end content-app -->