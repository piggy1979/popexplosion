<div class="row col-md-8">
<?php
echo getNews(2);
?>
</div>

<div class="advert col-md-4 hide">
<?php
 echo getAds();
?>

</div>




<?php
while (have_posts()) : the_post(); 
// the_content();
endwhile;
?>

