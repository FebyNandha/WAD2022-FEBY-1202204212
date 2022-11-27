<?php 
 
 include 'connector.php';
  
 error_reporting(0);
  
 session_start();
  
 if (isset($_SESSION['nama'])) {
     header("Location: HomeAfter.php");
 }
  
 if (isset($_POST['submit'])) {
     $email = $_POST['emailAdd'];
     $password = md5($_POST['password']);
  
     $sql = "SELECT * FROM user_feby WHERE emailAdd='$email' AND password='$password'";
     $result = mysqli_query($conn, $sql);
     if ($result->num_rows > 0) {
         $row = mysqli_fetch_assoc($result);
         $_SESSION['nama'] = $row['nama'];
         header("Location: HomeAfter.php");
     } else {
         echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
     }
 }
  
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
  </head>

<body>
    <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error']?>
    </div>
 
    <div class="container">
        <div class="card-container">
            <div class="left">
                <div class="left-container">
                    <img src="car3.jpg" alt="Display Car" width="900px" height="850px">
                </div>
            </div>
            <div class="right">
                <div class="right-container">
                    <h2>Login</h2><br><br>
                    <form action="./insert2.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" class="form-control" name="emailAdd">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="remember">
                            <label class="form-check-label" for="flexCheckDefault">
                            Remember Me
                            </label>
                        </div><br><br>

                        <a class="btn btn-primary" type="submit" href="HomeAfter.php" value="Login">Login</a><br><br>
                        <p> Anda belum punya akun? <a class="btn btn-link" href="Register.php" role="button">Daftar</a><p>
                    </form>
                </div>
            </div>
        </div>    
    </div>
</body>
</html>