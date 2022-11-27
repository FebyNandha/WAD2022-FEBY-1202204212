<?php
    include('connector.php');
    $query = "SELECT * FROM showroom_feby_table";
    $row = mysqli_query($conn, $query);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WAD MODUL 4 | List Car</title>
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
                    Nama
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="Profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="kolom">
            <h4>My Show Room</h4>
            <p>List Show Room Feby - 1202204212</p><br><br>
        </div>

    <?php
		include('connector.php');
		$query = mysqli_query($conn, "SELECT * FROM showroom_feby_table") or die("database error:". mysqli_error($conn));
        $jumlah = mysqli_num_rows($query);
        ?>
      
        <div class="row">
	    <?php while( $record = mysqli_fetch_assoc($query) ) {
            if (strlen($record['deskripsi']) > 10)
            $new_string = substr($record['deskripsi'], 0, 140) . '...';
            $id_mobil = $record['id_mobil']
        ?>

          <div class="col-sm">
            <div class="card shadow-lg" style="width: 25rem;">
            <img class="card-img-top p-3" src="./images/<?php echo $record["foto_mobil"];?>" alt=""> 
            <div class="card-body">
              <h4 class="card-title"><?php echo $record['nama_mobil']; ?></h4>
              <p class="card-text"><?php echo ($new_string); ?></p>
                
            </div>
            <div class="card-footer">
              <div class="row justify-content-start">
                <div class="col-4">
              <form action="Detail_Feby.php" method="POST" >
                <input type="hidden" name="id_mobil" value="<?php echo $id_mobil; ?>" />
                <input style="width: 100%" type="submit" class="btn btn-primary rounded-pill" value="Detail">
              </form></div>
              <div class="col-4">
              <form action="delete.php" method="POST" >
                <input type="hidden" name="id_mobil" value="<?php echo $id_mobil; ?>" />
                <button style="width: 100%" type="submit" class="btn btn-danger rounded-pill">Delete</button>
              </form></div>    
            </div>
      </div>
          </div>
        </div>
      <?php } ?>

      <footer>
            <?php
                $jumlah = mysqli_num_rows($row);
                echo "Jumlah Mobil: $jumlah";
            ?>
      </footer>

    </div>
</body>
</html>