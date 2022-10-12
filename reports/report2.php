<?php
include_once(`connection.php`);
$query="select * from schedule2";
$result=mysqli_query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <table>
      <tr>
        <th>
         <h2>MY RECORDS</h2>
</th>
      </tr>
   </table>
</body>
</html>