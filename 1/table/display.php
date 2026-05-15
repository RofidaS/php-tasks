<?php
include_once "navbar.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userData = $_POST; // 

    echo "<table border='1' style='margin-top:20px; width:40%; text-align:center;'>";
    echo "<tr style='background:#eee;'>";
    foreach (array_keys($userData) as $header) {
        echo "<th>" . str_replace("user_", "", $header) . "</th>";
    }
    echo "</tr><tr>";
    foreach (array_values($userData) as $value) {
        echo "<td>$value</td>";
    }
    echo "</tr></table>";
}
?>