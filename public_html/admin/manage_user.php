<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:index.php');
}
else{
if(isset($_GET['del']) && isset($_GET['name']))
{
$id=$_GET['del'];
$name=$_GET['name'];

$sql = "delete from users WHERE id=:id";
$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> execute();

$sql2 = "insert into deleteduser (email) values (:name)";
$query2 = $dbh->prepare($sql2);
$query2 -> bindParam(':name',$name, PDO::PARAM_STR);
$query2 -> execute();

$msg="Data Deleted successfully";
}

if(isset($_REQUEST['unconfirm']))
  {
  $aeid=intval($_GET['unconfirm']);
  $memstatus=1;
  $sql = "UPDATE users SET status=:status WHERE  id=:aeid";
  $query = $dbh->prepare($sql);
  $query -> bindParam(':status',$memstatus, PDO::PARAM_STR);
  $query-> bindParam(':aeid',$aeid, PDO::PARAM_STR);
  $query -> execute();
  $msg="Changes Sucessfully";
  }

  if(isset($_REQUEST['confirm']))
  {
  $aeid=intval($_GET['confirm']);
  $memstatus=0;
  $sql = "UPDATE users SET status=:status WHERE  id=:aeid";
  $query = $dbh->prepare($sql);
  $query -> bindParam(':status',$memstatus, PDO::PARAM_STR);
  $query-> bindParam(':aeid',$aeid, PDO::PARAM_STR);
  $query -> execute();
  $msg="Changes Sucessfully";
  }
   if(isset($_GET['reply']))
  {
  $replyto=$_GET['reply'];
  }   

  if(isset($_POST['submit']))
  { 
  $reciver=$_POST['email'];
    $message=$_POST['message'];
  $notitype='Send Message';
  $sender='Admin';
  
    $sqlnoti="insert into notification (notiuser,notireciver,notitype) values (:notiuser,:notireciver,:notitype)";
    $querynoti = $dbh->prepare($sqlnoti);
  $querynoti-> bindParam(':notiuser', $sender, PDO::PARAM_STR);
  $querynoti-> bindParam(':notireciver',$reciver, PDO::PARAM_STR);
    $querynoti-> bindParam(':notitype', $notitype, PDO::PARAM_STR);
    $querynoti->execute();

  $sql="insert into feedback (sender, reciver, feedbackdata) values (:user,:reciver,:description)";
  $query = $dbh->prepare($sql);
  $query-> bindParam(':user', $sender, PDO::PARAM_STR);
  $query-> bindParam(':reciver', $reciver, PDO::PARAM_STR);
  $query-> bindParam(':description', $message, PDO::PARAM_STR);
    $query->execute(); 
  $msg="Feedback Send";
  }
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>HOME CLEAN | SERVICES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <link rel = "shortcut icon" href = "../images/cicon.png" />
    <link rel="stylesheet" type="text/css" href="../css3/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css3/jquery.dataTables.min.css">
     <script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
    <link href="../font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style3.css">
    <link rel="stylesheet" type="text/css" href="./includes/style.css">
    <link href="///fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
    <link href="///fonts.googleapis.com/css?family=Federo" rel="stylesheet">
    <link href="///fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Bootstrap Datatables -->
  
    <!-- Bootstrap social button library -->
    
    <!-- Admin Stye -->
    <link rel="stylesheet" href="../css6/style.css">
    <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="../assets/css/style.css">
    <style>

  .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
  background: #dd3d36;
  color:#fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
  background: #5cb85c;
  color:#fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}

    </style>

</head>
<body>
  <?php include('../includes/header.php');?>
  <div class="ts-main-content">
  <?php include('../includes/leftbar.php');?>
  <div id="sidebar">
    <div class="toggle-btn" onclick="toggleSidebar()">
    <img src="../images/cog.gif" width="40px" height="40px">
   </div>
  <ul>
<center>
        <div class="panel panel-default">
      <hr/>
                  <div class="panel-heading">Edit Info</div>
<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

                  <div class="panel-body">
<form method="post" class="form-horizontal" enctype="multipart/form-data">

<div class="form-group">
  <label class="col-sm-2 control-label">Email<span style="color:red">*</span></label>
  <div class="col-sm-4">
  <input type="text" name="email" class="form-control"  required value="<?php echo htmlentities($replyto);?>">
  </div>
</div>

<div class="form-group">
  <label class="col-sm-2 control-label">Message<span style="color:red">*</span></label>
  <div class="col-sm-6">
  <textarea name="message" class="form-control" cols="30" rows="5"></textarea>
  </div>
</div>

<input type="hidden" name="editid" class="form-control" required value="<?php echo htmlentities($result->id);?>">

<div class="form-group">
  <div class="col-sm-8 col-sm-offset-2">
    <button class="btn btn-primary" name="submit" type="submit">Send Reply</button>
  </div>

</form>
    </div>
      </div>
      </div>
</center>
  </ul> 
  </div>
 <div class="content-wrapper">
        <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">

            <h2 class="page-title">Manage Users</h2>

            <!-- Zero Configuration Table -->
            <div class="panel panel-default">
              <div class="panel-heading">List Users</div>
              <div class="panel-body">
              <?php if($error){?><div class="errorWrap" id="msgshow"><?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap" id="msgshow"><?php echo htmlentities($msg); ?> </div><?php }?>
                <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                    <th>#</th>
                        <th>Image</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Gender</th>
                                                <th>Phone</th>
                                                <th>Designation</th>
                                                <th>Account</th>
                      <th>Action</th> 
                    </tr>
                  </thead>
                  
                  <tbody>

<?php $sql = "SELECT * from  users ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{       ?>  
                    <tr>
                      <td><?php echo htmlentities($cnt);?></td>
                      <td><img src="../images/<?php echo htmlentities($result->image);?>" style="width:50px; border-radius:50%;"/></td>
                                            <td><?php echo htmlentities($result->name);?></td>
                                            <td><?php echo htmlentities($result->email);?></td>
                                            <td><?php echo htmlentities($result->gender);?></td>
                                            <td><?php echo htmlentities($result->mobile);?></td>
                                            <td><?php echo htmlentities($result->designation);?> 
                                            <td>
                                            
                                            <?php if($result->status == 1)
                                                    {?>
                                                    <a href="userlist.php?confirm=<?php echo htmlentities($result->id);?>" onclick="return confirm('Do you really want to Un-Confirm the Account')">Confirmed <i class="fa fa-check-circle"></i></a> 
                                                    <?php } else {?>
                                                    <a href="userlist.php?unconfirm=<?php echo htmlentities($result->id);?>" onclick="return confirm('Do you really want to Confirm the Account')">Un-Confirmed <i class="fa fa-times-circle"></i></a>
                                                    <?php } ?>
</td>
                                            </td>
                      
<td>
<a href="edit-user.php?edit=<?php echo $result->id;?>" onclick="return confirm('Do you want to Edit');">&nbsp; <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;
<a href="userlist.php?del=<?php echo $result->id;?>&name=<?php echo htmlentities($result->email);?>" onclick="return confirm('Do you want to Delete');"><i class="fa fa-trash" style="color:red"></i></a>&nbsp;&nbsp;
</td>
                    </tr>
                    <?php $cnt=$cnt+1; }} ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>
</div>
</div>
  
</body>
<script>
        function toggleSidebar(){
            document.getElementById("sidebar").classList.toggle('active');
        }
   </script>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
 <script src="../js2/jquery.min.js"></script>
  <script src="../js2/bootstrap-select.min.js"></script>
  <script src="../js2/bootstrap.min.js"></script>
  <script src="../js2/jquery.dataTables.min.js"></script>
  <script src="../js2/dataTables.bootstrap.min.js"></script>
  <script src="../js2/Chart.min.js"></script>
  <script src="../js2/fileinput.js"></script>
  <script src="../js2/chartData.js"></script>
  <script src="../js2/main.js"></script>
  <script type="text/javascript">
         $(document).ready(function () {          
          setTimeout(function() {
            $('.succWrap').slideUp("slow");
          }, 3000);
          });
  </script>
  <script type="text/javascript">
  $(window).load(function(){
      $("#overlay").delay(2000).fadeOut("slow");
      
  });
</script>
<script src="../assets/js/util.js"></script>
<script src="../assets/js/main.js"></script>  
</html>
<?php } ?>