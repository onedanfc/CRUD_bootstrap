<?php
include 'koneksi.php';
$nama = $_GET['name'];
$hapus = "DELETE FROM mahasiswa WHERE nama='$nama'";
mysqli_query($conn, $hapus);
?>
<script type="text/javascript">
	alert("Data Mahasiswa Telah Terhapus");
	document.location.href = "index.php";
</script>