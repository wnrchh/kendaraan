<!DOCTYPE html>

<html>

<head>

<title>Toyota</title>

</head>


<link rel="stylesheet" href="bootstrap.min.css">


<body>

<?php
include 'koneksi.php';

$sql = "SELECT * FROM toyota";
$result = $conn->query($sql);




?>

<button><a href="http://localhost/kendaraan/form.php">Tambah</a></button><br>

<table class="table table-bordered text-center table-striped table-hover table-responsive">
	<tr class="success">
		<th>NO</th>
		<th>NAMA</th>
		<th>HARGA</th>
		<th>TAHUN_PEMBUATAN</th>
		<th>WARNA</th>
		<th>CC</th>
		<th>VARIAN</th>
		<th>KELEBIHAN</th>
		<th>AKSI</th>
	</tr>
<?php

  // output data of each row
$no=0;
  while($row = $result->fetch_assoc()) {
   $no++;
 
?>

	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $row["nama"]; ?></td>
		<td><?php echo $row["harga"]; ?></td>
		<td><?php echo $row["tahun_pembuatan"]; ?></td>
		<td><?php echo $row["warna"]; ?></td>
		<td><?php echo $row["cc"]; ?></td>
		<td><?php echo $row["varian"]; ?></td>
		<td>
			
<ul style="list-style-type:circle;">
  <li><?php echo $row["kelebihan_1"]; ?></li>
  <li><?php echo $row["kelebihan_2"]; ?></li>
  <li><?php echo $row["kelebihan_3"]; ?></li>
  <li><?php echo $row["kelebihan_4"]; ?></li>
  <li><?php echo $row["kelebihan_5"]; ?></li>
</ul>  


		</td>
		<td><button><a href="http://localhost/kendaraan/hapus.php?id=<?php echo $row['id']; ?>">Hapus</a></button><br>
		<button><a href="http://localhost/kendaraan/edit.php?id=<?php echo $row['id']; ?>">Edit</a></button></td>
	</tr>
	
	<?php 
		}
	?>

</table>

</body>

</html>
