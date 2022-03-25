

  <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Home Activity Task:</h4>
        </div>
        <div class="container"> 
        <div class="modal-body">  
        <form id = "form_home_tasks"  method="POST"  enctype="multipart/form-data">  
        <div class="row">
        <div class="col-lg-2">
          <label class="control-label" style="position: relative; top:7px;">HOME ACTIVITY NAME:</label>
        </div>
        <div class="col-lg-10">
          <input type="text" style="width: 300px;"  class="form-control"   name="activity">
          <input class="hide" style="width: 300px;"     name="tdate" value="<?php echo date('Y-m-d')?>">
          <input type="hidden" style="width: 300px;"  class="form-control"   name="dtime" value="">
          <input  class="hide" class="form-control"   name="status" value="not yet started">
         </div>
         </div>
        </div>    
       </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span>Save</button>
      
         </form>
        </div>
      </div>
      
    </div>
  </div>


