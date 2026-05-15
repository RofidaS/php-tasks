<?php
session_start();
require_once("UserOperations.php");

if (!isset($_SESSION['login_user'])) {
    header("location:login.php?message=You must login first");
    exit;
}

$allUsers = UserManager::getAllUsers();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile - Users List</title>
    <style>
        table { width: 80%; margin: 20px auto; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: center; }
        th { background-color: #f2f2f2; }
        img { width: 50px; height: 50px; border-radius: 50%; }
    </style>
</head>
<body>

    <h1 style="text-align: center;">Welcome, <?php echo $_SESSION['login_user']; ?></h1>

    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th>Username</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($allUsers as $user): ?>
            <tr>
                <td><img src="images/<?php echo $user['image']; ?>" alt="user"></td>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td>
                   
                    <a href="delete.php?email=<?php echo $user['email']; ?>" style="color:red;">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div style="text-align: center;">
        <a href="logout.php">Logout</a>
    </div>

</body>
</html>