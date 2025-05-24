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

    <title>Flights - TravelMate Booking</title>
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
            color: white;
        }

        h2 {
            text-align: center;
            color: white;
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
            background: linear-gradient(to right, lightblue, #0056b3);
            color: white;
            border: none;
            margin-top: 20px;
        }

        button:hover {
            background-color: #01579b;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Book a Flight</h2>
    <form action="process_flight.php" method="POST">
        <label>Departure City</label>
        <input type="text" name="departure" required>

        <label>Arrival City</label>
        <input type="text" name="arrival" required>

        <label>Departure Date</label>
        <input type="date" name="departure_date" required>

        <label>Return Date</label>
        <input type="date" name="return_date">

        <label>Passengers</label>
        <input type="number" name="passengers" min="1" required>

        <button type="submit">Search Flights</button>
    </form>
</div>

<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $from = $_POST['from'];
    $to = $_POST['to'];
    $date = $_POST['date'];
    $passengers = $_POST['passengers'];

    $stmt = $pdo->prepare("INSERT INTO flights (from_city, to_city, flight_date, passengers) VALUES (?, ?, ?, ?)");
    $stmt->execute([$from, $to, $date, $passengers]);

    echo "Flight booked successfully!";
}
?>

</body>
</html>
<?php include 'footer.php'; ?>
