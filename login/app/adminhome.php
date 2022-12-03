<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <?php
    $txt1 = "Hello ";
    $txt2 = " welcome back";
    echo "<h1>" . $txt1 . $_SESSION["username"] . $txt2 . "</h1>";
    ?>
    <a href="logout.php">Logout</a>
    <table>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Password</th>
            <th>UserType</th>
            <th>Level</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "root", "user");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM member";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["Id"] . "</td><td>" . $row["username"] . "</td><td>"
                    . $row["password"] . "</td><td>" . $row["usertype"] . "</td><td>" . $row["level"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </table>
    <div class="btn">
    <button id="btn_edit" class="btn_edit">EDIT</button>
    <button id="btn_delete" class="btn_delete">DELETE</button>
    </div>
    <script src="../js/script.js"></script>
</body>

</html>