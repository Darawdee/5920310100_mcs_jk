<?php
//$servername = "mysql.mcs.psu.ac.th";
$servername = "172.18.111.41";
$username = "5920310100";
$password = "5920310100";
$dbname = "5920310100_alist";

// Create connection object
$conn = new mysqli($servername, $username, $password, $dbname);
    
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
mysqli_set_charset($conn, "utf8");//is to make Thai readable
?>




