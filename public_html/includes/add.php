<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<script type="text/javascript" src="./js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="./js/bootstrap-filestyle.min.js"></script>
	<link href="./font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
	<script type="text/javascript">
		$(document).ready(function(){
           $('#empTable').dataTable();
           $('.file-upload').file_upload();
		});
	</script>
</head>
<body style="margin:20px auto;">
	<div class="row header col-sm-12" style="text-align:center;color:green;">
		<span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glypicon glypicon-plus"></span> Add New</a></span>
		<div style="height: 50px;"></div>
		<table class="table table-striped table-bordered table-responsive table-hover" id="empTable">
			<thead>
				<th><center>HOMID</center></th>
				<th><center>ACTIVITY</center></th>
				<th><center>ACTION</center></th>
			</thead>
			<tbody>
			<?php	
				include('./includes/db.php');
				$result=$mysqli->query("select * from services");
				while ($row=$result->fetch_assoc()) {
				}
				?>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['activities']; ?></td>
				 <a href="#<?php echo $row['id'];?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glypicon glypicon-floppy-open"></span></a>&nbsp;
				</tr>

				</tr>
			</tbody>
		</table>
	</div>

</body>
</html>