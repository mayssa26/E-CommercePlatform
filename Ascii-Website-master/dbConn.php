<?php
 
 
function Connect()
{
$servername = "localhost";
$username = "root";
$password = "";
$databaseName="ascii";
 
 // Create connection
 $conn = new mysqli($servername, $username, $password, $databaseName) or die($conn->connect_error);
 
 return $conn;
}
 
?>