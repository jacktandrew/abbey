<?php
/*
Template Name: Splash Page
*/
?>
<?php get_header() ?>

<body ID="no_overflow">

  <div ID="splash">
    <div ID="line_holder"></div>
    <img SRC="<?php bloginfo('url'); ?>/wp-content/uploads/2011/12/splash-crop.png" ID="main_img" />
    <a HREF="http://www.facebook.com/FremontAbbey?v=app_2344061033" TARGET="_blank" ID="icons"></a>
    <a HREF="<?php bloginfo('url'); ?>/events" ID="events">
	<img SRC="<?php bloginfo('url'); ?>/wp-content/uploads/2011/12/splash-events-off.png" CLASS="off-state" />
	<img SRC="<?php bloginfo('url'); ?>/wp-content/uploads/2011/12/splash-events-on.png" CLASS="on-state" />    
    </a>

    <a HREF="<?php bloginfo('url'); ?>/classes" ID="classes">
	<img SRC="<?php bloginfo('url'); ?>/wp-content/uploads/2011/12/splash-classes-off.png" CLASS="off-state" />
	<img SRC="<?php bloginfo('url'); ?>/wp-content/uploads/2011/12/splash-classes-on.png" CLASS="on-state" />
    </a>

    <a HREF="<?php bloginfo('url'); ?>/about" ID="about">
	<img SRC="<?php bloginfo('url'); ?>/wp-content/uploads/2011/12/splash-about-off.png" CLASS="off-state" />
	<img SRC="<?php bloginfo('url'); ?>/wp-content/uploads/2011/12/splash-about-on.png" CLASS="on-state" />
    </a>

    <a HREF="<?php bloginfo('url'); ?>/rent" ID="rent">
	<img SRC="<?php bloginfo('url'); ?>/wp-content/uploads/2011/12/splash-rent-off.png" CLASS="off-state" />
	<img SRC="<?php bloginfo('url'); ?>/wp-content/uploads/2011/12/splash-rent-on.png" CLASS="on-state" />
    </a>

    <a HREF="<?php bloginfo('url'); ?>/tweets" ID="tweets">
	<img SRC="<?php bloginfo('url'); ?>/wp-content/uploads/2011/12/splash-tweets.png" />
	<div CLASS="feed"></div>
	<div CLASS="twitter_list"></div>
    </a>

  <svg id="svg_box" viewBox="0 0 200 4000" height="2000" width="4000" xmlns="http://www.w3.org/2000/svg" version="1.1">    
    
    <line x1=""/>

    <line x1="-100" y1="0" x2="750" y2="850"
                stroke-width="1" stroke="black"  />

    <line x1="2300" y1="1679" x2="4740" y2="4069"
                stroke-width="28" stroke="ff6e00"  />

    <polygon fill="#efecd6" stroke="#000" stroke-width="0" 
              points="1605,1700
                      2295,1700
                      4735,4060                      
                      1605,4060
                      " />
  </svg>
  </div>

</body>