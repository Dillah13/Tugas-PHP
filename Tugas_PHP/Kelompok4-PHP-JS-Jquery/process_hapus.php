<?php
include("koneksi.php");

$id_pembeli = $_GET["id_pembeli"];

$result = mysqli_query($conn, "DELETE FROM pembeli WHERE id_pembeli='$id_pembeli';");

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Location:index.php");
?>