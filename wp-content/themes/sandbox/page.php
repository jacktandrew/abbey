<?php get_header() ?>
  <div id="line_holder"></div>
  <div id="page">
    <div id="floater">

      <a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/01/name.png" id="name_img"/></a>
      <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/01/icons.png" id="icons" />
      <br/>
      <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/01/nav_buttons.png" id="nav_buttons"/>

      <a href="<?php bloginfo('url'); ?>/events" id="events" class="nav_links">
        <div>
          <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/01/events_tzoid.png" />
          EVENTS
        </div>
      </a>
      
      <a href="<?php bloginfo('url'); ?>/classes" id="classes" class="nav_links">
        <div>
          <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/01/classes_tzoid.png" />
          CLASSES
        </div>
      </a>
      
      <a href="<?php bloginfo('url'); ?>/rent" id="rent" class="nav_links">
        <div>
          <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/01/rent_tzoid.png" />
          RENT
        </div>
      </a>
      
      <a href="<?php bloginfo('url'); ?>/about" id="about" class="nav_links">
        <div>
          <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/01/about_tzoid.png" />
          ABOUT
        </div>
      </a>
        
        <div id="primary" class="sidebar">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : // begin primary sidebar widgets ?>
          <?php endif; // end primary sidebar widgets  ?>
        </div>
        
        
      <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/01/fb-t-yt.png" id="fb-t-yt" />
      
        <a href="http://www.facbook.com/" id="facebook"></a>
        <a href="http://www.twitter.com/" id="twitter"></a>
        <a href="http://www.youtube.com" id="youtube"></a>
      
      <div id="page_wrapper">
        <div id="dynamic_bar">
          <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/01/tweets_page.png" />
          <div class="feed"></div>

          <div id="secondary" class="sidebar">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : // begin secondary sidebar widgets ?>
            <?php endif; // end secondary sidebar widgets  ?>
          </div>

        </div>
        <?php the_post() ?>
        <?php the_content() ?>
      </div>
      
        
    </div>
  </div>
<!-- <?php get_sidebar(); ?>
<?php get_footer() ?>