<?php
/*
Template Name: Lineup
*/
?>


<?php // get_template_part('templates/page', 'header'); ?>




<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/content', get_post_format()); ?>
<?php endwhile; ?>