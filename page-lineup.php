<?php
/*
Template Name: Lineup
Display the music lineup.
*/
?>


<div id="lineupsel" class="container">
	<ul id="lineup-filter">
		<li>Showing:</li>
		<li><span class="btn filter active" data-filter="all">All</span></li>
		<li><span class="btn filter" data-filter=".category-1">Music</span></li>
		<li><span class="btn filter" data-filter=".comedy">Comedy</span></li>
		<li><span class="btn filter" data-filter=".music">Film</span></li>
		<li><span class="btn filter" data-filter=".talks">Pop!Talks</span></li>
		<li><span class="btn filter" data-filter=".film">Pop!Expo</span></li>
	</ul>

	<h2>Lineup: <span>All</span></h2>

	<?php

	echo fetchLineup();

	?>



</div><!-- end of lineup div ->