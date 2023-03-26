<?php
// Připojení k databázi
include 'db_connection.php';

// Získání dat z formuláře
$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$role = $_POST['role'];

// Úprava záznamu v databázi
$sql = "UPDATE NAVI_players SET Name='$name', Age='$age', Role='$role' WHERE ID=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

// Uzavření spojení s databází
$conn->close();
?>
