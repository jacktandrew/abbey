// Calendar
var calObj = $.jStorage.get("calKey");
if(!calObj){   
 jQuery.getJSON('https://www.google.com/calendar/feeds/e2avichif01pf6b1im7aa63gh4%40group.calendar.google.com/public/full?alt=json-in-script&orderby=starttime&max-results=5&singleevents=true&sortorder=ascending&futureevents=true&callback=?', function(data) {
   calObj = data;
   $.jStorage.set("calKey", calObj);
 });     
}

function showCalendar(){
  var calCont = "";
  var day = "";  
  jQuery.each(calObj.feed.entry, function(e, el) {
    var title = el.title.$t
    var date = new Date(el.gd$when[0].startTime)
    var description = (el.content.$t)
    var theDateString = date.toDateString()

    if(date.getHours() <= 12) {
      var theHours = date.getHours()
      var theMeridian = "am"
    } else {
      var theHours = date.getHours() - 12
      var theMeridian = "pm"
    };

    if(date.getMinutes() === 0) {
      var theMinutes = "00"
    } else {
      var theMinutes = date.getMinutes()
    };

    day += theDateString.substr(8,2)

    if(day.substr(-2,2) != day.substr(-4,2) || day.length <= 2)
    {
      calCont += "<div class='aDay'><h2>" + theDateString.slice(0,-5) + "</h2></div>";
      calCont += "<div class='anEvent'><h4>" + title + "</h4><h5> at " + theHours + ":" + theMinutes + theMeridian + "</h5></div>";
    } else {
      calCont += "<div class='anEvent'><h4>" + title + "</h4><h5> at " + theHours + ":" + theMinutes + theMeridian + "</h5></div>";
    }
  });//.each
  jQuery('#calendar_event_box').append(calCont)
}

jQuery(document).ready(function($) {
  showCalendar();
  
  jQuery('#refresh_events').click(function(){
    jQuery.jStorage.flush('calKey')
    jQuery.getJSON('https://www.google.com/calendar/feeds/e2avichif01pf6b1im7aa63gh4%40group.calendar.google.com/public/full?alt=json-in-script&orderby=starttime&max-results=5&singleevents=true&sortorder=ascending&futureevents=true&callback=?', function(data) {
      calObj = data;
      $.jStorage.set("calKey", calObj);
      console.log("Obj was set using the getJSON")
      jQuery('#calendar_event_box').html('')
      showCalendar();
    });
  });
});
  
