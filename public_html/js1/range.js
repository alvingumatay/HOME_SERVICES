$(document).on("click",".upload",function(){
     var row=$(this);
    var id=$(this).attr("data-id");
    var contact=row.closest("tr").find("td:eq(2)").text();
   $("#contact").val(contact);
  });