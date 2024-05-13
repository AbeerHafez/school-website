<?php
include "connection.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM students WHERE id=$id"; 
    $conn->query($sql); 
}

header("location:index.php");
exit;
?>