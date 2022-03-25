 <?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:index.php');
}
else{

if(isset($_GET[id]))
  {
    $id=$_GET[id];
  }

?>
 <?php 
date_default_timezone_set('Asia/Manila');

//action.php
if(isset($_POST["action"]))
{
	include('./includes/conn1.php');
	if($_POST["action"]=='fetch')
	{   
		
		$output ='';
		$query = "SELECT * FROM  home_tasks   ORDER BY `id`='$_GET[id]'DESC";
        $statement = $connect->prepare($query);
		$statement->execute();	
		$result = $statement->fetchAll(); 
		$output .='
         <form id="formABC" method="post" action="action.php">
         <table class="table table-bordered table-striped">
         <tr>
             
            <td>Activity Tasks</td>
            <td>Date</td>
            <td>Time</td>
            <td>Status</td>
          
         </tr>
        
		';

		foreach ($result as $row) 
       
		{
		  $status = '';
		  
		  if($row["status"] == '1')
		  {
             $status = '<span class="label label-success">done</span>';
            
		  }	
           if($row["status"] == '0')
		  {
               $status = '<span class="label label-danger">not yet started</span>';
		  }
		  $dtime = '';
		  if($row['dtime'] ==date('g:i:a'))
		  {
              $dtime =date('g:i:a');
		  }
		  $disabled='';
          if($row['status']==1) {
          	$disabled='disabled="disabled"';
          }
		  $output .='
             <tr>
                <td>'.$row['activity'].'</td>
                <td>'.$row["tdate"].'</td>
                <td>'.$row["dtime"].'</td> 
                <td>'.$status.'</td>
           
            </tr>

           
		  ';
		}
		$output .= '</table>
             </form>';
		echo $output;
	}
	
	if ($_POST["action"] == 'change_status') {
		$status = '';
		
		if($_POST['status'] ==1) {
             $status = '0';
		} 
		if($_POST['status'] == 0) {
             $status = '1';
		}
		
		$dtime = '';
		if($_POST['dtime'] ='$dtime') {
             $dtime =date('g:i:a');
		}
		
		
		$query =  'UPDATE home_tasks  SET dtime=:dtime, status=:status WHERE  activity=:activity';

		$statement = $connect->prepare($query);
		$statement->execute(

			array(
				':dtime'=> $dtime,
				':status'=> $status,
				':activity'=> $_POST['id']

			)
		); 
		
	}
}	

?>
<?php }?>