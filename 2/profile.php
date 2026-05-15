<?php
session_start();


if (!isset($_SESSION['login_user'])) {
    header("location:login.php?message=You must login first!");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>
    <h1 style="color: blue; text-align: center;">Welcome, <?php echo $_SESSION['login_user']; ?>!</h1>
    <p style="text-align: center;">This is your private profile page.</p>
    <div style="text-align: center;">
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>