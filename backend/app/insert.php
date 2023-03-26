<?php
// Připojení k databázi
include 'db_connection.php';

// Získání dat z formuláře
$name = $_POST['name'];
$age = $_POST['age'];
$role = $_POST['role'];

// Vložení dat do databáze
$sql = "INSERT INTO NAVI_players (Name, Age, Role) VALUES ('$name', '$age', '$role')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Uzavření spojení s databází
$conn->close();
?>
