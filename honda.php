<!DOCTYPE html>

<html>

<head>

<title>Toyota</title>

</head>


<link rel="stylesheet" href="bootstrap.min.css">


<body>

<?php
include 'koneksi.php';

$sql = "SELECT * FROM honda";
$result = $conn->query($sql);




?>


<table class="table table-bordered text-center table-striped table-hover table-responsive">
	<tr class="success">
		<th>id</th>
		<th>NAMA</th>
		<th>harga</th>
	</tr>
<?php

  // output data of each row
  while($row = $result->fetch_assoc()) {
   
 
?>

	<tr>
		<td><?php echo $row["id"]; ?></td>
		<td><?php echo $row["nama"]; ?></td>
		<td><?php echo $row["harga"]; ?></td>
	</tr>
	
	<?php 
		}
	?>

</table>

</body>

</html>