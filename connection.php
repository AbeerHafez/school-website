<?php
$servername  = "localhost";
$username= "root";
$password = "";
$db_name = "school";
$conn = new mysqli ($servername, $username, $password, $db_name, 3306);
if($conn->connect_error){
    die("connection falied".$conn->connect_error);
}
echo "";


?>