<?php

session_start();
//Conncet to database
$host = "localhost";
$user = "root";
$password = 'root';
$db_name = "user";


$con = mysqli_connect($host, $user, $password, $db_name);
if (mysqli_connect_error()) {
  die("Failed to connect with MySQL: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
  
  $sql = "SELECT * FROM member WHERE username= '" . $username . "' AND  password= '" . $password . "'
  ";
  
  $result = mysqli_query($con, $sql);
  
  $row = mysqli_fetch_array($result);


  if ($row["usertype"] == "user") {
    $_SESSION["username"] = $username;
    header("location:./userhome.php");
  } else if ($row["usertype"] == "admin") {
    $_SESSION["username"] = $username;
    header("location:./adminhome.php");
  } else {
    echo "incorrect";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Form</title>
  <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
  <div class="login-box">
    <div class="container">
      <h1 class="neonText">User Login</h1>
    </div>
    <form action="#" method="POST">
      <div class="user-box">
        <input type="text" name="username" required="" />
        <label>Username</label>
      </div>
      <div class="user-box">
        <input type="password" name="password" required="" />
        <label>Password</label>
      </div>
      <input class="btn" name="Password" type="submit" value="Login" />
    </form>
  </div>
  <script src="js/script.js"></script>
</body>

</html>