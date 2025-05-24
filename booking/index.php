<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
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

    <meta charset="UTF-8">
    <title>Welcome to TravelMate Booking</title>
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

        .hero {
            text-align: center;
            padding: 80px 20px;
            background: url('assets/images/hero.jpg') no-repeat center center/cover;
            color: white;
            font-size: 32px;
            font-weight: bold;
            text-shadow: 2px 2px 6px black;
        }

        .destinations-section,
        .promotions-section {
            padding: 2rem 0;
        }

        .destinations-grid,
        .promotions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }

        .destination-card,
        .promotion-card {
            background-color: white;
            border-radius: 4px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .destination-card:hover,
        .promotion-card:hover {
            transform: translateY(-5px);
        }

        .destination-card img,
        .promotion-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .destination-card h3,
        .promotion-card h3 {
            padding: 1rem;
            font-size: 1.25rem;
            color: #003580;
        }

        .promotion-card p {
            padding: 0 1rem 1rem;
        }

        footer {
            background-color: #343a40;
            color: white;
            padding: 20px;
            text-align: center;
            margin-top: 30px;
        }
    </style>
    
</head>
<body>

<div class="hero">
    Explore the World with TravelMate!
</div>

<section class="destinations-section">
            <h2>Popular Destinations</h2>
            <div class="destinations-grid">
                <div class="destination-card">
                    <a href="https://www.booking.com/searchresults.en-gb.html?ss=Paris&ssne=Paris&ssne_untouched=Paris&label=en-xk-booking-desktop-K5RdKGOM9t0KdK65F_UkKAS652828998412%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-65526620%3Alp1028594%3Ali%3Adec%3Adm&sid=8024272eeb5e79083570b3606493638c&aid=2311236&lang=en-gb&sb=1&src_elem=sb&src=index&dest_id=-1456928&dest_type=city&group_adults=2&no_rooms=1&group_children=0"><img src="assets/paris.png" alt="Paris"></a>
                    <h3>Paris</h3>
                </div>
                <div class="destination-card">
                  <a href="https://www.booking.com/searchresults.en-gb.html?ss=New+York%2C+New+York%2C+United+States&ssne=Paris&ssne_untouched=Paris&label=en-xk-booking-desktop-K5RdKGOM9t0KdK65F_UkKAS652828998412%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-65526620%3Alp1028594%3Ali%3Adec%3Adm&sid=8024272eeb5e79083570b3606493638c&aid=2311236&lang=en-gb&sb=1&src_elem=sb&src=searchresults&dest_id=20088325&dest_type=city&ac_position=0&ac_click_type=b&ac_langcode=en&ac_suggestion_list_length=5&search_selected=true&search_pageview_id=ca036bc9917a03b1&ac_meta=GhBjOTJmNmJjYzEyMjIwNDU3IAAoATICZW46A05ld0AASgBQAA%3D%3D&checkin=2024-06-07&checkout=2024-06-10&group_adults=2&no_rooms=1&group_children=0"><img src="assets/newyork.png" alt="New York"></a>
                    <h3>New York</h3>
                </div>
                <div class="destination-card">
                    <a href="https://www.booking.com/searchresults.en-gb.html?ss=Tokyo%2C+Tokyo-to%2C+Japan&ssne=New+York&ssne_untouched=New+York&label=en-xk-booking-desktop-K5RdKGOM9t0KdK65F_UkKAS652828998412%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-65526620%3Alp1028594%3Ali%3Adec%3Adm&sid=8024272eeb5e79083570b3606493638c&aid=2311236&lang=en-gb&sb=1&src_elem=sb&src=searchresults&dest_id=-246227&dest_type=city&ac_position=0&ac_click_type=b&ac_langcode=en&ac_suggestion_list_length=5&search_selected=true&search_pageview_id=931e6bd26b050243&ac_meta=GhA2M2I0NmJlZmQyZjYwMzEwIAAoATICZW46BHRva3lAAEoAUAA%3D&checkin=2024-06-07&checkout=2024-06-10&group_adults=2&no_rooms=1&group_children=0"><img src="assets/tokyo.png" alt="Tokyo"></a>
                    <h3>Tokyo</h3>
                </div>
                <div class="destination-card">
                    <a href="https://www.booking.com/searchresults.en-gb.html?ss=Sydney%2C+New+South+Wales%2C+Australia&ssne=Tokyo&ssne_untouched=Tokyo&label=en-xk-booking-desktop-K5RdKGOM9t0KdK65F_UkKAS652828998412%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-65526620%3Alp1028594%3Ali%3Adec%3Adm&sid=8024272eeb5e79083570b3606493638c&aid=2311236&lang=en-gb&sb=1&src_elem=sb&src=searchresults&dest_id=-1603135&dest_type=city&ac_position=0&ac_click_type=b&ac_langcode=en&ac_suggestion_list_length=5&search_selected=true&search_pageview_id=d38b6bf435590115&ac_meta=GhBlMDUwNmMwODIzODEwMjM5IAAoATICZW46A3N5ZEAASgBQAA%3D%3D&checkin=2024-06-07&checkout=2024-06-10&group_adults=2&no_rooms=1&group_children=0"><img src="assets/sydney.png" alt="Sydney"></a>
                    <h3>Sydney</h3>
                </div>
            </div>
        </section>

        <section class="promotions-section">
            <h2>Latest Deals</h2>
            <div class="promotions-grid">
                <div class="promotion-card">
                    <img src="assets/summer-sale.png" alt="Deal 1">
                    <h3>Summer Sale</h3>
                    <p>Up to 50% off on selected hotels.</p>
                </div>
                <div class="promotion-card">
                    <img src="assets/weekend-getaways.png" alt="Deal 2">
                    <h3>Weekend Getaways</h3>
                    <p>Special prices for weekend stays.</p>
                </div>
                <div class="promotion-card">
                    <img src="assets/EBD.png" alt="Deal 3">
                    <h3>Early Bird Discounts</h3>
                    <p>Book early and save more.</p>
                </div>
            </div>
        </section>

<footer>
    &copy; <?php echo date("Y"); ?> TravelMate Booking. All rights reserved.
</footer>


<?php include 'footer.php'; ?>

</body>
</html>
