<?php 
 
include 'connector.php';
 
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $no_hp = $_POST['no_hp'];

    $user = mysqli_query($conn, "SELECT * FROM user_feby WHERE email = '$email'");
    $login = mysqli_num_rows($user);

    if ($login > 0) {
        echo "<script>
        alert ('Email telah terdaftar');
        window.location = 'Register.php';
        </script>";
    } else {
        if($password != $cpassword) {
            echo "<script>
            alert ('Kata sandi salah');
            window.location = 'Register.php' ;
            </script>";
        } else {
            mysqli_query($conn, "INSERT INTO user_feby VALUES('', '$nama', '$email', '$password', '$no_hp')");
            echo "<script>
            alert ('Data berhasil disimpan');
            window.location = 'Login.php';
            </script>";
        }
    }}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
  </head>

  <body>

        <div class="row align-items-left">
                <div class="col">
                    <div class="row">
                    <img src="car3.jpg" alt="Display Car" width="50%">
                </div>
            </div>
            <div class="col mt-5">
                <!-- <div class=""> -->
                    <h2>Register</h2><br><br>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" required aria-label="Username">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nomor Handphone</label>
                            <input type="number" class="form-control" name="no_hp" required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" name="password" onkeyup='check();' required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Konfirmasi Kata Sandi</label>
                            <input type="password" class="form-control" name="cpassword" onkeyup='check();' required>
                        </div>

                        <input class="btn btn-primary" type="submit" value="Daftar" name="submit" ><br><br>
                        <p> Anda sudah punya akun? <a class="btn btn-link" href="Login.php">Login</a><p>
                    </form>
                </div>
            </div>
</body>
</html>