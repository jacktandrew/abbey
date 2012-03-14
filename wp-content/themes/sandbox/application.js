$(document).ready(function() {

// linking the nav buttons with the dynamically generated sub menus
  function dropDownMenu(nav, subNav){
    $(nav + ',' + subNav).hover(function () {
      $(nav + ' div' + ',' + subNav).show();
    },function () {
      $(nav + ' div' + ',' + subNav).hide();
    });
  }
    
dropDownMenu('#events',  '#nav_menu-3');
dropDownMenu('#classes', '#nav_menu-4');
dropDownMenu('#rent',    '#nav_menu-5');
dropDownMenu('#about',   '#nav_menu-6');

// toggle the contact and sponsor slide down boxes
  function tabSlide(element){    
    $(element).click(function(){
      if($('#contact').height() === $('#sponsors').height() || $(element).height() > 50){
        $(element + ' div').slideToggle();
      }else if($('#contact').height() > $('#sponsors').height()){
        $('#contact div').slideToggle();
        $(element + ' div').delay(500).slideToggle();
      }else if($('#sponsors').height() > $('#contact').height()){
        $('#sponsors div').slideToggle();
        $(element + ' div').delay(500).slideToggle();
      }
    });
  }

  tabSlide('#contact');
  tabSlide('#sponsors');

  if($("meta[property='og:url']").attr('content').slice(17,21) === '8888'){

    console.log('Site is running on localhost');
    // changes the color of the lines according to the title of the page
    sliceTitle = $("meta[property='og:url']").attr('content').slice(28,32);

    function backgroundSwap(pageTitle, imgFile){
      if(sliceTitle === pageTitle){
        $('body').css('background-image', imgFile)
      }
    };

    backgroundSwap('even', "url('/abbey/wp-content/themes/sandbox/images/diag2-events.png')");
    backgroundSwap('clas', "url('/abbey/wp-content/themes/sandbox/images/diag2-classes.png')");
    backgroundSwap('rent', "url('/abbey/wp-content/themes/sandbox/images/diag2-rent.png')");
    backgroundSwap('abou', "url('/abbey/wp-content/themes/sandbox/images/diag2-about.png')");

    if($("meta[property='og:url']").attr('content').slice(28,32) == 'clas'){
      $('#page_wrapper .fb-comments').css({'float':'right', 'margin-right':'10px'});
    }
    
  }else{

    console.log('Site is running on dev server')
    // changes the color of the lines according to the title of the page
    sliceTitle = $("meta[property='og:url']").attr('content').slice(31,35);

    function backgroundSwap(pageTitle, imgFile){
      if(sliceTitle === pageTitle){
        $('body').css('background-image', imgFile)
      }
    };

    backgroundSwap('even', "url('/wp-content/themes/sandbox/images/diag2-events.png')");
    backgroundSwap('clas', "url('/wp-content/themes/sandbox/images/diag2-classes.png')");
    backgroundSwap('rent', "url('/wp-content/themes/sandbox/images/diag2-rent.png')");
    backgroundSwap('abou', "url('/wp-content/themes/sandbox/images/diag2-about.png')");

    if($("meta[property='og:url']").attr('content').slice(31,35) == 'even'){
      $('#wide_page #page_wrapper .fb-comments').css({'float':'right', 'margin-right':'10px'});
    }
  }
});



//    $('#content_container').append("<h1 id='events_header'>Upcoming Events</h1><div id='refresh_events'><img src='/wp-content/themes/sandbox/images/loader-static.png'/><img src='/wp-content/themes/sandbox/images/loader-moving.gif'/></div><div id='calendar_event_box'></div>");