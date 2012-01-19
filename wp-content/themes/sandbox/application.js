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
  //  console.log(pageTitle);
  //  console.log($('title').html().slice(0,4));
    if($('title').html().slice(0,4) === pageTitle){
      $('#line_holder').css('background-image', imgFile)
      console.log($('#line_holder').css('background-image', imgFile));
    }
  };

backgroundSwap('Clas', "url('../abbey/wp-content/uploads/2012/01/diag-classes.png')");
backgroundSwap('Even', "url('../abbey/wp-content/uploads/2012/01/diag-events.png')");
backgroundSwap('Rent', "url('../abbey/wp-content/uploads/2012/01/diag-rent.png')");
backgroundSwap('Abou', "url('../abbey/wp-content/uploads/2012/01/diag-about.png')");


// setting the wrapper height
  footerOffSet = $('#footer').offset();  
  $('#page_wrapper').css('height', (footerOffSet.top + 30));

// setting the line holder height to extend past footer
  $('#line_holder').css('height', (footerOffSet.top + 74));
  
});

