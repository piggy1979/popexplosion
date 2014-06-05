<?php
/*
Template Name: News Template
*/
?>


<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<h1 class="container">News</h1>
<?php
	
	
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	echo getNews(6, $paged);

		if($paged){
			echo get_previous_posts_link( 'TEST Older posts' );
			echo get_next_posts_link('TEST Go to next page'); 
	}
?>
		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php





?>