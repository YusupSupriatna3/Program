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
		<div class="bg-white box-shadow p-5">
			<div class="row">
				<div class="col-md-6 col-lg-4 col-12">
					<div class="d-flex">
						<div class="mr-auto"><h4>Seeding</h4></div>
						<div class="d-flex v-center">
							<button class="btn btn-primary d-flex btn-sm mr-2 btnAdd"><i class="material-icons">add</i></button>
							<button class="btn btn-primary d-flex btn-sm mr-2"><i class="material-icons">shuffle</i></button>
							<div class="dropdown structure">
								<button class="btn btn-primary btn-sm d-flex dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="material-icons">more_vert</i>
								</button>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<div class="dropdown-item">
										<button class="btn">Lock All</button>
									</div>
									<div class="dropdown-item">
										<button class="btn">Lock Occupied</button>
									</div>
									<div class="dropdown-item">
										<button class="btn">Unlock All</button>
									</div>
									<div class="dropdown-item">
										<button class="btn">Unlock Unocupied</button>
									</div>
									<div class="dropdown-divider"></div>
									<div class="dropdown-item">
										<button class="btn">Reset All</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div style="overflow-y: auto; height: calc(75vh - 36px);">
						<table class="table table-striped mt-5">
							<thead>
								<tr>
									<th width="20px">#</th>
									<th>Name</th>
									<th width="50px">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td style="cursor: pointer"><a class="btnAdd2 w-100 d-inline-block">Tiger Nixon</a></td>
									<td>
										<span id="remove"><i class="material-icons">delete</i></span>
										<span id="remove"><i class="material-icons">lock_open</i></span>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td style="cursor: pointer"><a class="btnAdd2 w-100 d-inline-block"><i class="material-icons">add</i></a></td>
									<td>
										<span id="remove"><i class="material-icons">delete</i></span>
										<span id="remove"><i class="material-icons">lock_open</i></span>
									</td>
								</tr>
								<tr>
									<td>3</td>
									<td style="cursor: pointer"><a class="btnAdd2 w-100 d-inline-block"><i class="material-icons">add</i></a></td>
									<td>
										<span id="remove"><i class="material-icons">delete</i></span>
										<span id="remove"><i class="material-icons">lock_open</i></span>
									</td>
								</tr>
								<tr>
									<td>4</td>
									<td style="cursor: pointer"><a class="btnAdd2 w-100 d-inline-block"><i class="material-icons">add</i></a></td>
									<td>
										<span id="remove"><i class="material-icons">delete</i></span>
										<span id="remove"><i class="material-icons">lock_open</i></span>
									</td>
								</tr>
								<tr>
									<td>5</td>
									<td style="cursor: pointer"><a class="btnAdd2 w-100 d-inline-block"><i class="material-icons">add</i></a></td>
									<td>
										<span id="remove"><i class="material-icons">delete</i></span>
										<span id="remove"><i class="material-icons">lock_open</i></span>
									</td>
								</tr>
								<tr>
									<td>6</td>
									<td style="cursor: pointer"><a class="btnAdd2 w-100 d-inline-block"><i class="material-icons">add</i></a></td>
									<td>
										<span id="remove"><i class="material-icons">delete</i></span>
										<span id="remove"><i class="material-icons">lock_open</i></span>
									</td>
								</tr>
								<tr>
									<td>7</td>
									<td style="cursor: pointer"><a class="btnAdd2 w-100 d-inline-block"><i class="material-icons">add</i></a></td>
									<td>
										<span id="remove"><i class="material-icons">delete</i></span>
										<span id="remove"><i class="material-icons">lock_open</i></span>
									</td>
								</tr>
								<tr>
									<td>8</td>
									<td style="cursor: pointer"><a class="btnAdd2 w-100 d-inline-block"><i class="material-icons">add</i></a></td>
									<td>
										<span id="remove"><i class="material-icons">delete</i></span>
										<span id="remove"><i class="material-icons">lock_open</i></span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-md-6 col-lg-8 col-12">
					<div class="tournament" style="overflow-y: auto; height: 75vh;">
						<div class="mr-auto"><h4>Single Elimination (Duel)</h4></div>
						<div class="round">Round 16</div>
						<div class="all-teams d-flex">
							<div class="teams">
								<div class="box">Box 1.1</div>
								<div class="top btnAdd2"><i class="material-icons">add</i> #1</div>
								<div class="bottom btnAdd2"><i class="material-icons">add</i> #2</div>
							</div>
							<div class="teams">
								<div class="box">Box 1.2</div>
								<div class="top btnAdd2"><i class="material-icons">add</i> #1</div>
								<div class="bottom btnAdd2"><i class="material-icons">add</i> #2</div>
							</div>
							<div class="teams">
								<div class="box">Box 1.3</div>
								<div class="top btnAdd2"><i class="material-icons">add</i> #1</div>
								<div class="bottom btnAdd2"><i class="material-icons">add</i> #2</div>
							</div>
							<div class="teams">
								<div class="box">Box 1.4</div>
								<div class="top btnAdd2"><i class="material-icons">add</i> #1</div>
								<div class="bottom btnAdd2"><i class="material-icons">add</i> #2</div>
							</div>
							<div class="teams">
								<div class="box">Box 1.5</div>
								<div class="top btnAdd2"><i class="material-icons">add</i> #1</div>
								<div class="bottom btnAdd2"><i class="material-icons">add</i> #2</div>
							</div>
							<div class="teams">
								<div class="box">Box 1.6</div>
								<div class="top btnAdd2"><i class="material-icons">add</i> #1</div>
								<div class="bottom btnAdd2"><i class="material-icons">add</i> #2</div>
							</div>
							<div class="teams">
								<div class="box">Box 1.7</div>
								<div class="top btnAdd2"><i class="material-icons">add</i> #1</div>
								<div class="bottom btnAdd2"><i class="material-icons">add</i> #2</div>
							</div>
							<div class="teams">
								<div class="box">Box 1.8</div>
								<div class="top btnAdd2"><i class="material-icons">add</i> #1</div>
								<div class="bottom btnAdd2"><i class="material-icons">add</i> #2</div>
							</div>
						</div>

						<div class="round">Quarter Final</div>
						<div class="all-teams d-flex">
							<div class="teams">
								<div class="box">Box 2.1</div>
								<div class="top btnAdd2"></div>
								<div class="bottom btnAdd2"></div>
							</div>
							<div class="teams">
								<div class="box">Box 2.2</div>
								<div class="top btnAdd2"></div>
								<div class="bottom btnAdd2"></div>
							</div>
							<div class="teams">
								<div class="box">Box 2.3</div>
								<div class="top btnAdd2"></div>
								<div class="bottom btnAdd2"></div>
							</div>
							<div class="teams">
								<div class="box">Box 2.4</div>
								<div class="top btnAdd2"></div>
								<div class="bottom btnAdd2"></div>
							</div>
						</div>

						<div class="round">Semi Final</div>
						<div class="all-teams d-flex">
							<div class="teams">
								<div class="box">Box 3.1</div>
								<div class="top btnAdd2"></div>
								<div class="bottom btnAdd2"></div>
							</div>
							<div class="teams">
								<div class="box">Box 3.2</div>
								<div class="top btnAdd2"></div>
								<div class="bottom btnAdd2"></div>
							</div>
						</div>

						<div class="round">Final</div>
						<div class="all-teams d-flex">
							<div class="teams">
								<div class="box">Box 4.1</div>
								<div class="top btnAdd2"></div>
								<div class="bottom btnAdd2"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- end content-app -->