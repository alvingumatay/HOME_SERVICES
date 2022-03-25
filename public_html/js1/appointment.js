$(document).ready(function(){
$.datepicker.setDefaults({
dateFormat: 'yy-mm-dd'
});
$(function(){
$("#From").datepicker();
$("#to").datepicker();
});
$('#range').click(function(){
var From = $('#From').val();
var to = $('#to').val();
if(From != '' && to != '')
{
$.ajax({
url:"range.php",
method:"POST",
data:{From:From, to:to},
success:function(data)
{
$('#order_table').html(data);
}
});
}
else
{
alert("Please Select the Date");
}
});
});