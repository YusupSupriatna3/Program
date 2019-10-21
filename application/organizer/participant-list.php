<div class="content-app">
	<nav class="nav-app">
		<div class="title-app mr-auto">
			<img src="<?php echo base_url()?>assets/img/icon/icon-participants.svg" class="icon-app icon-invert mr-2">
			<span>Participants List</span>
		</div>
		<div class="nav-action-app d-flex v-center">
			<a class="btn btn-primary d-flex mr-2" href="#"><i class="material-icons mr-2">add</i> Add</a>
			<button class="btn btn-primary d-flex mr-2"><i class="material-icons mr-2">play_for_work</i> Fill All</button>
			<button class="btn btn-danger d-flex"><i class="material-icons mr-2">delete</i> Delete All</button>
		</div>
	</nav>
	<div class="main-content">
		<div class="bg-white box-shadow p-5 mb-4">
			<div class="row">
				<div class="col-md-6 text-center font-bold">
					<div class="font-28">1</div>
					<div>Participants</div>
				</div>
				<div class="col-md-6 text-center font-bold">
					<div class="font-28"><?php echo $toornament['data'][0]['size']; ?></div>
					<div>Tournament Size</div>
				</div>
			</div>
		</div>
		<div class="bg-white box-shadow p-5">
			<div class="list-card" style="box-shadow: none;">
				<div class="list-card-header">
					<div class="row">
						<div class="col-6 card-title">List of Participants</div>
					</div>
				</div>
				<div class="list-card-content">
					<table id="participantsList" class="display table table-striped" style="width:100%">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Created at</th>
								<th class="text-right">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Tiger Nixon</td>
								<td>tn@gmail.com</td>
								<td>22 May 2019 - 21:59</td>
								<td class="d-flex flex-end">
									<a href="#" class="btn btn-primary d-flex v-center mr-2"><i class="material-icons mr-1" style="font-size: 16px;">edit</i> Edit</a>
									<button class="btn btn-danger d-flex v-center"><i class="material-icons mr-1" style="font-size: 16px;">delete</i>Delete</button>
								</td>
							</tr>
							<tr>
								<td>Tiger Nixon</td>
								<td>tn@gmail.com</td>
								<td>22 May 2019 - 21:59</td>
								<td class="d-flex flex-end">
									<a href="#" class="btn btn-primary d-flex v-center mr-2"><i class="material-icons mr-1" style="font-size: 16px;">edit</i> Edit</a>
									<button class="btn btn-danger d-flex v-center"><i class="material-icons mr-1" style="font-size: 16px;">delete</i>Delete</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div><!-- end content-app -->