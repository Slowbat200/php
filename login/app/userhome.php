<?php
session_start(); 

if(!isset($_SESSION["username"]))
{
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
    <link rel="stylesheet" href="../css/user.css">
</head>
<body>
<?php
$txt1 = "Hello ";
$txt2 = " welcome on our website";
echo "<h1>" . $txt1 . $_SESSION["username"] . $txt2 . "</h1>";
?>    
<a href="logout.php">Logout</a>
</body>
</html>