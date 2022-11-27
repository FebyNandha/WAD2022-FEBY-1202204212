<?php 
 
include 'connector.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['nama'])) {
    header("Location: Login.php");
}
 
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['emailAdd'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $no_hp = $_POST['no_hp'];
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM user_feby WHERE emailAdd='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO user_feby (nama, email, password)
                    VALUES ('$nama', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $nama = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('! Email Sudah Terdaftar !.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
 
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
    
    <div class="container">
        <div class="card-container">
            <div class="left">
                <div class="left-container">
                    <img src="car3.jpg" alt="Display Car" width="900px" height="850px">
                </div>
            </div>
            <div class="right">
                <div class="right-container">
                    <h2>Register</h2><br><br>
                    <form action="./insert2.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" class="form-control" name="emailAdd" required>
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

                        <input class="btn btn-primary" type="submit" value="Daftar"><br><br>
                        <p> Anda sudah punya akun? <a class="btn btn-link" href="Login.php">Login</a><p>
                    </form>
                </div>
            </div>
        </div>    
    </div>
</body>
</html>