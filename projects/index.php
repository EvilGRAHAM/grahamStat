<!DOCTYPE html>
<html>
	<head>
		<title>
			Projects
		</title>
		<!-- Wide card with share menu button -->
		<style>
			.img-header-card.mdl-card {}
			.img-header-card > .mdl-card__title {
			  color: #000000;
			  height: 176px;
			  background: url('../images/previews/vp_sim.PNG') center / cover;
			}
			.img-header-card > .mdl-card__menu {
			  color: #000000;
			}
		</style>
		<?php include("../header.html");?>
			<div class="mdl-grid">
			
				<div class="mdl-card mdl-shadow--2dp img-header-card mdl-cell mdl-cell--8-col">
					<div class="mdl-card__title">
						<h2 class="mdl-card__title-text">
							VP Simulation
						</h2>
					</div>
					<div class="mdl-card__supporting-text">
						Simulate and Predict Vapour Pressure based on Density, Sulfur and Temperature.
					</div>
					<div class="mdl-card__actions mdl-card--border">
						<a 
							class="mdl-button mdl-js-button mdl-button--accent mdl-js-ripple-effect" 
							href = "http://grahamst.at/shiny-server/Simulation/"
							target = "_blank"
						>
							Get Started
						</a>
					</div>
				</div>
				
				<div class="mdl-card mdl-shadow--2dp mdl-cell">
					<div class="mdl-card__title">
						<h2 class="mdl-card__title-text">
							More Stuff
						</h2>
					</div>
					<div class="mdl-card__supporting-text">
						This doesn't go anywhere yet, I'm just testing out how well cards work!
					</div>
					<div class="mdl-card__actions mdl-card--border">
						<a 
							class="mdl-button mdl-js-button mdl-button--accent mdl-js-ripple-effect" 
							href = ""
						>
							Go Nowhere!
						</a>
					</div>
				</div>
				
			</div>
		
		</div>
    </body>
</html>