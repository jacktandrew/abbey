<?php get_header() ?>
<body>
<div ID="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=220809154671406";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <div ID="line_holder"></div>
  <div ID="page">
    <div ID="floater">
		<div ID="fb-like-box" CLASS="fb-like" data-href="http://abbey.checksteveout.com/" data-send="false" data-layout="button_count" data-width="600" data-show-faces="false" data-font="verdana"></div>
      <a HREF="<?php bloginfo('url'); ?>/"><img SRC="<?php bloginfo('url'); ?>/wp-content/uploads/2012/01/name.png" ID="name_img"/></a>
      <img SRC="<?php bloginfo('url'); ?>/wp-content/uploads/2012/01/icons.png" ID="icons" />
      <br/>
      <img SRC="<?php bloginfo('url'); ?>/wp-content/uploads/2012/01/nav_buttons.png" ID="nav_buttons"/>

        <a HREF="<?php bloginfo('url'); ?>/events" ID="events"></a>
        <a HREF="<?php bloginfo('url'); ?>/classes" ID="classes"></a>
        <a HREF="<?php bloginfo('url'); ?>/rent" ID="rent"></a>
        <a HREF="<?php bloginfo('url'); ?>/about" ID="about"></a>
        
      <img SRC="<?php bloginfo('url'); ?>/wp-content/uploads/2012/01/fb-t-yt.png" ID="fb-t-yt" />
      
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
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : // begin secondary sidebar widgets ?>

			<?php endif; // end secondary sidebar widgets  ?>

			<h1 CLASS="entry-title">
				<?php
				echo empty( $post->post_parent ) ? !get_the_title( $post->ID ) : get_the_title( $post->ID );
				?>
			</h1>

			<?php the_post() ?>
			<?php the_content() ?>
			<div STYLE="margin-top:15px;" CLASS="fb-comments" data-href="<?php the_permalink() ?>" data-num-posts="4" data-width="440"></div>
		</div>
      </div>
      
        
    </div><!-- #floater -->
  </div><!-- #page -->

<!-- <?php get_footer() ?>