<?php
// Připojení k databázi
include 'db_connection.php';

// Dotaz na získání dat z databáze
$sql = "SELECT * FROM NAVI_players";
$result = $conn->query($sql);

// Zpracování výsledků dotazu
if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "Jméno: " . $row["name"] . "<br>";
      echo "Věk: " . $row["age"] . "<br>";
      echo "Role: " . $row["role"] . "<br>";
      echo "<td><a href='insert.php?id=" . $row["ID"] . "'>Edit</a> 
      <a href='delete.php?id=" . $row["ID"] . "' onClick=\\\"return confirm('Are you sure you want to delete?')\\\">Delete</a>
      </td>";
    }
  } else {
    echo "0 results";
  }
  
  
  // Uzavření spojení s databází
  $conn->close();
