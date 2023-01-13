<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - BOOTSTRAP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <?php
    include 'koneksi.php';
    $nama = $_GET['name'];
    $data = "SELECT * FROM mahasiswa WHERE nama='$nama'";
    $result = mysqli_query($conn, $data);

    while($row = mysqli_fetch_array($result)) {
        echo "<div class='card text-center'>
    <div class='card-header'>"
        .$row['nama'].
    "</div>
    <div class='card-body'>
        <h5 class='card-title'>".$row['email']."</h5>
        <p class='card-text'>".$row['alamat']."</p>
        <p class='card-text'>".$row['kota']."</p>
        <p class='card-text'>".$row['provinsi']."</p>
        <a href='index.php' class='btn btn-primary'>Kembali</a>
    </div>
    <div class='card-footer text-muted'>"
    .$row['pos'].
    "</div>
    </div>";
    }

    //menutup koneksi
    mysqli_close($conn);
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>