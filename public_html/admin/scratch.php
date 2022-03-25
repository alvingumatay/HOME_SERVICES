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
    <link rel = "shortcut icon" href = "../images/cicon.png" />   
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.min.css">
    <link rel = "stylesheet" type = "text/css" href = "../css/jquery-ui.css"> 
    <link href="../font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style3.css">
    <link rel="stylesheet" type="text/css" href="../css/style4.css">
   <link rel="stylesheet" href="../css6/style.css"> 
    <link rel="stylesheet" type="text/css" href="../css/css2.css">
    <link rel="stylesheet" href="../css/main.css">
    <link href="///fonts.googleapis.com/css?family=Federo" rel="stylesheet">
    <link href="///fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link href="///fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
    <script type="text/javascript" src="../js1/jquery.min.js"></script>
    <script type="text/javascript" src="../js1/bootstrap.min.js"></script>
    <!-- Admin Stye -->
  
    
</head>
<body>

  <div class="ts-main-content">
  <?php include('includes/leftbar.php');?>

 <div class="content-wrapper">
  <div class="container-fluid">
      
    <div class = "panel panel-success">
      <div class = "panel-heading">
        <label>PATIENTS LIST</Label>
      </div>
      <div class = "panel-body">
        <button id = "show_itr" class = "btn btn-success"><span class = "glyphicon glyphicon-plus"></span> ADD PATIENT</button>
        <br />
        <br />
        <div class="table-responsive">
        <table id = "table" class = "display" width = "100%" cellspacing = "0">
          <thead>
            <tr>
              <th>ID No.</th>
              <th>Name</th>
              <th><center>Action</center></th>
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
        {       
         $sql ="SELECT activity from home_tasks";
         $query = $dbh -> prepare($sql);;
         $query->execute();
         $results=$query->fetchAll(PDO::FETCH_OBJ);
         $query=$query->rowCount();
          ?>


            <tr>
              <td><?php echo htmlentities($cnt);?></td>
              <td><?php echo htmlentities($result->name);?></td>
             
              <td><center><a href = "manage_house.php?id=<?php echo htmlentities($result->id);?>" class = "btn btn-sm btn-info">Process <span class = "badge"><?php echo htmlentities($query);?>
                 </span></a></span></a>
                <a href = "edit_patient.php?id=<?php echo $fetch['itr_no']?>&lastname=<?php echo $fetch['lastname']?>" class = "btn btn-sm btn-warning"><span class = "glyphicon glyphicon-pencil"></span> Update</a>
             
            </center></td>
            </tr>
         <?php $cnt=$cnt+1; }} ?>
                    
                  </tbody>
          </tbody>
          </table>
          </div>
      </div>
    </div>
      </div>
    </div>


</div>
</div>
</div>  
</body>




<script type="text/javascript" src="../js1/dtime.js"></script>
<script type="text/javascript" src="../js1/jquery.min.js"></script>
<script type="text/javascript" src="../js1/bootstrap.min.js"></script>
 <script src="../js2/jquery.min.js"></script>
  <script src="../js2/main.js"></script>

<?php require'script.php' ?>
</html>

