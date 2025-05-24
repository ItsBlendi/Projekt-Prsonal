<?php
include 'config.php';
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['user_id'];
$stmt = $pdo->prepare("SELECT * FROM bookings WHERE user_id = ? ORDER BY date DESC");
$stmt->execute([$user_id]);
$bookings = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Your Booking History</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 10px; }
        th { background-color: #007bff; color: white; }
    </style>
</head>
<body>
    <h2>Your Bookings</h2>
    <table>
        <tr>
            <th>Booking ID</th>
            <th>Type</th>
            <th>Details</th>
            <th>Date</th>
        </tr>
        <?php foreach ($bookings as $booking): ?>
        <tr>
            <td><?= $booking['id'] ?></td>
            <td><?= $booking['type'] ?></td>
            <td><?= htmlspecialchars($booking['details']) ?></td>
            <td><?= $booking['date'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
