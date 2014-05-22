<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PJFGJP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PJFGJP');</script>
<!-- End Google Tag Manager -->

<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">

    <div class="col-lg-12 sites">
        
      <ul>
        <li><a href="http://halifaxpopexplosion.com">Pop Explosion</a></li>
        <li><a href="http://hpxdigital.com">HPX Digital</a></li>
        <li>October 23-25, 2014 &bull; Halifax,NS</li>
      </ul>

    </div>

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
        
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'secondary_nav', 'menu_class' => 'secnav navbar-nav'));
        endif;



      ?>
    </nav>
  </div>
</header>
