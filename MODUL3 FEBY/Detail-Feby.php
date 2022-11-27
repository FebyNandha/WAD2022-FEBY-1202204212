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

        <form action="insert.php" method="POST" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="car" class="form-label"><strong>Nama Mobil</strong></label>
                <input class="form-control" type="text" placeholder="BMW 14" aria-label="Disabled input example" disabled>
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label"><strong>Nama Pemilik</strong></label><br>
                <input class="form-control" type="text" placeholder="Feby-1202204212" aria-label="Disabled input example" disabled>
            </div>

            <div class="mb-3">
                <label for="merk" class="form-label"><strong>Merk</strong></label>
                <input class="form-control" type="text" placeholder="BMW" aria-label="Disabled input example" disabled>
            </div>

            <div class="mb-3">
                <label for="merk" class="form-label"><strong>Tanggal Beli</strong></label>
                <input class="form-control" type="text" placeholder="11/12/2022" aria-label="Disabled input example" disabled>
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label"><strong>Deskripsi</strong></label>
                <input class="form-control" type="text" placeholder="The First All-Electric Gran Coupe, The BMW 14 Delivers Outstanding Dynamics With A High Level Of Comfort And The Ideal Qualities To Make It Your Daily Driver. The Five-Door Model Comes Equipped With Fifth-Generation BMW EDrive Technolofy For Sporty Performance Figures - Reaching Up to 340 Hp. With A Long Range Of Up To 591 Kilometres And Five Spacious Full-Sized Seats, It Is The Perfect Companion For Any Journey" aria-label="Disabled input example" disabled>
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label"><strong>Foto</strong></label>
                <input class="form-control" type="text" placeholder="BMW 14.jpg" aria-label="Disabled input example" disabled>
            </div>

            <div class="mb-3">
                <label for="option"><strong>Status Pembayaran</strong></label>
                <div class="form-check">
                    <label class="form-check-label">Lunas</label>
                    <input type="radio" class="form-check-input" value="lunas" name="status_pembayaran" checked>
                </div>
                <div class="form-check">
                    <label class="form-check-label">Belum Lunas</label>
                    <input type="radio" class="form-check-input" value="belum" name="status_pembayaran">
                </div>
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="Edit" href="Edit-Feby.php">
        </form>
    </div>
</body>
</html>