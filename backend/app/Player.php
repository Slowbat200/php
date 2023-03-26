<?php
class Player {
  private $conn;

  // Konstruktor pro připojení k databázi
  function __construct($conn) {
    $this->conn = $conn;
  }

  // Metoda pro přidání hráče
  function addPlayer($name, $age, $role) {
    $sql = "INSERT INTO Player (Name, Age, Role) VALUES ('$name', $age, '$role')";

    if ($this->conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $this->conn->error;
    }
  }

  // Metoda pro úpravu hráče
  function updatePlayer($id, $name, $age, $role) {
    $sql = "UPDATE Player SET Name='$name', Age=$age, Role='$role' WHERE ID=$id";

    if ($this->conn->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $this->conn->error;
    }
  }

  // Metoda pro smazání hráče
  function deletePlayer($id) {
    $sql = "DELETE FROM Player WHERE ID=$id";

    if ($this->conn->query($sql) === TRUE) {
      echo "Record deleted successfully";
    } else {
      echo "Error deleting record: " . $this->conn->error;
    }
  }
}
?>