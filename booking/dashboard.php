<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$userName = $_SESSION['user_name']; // assuming you store the name on login
?>

<!DOCTYPE html>
<html lang="en">
<head>
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

    <title>TravelMate Booking - Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: url('booking-background.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
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


        .header {
            background-color: #ff7f50;
            padding: 20px;
            text-align: center;
            font-size: 28px;
            color: white;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            background: rgba(0, 0, 0, 0.7);
            padding: 40px;
            border-radius: 12px;
            text-align: center;
        }

        .btn {
            display: inline-block;
            background-color: #3498db;
            color: white;
            padding: 14px 24px;
            margin: 15px;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            font-size: 18px;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<div class="header">
    Welcome to TravelMate, <?php echo htmlspecialchars($userName); ?>!
</div>

<div class="container">
    <h2>Your Dashboard</h2>
    <p>Manage your bookings or explore our services:</p>

    <a href="flights.php" class="btn">Book a Flight</a>
    <a href="car_rentals.php" class="btn">Rent a Car</a>
    <a href="attractions.php" class="btn">Explore Attractions</a>
    <a href="airport_taxis.php" class="btn">Book Airport Taxi</a>
    <a href="admin_logout.php" class="btn">Logout</a>
</div>

</body>
</html>
