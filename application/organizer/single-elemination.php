<div class="content-app">
	<nav class="nav-app-mobile d-flex p-1 d-none d-sm-block d-md-none">
		<div class="btnMenu">
			<i class="material-icons" style="line-height: unset;">menu</i>
		</div>
		<div class="logo m-auto" style="width: 100px;">
			<a href="<?php echo base_url()?>home"><img src="<?php echo base_url()?>assets/img/logo.png" class="w-100 icon-invert"></a>
		</div>
	</nav>
	<nav class="nav-app">
		<div class="title-app mr-auto">
			<img src="<?php echo base_url()?>assets/img/icon/icon-structure.svg" class="icon-app icon-invert mr-2">
			<span>Modify Bracket of Stage "Bracket Name"</span>
		</div>
	</nav>
	<div class="main-content">
		<div class="tournament">

			<?php
				$counter = 0; 
				while ($counter< sizeof($structure['data'])-1) {
			?>

			<ul class="round <?php echo $counter+1 ?>">

				<?php 
					$counterTwo = 0; 
						while ($counterTwo < sizeof($structure['data'][$counter]['data'])) {
				?>

				<li class="space">&nbsp;</li>

				<li class="team top">
					<i class="material-icons">lock</i>
					<span>
						<?php  echo $structure['data'][$counter]['data'][$counterTwo]['versus'][0]['teamName']?>
					</span>
				</li>

				<li class="team space">&nbsp;</li>
				
				<li class="team bottom">
					<i class="material-icons">lock</i>
					<span>
						<?php  echo $structure['data'][$counter]['data'][$counterTwo]['versus'][1]['teamName']?>
					</span>
				</li>

				<?php $counterTwo++; } ?>

				<li class="space">&nbsp;</li>
			</ul>
				<?php if (($counter == sizeof($structure['data'])-2)) { ?>
					<ul class="round five winner">
						<li class="space">&nbsp;</li>

						<li class="team top">
							<i class="material-icons">lock</i>
							<span>
								<?php  echo $structure['data'][sizeof($structure['data'])-1]['data'][0]['versus'][0]['teamName']?>	
							</span>
						</li>

						<li class="space">&nbsp;</li>
					</ul>
				<?php } ?>
			<?php $counter++; } ?>
		</div>
	</div>
</div><!-- end content-app -->