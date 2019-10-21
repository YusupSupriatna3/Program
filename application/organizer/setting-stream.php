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
		<img src="<?php echo base_url()?>assets/img/icon/icon-settings-overview.svg" class="icon-app icon-invert mr-2">
		<span>Setting Stream</span>
	</div>
	<div class="nav-action-app d-flex v-center">
		<button class="btn btn-primary addBtnModalStream d-flex mr-2" href="addParticipants.html"><i class="material-icons mr-2">add</i> Add</button>
	</div>
</nav>
<div class="main-content">
	<div class="bg-white box-shadow p-5">
		<div class="list-card" style="box-shadow: none;">
			<div class="list-card-header">
				<div class="row">
					<div class="col-6 card-title">List of Stream</div>
				</div>
			</div>
			<div class="list-card-content" style="overflow-x: auto;">
				<table id="participantsList" class="display table table-striped" style="width:100%">
					<thead>
						<tr>
							<th>Name</th>
							<th>Language</th>
							<th>Url</th>
							<th class="text-right">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($list_stream['data'] as $key): ?>
							<tr>
							<td><?php echo $key['nameStreams']; ?></td>
							<td><?php if($key['language'] == 'id'){
								echo "Indonesia";
							} ?></td>
							<td><?php echo $key['urlStreams']; ?></td>
							<td class="d-flex flex-end">
								<button class="btn btn-danger d-flex v-center"><i class="material-icons mr-1" style="font-size: 16px;">delete</i>Delete</button>
							</td>
						</tr>
						<?php endforeach ?>
						<!-- <tr>
							<td>Stream 1</td>
							<td>Indonesia</td>
							<td>http://yoururl.com</td>
							<td class="d-flex flex-end">
								<button class="btn btn-danger d-flex v-center"><i class="material-icons mr-1" style="font-size: 16px;">delete</i>Delete</button>
							</td>
						</tr>
						<tr>
							<td>Stream 2</td>
							<td>Indonesia</td>
							<td>http://yoururl.com</td>
							<td class="d-flex flex-end">
								<button class="btn btn-danger d-flex v-center"><i class="material-icons mr-1" style="font-size: 16px;">delete</i>Delete</button>
							</td>
						</tr> -->
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div><!-- end content-app -->
<div class="modal fade modalAddStream" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add Stream</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group mb-3">
						<label class="m-0"><small>Name</small></label>
						<input type="text" class="form-control" name="name" id="name">
					</div>
					<div class="form-group mb-3">
						<div><label class="mb-1"><small>Language</small></label></div>
						<select class="selectpicker w-100" data-live-search="true" title="Select Country">
							<option>Indonesia</option>
						</select>
					</div>
					<div class="form-group mb-3">
						<label class="m-0"><small>Url</small></label>
						<input type="text" class="form-control" name="name" id="name">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary d-flex mr-2"><i class="material-icons">add</i> Add</button>
				</div>
			</div>
		</div>
	</div>
