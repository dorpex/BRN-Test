<?php
//  connection vars
$servername = "localhost";
// enter ur localhost user name
$username = "root";
// enter ur localhost password
$password = "";
// insert the db i sent and name it "brn"
$dbname = "brn";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// get the salesman_id with most profits
$sales = "SELECT salesman_id, SUM(amount*price)
FROM sales
group by salesman_id
order by SUM(amount*price)
desc Limit 1";
$sales = $conn->query($sales)->fetch_assoc();

// get the name of the salesman
$salesman = "SELECT name
FROM salesman_list
where id=".$sales["salesman_id"];
$salesman = $conn->query($salesman)->fetch_assoc();

//answer
echo "<h1 style='direction:rtl;'>איש המכירות שהכניס הכי הרבה הוא :".$salesman['name']." </h1>"	;
echo "<h1 style='direction:rtl;'>".$salesman['name']." הכניס :".$sales['SUM(amount*price)']." ש''ח </h1>"	;
 ?>
