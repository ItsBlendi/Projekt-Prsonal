<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <header>
    <h1>Bookify</h1>
</header>
<nav>
    <a href="index.php">Home</a>
    <a href="about.php">About Us</a>
    <a href="flights.php">Flights</a>
    <a href="car_rentals.php">Car Rentals</a>
    <a href="attractions.php">Attractions</a>
    <a href="airport_taxis.php">Airport Taxis</a>
    <a href="signup.php">Sign Up</a>
    <a href="login.php">Sign In</a>
    <a href="contact.php">Contact</a>
</nav>


    <title>Car Rentals - TravelMate Booking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: lightblue;
            margin: 0;
            padding: 20px;
        }

        header {
            background-color: #007bff;
            padding: 15px 20px;
            color: white;
            text-align: center;
        }

        nav {
            background-color: #0056b3;
            display: flex;
            justify-content: center;
            padding: 10px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background:  #007bff;
            padding: 30px;
            border-radius: 10px;
        }

        h2 {
            text-align: center;
            color: white;
        }

        label {
            display: block;
            color: white;
            margin: 15px 0 5px;
        }

        input, select, button {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 6px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background: linear-gradient(to right, lightblue, #0056b3);
            color: white;
            border: none;
            margin-top: 20px;
        }

        button:hover {
            background-color: #ef6c00;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Rent a Car</h2>
    <form action="process_car.php" method="POST">
        <label>Pickup Location</label>
        <input type="text" name="pickup_location" required>

        <label>Pickup Date</label>
        <input type="date" name="pickup_date" required>

        <label>Drop-off Date</label>
        <input type="date" name="dropoff_date" required>

        <label>Car Type</label>
        <select name="car_type">
            <option value="economy">Economy</option>
            <option value="suv">SUV</option>
            <option value="luxury">Luxury</option>
        </select>

        <button type="submit">Search Cars</button>
    </form>
</div>

<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pickup = $_POST['pickup_location'];
    $return = $_POST['return_location'];
    $pickup_date = $_POST['pickup_date'];
    $return_date = $_POST['return_date'];
    $car_type = $_POST['car_type'];

    $stmt = $pdo->prepare("INSERT INTO car_rentals (pickup_location, return_location, pickup_date, return_date, car_type) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$pickup, $return, $pickup_date, $return_date, $car_type]);

    echo "Car rental booked successfully!";
}
?>


</body>
</html>
<?php include 'footer.php'; ?>
