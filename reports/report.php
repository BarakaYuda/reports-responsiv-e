<?php
$servername='localhost';
$username='root';
$dbname='Hospital';
$password='Toio';
$con = mysqli_connect ("$servername","$username","$password","$dbname");

// Create connection

if(!$con){
   echo "connection error: " ;
}
 
$sql = 'SELECT * FROM schedule2';

$result = mysqli_query($con,$sql);
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
   <table aling="center" border="1px" style="width:600px; line: height 40px;">
      <tr><h1>patient records</h1></tr>
      <t class="table">
           <th>book_no</th>
           <th>Doctor</th>
           <th>Email</th>
           <th>Dates</th>
           <th>mobile</th>
           <th>full_name</th>
      </t>
      <?php
        while ( $row= mysql_fetch_array($tables))

?>
<tr>
   <td><?php echo $table['book_no']; ?></td>
   <td><?php echo $table['Doctors']; ?></td>
   <td><?php echo $table['Email']; ?></td>
   <td><?php echo $table['Dates']; ?></td>
   <td><?php echo $table['mobile']; ?></td>
   <td><?php echo $table['Full_name']; ?></td>
   </table>
</body>
</html>