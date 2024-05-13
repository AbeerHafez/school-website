<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>
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
    <i class="fa-solid fa-school"><a class="navbar-brand" href="#" style="color:white;"> my school</a></i>
    <a class="nav-link" href="create.php"><h3>add</h3></a>
  </div>
</nav>

<div class="container m.4">

<table class="table">
  <thead>
    <tr>
      <th >id</th>
      <th >name</th>
      <th >img</th>
      <th >birthday</th>
      <th >courses</th>
      <th >stutes</th>
      <th >action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "connection.php";
    $sql = "select * from students";
    $result = $conn ->query($sql);
    if(!$result){
        die("invalid query!");
    }
    while($row = $result->fetch_assoc()){
        echo "
       <tr>
          <th >$row[id]</th>
          <td>$row[name]</td>
          <td><img src='img/$row[img]' style='width:70px;'/></td>
          <td>$row[birthday]</td>
          <td>$row[courses]</td>
          <td>$row[status]</td>
          <td>
            <a class='btn btn-dark' style=' background-color: navy; color: white;' href='updata.php?id=$row[id]' >updata</a>
            <a class='btn btn-dark' style=' background-color: navy; color: white;' href='delete.php?id=$row[id]'>delete</a>
          </td>
        </tr>
        ";
    }
    ?>
   
  </tbody>
</table>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>