<?php get_template_part('templates/page', 'header'); ?>

<?php get_template_part('templates/slideshow'); ?>
<div class="row col-md-8">
<?php
echo getNews(2);
?>
</div>
<div class="col-md-4">

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, quo, nesciunt magnam assumenda cumque odio dolores non laboriosam laudantium totam qui repellendus temporibus. Aliquid, perspiciatis, ex animi provident ullam earum?</p>

</div>


<?php
while (have_posts()) : the_post(); 
// the_content();
endwhile;
?>

