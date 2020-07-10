<div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
   <div class="modal-header">
   	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
   	<center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
   </div>
    <div class="modal-body">
        <?php 
       $edit=$mysqli->query("select * from services where id=".$row['id']);
       $erow=$edit->fetch_assoc();
      ?>
     <div class="container-fluid">
     	<form method="post" action="update.php" class="form-horizontal" enctype="multipart/form-data">
     		  <div class="row">
     		 <div class="col-lg-4">
     		 	<label class="control-label" style="position: relative; top:7px;">HOMEID</label>
     		 </div> 
     		 <div class="col-lg-8">
     		 	<input type="text" class="form-control" name="id" value="<?php echo $erow['id']; ?>">
     		 </div>	
     		 <div class="col-lg-4">
     		 	<label class="control-label" style="position: relative; top:7px;">ACTIVITIES</label>
     		 </div> 
     		 <div class="col-lg-8">
     		 	<input type="text" class="form-control" name="activities" value="<?php echo $erow['activities']; ?>">
     		 </div>
     		 <div class="col-lg-4">
     		 	<label class="control-label" style="position: relative; top:7px;">POST</label>
     		 </div> 
     		 <div class="col-lg-8">
     		 	<input type="text" class="form-control" name="post" value="<?php echo $erow['post']; ?>">
     		 </div>		
     		  </div>
     		   <div class="moda-footer">
     		   	<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glypicon glypicon-remove"></span>Cancel</button>
     		     <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span>UPDATE</button>
     		   </div>
     	</form>
     </div>	
    </div>	
    </div>	
    </div>
    </div>
