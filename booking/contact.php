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

    <title>Contact Us - TravelMate Booking</title>
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


        .contact-section {
            padding: 60px 20px;
            text-align: center;
        }

        .contact-section h2 {
            font-size: 36px;
            color: #0056b3;
            margin-bottom: 20px;
        }

        form {
            max-width: 600px;
            margin: auto;
            background: #007bff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        button {
            background: linear-gradient(to right, lightblue, #0056b3);
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
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

<div class="contact-section">
    <h2>Contact Us</h2>
    <p>If you have questions, feedback, or partnership opportunities, get in touch with us!</p>

    <form id="contactForm" action="send_contact.php" method="POST" onsubmit="return validateForm();">
        <input type="text" name="name" placeholder="Your Full Name" required>
        <input type="email" name="email" placeholder="Your Email Address" required>
        <input type="text" name="subject" placeholder="Subject" required>
        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
    </form>
</div>

<script>
    function validateForm() {
        const name = document.forms["contactForm"]["name"].value;
        const email = document.forms["contactForm"]["email"].value;
        const subject = document.forms["contactForm"]["subject"].value;
        const message = document.forms["contactForm"]["message"].value;

        if (!name || !email || !subject || !message) {
            alert("Please fill out all fields.");
            return false;
        }

        return true;
    }
</script>

<?php include 'footer.php'; ?>

</body>
</html>
