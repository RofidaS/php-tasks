<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
</head>
<body>
    <h1>Register New User</h1>
    <form action="server.php" method="post" enctype="multipart/form-data">
        <input type="text" name="username" placeholder="Enter Username" required><br>
        <input type="email" name="email" placeholder="Enter Email" required><br>
        <input type="password" name="password" placeholder="Enter Password" required><br>
        <input type="file" name="img"><br>
        <input type="submit" name="btn-register" value="Register">
    </form>
    <a href="login.php">Already have an account? Login</a>
</body>
</html>