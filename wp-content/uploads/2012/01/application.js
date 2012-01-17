$(document).ready(function() {

  $('#events, #nav_menu-3').hover(
    function () {
      // $('#events').css('background', 'white')
      $('#events div, #nav_menu-3').show();
    },
    function () {
      // $('#events').css('background', 'none')
      $('#events div, #nav_menu-3').hide();
    }
  );

  $('#classes, #nav_menu-4').hover(
    function () {
      $('#classes div, #nav_menu-4').show();
    },
    function () {
      $('#classes div, #nav_menu-4').hide();
    }
  );

  $('#rent, #nav_menu-5').hover(
    function () {
      $('#rent div, #nav_menu-5').show();
    },
    function () {
      $('#rent div, #nav_menu-5').hide();
    }
  );

  $('#about, #nav_menu-6').hover(
    function () {
      $('#about div, #nav_menu-6').show();
    },
    function () {
      $('#about div, #nav_menu-6').hide();
    }
  );


});