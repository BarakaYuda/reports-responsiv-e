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

