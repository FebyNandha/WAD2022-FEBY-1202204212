<?php
include "connector.php";
        $id_mobil = $_POST['id_mobil'];
        
        $select = "SELECT * FROM showroom_feby_table WHERE id_mobil = $id_mobil";
        $query = mysqli_query($conn, $select);
        $saved = mysqli_fetch_assoc($query);
        function active_radio_button($value,$input){
            $result =  $value==$input?'checked':'';
            return $result;}

        $id = $saved['id_mobil'];

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WAD MODUL 4 | Edit Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
  </head>

  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-sm bg-info navbar-dark p-3">
        <div class="container-fluid">
            <ul class="navbar-nav pl-3">
                <li class="nav-item"><a class="nav-link active" href="HomeAfter.php">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="ListCar_Feby.php">MyCar</a></li>
            </ul>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="Add_Feby.php" button type="button" class="btn btn-light text-secondary ">Add Car</a>
                <div class="dropdown">
                    <button class="btn btn-light text-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Feby
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="Profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="Logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container pt-5">
    <h1><?php echo $saved['nama_mobil'] ?></h1>
    <p> Edit Mobil <?php echo $saved['nama_mobil']?></p><br><br>

    <div class="container">
        <div class="row">
            <div class="col">
            <img src="./images/<?php echo $saved["foto_mobil"];?>" class="rounded" alt="car" style="width: 90%">
        </div>

      <div class="col">
        <form action="edit.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_mobil" value="<?php echo $id_mobil; ?>">
            <div class="mb-3">
                <label for="car" class="form-label"><strong>Nama Mobil</strong></label>
                <input class="form-control" type="text" name="nama_mobil" value="<?php echo $saved['nama_mobil'] ?>">
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label"><strong>Nama Pemilik</strong></label><br>
                <input class="form-control" type="text" name="pemilik_mobil" value="<?php echo $saved['pemilik_mobil'] ?>">
            </div>

            <div class="mb-3">
                <label for="merk" class="form-label"><strong>Merk</strong></label>
                <input class="form-control" type="text" name="merk_mobil" value="<?php echo $saved['merk_mobil'] ?>">
            </div>

            <div class="mb-3">
                <label for="merk" class="form-label"><strong>Tanggal Beli</strong></label>
                <input class="form-control" type="text" name="tanggal_beli" value="<?php echo $saved['tanggal_beli'] ?>">
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label"><strong>Deskripsi</strong></label>
                <input class="form-control" rows="3" name="deskripsi" value="<?php echo $saved['deskripsi'] ?>">
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label"><strong>Foto</strong></label>
                <input class="form-control" type="text" name="foto_mobil" value="<?php echo $saved['foto_mobil'] ?>">
            </div>

            <div class="mb-3">
                <label for="option"><strong>Status Pembayaran</strong></label>
                <div class="form-check">
                    <label class="form-check-label">Lunas</label>
                    <input type="radio" class="form-check-input" value="<?php echo $saved['status_pembayaran'] ?>" name="status_pembayaran" checked>
                </div>
                <div class="form-check">
                    <label class="form-check-label">Belum Lunas</label>
                    <input type="radio" class="form-check-input" value="<?php echo $saved['status_pembayaran'] ?>" name="status_pembayaran">
                </div>
            </div>
            <div class="mb-3">
                <input type="hidden" name="id_mobil" value="<?php echo $id; ?>" />
                <input type="submit" id="update" name="update" class="btn btn-primary" value="Update">
            </div> 
        </form>
      </div>
    </div>
</body>
</html>