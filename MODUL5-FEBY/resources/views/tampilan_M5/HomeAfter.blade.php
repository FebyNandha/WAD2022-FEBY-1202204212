<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WAD MODUL 4 | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
  </head>

  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-sm bg-info navbar-dark p-3">
        <div class="container-fluid">
            <ul class="navbar-nav pl-3">
                <li class="nav-item"><a class="nav-link active" href="{{url('/')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="ListCar_Feby">MyCar</a></li>
            </ul>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{url('/Add_Feby')}}" button type="button" class="btn btn-light text-secondary ">Add Car</a>
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

    <div class="img">
        <img src="../images/car2.jpeg" alt="ShowRoom Feby" width="700" height="450">
    </div>
    <div class="greet">
        <p>Selamat Datang Di Show Room Feby</p>
        <div class="greet2">
            <p class="text-black text-opacity-50">At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis <br> cursus vestibulum. facili ac. sed faucibus</p>
        </div>
    </div>

    <div class="button">
        <a class="btn btn-primary" href="ListCar_Feby.php" role="button">MyCar</a>
    </div>

    <div class="wrapper">
        <div class="img2">
            <img src="../images/logo-ead.png" alt="EAD Practicum" width="130" height="30">
        </div>
        <div class="nama">
            <p>Feby_1202204212</p>
        </div>
    </div>
</body>
</html>