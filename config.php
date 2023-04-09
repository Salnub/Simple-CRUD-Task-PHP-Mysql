<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "cheeseee";

$conn = mysqli_connect($server,$username,$password,$dbname);
if($conn == false){
    die("failed to connect".mysqli_connect_error());

}
else{
    return $conn
;}
?>

