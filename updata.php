<?php
include "connection.php";

if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
        header("location:/SCHOOL/index.php");
        exit;
    }
    $id = $_GET['id'];
    $sql = "SELECT * FROM students WHERE id = $id";
    $result= $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
        header("location:/SCHOOL/index.php");
        exit;
    }
    $name=$row["name"];
    $img=$row["img"];
    $birthday=$row["birthday"];
    $courses=$row["courses"];
    $status=$row["status"];
}else{
    $id=$_POST['id'];
    $name = $_POST['name'];
    $img = $_POST['img'];
    $birthday = $_POST['birthday']; 
    $courses = $_POST['courses'];
    $status = $_POST['status'];
    $sql = "UPDATE students SET name ='$name', img='$img', birthday='$birthday', courses='$courses', status='$status' WHERE id ='$id'";
    $result = $conn -> query($sql);

}
?>



<!DOCTYPE html>
<html>
<head>
 <title>CRUD</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
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
    <i class="fa-solid fa-school"><a class="navbar-brand" href="#" style="color:white;"> my school</a></i>
  </div>
</nav>
 <div class="col-lg-6 m-auto">
 
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header "  style="background-color: navy; color: white;">
 <h1 class="text-white text-center">  update Student </h1>
 </div><br>

 <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> 

 <label>name</label>
 <input type="text" name="name" class="form-control"> <br>

 <label>birthday</label>
 <input type="text" name="birthday" class="form-control"> <br>

 <label>img</label>
 <input type="text" name="img" class="form-control"> <br>

 <label> course </label>
 <input type="text" name="courses" placeholder="html,css,javascript,php" class="form-control"> <br>

 <label> stateus </label>
 <input type="text" name="status" class="form-control"> <br>

 <button class="btn " type="submit" name="submit" style="background-color: mistyRose; color: navy;"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="index.php" style="background-color: navy; color: white;"> Cancel </a><br>

 </div>
 </form>
 </div>




</body>
</html>