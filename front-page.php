<?php get_template_part('templates/page', 'header'); ?>

<?php get_template_part('templates/slideshow'); ?>


<?php
while (have_posts()) : the_post(); 
	the_content();
endwhile;
?>

