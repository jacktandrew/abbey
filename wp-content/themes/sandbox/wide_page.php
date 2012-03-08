<?php
/*
Template Name: Wide
*/
?>
<?php get_header() ?>
<body>
<div ID="fb-root"></div>
<div id="contact" class="top_tab">
  <div>
    <h4>NATHAN MARION</h4>
    <h5>Awesome Guy</h5>
    <a href='mailto:nathan@fremontabbey.org'>nathan@fremontabbey.org</a>
    </br>
    <h4>STEVEN HARDIN</h4>
    <h5>Booking/Rates/Inquiries</h5>
    <a href='mailto:steve@checksteveout.com'>steve@checksteveout.com</a>
    </br>
    <p>
      Fremont Abbey is located minutes 
      outside of downtown Seattle, and its
      setting is comfortable and close to
      nearby businesses.  Upon request, clients
      are welcome to attend sessions, though it
      is not required.
    </p>
  </div>  
  <h3>CONTACT</h3>
</div>
<div id="sponsors" class="top_tab">
  <div>
    <h4>NATHAN MARION</h4>
    <h5>Awesome Guy</h5>
    <a href='mailto:nathan@fremontabbey.org'>nathan@fremontabbey.org</a>
    </br>
    <h4>STEVEN HARDIN</h4>
    <h5>Booking/Rates/Inquiries</h5>
    <a href='mailto:steve@checksteveout.com'>steve@checksteveout.com</a>
    </br>
    <p>
      Fremont Abbey is located minutes 
      outside of downtown Seattle, and its
      setting is comfortable and close to
      nearby businesses.  Upon request, clients
      are welcome to attend sessions, though it
      is not required.
    </p>
  </div>
  <h3>SPONSORS</h3>
</div>

  <div id="wide_page">
  <div ID="line_holder"></div>
  <div ID="page">
    <div ID="floater">
      <div ID="fb-like-box" CLASS="fb-like" data-href="http://abbey.checksteveout.com/" data-send="false" data-layout="button_count" data-width="600" data-show-faces="false" data-font="verdana"></div>
      <a HREF="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('url'); ?>/wp-content/themes/sandbox/images/name.png" ID="name_img"/></a>
      <img src="<?php bloginfo('url'); ?>/wp-content/themes/sandbox/images/icons.png" ID="icons" />
      <br/>
      <img src="<?php bloginfo('url'); ?>/wp-content/themes/sandbox/images/nav_buttons.png" ID="nav_buttons"/>

      <a href="<?php bloginfo('url'); ?>/events" id="events" class="nav_links">
        <div>
          <img src="<?php bloginfo('url'); ?>/wp-content/themes/sandbox/images/events_tzoid.png" />
          EVENTS
        </div>
      </a>
      
      <a href="<?php bloginfo('url'); ?>/classes" id="classes" class="nav_links">
        <div>
          <img src="<?php bloginfo('url'); ?>/wp-content/themes/sandbox/images/classes_tzoid.png" />
          CLASSES
        </div>
      </a>
      
      <a href="<?php bloginfo('url'); ?>/rent" id="rent" class="nav_links">
        <div>
          <img src="<?php bloginfo('url'); ?>/wp-content/themes/sandbox/images/rent_tzoid.png" />
          RENT
        </div>
      </a>
      
      <a href="<?php bloginfo('url'); ?>/about" id="about" class="nav_links">
        <div>
          <img src="<?php bloginfo('url'); ?>/wp-content/themes/sandbox/images/about_tzoid.png" />
          ABOUT
        </div>
      </a>
        
        <div id="primary" class="sidebar">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : // begin primary sidebar widgets ?>
          <?php endif; // end primary sidebar widgets  ?>
        </div>
                
      <img src="<?php bloginfo('url'); ?>/wp-content/themes/sandbox/images/fb-t-yt.png" ID="fb-t-yt" />
      
        <a HREF="http://www.facbook.com/" ID="facebook"></a>
        <a HREF="http://www.twitter.com/" ID="twitter"></a>
        <a HREF="http://www.youtube.com" ID="youtube"></a>
      
        <div id="page_wrapper">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(3) ) : // begin secondary sidebar widgets ?>
          <?php endif; // end secondary sidebar widgets  ?>

        <h1 CLASS="entry-title">
          <?php
          echo empty( $post->post_parent ) ? !get_the_title( $post->ID ) : get_the_title( $post->ID );
          ?>
        </h1>

        <div id="dynamic_bar">
          <div id="secondary" class="sidebar">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : // begin secondary sidebar widgets ?>
            <?php endif; // end secondary sidebar widgets  ?>
          </div>
        </div>
      
        <div ID="content_container">      
          <?php the_post() ?>
          <?php the_content() ?>
        </div>
        <div STYLE="margin-top:15px;" CLASS="fb-comments" data-href="<?php the_permalink() ?>" data-num-posts="4" data-width="440"></div>
      </div> <!-- wide_page -->
      <?php get_footer() ?>
    </div> <!-- floater -->
  </div> <!-- page -->
  

