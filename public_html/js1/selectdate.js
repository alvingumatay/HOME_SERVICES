$(function() {
$( '#tdate' ).datepicker({
   minDate: +3, 
   dateFormat: 'yy-mm-dd',
   beforeShowDay: disabledSunday
});
function disabledSunday(date) {
     var day = date.getDay();
     return [(day != 0), ''];
 }
});