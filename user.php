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
        #card{
          display: flex;
          
        }

     </style>
 </head>
<body>
<nav class="navbar ">
  <div class="container-fluid">
    <i class="fa-solid fa-school"><a class="navbar-brand" href="#" style="color:white;"> my school</a></i>
    
  </div>
</nav>

<div class="container m.4" id="card">

    <?php
    include "C:/xampp\htdocs\school\admin\connection.php";
    $sql = "select * from students";
    $result = $conn ->query($sql);
    if(!$result){
        die("invalid query!");
    }
    while($row = $result->fetch_assoc()){
      echo '
      <div class="card m-4" style="width: 18rem;">
          <img src="img/' . $row['img'] . '" class="card-img-top" alt="Student Image">

          <div class="card-body">
              <h5 class="card-title">' . $row['name'] . '</h5>
          </div>
          <ul class="list-group list-group-flush">
              <li class="list-group-item">' . $row['birthday'] . '</li>
              <li class="list-group-item">' . $row['courses'] . '</li>
              <li class="list-group-item">' . $row['status'] . '</li>
          </ul>
      </div>
      ';
    }
    ?>
   
  </tbody>
</table>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>