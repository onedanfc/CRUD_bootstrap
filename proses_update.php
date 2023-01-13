<?php
include('koneksi.php');
$namaku = $_POST['namaku'];
$nama = $_POST['name'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$provinsi = $_POST['provinsi'];
$pos = $_POST['pos'];

$update = "UPDATE mahasiswa SET nama = '$nama', email = '$email', alamat='$alamat', kota='$kota', provinsi='$provinsi', pos='$pos' WHERE nama='$namaku'";
mysqli_query($conn, $update);

?>
<script type="text/javascript">
	alert("Data Mahasiswa Telah diupdate");
	document.location.href = "index.php";
</script>