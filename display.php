<?php

include 'connect.php';
?>




<html>
<head>

  

<nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><h2>Isecure</h2></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="user.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="existinglogin.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Log Out</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>




    <title>Crud opration</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body style=background-image:url('image.PNG');>

<div class="container">
<button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</button></a>

<button class="btn btn-primary my-5"><a href="conform.php" class="text-light">Confirm</button></a>

<button class="btn btn-primary my-5"><a href="add_movie.php" class="text-light">Add Movie</button></a>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col"> Email</th>
      <th scope="col">Password</th>
      <th scope="col">Adress</th>
      <th scope="col">Adress2</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">Option</th>
      

    </tr>
  </thead>
  <tbody>

<?php


// connect and fatch data from data base

$sql="Select * from `crud`";

$result=mysqli_query($con,$sql);

if($result)
{

  while($row=mysqli_fetch_assoc($result))
  {
    $id=$row['id'];
    $name=$row['FirstName'];
    $name1=$row['LastName'];
    $email=$row['Email'];
    $pass=$row['Password'];
    $add=$row['Address'];
    $add1=$row['Address2'];
    $city=$row['City'];
    $state=$row['State'];

    echo '<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$name.'</td>
    <td>'.$name1.'</td>
    <td>'.$email.'</td>
    <td>'.$pass.'</td>
    <td>'.$add.'</td>
    <td>'.$add1.'</td>
    <td>'.$city.'</td>
    <td>'.$state.'</td>

    
    <td>
      <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
      <button class="btn btn-danger"><a href="delete.php?
      deleteid='.$id.'" class="text-light">Delete</a></button>
    </td>

    </tr>';
  }
}


?>
  
  </tbody>
</table>
</div>
</body>
</html>