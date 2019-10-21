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
		<img src="<?php echo base_url()?>assets/img/icon/icon-structure.svg" class="icon-app icon-invert mr-2">
		<span>Configure Stage League System (Duel)</span>
	</div>
</nav>
<div class="main-content">
	<div class="bg-white p-5">
		<form>
			<div class="row m-0 mb-3">
				<div class="col-12">
					<h3>General</h3>
				</div>
				<div class="form-group col-md-6 col-12">
					<label class="mb-0"><small>Number</small></label>
					<input type="number" class="form-control" name="number" id="number" placeholder="Number">
				</div>
				<div class="form-group col-md-6 col-12">
					<label class="mb-0"><small>Size</small></label>
					<input type="number" class="form-control" name="size" id="size" placeholder="Size">
				</div>
				<div class="form-group col-md-6 col-12">
					<label class="mb-0"><small>Name</small></label>
					<input type="text" class="form-control" name="duelName" id="duelName" placeholder="Name">
				</div>
				<div class="form-group col-md-6 col-12">
					<label class="mb-0"><small>Number of Groups</small></label>
					<input type="number" class="form-control" name="numberGroup" id="numberGroup" placeholder="Number of Group">
				</div>
			</div>

			<div class="row m-0 mb-3">
				<div class="col-12">
					<h3>Advenced</h3>
				</div>
				<div class="form-group col-md-6 col-12">
					<div><label class="mb-1"><small>Group Composition</small></label></div>
					<select class="selectpicker bracket-group w-100 p-0" data-live-search="true">
						<option data-subtext="Seed numbers are distributed so as to fully fill group in order.">Adjacent</option>
						<option data-subtext="Seed numbers are distributed so as to balance the effort required by each seed number to win over the others. Note: this does not ensure a skill balance between groups.">Efort balanced</option>
						<option data-subtext="Seed numbers are distributed so as to favor the highest seed numbers by grouping them with diametrically opposed seed numbers. Note: this method is also referred as 'snake' because the distribution process looks like a snake.">Seed Optimized (Snake)</option>
						<option data-subtext="Seed numbers are distributed in the groups by avoiding grouping those that should normally meet in the bracket (ie 1v8 2v7 3v6 4v5). This preserves the classic bracket seeding and is optimal when directly followed by a single or double elimination bracket.">Bracket Optimized</option>
					</select>
				</div>
				<div class="form-group col-md-6 col-12">
					<div><label class="mb-1"><small>Pairing Method</small></label></div>
					<select class="selectpicker bracket-group w-100 p-0" data-live-search="true">
						<option data-subtext="Manually set the pairing to have the participants play in a custom setting">Manual</option>
						<option data-subtext="Each participant plays each opponent once.">Round Robin</option>
						<option data-subtext="Each participant plays each opponent twice, once at home and once away.">Double Round Robin</option>
					</select>
				</div>
				<div class="col-12">
					<div><label class="mb-1"><small>Points Attribution</small></label></div>
					<fieldset class="fieldset-app">
						<legend class="legend-app">
							<label class="checkbox-legend">Match Result
								<input type="checkbox" checked="checked">
								<span class="checkmark"></span>
							</label>
						</legend>
						<div>Awards points according to the match result (win, draw or loss).</div>
						<div class="row m-0">
							<div class="col-md-6 col-12 p-0">
								<div class="row m-0">
									<div class="col p-1">
										<label class="mb-0"><small>Win</small></label>
										<input type="number" class="form-control" name="win" id="win" placeholder="Win" value="3">
									</div>
									<div class="col p-1">
										<label class="mb-0"><small>Draw</small></label>
										<input type="number" class="form-control" name="draw" id="draw" placeholder="Draw" value="1">
									</div>
									<div class="col p-1">
										<label class="mb-0"><small>Lost</small></label>
										<input type="number" class="form-control" name="lost" id="lost" placeholder="Lost" value="0">
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<fieldset class="fieldset-app">
						<legend class="legend-app">
							<label class="checkbox-legend">Match Score
								<input type="checkbox">
								<span class="checkmark"></span>
							</label>
						</legend>
						<div>Awards points equal to the match score.</div>
					</fieldset>
					<fieldset class="fieldset-app">
						<legend class="legend-app">
							<label class="checkbox-legend">Match Forfeit
								<input type="checkbox" checked="checked">
								<span class="checkmark"></span>
							</label>
						</legend>
						<div>Awards points when a participant is forfeit in a match (can be negative for a penalty).</div>
						<div class="col-6 p-0">
							<div class="col-md-4 col-6 p-1">
								<input type="number" class="form-control" name="forfeit" id="forfeit" placeholder="forfeit" value="0">
							</div>
						</div>
					</fieldset>
					<fieldset class="fieldset-app">
						<legend class="legend-app">
							<label class="checkbox-legend">Game Result
								<input type="checkbox">
								<span class="checkmark"></span>
							</label>
						</legend>
						<div>Awards points according to the game result (win, draw or loss).</div>
						<div class="row m-0">
							<div class="col-md-6 col-12 p-0">
								<div class="row m-0">
									<div class="col p-1">
										<label class="mb-0"><small>Win</small></label>
										<input type="number" class="form-control" name="win" id="win" placeholder="Win" value="">
									</div>
									<div class="col p-1">
										<label class="mb-0"><small>Draw</small></label>
										<input type="number" class="form-control" name="draw" id="draw" placeholder="Draw" value="">
									</div>
									<div class="col p-1">
										<label class="mb-0"><small>Lost</small></label>
										<input type="number" class="form-control" name="lost" id="lost" placeholder="Lost" value="">
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<fieldset class="fieldset-app">
						<legend class="legend-app">
							<label class="checkbox-legend">Game Score
								<input type="checkbox">
								<span class="checkmark"></span>
							</label>
						</legend>
						<div>Awards points equal to the game score.</div>
					</fieldset>
					<fieldset class="fieldset-app">
						<legend class="legend-app">Tiebreakers</legend>
						<div class="col-12"><label class="mb-1"><small>Format</small></label></div>
						<div class="form-row">
							<div class="form-group col-md-6 col-8">
								<select class="selectpicker bracket-group w-100 p-0" data-live-search="true">
									<option data-subtext="Participants with the least forfeited matches.">
										Match Forfeits (Overall)
									</option>
									<option data-subtext="Seed numbers are distributed so as to balance the effort required by each seed number to win over the others. Note: this does not ensure a skill balance between groups.">
										Match Forfeits (head-to-head)
									</option>
									<option data-subtext="Most wins, then draws, and then losses obtained on all matches.">Match 
										wins/draws/losses (overall)
									</option>
									<option data-subtext="Most wins, then draws, and then losses only from matches between the tied participants.">
										Match wins/draws/losses (head-to-head)
									</option>
									<option data-subtext="Highest sum of scores obtained on all matches.">
										Match Score for (Overall)
									</option>
									<option data-subtext="Highest sum of scores obtained only from matches between the tied participants.">
										Match Score for (Head=to-head)
									</option>
									<option data-subtext="Lowest sum of scores the opponents obtained on all matches.">
										Match Score Againts (Overall)
									</option>
									<option data-subtext="Lowest sum of scores the opponents obtained only from matches between the tied participants.">
										Match Score Againts (Head-to-head)
									</option>
									<option data-subtext="Highest score difference on all matches.">
										Match Score Differents (Overall)
									</option>
									<option data-subtext="Highest score difference only from matches between the tied participants.">
										Match Score Differents (Head-to-head)
									</option>
									<option data-subtext="Most points obtained only from matches between the tied participants.">
										Points (Head-to-head)
									</option>
									<option data-subtext="Participants with the most played matches.">
										Most Played Match
									</option>
									<option data-subtext="Participants with the last played matches.">
										Last Played Match
									</option>
									<option data-subtext="Most points set manually by the organizer.">
										Manual
									</option>
									<option data-subtext="Randomly at each ranking calculation.">
										Random
									</option>
								</select>
							</div>
							<div class="col-md-2 col-4">
								<button type="button" class="btn btn-danger d-flex justify-content-center"><i class="material-icons mr-2">delete</i> <span class="d-none d-md-block">Delete</span></button>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6 col-8">
								<select class="selectpicker bracket-group w-100 p-0" data-live-search="true">
									<option data-subtext="Participants with the least forfeited matches.">
										Match Forfeits (Overall)
									</option>
									<option data-subtext="Seed numbers are distributed so as to balance the effort required by each seed number to win over the others. Note: this does not ensure a skill balance between groups.">
										Match Forfeits (head-to-head)
									</option>
									<option data-subtext="Most wins, then draws, and then losses obtained on all matches.">Match 
										wins/draws/losses (overall)
									</option>
									<option data-subtext="Most wins, then draws, and then losses only from matches between the tied participants.">
										Match wins/draws/losses (head-to-head)
									</option>
									<option data-subtext="Highest sum of scores obtained on all matches.">
										Match Score for (Overall)
									</option>
									<option data-subtext="Highest sum of scores obtained only from matches between the tied participants.">
										Match Score for (Head=to-head)
									</option>
									<option data-subtext="Lowest sum of scores the opponents obtained on all matches.">
										Match Score Againts (Overall)
									</option>
									<option data-subtext="Lowest sum of scores the opponents obtained only from matches between the tied participants.">
										Match Score Againts (Head-to-head)
									</option>
									<option data-subtext="Highest score difference on all matches.">
										Match Score Differents (Overall)
									</option>
									<option data-subtext="Highest score difference only from matches between the tied participants.">
										Match Score Differents (Head-to-head)
									</option>
									<option selected data-subtext="Most points obtained only from matches between the tied participants.">
										Points (Head-to-head)
									</option>
									<option data-subtext="Participants with the most played matches.">
										Most Played Match
									</option>
									<option data-subtext="Participants with the last played matches.">
										Last Played Match
									</option>
									<option data-subtext="Most points set manually by the organizer.">
										Manual
									</option>
									<option data-subtext="Randomly at each ranking calculation.">
										Random
									</option>
								</select>
							</div>
							<div class="col-md-2 col-4">
								<button type="button" class="btn btn-danger d-flex justify-content-center"><i class="material-icons mr-2">delete</i> <span class="d-none d-md-block">Delete</span></button>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6 col-8">
								<select class="selectpicker bracket-group w-100 p-0" data-live-search="true">
									<option data-subtext="Participants with the least forfeited matches.">
										Match Forfeits (Overall)
									</option>
									<option data-subtext="Seed numbers are distributed so as to balance the effort required by each seed number to win over the others. Note: this does not ensure a skill balance between groups.">
										Match Forfeits (head-to-head)
									</option>
									<option data-subtext="Most wins, then draws, and then losses obtained on all matches.">Match 
										wins/draws/losses (overall)
									</option>
									<option data-subtext="Most wins, then draws, and then losses only from matches between the tied participants.">
										Match wins/draws/losses (head-to-head)
									</option>
									<option data-subtext="Highest sum of scores obtained on all matches.">
										Match Score for (Overall)
									</option>
									<option data-subtext="Highest sum of scores obtained only from matches between the tied participants.">
										Match Score for (Head=to-head)
									</option>
									<option data-subtext="Lowest sum of scores the opponents obtained on all matches.">
										Match Score Againts (Overall)
									</option>
									<option data-subtext="Lowest sum of scores the opponents obtained only from matches between the tied participants.">
										Match Score Againts (Head-to-head)
									</option>
									<option data-subtext="Highest score difference on all matches.">
										Match Score Differents (Overall)
									</option>
									<option data-subtext="Highest score difference only from matches between the tied participants.">
										Match Score Differents (Head-to-head)
									</option>
									<option data-subtext="Most points obtained only from matches between the tied participants.">
										Points (Head-to-head)
									</option>
									<option data-subtext="Participants with the most played matches.">
										Most Played Match
									</option>
									<option data-subtext="Participants with the last played matches.">
										Last Played Match
									</option>
									<option selected data-subtext="Most points set manually by the organizer.">
										Manual
									</option>
									<option data-subtext="Randomly at each ranking calculation.">
										Random
									</option>
								</select>
							</div>
							<div class="col-md-2 col-4">
								<button type="button" class="btn btn-danger d-flex justify-content-center"><i class="material-icons mr-2">delete</i> <span class="d-none d-md-block">Delete</span></button>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6 col-8">
								<select class="selectpicker bracket-group w-100 p-0" data-live-search="true">
									<option data-subtext="Participants with the least forfeited matches.">
										Match Forfeits (Overall)
									</option>
									<option data-subtext="Seed numbers are distributed so as to balance the effort required by each seed number to win over the others. Note: this does not ensure a skill balance between groups.">
										Match Forfeits (head-to-head)
									</option>
									<option data-subtext="Most wins, then draws, and then losses obtained on all matches.">Match 
										wins/draws/losses (overall)
									</option>
									<option data-subtext="Most wins, then draws, and then losses only from matches between the tied participants.">
										Match wins/draws/losses (head-to-head)
									</option>
									<option data-subtext="Highest sum of scores obtained on all matches.">
										Match Score for (Overall)
									</option>
									<option data-subtext="Highest sum of scores obtained only from matches between the tied participants.">
										Match Score for (Head=to-head)
									</option>
									<option data-subtext="Lowest sum of scores the opponents obtained on all matches.">
										Match Score Againts (Overall)
									</option>
									<option data-subtext="Lowest sum of scores the opponents obtained only from matches between the tied participants.">
										Match Score Againts (Head-to-head)
									</option>
									<option data-subtext="Highest score difference on all matches.">
										Match Score Differents (Overall)
									</option>
									<option selected data-subtext="Highest score difference only from matches between the tied participants.">
										Match Score Differents (Head-to-head)
									</option>
									<option data-subtext="Most points obtained only from matches between the tied participants.">
										Points (Head-to-head)
									</option>
									<option data-subtext="Participants with the most played matches.">
										Most Played Match
									</option>
									<option data-subtext="Participants with the last played matches.">
										Last Played Match
									</option>
									<option data-subtext="Most points set manually by the organizer.">
										Manual
									</option>
									<option data-subtext="Randomly at each ranking calculation.">
										Random
									</option>
								</select>
							</div>
							<div class="col-md-2 col-4">
								<button type="button" class="btn btn-danger d-flex justify-content-center"><i class="material-icons mr-2">delete</i> <span class="d-none d-md-block">Delete</span></button>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6 col-8">
								<select class="selectpicker bracket-group w-100 p-0" data-live-search="true">
									<option data-subtext="Participants with the least forfeited matches.">
										Match Forfeits (Overall)
									</option>
									<option data-subtext="Seed numbers are distributed so as to balance the effort required by each seed number to win over the others. Note: this does not ensure a skill balance between groups.">
										Match Forfeits (head-to-head)
									</option>
									<option data-subtext="Most wins, then draws, and then losses obtained on all matches.">Match 
										wins/draws/losses (overall)
									</option>
									<option data-subtext="Most wins, then draws, and then losses only from matches between the tied participants.">
										Match wins/draws/losses (head-to-head)
									</option>
									<option data-subtext="Highest sum of scores obtained on all matches.">
										Match Score for (Overall)
									</option>
									<option data-subtext="Highest sum of scores obtained only from matches between the tied participants.">
										Match Score for (Head=to-head)
									</option>
									<option data-subtext="Lowest sum of scores the opponents obtained on all matches.">
										Match Score Againts (Overall)
									</option>
									<option data-subtext="Lowest sum of scores the opponents obtained only from matches between the tied participants.">
										Match Score Againts (Head-to-head)
									</option>
									<option selected data-subtext="Highest score difference on all matches.">
										Match Score Differents (Overall)
									</option>
									<option data-subtext="Highest score difference only from matches between the tied participants.">
										Match Score Differents (Head-to-head)
									</option>
									<option data-subtext="Most points obtained only from matches between the tied participants.">
										Points (Head-to-head)
									</option>
									<option data-subtext="Participants with the most played matches.">
										Most Played Match
									</option>
									<option data-subtext="Participants with the last played matches.">
										Last Played Match
									</option>
									<option data-subtext="Most points set manually by the organizer.">
										Manual
									</option>
									<option data-subtext="Randomly at each ranking calculation.">
										Random
									</option>
								</select>
							</div>
							<div class="col-md-2 col-4">
								<button type="button" class="btn btn-danger d-flex justify-content-center"><i class="material-icons mr-2">delete</i> <span class="d-none d-md-block">Delete</span></button>
							</div>
						</div>
						<button class="btn btn-primary d-flex"><i class="material-icons">add</i> Add</button>
					</fieldset>
				</div>
			</div>

			<div class="row m-0 mb-3">
				<div class="col-12">
					<h3>Match Setting</h3>
				</div>
				<div class="form-group col-md-6 col-12">
					<div><label class="mb-1"><small>Format</small></label></div>
					<select class="selectpicker w-100 p-0" data-live-search="true">
						<option>inherited Format</option>
						<option>No Games</option>
						<option>Single Game</option>
						<option>Home and Away</option>
						<option>Best-of</option>
						<option>Fixed games</option>
					</select>
				</div>
			</div>
			<div class="col-12">
				<button type="submit" class="btn btn-primary d-flex mt-5">
					<i class="material-icons mr-1">add</i> Create
				</button>
			</div>
		</form>
	</div>
</div>
</div><!-- end content-app -->