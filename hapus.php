<?php
include 'koneksi.php';

$id 				= $_GET['id'];

$sql = "DELETE FROM toyota WHERE id='$id'";


if ($conn->query($sql) === TRUE) {
  header('Location: http://localhost/kendaraan/toyota.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}





?>