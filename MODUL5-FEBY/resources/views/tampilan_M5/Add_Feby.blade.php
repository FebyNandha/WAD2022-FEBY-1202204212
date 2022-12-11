<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WAD MODUL 4 | Add Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
                <a href="Add_Feby.php" button type="button" class="btn btn-light text-primary ">Add Car</a>
                <div class="dropdown">
                    <button class="btn btn-light text-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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

    <div class="container mt-5">
        <div class="kolom">
            <h4>Tambah Mobil</h4>
            <p>Tambah Mobil Baru Anda Ke List Show Room</p><br><br>
        </div>

        <form action="/tampilan_M5" method="POST" enctype="multipart/form-data">
        @csrf

            <div class="mb-3">
                <label for="car" class="form-label"><strong>Nama Mobil</strong></label>
                <input type="text" class="form-control" name="nama_mobil" placeholder="BMW 14">
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label"><strong>Nama Pemilik</strong></label><br>
                <input type="text" class="form-control" name="pemilik_mobil" placeholder="Nama - NIM">
            </div>

            <div class="mb-3">
                <label for="merk" class="form-label"><strong>Merk</strong></label>
                <input type="text" class="form-control" name="merk_mobil" placeholder="BWM">
            </div>

            <div class="mb-3">
                <label for="tanggal" class="form-label"><strong>Tanggal Beli</strong></label>
                <input type="date" class="form-control" name="tanggal_beli">
            </div>

            <div class="mb-3">
                <label for="Deskripsi" class="form-label"><strong>Deskripsi</strong></label>
                <textarea class="form-control" rows="3" name="deskripsi"></textarea>
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label"><strong>Foto</strong></label>
                <input class="form-control" type="file" name="foto_mobil">
            </div>

            <div class="mb-3">
                <label for="option"><strong>Status Pembayaran</strong></label>
                <div class="form-check">
                    <label class="form-check-label">Lunas</label>
                    <input type="radio" class="form-check-input" value="lunas" name="status_pembayaran">
                </div>
                <div class="form-check">
                    <label class="form-check-label">Belum Lunas</label>
                    <input type="radio" class="form-check-input" value="belum lunas" name="status_pembayaran">
                </div>
            </div>

                <input class="btn btn-primary" type="submit" value="Selesai">
        </form>
    </div>
</body>
</html>