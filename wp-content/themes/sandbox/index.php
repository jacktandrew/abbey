<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 */

get_header() ?>

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
<script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=220809154671406";
    fjs.parentNode.insertBefore(js, fjs);
  }
  (document, 'script', 'facebook-jssdk'));
</script>

  <div ID="line_holder"></div>
  <div ID="page">
    <div ID="floater">
		<div ID="fb-like-box" class="fb-like" data-href="http://abbey.checksteveout.com/" data-send="false" data-layout="button_count" data-width="600" data-show-faces="false" data-font="verdana"></div>
      <a HREF="<?php bloginfo('url'); ?>/"><img SRC="<?php bloginfo('url'); ?>/wp-content/themes/sandbox/images/name.png" ID="name_img"/></a>
      <img SRC="<?php bloginfo('url'); ?>/wp-content/themes/sandbox/images/icons.png" ID="icons" />
      <br/>
      <img SRC="<?php bloginfo('url'); ?>/wp-content/themes/sandbox/images/nav_buttons.png" ID="nav_buttons"/>
      <a HREF="<?php bloginfo('url'); ?>/events" ID="events"></a>
      <a HREF="<?php bloginfo('url'); ?>/classes" ID="classes"></a>
      <a HREF="<?php bloginfo('url'); ?>/rent" ID="rent"></a>
      <a HREF="<?php bloginfo('url'); ?>/about" ID="about"></a>
      <img SRC="<?php bloginfo('url'); ?>/wp-content/themes/sandbox/images/fb-t-yt.png" ID="fb-t-yt" />
      <a HREF="http://www.facbook.com/" ID="facebook"></a>
      <a HREF="http://www.twitter.com/" ID="twitter"></a>
      <a HREF="http://www.youtube.com" ID="youtube"></a>
      
      <div ID="page_wrapper">
        <div ID="dynamic_bar">
          <h2 STYLE="margin:20px 0 5px -2px;">Tweets</h2>
          <div CLASS="feed"></div>
          <div CLASS="dynamic">
		  	  <?php get_sidebar() ?>
		    </div>
      </div>
        
		  <div ID="content_container">
        <h1 CLASS="entry-title"><?php the_title() ?></h1>        
        <?php the_post() ?>
        <?php the_content() ?>
      </div>
      <div STYLE="margin-top:15px;" CLASS="fb-comments" data-href="<?php the_permalink() ?>" data-num-posts="4" data-width="440"></div>
    </div> <!-- page_wrapper -->
    <?php get_footer() ?>
  </div> <!-- floater -->
</div> <!-- page -->