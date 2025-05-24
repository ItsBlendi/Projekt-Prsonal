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
    
    <title>About Us - TravelMate Booking</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: lightblue;
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

        .about-section {
            padding: 60px 20px;
            text-align: center;
        }

        .about-section h2 {
            font-size: 36px;
            color: #007bff;
            margin-bottom: 20px;
        }

        .about-section p {
            font-size: 18px;
            max-width: 800px;
            margin: auto;
            line-height: 1.6;
        }

        .values {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-top: 40px;
        }

        .value-box {
            width: 250px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }

        .value-box h3 {
            color: #0056b3;
            margin-bottom: 10px;
        }

        footer {
            background-color: #343a40;
            color: white;
            padding: 20px;
            text-align: center;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<div class="about-section">
    <h2>About TravelMate Booking</h2>
    <p>
        TravelMate Booking is your trusted travel partner. Whether you're planning a vacation, business trip, or local getaway, we make it easy to book flights, car rentals, attractions, and airport taxis—all in one place.
    </p>
    <p>
        Founded in 2024, TravelMate is committed to making travel accessible and enjoyable. Our platform connects users with real-time booking tools and excellent customer support.
    </p>

    <div class="values">
        <div class="value-box">
            <h3>Trust & Security</h3>
            <p>We ensure your bookings are secure and your data is protected.</p>
        </div>
        <div class="value-box">
            <h3>Affordability</h3>
            <p>Compare prices and book the best deals across travel services.</p>
        </div>
        <div class="value-box">
            <h3>Convenience</h3>
            <p>Book everything from one platform—fast, simple, and reliable.</p>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
