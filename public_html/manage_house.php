<?php include'./includes/insert.php'?> 
<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:index.php');
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME CLEAN SERVICES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <link rel = "shortcut icon" href = "./images/cicon.png" />   
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/jquery.dataTables.min.css">
    <link href="./font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/style3.css">
    <link rel="stylesheet" type="text/css" href="./css/style4.css">
   <link rel="stylesheet" href="./css6/style.css"> 
    <link rel="stylesheet" type="text/css" href="./css/css2.css">
    <link rel="stylesheet" href="./css/main.css">
    <link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
    <script type="text/javascript" src="./js1/jquery.min.js"></script>
    <script type="text/javascript" src="./js1/bootstrap.min.js"></script>
    <!-- Admin Stye -->
  
    
</head>
<body>

	<?php include('includes/header.php');?>
  <div class="ts-main-content">
  <?php include('includes/leftbar.php');?>

 <div class="content-wrapper">
  <div class="container-fluid">
 <br/> <br/> 
          <center><div class="clock">
            <br/> 
              <span class="clock-time"></span>
              <span class="clock-ampm"></span>
            </div>
          </center>

         

 <div class="panel panel-default">
  <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm" style = "float:right; margin-right:100px; margin-top: 3px;"><span class="glyphicon glyphicon-plus"></span> Add New</a> 
    <div class="panel-heading"><center><font color="green"><b>DAILY HOME TASKS</b></font></center>
      </div>

    <div class="panel-body">
     <span id="message"></span>
     <div class="table-responsive" id="user_data">
      
     </div>
     <script>

     $(document).ready(function(){
      
      load_user_data();
      
      function load_user_data()
      {
       var action = 'fetch';
       $.ajax({
        url:'action.php',
        method:'POST',
        data:{action:action},
        success:function(data)
        {
         $('#user_data').html(data);
        }
       });
      }
      
      $(document).on('click', '.action', function(){
       var id = $(this).data('id');
       var dtime = $(this).data('dtime');
       var status = $(this).data('status');
       var action = 'change_status';
       
        this.dtime=dtime;
       console.log(this.dtime);
  
       $('#message').html('');
       if(confirm("Are you Sure you want to change status of this User?"))
       {
        $.ajax({
         url:'action.php',
         method:'POST',
         data:{id:id, dtime:dtime, status:status, action:action},
         success:function(data)
         {
          if(data != '')
          {
           load_user_data();
           $('#message').html(data);
          }
         }
        });
       }
       else
       {
        return false;
       }
      });
       

     });
  
     </script>
       <?php include('show_add_modal.php');?>
    </div>
   </div>


</div>
</div>
</div>

	
</body>
<script type="text/javascript" src="./js1/dtime.js"></script>
<script type="text/javascript" src="./js1/jquery.min.js"></script>
<script type="text/javascript" src="./js1/bootstrap.min.js"></script>

  <script src="./js2/main.js"></script>
</html>
