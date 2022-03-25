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
  <title>HOME CLEAN | SERVICES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <link rel = "shortcut icon" href = "../images/cicon.png" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style3.css">
    <link href="../font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="///fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
    <link href="///fonts.googleapis.com/css?family=Federo" rel="stylesheet">
    <link href="///fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../css6/style.css">
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
  <script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
</head>
<body>

  <?php include('./includes/header.php');?>
  <div class="ts-main-content">
  <?php include('./includes/leftbar.php');?>
 <div class="content-wrapper">
             <center> <h2 class="page-title">Dashboard</h2></center>

          <div class="col-md-12 col-md-offset-2 post-div mx-auto">

            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-3">
                    <div class="panel panel-default">
                      <div class="panel-body bk-primary text-light">
                        <div class="stat-panel text-center">
<?php 
$sql ="SELECT id from users";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$bg=$query->rowCount();
?>
                          <div class="stat-panel-number h1 "><?php echo htmlentities($bg);?></div>
                          <div class="stat-panel-title text-uppercase">Total Users</div>
                        </div>
                      </div>
                      <a href="userlist.php" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
                    </div>
                  </div>



                  <div class="col-md-3">
                    <div class="panel panel-default">
                      <div class="panel-body bk-success text-light">
                        <div class="stat-panel text-center">

<?php 
$sql ="SELECT id from home_tasks";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$bk=$query->rowCount();
?>
                          <div class="stat-panel-number h1 "><?php echo htmlentities($bk);?></div>
                          <div class="stat-panel-title text-uppercase">Manage User's House Activity</div>
                        </div>
                      </div>
                      <a href="manage_house.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
                    </div>
                  </div>

              
                </div>
              </div>
            </div>
          </div>
  
      
</div>
</div>
</div>
</body>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
 <script src="../js/jquery.min.js"></script>
  <script src="../js/main.js"></script>
  <script type="text/javascript">
         $(document).ready(function () {          
          setTimeout(function() {
            $('.succWrap').slideUp("slow");
          }, 3000);
          });
  </script>
  <script>
    
  window.onload = function(){
    
    // Line chart from swirlData for dashReport
    var ctx = document.getElementById("dashReport").getContext("2d");
    window.myLine = new Chart(ctx).Line(swirlData, {
      responsive: true,
      scaleShowVerticalLines: false,
      scaleBeginAtZero : true,
      multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
    }); 
    
    // Pie Chart from doughutData
    var doctx = document.getElementById("chart-area3").getContext("2d");
    window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

    // Dougnut Chart from doughnutData
    var doctx = document.getElementById("chart-area4").getContext("2d");
    window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

  }
  </script>

</html>
