<?php
// Připojení k databázi
include 'db_connection.php';

// Získání ID záznamu
$id = $_GET['id'];

// Smazání záznamu z databáze
$sql = "DELETE FROM NAVI_players WHERE ID=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

// Uzavření spojení s databází
$conn->close();
?>
