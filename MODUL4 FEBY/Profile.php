<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
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

    <p class="text-center fw-bold fs-2">Profile</p>
  <div class="container">
    <form action="./insert.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3 row ">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputNohp" class="col-sm-2 col-form-label">Nomor Handphone</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="nohp" required>
            </div>
        </div>

        <hr>

        <div class="mb-3 row">
            <label for="inputSandi" class="col-sm-2 col-form-label">Kata Sandi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="sandi" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="KonfirmSandi" class="col-sm-2 col-form-label">Konfirmasi Kata Sandi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="konfirm">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="UbahWarna" class="col-sm-2 col-form-label">Warna Navbar</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="warna">
            </div>
        </div>

        <input class=" btn btn-primary d-grid gap-2 col-1 mx-auto" type="submit" value="Update"><br><br>
    </form>
  </div>
    <footer>
        <div class="wrapper">
            <div class="img2">
                <img src="logo-ead.png" alt="EAD Practicum" width="130" height="30">
            </div>
            <div class="nama">
                <p>Feby_1202204212</p>
            </div>
        </div>
    </footer>