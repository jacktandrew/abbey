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
    if($('title').html().slice(0,4) === pageTitle){
      $('#line_holder').css('background-image', imgFile)
    }
  };

backgroundSwap('Clas', "url('wp-content/themes/sandbox/images/diag-classes.png')");
backgroundSwap('Even', "url('wp-content/themes/sandbox/images/diag-events.png')");
backgroundSwap('Rent', "url('wp-content/themes/sandbox/images/diag-rent.png')");
backgroundSwap('Abou', "url('wp-content/themes/sandbox/images/diag-about.png')");

// setting the wrapper height
  if($('#footer').is('*')) {
    footerOffSet = $('#footer').offset();
    $('#page_wrapper').css('height', footerOffSet.top);

  // setting the line holder height to extend past footer
    $('#line_holder').css('height', (footerOffSet.top + 80));
  }

  if($("meta[property='og:url']").attr('content').slice(28,32) == 'clas'){
    $('#content_container').append("<div id='calendar_event_box'><input type='button' id='refresh_events' value='Refresh'/></div>");
    $('#line_holder').css('height', (footerOffSet.top + 280));
    $('#page_wrapper').css('height', (footerOffSet.top + 200));
  }


});

