<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
   <div class="modal-header">
   	<img align="left" width="50px" height="50px" src="./images/cog2.gif">

   	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
   	    
   		<img align="right" width="50px" height="50px" src="./images/cog2.gif">

   	<center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
   </div>
    <div class="modal-body">
     <div class="container-fluid">
     	<form method="post" action="insert.php" class="form-horizontal" enctype="multipart/form-data">
     		  <div class="row">
     		 <div class="col-lg-4">
     		 	<label class="control-label" style="position: relative; top:7px;">HOMEID</label>
     		 </div> 
     		 <div class="col-lg-8">
     		 	<input type="text" class="form-control" name="id">
     		 </div>	
     		 <div class="col-lg-4">
     		 	<label class="control-label" style="position: relative; top:7px;">ACTIVITIES</label>
     		 </div> 
     		 <div class="col-lg-8">
     		 	<input type="text" class="form-control" name="activities">
     		 </div>
     		 <div class="col-lg-4">
     		 	<label class="control-label" style="position: relative; top:7px;">POST</label>
     		 </div> 
     		 <div class="col-lg-8">
     		 	<input type="text" class="form-control" name="post">
     		 </div>		
     		  </div>
     		   <div class="moda-footer">
     		   	<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glypicon glypicon-remove"></span>Cancel</button>
     		     <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span>Save</button>
     		   </div>
     	</form>
     </div>	
    </div>	
    </div>	
    </div>
    </div>
