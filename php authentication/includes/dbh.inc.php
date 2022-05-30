<?php
$dbserver = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "x-men";


$conn = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbname);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
?>