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
			<img src="<?php echo base_url()?>assets/img/icon/icon-matches.svg" class="icon-app icon-invert mr-2">
			<span>Matches</span>
		</div>
	</nav>
	<div class="main-content">
		<div class="bg-white box-shadow p-5 mb-4">
			<div class="row">
				<div class="col-6 text-center font-bold">
					<div class="font-28">42</div>
					<div>Match</div>
				</div>
				<div class="col-6 text-center font-bold">
					<div class="font-28">0</div>
					<div>Complete</div>
				</div>
			</div>
		</div>
		<div class="bg-white box-shadow p-5">
			<div class="list-card" style="box-shadow: none;">
				<div class="list-card-header">
					<div class="row">
						<div class="col-6 card-title">List of Matches</div>
					</div>
				</div>
				<div class="list-card-content">
					<table id="matchtsList" class="display table table-striped table-hover" style="width:100%">
						<thead>
							<tr>
								<th>Match Name</th>
								<th>Player</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$counter = 0; 
									while ($counter< sizeof($structure['data'])-1) {
										$counterTwo = 0; 
													while ($counterTwo < sizeof($structure['data'][$counter]['data'])) {?>
													<tr onclick="window.location='<?php echo base_url()?>organizer/match_detail/<?php echo $this->uri->segment(3); ?>'" style="cursor: pointer;">
														<td><?php echo $structure['data'][$counter]['data'][$counterTwo]['matchNo']; ?></td>
														<td>
															<div><?php echo $structure['data'][$counter]['data'][$counterTwo]['versus'][0]['teamName']; ?></div>
															<div><?php echo $structure['data'][$counter]['data'][$counterTwo]['versus'][1]['teamName']; ?></div>
														</td>
														<td>Waiting</td>
													</tr>
							<?php			
									$counterTwo++; }
								$counter++; }
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div><!-- end content-app -->