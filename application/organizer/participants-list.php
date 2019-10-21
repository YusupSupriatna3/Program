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
			<img src="<?php echo base_url()?>assets/img/icon/icon-participants.svg" class="icon-app icon-invert mr-2">
			<span>Participants List</span>
		</div>
		<div class="nav-action-app d-flex v-center">
			<a class="btn btn-primary d-flex mr-2" href="<?php echo base_url()?>participant/participant_add/<?php echo $this->uri->segment(3); ?>"><i class="material-icons mr-2">	add</i> Add</a>
			<button class="btn btn-primary d-flex mr-2"><i class="material-icons mr-2">play_for_work</i> Fill All</button>
			<button class="btn btn-success d-flex btnExport mr-2"><i class="material-icons mr-2">cloud_download</i> Export Data</button>
			<button class="btn btn-danger d-flex"><i class="material-icons mr-2">delete</i> Delete All</button>
		</div>
	</nav>
	<div class="main-content">
		<div class="bg-white box-shadow p-5 mb-4">
			<div class="row">
				<div class="col-6 text-center font-bold">
					<div class="font-28"><?php echo count($participant_list['data']);  ?></div>
					<div>Participants</div>
				</div>
				<div class="col-6 text-center font-bold">
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
				<div class="list-card-content" style="overflow-x: auto;">
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
							<?php foreach ($participant_list['data'] as $key) 
								{
							?>
							<tr>
								<td><?php echo $key['nickName']; ?></td>
								<td><?php echo $key['emailUser']; ?></td>
								<td><?php echo $key['createdDate']; ?></td>
								<td class="d-flex flex-end">
									<a href="#" class="btn btn-primary d-flex v-center mr-2"><i class="material-icons mr-1" style="font-size: 16px;">edit</i> Edit</a>
									<button class="btn btn-danger d-flex v-center"><i class="material-icons mr-1" style="font-size: 16px;">delete</i>Delete</button>
								</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div><!-- end content-app -->