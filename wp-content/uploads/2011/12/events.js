// $(function(){
    // var jQuery = jQuery.noConflict();

      // Calendar
      jQuery.getJSON('https://www.google.com/calendar/feeds/e2avichif01pf6b1im7aa63gh4%40group.calendar.google.com/public/full?alt=json-in-script&orderby=starttime&max-results=15&singleevents=true&sortorder=ascending&futureevents=true&callback=?', function(json) {
          console.log(json);
          var html = "";

      jQuery.each(json.feed.entry, function(e, el) {
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
      

html += "<div class='anEvent'>" + "<h3>" + title + "</h3><h4>" + theDateString.slice(0,-5) + " at " + theHours + ":" + theMinutes + theMeridian + "</h4></div>";
    });
      jQuery("#calendar_event_box").html(html + "<br/><br/>");
    });
// });
