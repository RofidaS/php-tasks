<?php
session_start();
require_once("UserOperations.php"); 


if (isset($_POST["btn-register"])) {
    $username = $_POST["username"];
    $email    = $_POST["email"];
    $password = $_POST["password"];
    $image    = $_FILES['img'];

   
    $allowedExtensions = ['jpg', 'jpeg', 'png'];
    $fileExtension = strtolower(pathinfo($image["name"], PATHINFO_EXTENSION));
    $maxSize = 2 * 1024 * 1024; 

   
    if (!in_array($fileExtension, $allowedExtensions)) {
        header("location:register.php?message=Error: Only JPG, JPEG & PNG allowed");
        exit();
    }

  
    if ($image["size"] > $maxSize) {
        header("location:register.php?message=Error: Image size is too large (Max 2MB)");
        exit();
    }

   
    if (!is_dir("images")) {
        mkdir("images");
    }

    $newImageName = time() . '.' . $fileExtension;
    
    if (move_uploaded_file($image["tmp_name"], "images/" . $newImageName)) {
    
        $userData = [
            "username" => $username,
            "email"    => $email,
            "password" => $password,
            "image"    => $newImageName
        ];

     
        UserManager::saveUser($userData);

        header("location:login.php?message=Register Success! Please Login");
        exit();
    } else {
        header("location:register.php?message=Error uploading image");
        exit();
    }
}


if (isset($_POST["btn-login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

  
    $users = UserManager::getAllUsers();

    if (!empty($users)) {
        $found = false;
        foreach ($users as $user) {
            if ($user["email"] == $email && $user["password"] == $password) {
                
                $_SESSION['login_user'] = $user["username"];
                $_SESSION['login_id']   = $user["email"]; 
                
                $found = true;
                header("location:profile.php");
                exit();
            }
        }
        
        if (!$found) {
            header("location:login.php?message=Invalid Email or Password");
            exit();
        }
    } else {
        header("location:login.php?message=No users found. Register first.");
        exit();
    }
}
?>