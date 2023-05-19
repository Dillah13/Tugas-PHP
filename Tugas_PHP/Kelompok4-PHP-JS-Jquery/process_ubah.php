<?php
include('koneksi.php');

$id_pembeli = $_GET["id_pembeli"];
$nama_pembeli = $_POST['nama_pembeli'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_telepon = $_POST['no_telepon'];

$result = mysqli_query($conn, "UPDATE `pembeli` SET id_pembeli='$id_pembeli', nama_pembeli='$nama_pembeli', alamat='$alamat', jenis_kelamin='$jenis_kelamin', no_telepon='$no_telepon' WHERE id_pembeli='$id_pembeli';");

header("Location:index.php");
?>