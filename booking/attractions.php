<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
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

    <title>Top Attractions - TravelMate Booking</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: lightblue;
            margin: 0;
            padding: 0;
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
            background-color: #3498db;
            color: white;
            padding: 25px;
            text-align: center;
            font-size: 32px;
            letter-spacing: 1px;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 40px auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 30px;
        }

        .attraction {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            overflow: hidden;
            flex: 1 1 calc(33% - 20px);
            transition: transform 0.3s ease;
        }

        .attraction:hover {
            transform: scale(1.03);
        }

        .attraction img {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }

        .attraction-content {
            padding: 15px;
        }

        .attraction-content h3 {
            color: #2c3e50;
            margin-top: 0;
        }

        .attraction-content p {
            color: #555;
        }

        @media screen and (max-width: 768px) {
            .attraction {
                flex: 1 1 100%;
            }
        }
    </style>
</head>
<body>

<div class="header">
    Discover Breathtaking Attractions with TravelMate
</div>

<div class="container">
    <div class="attraction">
        <img src="assets/paris.jpg" alt="Eiffel Tower">
        <div class="attraction-content">
            <h3>Paris, France</h3>
            <p>Explore the romantic streets of Paris and experience the magic of the Eiffel Tower, museums, and French cuisine.</p>
        </div>
    </div>

    <div class="attraction">
        <img src="assets/bali.jpg" alt="Bali Beach">
        <div class="attraction-content">
            <h3>Bali, Indonesia</h3>
            <p>Relax on pristine beaches, take in stunning sunsets, and immerse yourself in rich Balinese culture.</p>
        </div>
    </div>

    <div class="attraction">
        <img src="assets/new york.jpg" alt="New York City">
        <div class="attraction-content">
            <h3>New York City, USA</h3>
            <p>Discover the city that never sleeps—skyscrapers, Broadway shows, and world-class dining await you.</p>
        </div>
    </div>

    <div class="attraction">
        <img src="assets/santorini.jpg" alt="Santorini Greece">
        <div class="attraction-content">
            <h3>Santorini, Greece</h3>
            <p>Marvel at the iconic white-washed buildings, crystal-clear waters, and stunning sunsets over the Aegean Sea.</p>
        </div>
    </div>

    <div class="attraction">
        <img src="assets/dubai.jpg" alt="Dubai">
        <div class="attraction-content">
            <h3>Dubai, UAE</h3>
            <p>Experience luxury, desert adventures, and futuristic architecture in the heart of the Middle East.</p>
        </div>
    </div>
</div>

</body>
</html>
