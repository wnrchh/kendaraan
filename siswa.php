<!DOCTYPE html>

<html>

<head>

<title>Data Siswa</title>

</head>


<link rel="stylesheet" href="bootstrap.min.css">


<body>

<p>mmm</p>
<?php
include 'koneksi.php';

$sql = "SELECT * FROM siswa";
$result = $conn->query($sql);

?>

<table class="table table-bordered text-center table-striped table-hover table-responsive">
	<tr class="success">
		<th>NO</th>
		<th>NAMA</th>
		<th>NIS</th>
		<th>TEMPAT LAHIR</th>
		<th>TANGGAL LAHIR</th>
		<th>ALAMAT</th>
		<th>KELAS</th>
	</tr>
	<tr>
		<td><?php echo $row["id"]; ?></td>
		<td><?php echo $row["nama"]; ?></td>
		<td><?php echo $row["nis"]; ?></td>
		<td><?php echo $row["tempat_lahir"]; ?></td>
		<td><?php echo $row["tanggal_lahir"]; ?></td>
		<td><?php echo $row["alamat"]; ?></td>
		<td><?php echo $row["kelas"]; ?></td>
	</tr>
	
	

</table>

</body>

</html>