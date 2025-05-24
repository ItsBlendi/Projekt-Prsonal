<?php
include 'config.php';
$results = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $from = $_POST['from'];
    $to = $_POST['to'];

    $stmt = $pdo->prepare("SELECT * FROM flights WHERE from_city = ? AND to_city = ?");
    $stmt->execute([$from, $to]);
    $results = $stmt->fetchAll();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Flights</title>
</head>
<body>
    <form method="POST">
        <input name="from" placeholder="From City">
        <input name="to" placeholder="To City">
        <button type="submit">Search</button>
    </form>

    <?php if ($results): ?>
        <h3>Results:</h3>
        <ul>
        <?php foreach ($results as $flight): ?>
            <li><?= htmlspecialchars($flight['from_city']) ?> to <?= htmlspecialchars($flight['to_city']) ?> on <?= $flight['flight_date'] ?></li>
        <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>
