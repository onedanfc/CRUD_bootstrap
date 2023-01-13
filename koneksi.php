<?php
// $koneksi = mysqli_connect("localhost","root","") or die("Koneksi Gagal !" . mysqli_error());
// $database = mysqli_select_db("crud", $koneksi);
$server = "localhost";
$username = "root";
$password = "";
$database = "crud";
$conn = mysqli_connect($server, $username, $password, $database);
?>