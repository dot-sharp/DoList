<?php
$host = "rdbms.strato.de";  // Your host, e.g., localhost or an IP address
$username = "dbu3617650";
$password = "Str1502*!*&&";
$dbname = "dbs13301709";

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
debug_to_console("Connected successfully")

// Sample query
$sql = "SELECT id, name FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
    debug_to_console("0 results")
}

$conn->close();
?>