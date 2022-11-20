<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>MODUL3 FEBY</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

    <div class="header">
        <div class="nav">
            <ul>
                <li><a href="Home-Feby.php" class="active">Home</li></a>
                <li><a href="Add-Feby.php" class="active">MyCar</li></a>
            </ul>
        </div>
    </div>

    <div class="container mt-5">
        <div class="kolom">
            <h4>BMW 14</h4>
            <p>Detail Mobil BMW 14</p><br><br>
            <div class="img2">
                <img src="BMW 14.jpg" alt=" Feby" width="700" height="450">
            </div>
        </div>

        <form action="insert.php" method="POST" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="car" class="form-label"><strong>Nama Mobil</strong></label>
                <input type="text" class="form-control" name="nama_mobil">
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label"><strong>Nama Pemilik</strong></label><br>
                <input type="text" class="form-control" name="pemilik_mobil">
            </div>

            <div class="mb-3">
                <label for="merk" class="form-label"><strong>Merk</strong></label>
                <input type="text" class="form-control" name="merk_mobil">
            </div>

            <div class="mb-3">
                <label for="merk" class="form-label"><strong>Tanggal Beli</strong></label>
                <input type="text" class="form-control" name="tanggal_beli">
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label"><strong>Deskripsi</strong></label>
                <input class="form-control" type="text" name="deskripsi">
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label"><strong>Foto</strong></label>
                <input class="form-control" type="file" name="foto_mobil">
            </div>

            <form action="/action_page.php">
                <p>Status Pembayaran</p>
                <input type="radio" id="lunas" name="status_pembayaran" value="lunas">
                <label for="lunas">Lunas</label>
                <input type="radio" id="belum" name="status_pembayaran" value="belum">
                <label for="belum">Belum Lunas</label><br><br>
            </form>

            <input class="btn btn-primary" type="submit" name="submit" value="Simpan">
        </form>
    </div>

</body>
</html>