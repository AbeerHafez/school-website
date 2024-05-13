<?php

     include "connection.php";
     if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $img = $_POST['img'];
        $birthday = $_POST['birthday']; 
        $courses = $_POST['courses'];
        $status = $_POST['status'];
        $q = "INSERT INTO `students` (`name`, `img`, `birthday`, `courses`, `status`)
        VALUES ('$name', '$img' , '$birthday' ,'$courses' , '$status')";
        $query = mysqli_query($conn,$q);
     }
?>
     <!DOCTYPE html>
     <html lang="en">
     <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>create</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

     <style>
        nav{
            height:70px ;
            background-color: navy;
            color: white;
        }

     </style>
     </head>
     <body>

<nav class="navbar ">
  <div class="container-fluid">
    <i class="fa-solid fa-school"><a class="navbar-brand" href="index.php" style="color:white;"> my school</a></i>
  </div>
</nav>

<div class="col-lg-4 m-auto mt-4">
    <form method="post">
<div class="card  " style="border: sold; border-color:navy; ">
  <div class="card-header text-center border-success" style="background-color: navy; color: white;"><h1>create new student</h1></div>
  

  <label >name:</label>
  <input type="text" class="form-control" name="name" placeholder="">

  <label >img:</label>
  <input type="text" class="form-control" name="img" placeholder="">
  
  <label >birthday:</label>
  <input type="text" class="form-control" name="birthday" placeholder="">

  <label >courses:</label>
  <input type="text" class="form-control" name="courses" placeholder="php, css, html">
  
  <label >status:</label>
  <input type="text" class="form-control" name="status" placeholder="available, not-available"><br>
  
  
  <button type="submit" class="btn " name="submit" style="background-color: mistyRose; color: navy;">submit</button><br>
  <a class="btn " type="submit"  name="cancel" href="index.php" style="background-color: navy; color: white;">cancel </a>

</div>

        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     </body>
     </html>
      