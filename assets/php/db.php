<?php
$servername = "rdbms.strato.de"; // or the IP address of your database
$username = "dbu3617650";
$password = "Str1502*!*&&";
$dbname = "dbs13301709";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
