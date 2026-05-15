<?php
$gender = $_POST['gender'];
if ($gender == "Male"){
    $title ="Mr.";
}else{
   $title ="Miss."; 
}

echo "<h1> Thanks " . $title . $_POST['First-name'] . " " . $_POST['Last-name'] . "</h1>";

echo "<h2> Please Review Your Information. </h2>";

echo "Name: " . $_POST['First-name'] . " " . $_POST['Last-name'] . "<br>";
echo "Address: " . $_POST['address'] . "<br>";

// echo "Your Skills: " . $_GET ['skills'] . "<br>"

echo "Country: " . $_POST['country'] . "<br>";
echo "Department: " . $_POST['department'] . "<br>";



$fname  = $_POST['First-name'];
$lname  = $_POST['Last-name'];
$email  = $_POST['email'];
$gender = $_POST['gender'];
$address = $_POST['address'];

$user_record = "{$fname}:{$lname}:{$email}:{$gender}:{$address}\n";

// $file_object = fopen("users.txt", "a");
// $saved = fwrite($file_object, $user_data);
// if ($saved) {
//     echo "User created";
// }else{
//     echo "Error creating user";
// }



function saved($file_name, $data) {
    $file_obj = fopen($file_name, "a");
    if ($file_obj) {
        fwrite($file_obj, $data);
        fclose($file_obj);
        return true;
    }
    return false;
}

if (saved("customer.txt", $user_record)) {
    header("Location: data.php");
    exit(); 
} else {
    echo "Error saving data.";
}
?>