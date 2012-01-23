$(document).ready(function() {

// linking the nav buttons with the dynamically generated sub menus
  function dropDownMenu(nav, subNav)
    {
      $(nav + ',' + subNav).hover(
        function () {
          $(nav + ' div' + ',' + subNav).show();
        },
        function () {
          $(nav + ' div' + ',' + subNav).hide();
        }
      );
    }
    
dropDownMenu('#events',  '#nav_menu-3');
dropDownMenu('#classes', '#nav_menu-4');
dropDownMenu('#rent',    '#nav_menu-5');
dropDownMenu('#about',   '#nav_menu-6');

// changes the color of the lines according to the title of the page
  function backgroundSwap(pageTitle, imgFile){
    if($("meta[property='og:url']").attr('content').slice(28,32) === pageTitle){
      $('#line_holder').css('background-image', imgFile)
    }
  };

backgroundSwap('even', "url('/abbey/wp-content/themes/sandbox/images/diag-events.png')");
backgroundSwap('clas', "url('/abbey/wp-content/themes/sandbox/images/diag-classes.png')");
backgroundSwap('rent', "url('/abbey/wp-content/themes/sandbox/images/diag-rent.png')");
backgroundSwap('abou', "url('/abbey/wp-content/themes/sandbox/images/diag-about.png')");

// setting the wrapper height
  if($('#footer').is('*')) {
    footerOffSet = $('#footer').offset();
    $('#page_wrapper').css('height', (footerOffSet.top + 20));

  // setting the line holder height to extend past footer
    $('#line_holder').css('height', (footerOffSet.top + 80));
  }

  if($("meta[property='og:url']").attr('content').slice(28,32) == 'clas'){
    $('#content_container').append("<h1 id='events_header'>Upcoming Events</h1><div id='refresh_events'><img src='wp-content/themes/sandbox/images/loader-static.png'/><img src='wp-content/themes/sandbox/images/loader-moving.gif'/></div><div id='calendar_event_box'></div>");
    
    $('#wide_page #page_wrapper').css('height', (footerOffSet.top + 920));
    $('#wide_page #line_holder').css('height', (footerOffSet.top + 1000));
    $('#wide_page #page_wrapper .fb-comments').css('float', 'right');
    console.log('Classes page css must be set manually according to the height of dynamic content')
  }

});

