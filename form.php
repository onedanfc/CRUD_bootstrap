<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>CRUD - BOOTSTRAP</title>
</head>
<body>
    <div class="container-sm">
        <h2  style="width: 300px; margin: 0 auto;">Input Data</h2>
        <form class="row g-3" action="proses.php" method="POST">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="inputEmail4" name="name">
            </div>
            <div class="col-md-6">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="email">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Alamat</label>
                <input name="alamat" type="text" class="form-control" id="inputAddress">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Kota</label>
                <input type="text" class="form-control" id="inputCity" name="kota">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Provinsi</label>
                <select id="inputState" class="form-select" name="provinsi">
                <option>Pilih salah satu...</option>
                <option value="Jawa Barat">Jawa Barat</option>
                <option valu="Jawa Timur">Jawa Timur</option>
                <option value="Jawa Tengah">Jawa Tengah</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Kode POS</label>
                <input type="number" class="form-control" id="inputZip" name="pos">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Input</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>