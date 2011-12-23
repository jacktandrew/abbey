<?php get_header() ?>

<script>
 $(function(){  
    $('.feed')
      .slq().facebook({username: 'FremontAbbey', posts: 8, relativeDates: false })
      .slq().twitter({username: 'fremontabbey', posts: 6, relativeDates: false })
      .slq().twitterList({username: 'fremontabbey', listname: 'core', posts: 2 })
});
</script>

<body>
  <div id="wrapper">
    <div id="line_holder">  </div>
    <img src="http://localhost:8888/abbey/wp-content/uploads/2011/12/splash-crop.png" id="splash" />
    <a href="http://localhost:8888/abbey/events" id="events"><h2>EVENTS</h2><h3>AT THE ABBEY</h3></a>
    <a href="http://localhost:8888/abbey/classes" id="classes"><h2>CLASSES</h2><h3>AT THE ABBEY</h3></a>
    <a href="http://localhost:8888/abbey/about" id="about"><h2>ABOUT</h2><h3>THE ABBEY</h3></a>
    <a href="http://localhost:8888/abbey/rent" id="rent"><h2>RENT</h2><h3>THE ABBEY</h3></a>
    <a id="tweets"><h2>TWEETS</h2>
	<div class="feed"></div>
	<div class="twitter_list"></div>
    </a>
<!--
Awesome running inot you tonight at the KROQ madness.  Happy Holidays to you and yours.  16 hours ago<br/><br/>also, CHAMPAGNE. 2011/12/09"<br/><br/>other than the bag of milk chocolate chips I only ate half of, I'm pretty sure our secret snack sitch is woefully neglected.  2011/12/09
-->


  <svg id="svg_box" viewBox="0 0 200 4000" height="2000" width="4000" xmlns="http://www.w3.org/2000/svg" version="1.1">    
    
    <line x1=""/>

    <line x1="0" y1="0" x2="750" y2="850"
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