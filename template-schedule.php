<?php
/*
Template Name: Schedule Template
*/
?>

<div id="filters" class="container">
	<ul id="lineup-filter">
		<li>Showing:</li>
		<li><span class="btn filter" data-filter=".music">Music</span></li>
		<li><span class="btn filter" data-filter=".comedy">Comedy</span></li>
		<li><span class="btn filter" data-filter=".film">Film</span></li>
		<li><span class="btn filter" data-filter=".talks">Pop!Talks</span></li>
		<li><span class="btn filter" data-filter=".film">Pop!Expo</span></li>
	</ul>

	<ul id="date-filter">
		<li><span class="month">October</span></li>
		<li><span class="fdate21 filter active" data-filter=".date21"><strong>21</strong></span></li>
		<li><span class="fdate22 filter" data-filter=".date22"><strong>22</strong></span></li>
		<li><span class="fdate23 filter" data-filter=".date23"><strong>23</strong></span></li>
		<li><span class="fdate24 filter" data-filter=".date24"><strong>24</strong></span></li>
		<li><span class="fdate25 filter" data-filter=".date25"><strong>25</strong></span></li>
	</ul>

		<div class='pdf'><a href="/img/schedule.pdf">PDF Download / Full Schdule</a></div>

	<form>


		<button id="extendall" class="active">Extended Schedule</button>
		<button id="collapseall">Compressed Schedule</button>
	</form>

</div>


<div id="mixincontainer">





<?php /*
		<section class="mix music date21">

			<div class="eventdescription">
				<h3>Name of Event</h3>
				<strong>This is some description Text</strong>
				<div class="eventextra">
				<p>	
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, reiciendis nulla consequuntur veniam debitis beatae commodi saepe modi nesciunt numquam? Suscipit, officia, assumenda, tempora, veniam iusto ducimus eius dolores quisquam doloremque sunt recusandae sapiente sint voluptas. Corrupti, reprehenderit, nesciunt, aspernatur et voluptate aliquid aliquam esse nobis repudiandae amet minus vitae cupiditate autem nisi assumenda sint quo soluta! Corporis, officia, voluptatibus rerum aperiam soluta cupiditate voluptas ea ut ipsa nihil fugiat sed voluptate itaque enim quibusdam necessitatibus ipsam. Voluptatem, eum, iusto.
				</p>
				<div class="articlesocial">
        			<span class="tag">Music</span>

		        <ul class="rrssb-buttons">
					<li class="facebook">
           				<a href="https://www.facebook.com/sharer/sharer.php?u=http://halifaxpopexplosion.com/this-is-a-category-test/" class="popup">Facebook</a>
           			</li>
        		</ul>
        		</div>
			</div>
			</div>

			<div class="eventdetails">
				<div class="eventtime">
					<strong>Monday, October 21</strong><br>
					9:00PM - 1:00AM
				</div>
				<div class="directions">
					<strong>Gus' Pub</strong><br>
					<a class='maps fancybox.iframe' href="https://www.google.com/maps/embed/v1/place?key=AIzaSyA5I8Q4uvg4UCgiPZgBQ_rLC7aBuTT0eFw&q=The+Nook,Halifax+NS">Directions</a>

				</div>

			</div>
		</section>

		<section class="mix music date21">

			<div class="eventdescription">
				<h3>Name of Event</h3>
				<strong>This is some description Text</strong>
				<div class="eventextra">
				<p>	
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, reiciendis nulla consequuntur veniam debitis beatae commodi saepe modi nesciunt numquam? Suscipit, officia, assumenda, tempora, veniam iusto ducimus eius dolores quisquam doloremque sunt recusandae sapiente sint voluptas. Corrupti, reprehenderit, nesciunt, aspernatur et voluptate aliquid aliquam esse nobis repudiandae amet minus vitae cupiditate autem nisi assumenda sint quo soluta! Corporis, officia, voluptatibus rerum aperiam soluta cupiditate voluptas ea ut ipsa nihil fugiat sed voluptate itaque enim quibusdam necessitatibus ipsam. Voluptatem, eum, iusto.
				</p>
				<div class="articlesocial">
        			<span class="tag">Music</span>

		        <ul class="rrssb-buttons">
					<li class="facebook">
           				<a href="https://www.facebook.com/sharer/sharer.php?u=http://halifaxpopexplosion.com/this-is-a-category-test/" class="popup">Facebook</a>
           			</li>
        		</ul>
        		</div><!-- event extra -->
			</div>
			</div>

			<div class="eventdetails">
				<div class="eventtime">
					<strong>Monday, October 21</strong><br>
					9:00PM - 1:00AM
				</div>
				<div class="directions">
					<strong>Gus' Pub</strong><br>
					<span>Directions</span>
				</div>
			</div>
		</section>

		<section class="mix music date21">

			<div class="eventdescription">
				<h3>Name of Event</h3>
				<strong>This is some description Text</strong>
				<div class="eventextra">
				<p>	
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, reiciendis nulla consequuntur veniam debitis beatae commodi saepe modi nesciunt numquam? Suscipit, officia, assumenda, tempora, veniam iusto ducimus eius dolores quisquam doloremque sunt recusandae sapiente sint voluptas. Corrupti, reprehenderit, nesciunt, aspernatur et voluptate aliquid aliquam esse nobis repudiandae amet minus vitae cupiditate autem nisi assumenda sint quo soluta! Corporis, officia, voluptatibus rerum aperiam soluta cupiditate voluptas ea ut ipsa nihil fugiat sed voluptate itaque enim quibusdam necessitatibus ipsam. Voluptatem, eum, iusto.
				</p>
				<div class="articlesocial">
        			<span class="tag">Music</span>

		        <ul class="rrssb-buttons">
					<li class="facebook">
           				<a href="https://www.facebook.com/sharer/sharer.php?u=http://halifaxpopexplosion.com/this-is-a-category-test/" class="popup">Facebook</a>
           			</li>
        		</ul>
        		</div>
			</div>
			</div>

			<div class="eventdetails">
				<div class="eventtime">
					<strong>Monday, October 21</strong><br>
					9:00PM - 1:00AM
				</div>
				<div class="directions">
					<strong>Gus' Pub</strong><br>
					<span>Directions</span>
				</div>

			</div>
		</section>

		<section class="mix music date21">

			<div class="eventdescription">
				<h3>Name of Event</h3>
				<strong>This is some description Text</strong>
				<div class="eventextra">
				<p>	
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, reiciendis nulla consequuntur veniam debitis beatae commodi saepe modi nesciunt numquam? Suscipit, officia, assumenda, tempora, veniam iusto ducimus eius dolores quisquam doloremque sunt recusandae sapiente sint voluptas. Corrupti, reprehenderit, nesciunt, aspernatur et voluptate aliquid aliquam esse nobis repudiandae amet minus vitae cupiditate autem nisi assumenda sint quo soluta! Corporis, officia, voluptatibus rerum aperiam soluta cupiditate voluptas ea ut ipsa nihil fugiat sed voluptate itaque enim quibusdam necessitatibus ipsam. Voluptatem, eum, iusto.
				</p>
				<div class="articlesocial">
        			<span class="tag">Music</span>

		        <ul class="rrssb-buttons">
					<li class="facebook">
           				<a href="https://www.facebook.com/sharer/sharer.php?u=http://halifaxpopexplosion.com/this-is-a-category-test/" class="popup">Facebook</a>
           			</li>
        		</ul>
        		</div>
			</div>
			</div>

			<div class="eventdetails">
				<div class="eventtime">
					<strong>Monday, October 21</strong><br>
					9:00PM - 1:00AM
				</div>
				<div class="directions">
					<strong>Gus' Pub</strong><br>
					<span>Directions</span>
				</div>

			</div>
		</section>
*/ ?>


<?php

echo fetchShows();

/* this is where the shows will go when i have that data */	
?>
		



</div><!-- #main-content -->

<?php





?>