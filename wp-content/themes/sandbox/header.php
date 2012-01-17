<<<<<<< HEAD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ) ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
<?php wp_head() // For plugins ?>
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script type="text/javascript" src="wp-content/uploads/2011/12/jquery.svg_.js"></script>
  <script type="text/javascript" src="wp-content/uploads/2011/12/events.js"></script>
  <script type="text/javascript" src="wp-content/uploads/2012/01/application.js"></script>
  <script type="text/javascript" src="wp-content/uploads/2011/12/jquery.soliloquy.js"></script>



<script>
 $(function(){  
    $('.feed')
      .slq().facebook({username: 'FremontAbbey', posts: 8, relativeDates: false })
      .slq().twitter({username: 'fremontabbey', posts: 4, relativeDates: false })
      .slq().twitterList({username: 'fremontabbey', listname: 'core', posts: 2 })
});
</script>

      <script>
        window.fbAsyncInit = function() {
          FB.init({
            appId      : '154293281341644',
            status     : true, 
            cookie     : true,
            xfbml      : true,
            oauth      : true,
          });
        };
        (function(d){
           var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
           js = d.createElement('script'); js.id = id; js.async = true;
           js.src = "//connect.facebook.net/en_US/all.js";
           d.getElementsByTagName('head')[0].appendChild(js);
         }(document));
      </script>
</head>

=======
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ) ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
<?php wp_head() // For plugins ?>
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/uploads/2011/12/jquery.svg_.js"></script>
  <script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/uploads/2011/12/events.js"></script>
  <script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/uploads/2011/12/jquery.soliloquy.js"></script>

<script>
 $(function(){  
    $('.feed')
      .slq().facebook({username: 'FremontAbbey', posts: 8, relativeDates: false })
      .slq().twitter({username: 'fremontabbey', posts: 4, relativeDates: false })
      .slq().twitterList({username: 'fremontabbey', listname: 'core', posts: 2 })
});
</script>

      <script>
        window.fbAsyncInit = function() {
          FB.init({
            appId      : '154293281341644',
            status     : true, 
            cookie     : true,
            xfbml      : true,
            oauth      : true,
          });
        };
        (function(d){
           var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
           js = d.createElement('script'); js.id = id; js.async = true;
           js.src = "//connect.facebook.net/en_US/all.js";
           d.getElementsByTagName('head')[0].appendChild(js);
         }(document));
      </script>
</head>

>>>>>>> 3d10743e52500ff0ed759318e8929a97b52495b7
