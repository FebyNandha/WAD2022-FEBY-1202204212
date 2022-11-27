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
    <?php
    include('connector.php');
    $id = 1;
    $query = mysqli_query($conn, "SELECT * FROM showroom_feby_table WHERE id = '$id'");
    ?>
<body>

    <div class="header">
        <div class="nav">
            <ul>
                <li><a href="Home-Feby.php" class="active">Home</li></a>
                <li><a href="ListCar-Feby.php" class="active">MyCar</li></a>
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
    <?php
    if($query){
        while($data = mysqli_fetch_assoc($query)){ ?>
        <form action="insert.php" method="POST" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="car" class="form-label"><strong>Nama Mobil</strong></label>
                <input type="text" class="form-control" name="nama_mobil" value="<?=$data['nama_mobil']?>">
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label"><strong>Nama Pemilik</strong></label><br>
                <input type="text" class="form-control" name="pemilik_mobil" value="<?=$data['pemilik_mobil']?>">
            </div>

            <div class="mb-3">
                <label for="merk" class="form-label"><strong>Merk</strong></label>
                <input type="text" class="form-control" name="merk_mobil" value="<?=$data['merk_mobil']?>">
            </div>

            <div class="mb-3">
                <label for="merk" class="form-label"><strong>Tanggal Beli</strong></label>
                <input type="text" class="form-control" name="tanggal_beli" value="<?=$data['tanggal_beli']?>">
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label"><strong>Deskripsi</strong></label>
                <input class="form-control" type="text" name="deskripsi">
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label"><strong>Foto</strong></label>
                <input class="form-control" type="file" name="foto_mobil">
            </div>

            <div class="mb-3">
                <label for="option"><strong>Status Pembayaran</strong></label>
                <div class="form-check">
                    <label class="form-check-label">Lunas</label>
                    <input type="radio" class="form-check-input" value="lunas" name="status_pembayaran" value="<?=$data['status_pembayaran']=='lunas'?>">
                </div>
                <div class="form-check">
                    <label class="form-check-label">Belum Lunas</label>
                    <input type="radio" class="form-check-input" value="belum" name="status_pembayaran" value="<?=$data['status_pembayaran']=='belum'?>">
                </div>
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="Simpan">
        </form>
    <?php }
        }
        if(isset($_POST['add'])){
            $nama_mobil = $_POST['nama_mobil'];
            $pemilik_mobil = $_POST['pemilik_mobil'];
            $merk_mobil = $_POST['merk_mobil'];
            $tanggal_beli = $_POST['tanggal_beli'];
            $deskripsi = $_POST['deskripsi'];
            $foto_mobil = $_FILES['foto_mobil']['nama_mobil'];
            $status_pembayaran = $_POST['status_pembayaran'];

            $update = mysqli_query($conn, "UPDATE showroom_feby_table SET nama_mobil='$nama_mobil', pemilik_mobil='$pemilik_mobil', merk_mobil='$merk_mobil', tanggal_beli='$tanggal_beli', deskripsi='$deskripsi', status_pembayaran='$status_pembayaran' WHERE id_mobil='$id'");

        }
    ?>
    </div>

</body>
</html>