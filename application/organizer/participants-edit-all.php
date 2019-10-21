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
		<span>Adit All Participant</span>
	</div>
	<div class="nav-action-app d-flex v-center">
		<button class="btn btn-primary d-flex mr-2"><i class="material-icons mr-2">update</i> Update</button>
	</div>
</nav>
<div class="main-content">
	<div class="bg-white box-shadow p-5">
		<div class="list-card" style="box-shadow: none;">
			<div class="list-card-header">
				<div class="row">
					<div class="col-6 card-title">List of Participants</div>
				</div>
			</div>
			<div class="list-card-content" style="overflow-x: auto;">
				<table id="participantsListEdit" class="display table table-striped" style="width:100%">
					<thead>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Created at</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<label class="d-none">Tiger Nixon</label>
								<input type="text" name="name" class="form-control" placeholder="Name" value="Tiger Nixon">
							</td>
							<td>tn@gmail.com</td>
							<td>22 May 2019 - 21:59</td>
						</tr>
						<tr>
							<td>
								<label class="d-none">Tiger Wood</label>
								<input type="text" name="name" class="form-control" placeholder="Name" value="Tiger Wood">
							</td>
							<td>tn@gmail.com</td>
							<td>22 May 2019 - 21:59</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div><!-- end content-app -->