<?php

// Toon foutmeldingen
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dbname = ${{secrets.DBHOST}};
$dbuser = ${{secrets.DBUSER}};
$dbpass = ${{secrets.DBPASS}};  // Zorg dat dit het juiste wachtwoord is
$dbhost = ${{secrets.DBHOST}};

// Maak verbinding met de database
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Controleer of de verbinding is geslaagd
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Voer een query uit
$result = $conn->query("SELECT id, username FROM user");

// Controleer of de query succesvol was
if ($result) {
    while ($row = $result->fetch_assoc()) {
        printf("ID: %s  Name: %s <br>", $row['id'], $row['username']);
    }
} else {
    echo "Query failed: " . $conn->error;
}

// Sluit de verbinding
$conn->close();
