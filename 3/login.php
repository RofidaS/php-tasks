<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login Form</h1>

    <?php 
   
    if(isset($_GET["message"])) {
      
        $color = (strpos($_GET["message"], 'Success') !== false) ? 'green' : 'red';
        echo "<h3 style='color:$color'>" . $_GET["message"] . "</h3>";
    }
    ?>

    <form action="server.php" method="post">
        <input type="email" name="email" placeholder="Enter Email" required><br><br>
        <input type="password" name="password" placeholder="Enter Password" required><br><br>
        <input type="submit" name="btn-login" value="Login">
    </form>

    <br>
    <a href="register.php">Don't have an account? Register here</a>
</body>
</html>