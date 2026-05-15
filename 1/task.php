<?php
echo "welcome to php";
echo "<br> <br>";


/*///////////////////////////////////////////////////////////////*/

$x=5; //int
$y='welcome'; //string
$z=true; //boolean

var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";
var_dump($z);
echo "<br> <br>";
/*////////////////////////////////////////////////////////////////// */

for($i = 0; $i <= 15; $i++){
    echo $i . " ";
}

echo "<br>";

$i = 0;
do {
    echo $i . " ";
    $i++;
}
while ($i <= 15) ;
echo "<br> <br>";


/*//////////////////////////////////////////////////////////////////////*/

$place= "ITI";

echo gettype ($place) . "<br>";
echo gettype ($x) ."<br>";
echo gettype ($y) . "<br>";
echo gettype ($z) . "<br> <br>";

 echo isSet ($place);
 echo "<br>";
 echo isSet ($x);
 echo "<br>";
 echo isSet ($y);
 echo "<br>";
 echo isSet ($z);
 echo "<br>";
echo "<br> <br>";

// echo  "$place is empty" . empty($place) . "<br>";
echo empty($x) . "<br>";
echo empty($y) . "<br>";
echo empty($z) . "<br>";
var_dump(empty($place));

/*///////////////////////////////////////////////////////////////////////////*/

$m = 20;
$n = 20;
$result = $m + $n;

if ($result > 50){
    echo "Accepted" . "<br>";
} else {
    echo "Not Accepted" . "<br> <br>";
}
echo "<br> <br>";

/*/////////////////////////////////////////////////////////////////////////////*/         
echo "<table style='width:50%;margin:auto;text-align:center' class='table table-striped table-hover border='1';>";
// echo "<thead>";
// echo"<tr>";
// echo "<th>Name</th>";
// echo "<th>Salary</th>";
// echo "</tr>";
// echo "</thead>";
// echo "<tbody>";
echo "<tr>";
echo "<td> Salary of Mr. A is  </td>";
echo "<td> 1000 </td>";
echo "</tr>";
echo "<td> Salary of Mr. B is  </td>";
echo "<td> 1200 </td>";
echo "</tr>";
echo "<td> Salary of Mr. C is  </td>";
echo "<td> 1400 </td>";
echo "</tr>";
echo "</table>";

echo "<br> <br>";

/*////////////////////////////////////////////////////////////////////*/
$num = 123;
$num1 = 999;
function numberToString($num){
return "$num";
// return "$num1";
}
echo "<br>";
// echo gettype ($num);

/*/////////////////////////////////////////////////////////////////*/
?>

<?php
$students = [
    ["name" => "mahmoud", "age" => 24],
    ["name" => "nada", "age" => 26],
    ["name" => "yara", "age" => 28],
    ["name" => "mohammed", "age" => 22],
];

echo "<table border='1' style='width:50%; text-align:center;'>";
echo "<thead><tr>";

foreach (array_keys($students[0]) as $key) {
    echo "<th>" . strtoupper($key) . "</th>";
}
echo "</tr></thead><tbody>";

foreach ($students as $student) {
    echo "<tr>";
   
    foreach (array_values($student) as $value) {
        echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}
echo "</tbody></table>";
/*/////////////////////////////////////////////////////////////////////////////*/

$str = "hello track iti track";

echo strrev($str) . "<br>";

//count
echo substr_count($str, "track") . "<br>";

//Count character 
echo "Count of 'a': " . substr_count($str, "a") . "<br>";
echo "First position of 'a': " . (strpos($str, "a") !== false ? strpos($str, "a") : "Not found") . "<br>";

/*////////////////////////////////////////////////////////////////////////////*/
$arr = [22, 25, 28, 15, 27, 19, 13, 10, 0, 2, 1];

sort($arr); 

$reversed = array_reverse($arr);


$max = max($arr);
$min = min($arr);


$sum = array_sum($arr);
$avg = $sum / count($arr);


$evens = array_filter($arr, fn($n) => $n % 2 == 0);
$odds = array_filter($arr, fn($n) => $n % 2 != 0);

echo "Max Even: " . (empty($evens) ? "None" : max($evens)) . "<br>";
echo "Max Odd: " . (empty($odds) ? "None" : max($odds)) . "<br>";

/*////////////////////////////////////////////////////////////////////////////////*/

$names = ["mohammed", "ahmed", "mahmoud", "yousef", "omar"];

function processNames($n) {
    sort($n); 
    $n = array_reverse($n); 
    
    echo "<table border='1'><tr><th>ID (Index)</th><th>Name</th></tr>";
    foreach ($n as $index => $name) {
        echo "<tr><td>$index</td><td>$name</td></tr>";
    }
    echo "</table>";
}


$data = [
    ["name"=>"hazem", "age"=>24, "address"=>"cairo"],
    ["name"=>"david", "age"=>22, "address"=>"menia"],
    ["name"=>"mahmoud", "age"=>25, "address"=>"shebin"]
];

function processData($d) {
    asort($d); 
    
    echo "<table border='1'><thead><tr><th>ID</th><th>Name</th><th>Age</th><th>Address</th></tr></thead>";
    foreach ($d as $id => $row) {
        echo "<tr><td>$id</td>";
        foreach ($row as $val) echo "<td>$val</td>";
        echo "</tr>";
    }
    echo "</table>";
}





?>