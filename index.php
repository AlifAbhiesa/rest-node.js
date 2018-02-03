<!DOCTYPE html>
<html>
<?php
$json_string = 'http://localhost:1997/person';

$jsondata = file_get_contents($json_string);
$obj = json_decode($jsondata, true);

?>

<head>
	<title>xcode___</title>
	<script type="text/javascript" src="assets/DataTables/media/js/jquery.js"></script>
	<script type="text/javascript" src="assets/DataTables/media/js/jquery.dataTables.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/DataTables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="assets/DataTables/media/css/dataTables.bootstrap.css">
</head>
<body>
	<center>
		<h1>List</h1>
	</center>
	<br/>
	<br/>
	<div class="container">
		<table class="table table-striped table-bordered data">
			<thead>
				<tr>			
					<th>No</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Gender</th>
					<th>Address</th>
				</tr>
			</thead>
			<tbody>
			<?php
                  $i = 0;

                  foreach ($obj as $row) {

                ?>
			<tr>
				<td><?php echo ($i+1) ?></td>
				<td><?php echo $obj[$i]['firstName'] ?></td>
				<td><?php echo $obj[$i]['lastName'] ?></td>
				<td><?php echo $obj[$i]['gender'] ?></td>
				<td><?php echo $obj[$i]['address'] ?></td>

			</tr>

			<?php
                     $i++;
                    }
               ?>
			</tbody>
		</table>
	</div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		$('.data').DataTable();
	});
</script>
</html>