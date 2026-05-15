<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
    <h1>Register Form</h1>

    <?php 
    
    if(isset($_GET["message"])) {
        echo "<h3 style='color:red'>" . $_GET["message"] . "</h3>";
    }
    ?>

    <form action="server.php" method="post" enctype="multipart/form-data">
        <input type="text" name="username" placeholder="Enter Username" required><br><br>
        <input type="email" name="email" placeholder="Enter Email" required><br><br>
        <input type="password" name="password" placeholder="Enter Password" required><br><br>
        
        <label>Upload Profile Image (JPG, PNG - Max 2MB):</label><br>
        <input type="file" name="img" required><br><br>
        
        <input type="submit" name="btn-register" value="Register">
    </form>

    <br>
    <a href="login.php">Already have an account? Login here</a>
</body>
</html>