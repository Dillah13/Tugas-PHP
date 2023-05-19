<?php

$id_pembeli = $_POST['id_pembeli'];
$nama_pembeli = $_POST['nama_pembeli'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_telepon = $_POST['no_telepon'];

include('koneksi.php');

$result = mysqli_query($conn, "INSERT INTO `pembeli` (`id_pembeli`, `nama_pembeli`, `alamat`, `jenis_kelamin`, `no_telepon`) VALUES ('$id_pembeli', '$nama_pembeli', '$alamat', '$jenis_kelamin', '$no_telepon'); ");

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Location:index.php");

?>