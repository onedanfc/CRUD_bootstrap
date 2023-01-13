<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - BOOTSTRAP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
  <div class="container-sm">
  <h2  style="width: 300px; margin: 0 auto;">Daftar Mahasiswa</h2>
    <table class="table table-info table-striped">
        <caption><a href="form.php"><button type="button" class="btn btn-success">Input Data</button></a></caption>
        <thead>
            <tr>
            <th scope="col">Nomor</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Email</th>
            <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
        <?php    
            include 'koneksi.php';
            $data = "SELECT * FROM mahasiswa";
            if(!$query = mysqli_query($conn, $data))
            echo mysqli_error();
            $i= 1;
            while($row = mysqli_fetch_array($query))
            {

            echo "<tr>
                    <td>".$i++."</td>
                    <td><a href='detail.php?name=".$row['nama']."'>".$row['nama']."</a></td>
                    <td>".$row['email']."</td>
                    <td><a href='update.php?name=".$row['nama']."'><button class='btn btn-primary'><i class='bi bi-vector-pen'></i></button></a> / <a href='hapus.php?name=".$row['nama']."'><button class='btn btn-danger'><i class='bi bi-trash3-fill'></i></button></a></td>
                    
                </tr>";
            }
        ?>
        </tbody>
    </table>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>