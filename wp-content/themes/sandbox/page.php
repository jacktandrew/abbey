<?php get_header() ?>
<body>
<div ID="fb-root"></div>
  <div ID="line_holder"></div>
  <div ID="page">
    <div ID="floater">
      <div ID="fb-like-box" CLASS="fb-like" data-href="http://abbey.checksteveout.com/" data-send="false" data-layout="button_count" data-width="600" data-show-faces="false" data-font="verdana"></div>
      <a HREF="<?php bloginfo('url'); ?>/"><img SRC="<?php bloginfo('url'); ?>/wp-content/uploads/2012/01/name.png" ID="name_img"/></a>
      <img SRC="<?php bloginfo('url'); ?>/wp-content/uploads/2012/01/icons.png" ID="icons" />
      <br/>
      <img SRC="<?php bloginfo('url'); ?>/wp-content/uploads/2012/01/nav_buttons.png" ID="nav_buttons"/>

      <a href="<?php bloginfo('url'); ?>/events" id="events" class="nav_links">
        <div>
          <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/01/events_tzoid.png" />
          EVENTS
        </div>
      </a>
      
      <a href="<?php bloginfo('url'); ?>/classes" id="classes" class="nav_links">
        <div>
          <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/01/classes_tzoid.png" />
          CLASSES
        </div>
      </a>
      
      <a href="<?php bloginfo('url'); ?>/rent" id="rent" class="nav_links">
        <div>
          <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/01/rent_tzoid.png" />
          RENT
        </div>
      </a>
      
      <a href="<?php bloginfo('url'); ?>/about" id="about" class="nav_links">
        <div>
          <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/01/about_tzoid.png" />
          ABOUT
        </div>
      </a>
        
      <div id="primary" class="sidebar">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : // begin primary sidebar widgets ?>
        <?php endif; // end primary sidebar widgets  ?>
      </div>
                
      <img SRC="<?php bloginfo('url'); ?>/wp-content/uploads/2012/01/fb-t-yt.png" ID="fb-t-yt" />
      
        <a HREF="http://www.facbook.com/" ID="facebook"></a>
        <a HREF="http://www.twitter.com/" ID="twitter"></a>
        <a HREF="http://www.youtube.com" ID="youtube"></a>
      
      <div id="page_wrapper">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(3) ) : // begin secondary sidebar widgets ?>
        <?php endif; // end secondary sidebar widgets  ?>

        <div id="dynamic_bar">
          <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2012/01/tweets_page.png" />
          <div class="feed"></div>

          <div id="secondary" class="sidebar">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : // begin secondary sidebar widgets ?>
            <?php endif; // end secondary sidebar widgets  ?>
          </div>
        </div>

        <h1 CLASS="entry-title">
          <?php
          echo empty( $post->post_parent ) ? !get_the_title( $post->ID ) : get_the_title( $post->ID );
          ?>
        </h1>

        <div ID="content_container">
          <?php the_post() ?>
          <?php the_content() ?>
        </div>
        <div STYLE="margin-top:15px;" CLASS="fb-comments" data-href="<?php the_permalink() ?>" data-num-posts="4" data-width="700"></div>
      </div> <!-- page_wrapper -->
      <?php get_footer() ?>
    </div> <!-- floater -->

  </div> <!-- page -->

