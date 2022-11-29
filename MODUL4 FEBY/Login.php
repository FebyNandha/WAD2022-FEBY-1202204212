<?php 
 
include 'connector.php';
 
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = mysqli_query($conn, "SELECT * FROM user_feby WHERE email='$email' ");
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if($password == $row["password"]) {
            header('Location: HomeAfter.php');
            exit;
        }
    }
    $error = true;
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
        <div class="row align-items-left">
                <div class="col">
                    <div class="row">
                    <img src="car3.jpg" alt="Display Car" width="50%">
                </div>
            </div>
            <div class="col mt-5">
                <!-- <div class="right-container"> -->
                    <h2>Login</h2><br><br>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <?php if(isset($error)): ?>
                            <p style="color:red;">Email / Password Salah!</p>
                        <?php endif; ?>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email">
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

                        <button class="btn btn-primary" type="submit" value="Login" name="login">Login</button><br><br>
                        <p> Anda belum punya akun? <a class="btn btn-link" href="Register.php" role="button">Daftar</a><p>
                    </form>
                </div>
            </div>
        </div>    
</body>
</html>