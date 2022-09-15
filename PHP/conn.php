<?php
// database connection code
$servername = "localhost";
$username = "root";
$password1 = "";
$dbname = "jokes";
// connects to the database
$conn = mysqli_connect($servername, $username, $password1, $dbname);
// Checks the connection
if($conn == false){
die("Error:.". mysqli_connect_error());
}
$pdo = new PDO("mysql:dbname=jokes;host=localhost","root","");
?>
