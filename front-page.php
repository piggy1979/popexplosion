<div class="row col-md-9">
<?php
echo getNews(2);
?>
</div>

<div class="advert hide">
<span>Advertisement</span>
<?php
echo getAds();
?>
<a class="merch" href="<?php echo site_url(); ?>/shop/">
<img src="/img/iheart.jpg" title="Shop Merch">
<span>Shop Merch</span>
</a>
</div>




<?php
while (have_posts()) : the_post(); 
// the_content();
endwhile;
?>

