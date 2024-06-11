<?php 
$servername = "localhost";
$database = "sol";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (mysqli_connect_errno()) {
    die("". mysqli_connect_error());
}