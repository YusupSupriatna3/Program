<div class="content-app">
<nav class="nav-app">
	<div class="title-app mr-auto">
		<img src="<?php echo base_url()?>assets/img/icon/icon-settings-overview.svg" class="icon-app icon-invert mr-2">
		<span>Setting Permission</span>
	</div>
	<div class="nav-action-app d-flex v-center">
		<button class="btn btn-primary addBtnModalPermission d-flex mr-2"><i class="material-icons mr-2">add</i> Add</button>
	</div>
</nav>
<div class="main-content">
	<div class="bg-white box-shadow p-5">
		<div class="list-card" style="box-shadow: none;">
			<div class="list-card-header">
				<div class="row">
					<div class="col-6 card-title">List of Permission</div>
				</div>
			</div>
			<div class="list-card-content" style="overflow-x: auto;">
				<table id="participantsList" class="display table table-striped" style="width:100%">
					<thead>
						<tr>
							<th>User's Email</th>
							<th style="width: 500px;">Attributes</th>
							<th style="width: 100px;" class="text-right">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>youremail@mail.com</td>
							<td>
								<div class="row">
									<div class="col">
										<div class="badge-app mb-2">Administrate tournament</div>
										<div class="badge-app mb-2">Delete tournament</div>
										<div class="badge-app mb-2">CHange permissions</div>
										<div class="badge-app mb-2">Report results</div>
									</div>
									<div class="col">
										<div class="badge-app mb-2">Manage Participants</div>
										<div class="badge-app mb-2">Place Participants</div>
										<div class="badge-app mb-2">Manage REgistration</div>
									</div>
								</div>
							</td>
							<td class="d-flex flex-end">
								<button class="btn btn-primary d-flex v-center mr-2 editBtnModalPermission"><i class="material-icons mr-1" style="font-size: 16px;">edit</i>Edit</button>
								<button class="btn btn-danger d-flex v-center"><i class="material-icons mr-1" style="font-size: 16px;">delete</i>Delete</button>
							</td>
						</tr>
						<tr>
							<td>youremail@mail.com</td>
							<td>
								<div class="row">
									<div class="col">
										<div class="badge-app mb-2">Administrate tournament</div>
										<div class="badge-app mb-2">Delete tournament</div>
										<div class="badge-app mb-2">CHange permissions</div>
										<div class="badge-app mb-2">Report results</div>
									</div>
									<div class="col">
										<div class="badge-app mb-2">Manage Participants</div>
										<div class="badge-app mb-2">Place Participants</div>
										<div class="badge-app mb-2">Manage REgistration</div>
									</div>
								</div>
							</td>
							<td class="d-flex flex-end">
								<button class="btn btn-primary d-flex v-center mr-2 editBtnModalPermission"><i class="material-icons mr-1" style="font-size: 16px;">edit</i>Edit</button>
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