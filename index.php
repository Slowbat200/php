<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
    <?php
    for($row=0;$row<=7;$row++){
        echo "<tr>";
          for($col=1;$col<=8;$col++)
          {
          $total=$row+$col;
          if($total%2==0)
          {
          echo "<td height='25px' width='25px' bgcolor='white'></td>";
          }
          else
          {
          echo "<td height='25px' width='25px' bgcolor='black'></td>";
          }
          }
          echo "</tr>";
        }
    ?>
    </table>
</body>
</html>