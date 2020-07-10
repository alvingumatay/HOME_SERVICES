<div class="modal fade" id="detail<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
   <div class="modal-content">
   	<div class="header">
   		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
       <h3>Profile Details</h3>
   	</div>
   	<div class="modal-body">
      <?php 
       $edit=$mysqli->query("select * from services where id=".$row['id']);
       $erow=$edit->fetch_assoc();
      ?>
    <div class="container-fluid">
    	<form method="post" action="update.php?id=<?php echo $row['id']; ?>" enctype="multipart/form-data">
        <div class="row">
          <div class="col-lg-4" align="left">
          <label style="position: relative; top: 7px;">HOMID:</label>
        </div>
        <div class="col-lg-8" align="left">
        <?php echo $erow['id']; ?>
       </div>
        </div>
        <div style="height:10px;"></div>
        <div class="row">
          <div class="col-lg-4" align="left">
          <label style="position: relative; top: 7px;">ACTIVITIES:</label>
        </div>
        <div class="col-lg-8" align="left">
        <?php echo $erow['activities']; ?>
       </div>
        </div>
        <div style="height:10px;"></div>
        <div class="row">
          <div class="col-lg-4" align="left">
          <label style="position: relative; top: 7px;">POST:</label>
        </div>
        <div class="col-lg-8" align="left">
        <?php echo $erow['post']; ?>
       </div>
        </div>
      </form>
    </div>		
   	</div>
   	<div class="modal-footer">
   		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   	</div>
   </div>	 	
	</div>
</div>


