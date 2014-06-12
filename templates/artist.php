<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    
    <?php

    $website    = get_post_meta($post->ID, "marcato_artist_website_0_url");
    $homebase   = get_post_meta($post->ID, "marcato_artist_homebase");
    $artistID   = get_post_meta($post->ID, "marcato_artist_id");


    $twitterhandle    = getMarWebsite($post->ID,"twitter.com");
    $youtubehandle    = getMarWebsite($post->ID,"youtube.com");
    $soundcloudhandle = getMarWebsite($post->ID,"soundcloud.com");

    ?>

    <div class="featuredimage">
       <?php echo get_the_post_thumbnail($post->ID, 'large'); ?>
    </div>

    <header>

      <h1 class="entry-title"><?php the_title(); ?></h1>

      <?php 
      if($homebase[0] || $twitterhandle){
          echo "<h5>\n";
          echo $twitterhandle;
          echo "</h5>\n";

      }
      // get_template_part('templates/entry-meta'); 

      ?>
    </header>


    <div class="entry-content">
      <?php the_content(); ?>

    <?php if($website[0]) 
    {
        $website = get_post_meta($post->ID, "marcato_artist_website_0_url");
        echo "<p>Visit: <a target='_blank' href='".$website[0]."'>" . $website[0] . "</a><p>\n"; 
    }

    ?>

    </div>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
