<?php
include "C:/xampp\htdocs\school\admin\connection.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    // Check if the email and password match the admin data
    if ($name == "abeer" && $password == "123456") {
        header("Location:admin/index.php");
        exit();
    } 
    // Redirect any other email and password combination to user.php
    else {
        header("Location:user/user.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

     <style>
        nav{
            height:auto ;
            background-color: navy;
            color: white;
        }


        .card {
            height: auto; 
            width: 600px; 
            margin: auto; 
            margin-top: 60px; 
            padding: 20px; 
        }
        #card {
            display: flex;
            flex-direction: column; 
        }
     </style>
</head>
<body>
<nav class="navbar ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color:white;"> my school</a>
    <a class="nav-link" href="login.php"><h3>login</h3> </a>
  </div>
</nav>

<form action="login.php" method="post" class="col-lg-6 m-auto" >
 <br><br><div class="card">
 <div id="card">
 <div class="card-header " style="background-color: navy;">
 <h1 class="text-white text-center">  login </h1>
 </div><br>

            <label for="name">Username:</label>
            <input type="text" name="name" id="name" class="form-control"> <br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control"> <br>
            <input class="btn " type="submit" name="submit" value="Login" style="background-color: mistyRose; color:navy;"> <br>
        </div></div>
    </form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>