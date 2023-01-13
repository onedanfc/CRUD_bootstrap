<?php
include('koneksi.php');

$nama = $_POST['name'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$provinsi = $_POST['provinsi'];
$pos = $_POST['pos'];

$sql = "INSERT INTO mahasiswa(nama, email, alamat, kota, provinsi, pos) VALUES ('$nama','$email','$alamat','$kota','$provinsi','$pos')";
mysqli_query($conn, $sql);

?>
<script type="text/javascript">
	alert("Data Mahasiswa Telah ditambahkan");
	document.location.href = "index.php";
</script>