<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST['username'] === 'admin' && $_POST['password'] === 'admin123') {
        $_SESSION['admin'] = true;
        header("Location: admin_dashboard.php");
        exit;
    } else {
        $error = "Invalid admin credentials.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login</title>
    <style>
        body { font-family: Arial; background: #eee; display: flex; justify-content: center; align-items: center; height: 100vh; }
        form { background: #fff; padding: 20px; border-radius: 6px; box-shadow: 0 0 10px #aaa; }
    </style>
</head>
<body>
    <form method="post">
        <h2>Admin Login</h2>
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <input name="username" placeholder="Username" required><br><br>
        <input name="password" type="password" placeholder="Password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
