<?php
include 'koneksi.php';

$id 				= $_GET['id'];
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





$sql = "UPDATE `toyota` SET nama 				= '$nama',
							harga 				= '$harga',
							tahun_pembuatan		= '$tahun_pembuatan',
							warna				= '$warna',
							cc 					= '$cc',
							varian 				= '$varian',
							kelebihan_1			= '$kelebihan_1',
							kelebihan_2 		= '$kelebihan_2',
							kelebihan_3 		= '$kelebihan_3',
							kelebihan_4 		= '$kelebihan_4',
							kelebihan_5 		= '$kelebihan_5'
		WHERE id = '$id'";


if ($conn->query($sql) === TRUE) {
  header('Location: http://localhost/kendaraan/toyota.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}