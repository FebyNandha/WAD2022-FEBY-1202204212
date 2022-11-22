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
            <h4>My Show Room</h4>
            <p>List Show Room Feby - 1202204212</p><br><br>
        </div>
        </div>

        <div class="container d-flex flex-wrap align-items-center">
            <div class="m-2 card">
                <div class="card" style="width:300px">
                    <img src="<?php echo $mobil['foto_mobil'];?>" width=100% height=200>
                    <div class='card-body'>
                        <div class='container'>
                            <h5 class='card-title'> <?php echo $nama_mobil['nama_mobil'];?> </h5>
                            <p class='card-text'> <?php echo substr($nama_mobil['deskripsi'],0,50)."...";?> </p>
                            <a href='Detail-Feby.php?id=<?php echo $nama_mobil['id_mobil'];?>' class='btn btn-primary'>Detail</a>
                            <a href='delete.php?id=<?php echo $nama_mobil['id_mobil'];?>' class='btn btn-danger'>Delete</a>
                        </div>
                    </div>
                </div>
        </div>

</body>
</html>