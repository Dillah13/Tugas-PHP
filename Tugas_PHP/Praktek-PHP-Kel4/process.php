<?php

$id_pembeli =$_POST['id_pembeli'];
$nama_pembeli =$_POST['nama_pembeli'];
$alamat =$_POST['alamat'];
$jenis_kelamin =$_POST['jenis_kelamin'];
$no_telepon =$_POST['no_telepon'];

include('connect.php');

$result = mysqli_query($conn, "INSERT INTO `pembeli` (`id_pembeli`, `nama_pembeli`, `alamat`, `jenis_kelamin`, `no_telepon`) VALUES ('$id_pembeli', '$nama_pembeli', '$alamat', '$jenis_kelamin', '$no_telepon'); ");

header("Location:index.php");