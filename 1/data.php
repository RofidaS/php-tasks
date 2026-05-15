<?php



        function read_data_to_table($file_name){
      $users= [];
    if(file_exists($file_name)){
        $data = file($file_name);  
        
        foreach ($data as $line) {
            $line_data = trim($line); 
            if ($line_data != "") {
                 $line_array = explode(":", $line_data);
                 array_push($users, $line_array);
            }
        }
        } else {
        echo "<h3 style='color: red'>File Not Found</h3>";
    }
        
    return $users; 
        }


$users_data = read_data_to_table("customer.txt");

echo "<h2>All Info Users</h2>";
echo "<table border='1' cellpadding='10'style='width:80%; border-collapse: collapse;'>";
echo "<tr style='background-color: #eee;'>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Address</th>
      </tr>";


  
if (!empty($users_data)) {
foreach ($users_data as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>$cell</td>";
    }
        echo "</tr>";
    } 
} else {
    echo "<tr><td colspan='5' style='text-align:center;'>No data available.</td></tr>";
}

echo "</table>"; 

echo "<br><a href='creat.php'>Add Another User</a>";
?>