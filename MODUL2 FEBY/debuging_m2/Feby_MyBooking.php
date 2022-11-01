<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MODUL2 FEBY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="Feby_CSS.css">
</head>
<body>
<?php
$name = $_POST['name'];
$date = $_POST['date'];
$time = $_POST['time'];
$duration = $_POST['duration'];
$car = $_POST['car'];
$phone = $_POST['phone'];
$checkin = date('m-d-Y H:i:s', strtotime("$date $time"));
$out = date('d-m-Y H:i:s', strtotime("$in + $duration days"));
if (isset($_POST['service'])){
    $service = $_POST['service'];
} else {
    $service = '';
}
$price = 0;
?>

    <nav class="navbar navbar-expand navbar-dark bg-dark ">
        <div class="container-fluid">
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Feby_Home.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Feby_Booking.php">Booking</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h5 class="text-center">Thank You FEBY_1202204212 for Reserving</h5>
        <p class="text-center">Please double check your reservation details</p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Booking Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Check In</th>
                    <th scope="col">Check Out</th>
                    <th scope="col">Car Type</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Service(s)</th>
                    <th scope="col">Total Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo(rand() . "<br>");?></td>
                    <td><?php echo $name ?></td>
                    <td><?php echo $in ?></td>
                    <td><?php echo $out ?></td>
                    <td><?php echo $car ?></td>
                    <td><?php echo $phone ?></td>
                    <td>
                        <?php 
                            if (!empty($service)){
                                echo '<ul>';
                                foreach ($service as $services){
                                    if ($services == "Health protocol / Rp25.000"){
                                        $price += 25000;
                                        echo "<li> $services ";
                                    } else if ($services == "Driver / Rp100.000"){
                                        $price += 100000;
                                        echo "<li> $services ";
                                    } else {
                                        $price += 250000;
                                        echo "<li> $services ";
                                    }
                                }
                            } else {
                                echo "No Service";
                            }?>
                    </td>
                    <td>
                        <?php
                            if ($car == "Toyota Rush") {
                                $price += 200000 *$duration ;
                            } else if ($car == "Toyota Ayla") {
                                $price += 150000 *$duration;
                            } else if ($car == "Honda Brio") {
                                $price += 150000 *$duration;
                            }
                            echo "Rp $price"
                        ?>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="mb-3">
        <div class="d-flex justify-content-center">
            <a href="Feby_Booking.php" class="btn btn-outline-primary w-50">Kembali</a>
    </div>

    <div class="footer">
        <p>Created by Feby_1202204212</p>
    </div>
</body>
</html>