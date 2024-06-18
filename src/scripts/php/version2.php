<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Diplom";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection Faild".mysqli_connect_error());
}else{
    echo"Успех";
}
?>