$(document).ready(function(){
    var date_input=$('input[name="tdate"]'); //our date input has the name "date"
    var container=$('.panel-body form').length>0 ? $('.panel-body form').parent() : "body";
    date_input.datepicker({
    format: 'yyyy-mm-dd',
    container: container,
    todayHighlight: true,
    autoclose: true,
    })
    })