<?php
include 'config.php';
session_start();

// Optional: Authentication check for admin
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body { font-family: Arial; background-color: #f0f0f0; padding: 20px; }
        h1 { text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: center; }
        th { background-color: #007bff; color: white; }
    </style>
</head>
<body>
    <h1>Admin Dashboard</h1>
    <h2>Flight Bookings</h2>
    <table>
        <tr><th>ID</th><th>From</th><th>To</th><th>Date</th><th>Passengers</th></tr>
        <?php
        $flights = $pdo->query("SELECT * FROM flights")->fetchAll();
        foreach ($flights as $flight) {
            echo "<tr><td>{$flight['id']}</td><td>{$flight['from_city']}</td><td>{$flight['to_city']}</td><td>{$flight['flight_date']}</td><td>{$flight['passengers']}</td></tr>";
        }
        ?>
    </table>

    <h2>Car Rentals</h2>
    <table>
        <tr><th>ID</th><th>Pickup</th><th>Return</th><th>Pickup Date</th><th>Return Date</th><th>Car Type</th></tr>
        <?php
        $cars = $pdo->query("SELECT * FROM car_rentals")->fetchAll();
        foreach ($cars as $car) {
            echo "<tr><td>{$car['id']}</td><td>{$car['pickup_location']}</td><td>{$car['return_location']}</td><td>{$car['pickup_date']}</td><td>{$car['return_date']}</td><td>{$car['car_type']}</td></tr>";
        }
        ?>
    </table>

    <h2>Airport Taxis</h2>
    <table>
        <tr><th>ID</th><th>Pickup Address</th><th>Airport</th><th>Time</th><th>Passengers</th></tr>
        <?php
        $taxis = $pdo->query("SELECT * FROM airport_taxis")->fetchAll();
        foreach ($taxis as $taxi) {
            echo "<tr><td>{$taxi['id']}</td><td>{$taxi['pickup_address']}</td><td>{$taxi['airport']}</td><td>{$taxi['pickup_time']}</td><td>{$taxi['passengers']}</td></tr>";
        }
        ?>
    </table>
</body>
</html>
