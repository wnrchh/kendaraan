<?php
include 'koneksi.php';

$nama 				= $_POST['nama'];
$harga 				= $_POST['harga'];
$tahun_pembuatan 	= $_POST['tahun_pembuatan'];
$warna 				= $_POST['warna'];
$cc 				= $_POST['cc'];
$varian 			= $_POST['varian'];
$kelebihan_1 		= $_POST['kelebihan_1'];
$kelebihan_2 		= $_POST['kelebihan_2'];
$kelebihan_3 		= $_POST['kelebihan_3'];
$kelebihan_4 		= $_POST['kelebihan_4'];
$kelebihan_5 		= $_POST['kelebihan_5'];





$sql = "INSERT INTO `toyota` (`id`, `nama`, `harga`, `tahun_pembuatan`, `warna`, `cc`, `varian`, `kelebihan_1`, `kelebihan_2`, `kelebihan_3`, `kelebihan_4`, `kelebihan_5`) VALUES (NULL, '$nama' , '$harga' , '$tahun_pembuatan' , '$warna' , '$cc' , '$varian' , '$kelebihan_1' , '$kelebihan_2' , '$kelebihan_3' , '$kelebihan_4' , '$kelebihan_5' )";


if ($conn->query($sql) === TRUE) {
  header('Location: http://localhost/kendaraan/toyota.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}





?>