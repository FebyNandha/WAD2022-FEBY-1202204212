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
        <h4 class="text-center">Rent your car now!</h4>
        <form action="Feby_MyBooking.php" method="POST">
            <div class= "mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="FEBY_1202204212" readonly>
            </div>
            <div class= "mb-3">
                <label for="date" class="form-label">Book Date</label>
                <input type="date" class="form-control" id="date" name="date" placeholder="dd/mm/yyyy">
            </div>
            <div class= "mb-3">
                <label for="time" class="form-label">Start Time</label>
                <input type="time" class="form-control" id="time" name="time">
            </div>
            <div class= "mb-3">
                <label for="duration" class="form-label">Duration (Days)</label>
                <input type="number" class="form-control" id="duration" name="duration" placeholder=" ">
            </div>
            <div class= "mb-3">
                <label for="car" class="form-label">Car Type</label>
                <select class="form-select" name="car" id="">
                    <option selected disabled>Pick Car Type</option>
                    <option value="Toyota Rush">Toyota Rush</option>
                    <option value="Toyota Ayla">Toyota Ayla</option>
                    <option value="Honda Brio">Honda Brio</option>
                </select>
            </div>
            <div class= "mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="phone" name="phone" placeholder=" ">
            </div>
            <label for="service" class="form-label">Add Service(s)</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Health protocol / Rp25.000" name="service[]" id="Health Protocol">
                <label class="form-check-label" for="Health protocol">Health protocol / Rp25.000</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Driver / Rp100.000" name="service[]" id="Driver">
                <label class="form-check-label" for="Driver">Driver / Rp100.000</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Fuel filled / Rp250.000" name="service[]" id="Fuel Filled">
                <label class="form-check-label" for="Fuel filled">Fuel filled / Rp250.000</label>
            </div>
            <br>
            <div class="d-grid gap-2">
                <input class="btn btn-success" type="submit" name="submit" value="Booking" href="Feby_MyBooking"></input>
            </div>
        </form>
    </div>

    <div class="footer">
        <p>Created by Feby_1202204212</p>
    </div>

</body>
</html>