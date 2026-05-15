<?php
session_start(); 


if(isset($_POST["btn-register"])) {
    $username = $_POST["username"];
    $email    = $_POST["email"];
    $password = $_POST["password"];
    $image    = $_FILES['img'];

   
    if(!is_dir("images")) {
        mkdir("images");
    }
    $newImageName = time() . '.' . pathinfo($image["name"], PATHINFO_EXTENSION);
    move_uploaded_file($image["tmp_name"], "images/" . $newImageName);

   
    if(!file_exists("data.json")) {
        file_put_contents("data.json", json_encode([]));
    }

    $currentData = file_get_contents("data.json");
    $dataArray = json_decode($currentData, true);

   
    $newUser = [
        "username" => $username,
        "email"    => $email,
        "password" => $password,
        "image"    => $newImageName
    ];

    $dataArray[] = $newUser;
    file_put_contents("data.json", json_encode($dataArray, JSON_PRETTY_PRINT));

    header("location:login.php?message=Register Success! Please Login");
    exit();
}


if(isset($_POST["btn-login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if(file_exists("data.json")) {
        $data = file_get_contents("data.json");
        $users = json_decode($data, true);

        foreach($users as $user) {
            if($user["email"] == $email && $user["password"] == $password) {
                $_SESSION['login_user'] = $user["username"]; 
                header("location:profile.php");
                exit();
            }
        }
        header("location:login.php?message=Invalid Email or Password");
    } else {
        header("location:login.php?message=No users found. Register first.");
    }
}
?>