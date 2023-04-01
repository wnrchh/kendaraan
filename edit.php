<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>


<?php
include 'koneksi.php';

$id 				= $_GET['id'];
$sql 				= "SELECT * FROM toyota WHERE id = '$id'";
$result 			= $conn->query($sql);
$row 				= $result->fetch_assoc();
?>

<form action="update.php?id=<?php echo $id; ?>" method="post">

  <label for="nama">Nama:</label><br>
  <input type="text" id="nama" name="nama" value="<?php echo $row["nama"]; ?>"><br><br>

  <label for="harga">Harga:</label><br>
  <input type="text" id="harga" name="harga" value="<?php echo $row["harga"]; ?>"><br><br>

   <label for="tahun_pembuatan">Tahun Pembuatan:</label><br>
  <input type="text" id="tahun_pembuatan" name="tahun_pembuatan" value="<?php echo $row["tahun_pembuatan"]; ?>"><br><br>

  <label for="warna">Warna:</label><br>
  <input type="text" id="warna" name="warna" value="<?php echo $row["warna"]; ?>"><br><br>

   <label for="cc">CC:</label><br>
  <input type="text" id="cc" name="cc" value="<?php echo $row["cc"]; ?>"><br><br>

  <label for="varian">Varian:</label><br>
  <input type="text" id="varian" name="varian" value="<?php echo $row["varian"]; ?>"><br><br>

   <label for="kelebihan_1">Kelebihan 1:</label><br>
  <input type="text" id="kelebihan_1" name="kelebihan_1" value="<?php echo $row["kelebihan_1"]; ?>"><br><br>

  <label for="kelebihan_2">Kelebihan 2:</label><br>
  <input type="text" id="kelebihan_2" name="kelebihan_2" value="<?php echo $row["kelebihan_2"]; ?>"><br><br>

   <label for="kelebihan_3">Kelebihan 3:</label><br>
  <input type="text" id="kelebihan_3" name="kelebihan_3" value="<?php echo $row["kelebihan_3"]; ?>"><br><br>

  <label for="kelebihan_4">Kelebihan 4:</label><br>
  <input type="text" id="kelebihan_4" name="kelebihan_4" value="<?php echo $row["kelebihan_4"]; ?>"><br><br>

   <label for="kelebihan_5">Kelebihan 5:</label><br>
  <input type="text" id="kelebihan_5" name="kelebihan_5" value="<?php echo $row["kelebihan_5"]; ?>"><br><br>



  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>