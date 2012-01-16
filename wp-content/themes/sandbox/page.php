<<<<<<< HEAD
<?php get_header() ?>
 <div id="line_holder"></div>
  <div id="page">

    <div id="floater">

      <a href="../../abbey/"><img src="../../abbey/wp-content/uploads/2012/01/name.png" id="name_img"/></a>
      <img src="../../abbey/wp-content/uploads/2012/01/icons.png" id="icons" />
      <br/>
      <img src="../../abbey/wp-content/uploads/2012/01/nav_buttons.png" id="nav_buttons"/>

        <a href="../../abbey/events" id="events"></a>
        <a href="../../abbey/classes" id="classes"></a>
        <a href="../../abbey/rent" id="rent"></a>
        <a href="../../abbey/about" id="about"></a>
        
      <img src="../../abbey/wp-content/uploads/2012/01/fb-t-yt.png" id="fb-t-yt" />
      
        <a href="http://www.facbook.com/" id="facebook"></a>
        <a href="http://www.twitter.com/" id="twitter"></a>
        <a href="http://www.youtube.com" id="youtube"></a>
      
      <div id="page_wrapper">
        <div id="dynamic_bar">
          <img src="../../abbey/wp-content/uploads/2012/01/tweets_page.png" />
          <div class="feed"></div>
          <div class="dynamic">ect.</div>
          <div class="dynamic">ect</div>
        </div>
        <?php the_post() ?>
        <?php the_content() ?>
      </div>
      
        
    </div><!-- #floater -->
  </div><!-- #page -->
 
=======
<?php get_header() ?>
  <div id="line_holder"></div>
  <div id="page">
    <div id="floater">

      <a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/01/name.png" id="name_img"/></a>
      <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/01/icons.png" id="icons" />
      <br/>
      <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/01/nav_buttons.png" id="nav_buttons"/>

        <a href="<?php bloginfo('url'); ?>/events" id="events"></a>
        <a href="<?php bloginfo('url'); ?>/classes" id="classes"></a>
        <a href="<?php bloginfo('url'); ?>/rent" id="rent"></a>
        <a href="<?php bloginfo('url'); ?>/about" id="about"></a>
        
      <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/01/fb-t-yt.png" id="fb-t-yt" />
      
        <a href="http://www.facbook.com/" id="facebook"></a>
        <a href="http://www.twitter.com/" id="twitter"></a>
        <a href="http://www.youtube.com" id="youtube"></a>
      
      <div id="page_wrapper">
        <div id="dynamic_bar">
          <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/01/tweets_page.png" />
          <div class="feed"></div>
          <div class="dynamic">ect.</div>
          <div class="dynamic">ect</div>
        </div>
        <?php the_post() ?>
        <?php the_content() ?>
      </div>
      
        
    </div><!-- #floater -->
  </div><!-- #page -->

>>>>>>> cfbe174997c794e5e7d54e5b7c6a0d830496a2e4
<!-- <?php get_footer() ?>