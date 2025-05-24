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

    <title>Airport Taxis - TravelMate Booking</title>
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
            background: #007bff;
            padding: 30px;
            border-radius: 10px;
        }

        h2 {
            text-align: center;
            color: #0056b3;
        }

        label {
            display: block;
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
            background:  linear-gradient(to right, lightblue, #0056b3);
            color: white;
            border: none;
            margin-top: 20px;
        }

    </style>
</head>
<body>

<div class="container">
    <h2>Book an Airport Taxi</h2>
    <form action="process_taxi.php" method="POST">
        <label>Pickup Location</label>
        <input type="text" name="pickup_location" required>

        <label>Destination</label>
        <input type="text" name="destination" required>

        <label>Date & Time</label>
        <input type="datetime-local" name="pickup_time" required>

        <button type="submit">Book Now</button>
    </form>
</div>

<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pickup_address = $_POST['pickup_address'];
    $airport = $_POST['airport'];
    $pickup_time = $_POST['pickup_time'];
    $passengers = $_POST['passengers'];

    $stmt = $pdo->prepare("INSERT INTO airport_taxis (pickup_address, airport, pickup_time, passengers) VALUES (?, ?, ?, ?)");
    $stmt->execute([$pickup_address, $airport, $pickup_time, $passengers]);

    echo "Taxi booked successfully!";
}
?>

</body>
</html>
<?php include 'footer.php'; ?>
