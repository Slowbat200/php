<?php
// Připojení k databázi
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "NAVI_players";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrola připojení
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>