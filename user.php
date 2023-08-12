<?php

include 'connect.php';           
if(isset($_POST['submit']))
{
    $firstname=$_POST['FirstName'];
    $lastname=$_POST['LastName'];
    $email=$_POST['Email'];
    $password=$_POST['Password'];
    $address=$_POST['Address'];
    $address2=$_POST['Address2'];
    $city=$_POST['City'];
    $state=$_POST['State'];
    $zip=$_POST['Zip'];
    $key = 0;


    /*$sql= "insert into `crud` (FirstName, LastName, Email, Password, Address, Address2, City, State, Zip, key) 
    values('$firstname','$lastname','$email','$password','$address','$address2','$city',
    '$state','$zip','$key')";*/

    $sql = "INSERT INTO `crud`(`FirstName`, `LastName`, `Email`, `Password`, `Address`, `Address2`, `City`, `State`, `Zip`, `key`) VALUES ('$firstname','$lastname','$email','$password','$address','$address2','$city','$state','$zip','$key')";

    $result=mysqli_query($con,$sql);

    if($result)
    {
        echo "Data inserted Successfully";
        header('location:conform.php');

    }
    else
    {
        die(mysqli_error($con));
    }
}

?>

<!-- Navbar -->

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

      <li class="nav-item">
        <a class="nav-link" href="">FAqs</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  
    <!--  CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

    <title>Crud opration</title>
  </head>
  <body style=background-image:url('index.PNG');>

    <div class="container my-5">
    <form method="post">
  <div class="form-row">
    

  <div class="form-group col-md-6">
    
    <font size=2 color="white">
      <label>First Name</label></font>
      <input type="text" class="form-control" name="FirstName" placeholder="First Name" required>
    </div>
    <script>
  
  
    </script>

    <div class="form-group col-md-6">
    <font size=2 color="white">
      <label>Last Name</label></font>
      <input type="text" class="form-control" name="LastName" placeholder="Last Name" required>
    </div>

    <div class="form-group col-md-6">
    <font size=2 color="white">
      <label >Email</label></font>
      <input type="email" class="form-control" name="Email" placeholder="Email" required>
    </div>


    <div class="form-group col-md-6">
    <font size=2 color="white">
      <label >Password</label></font>
      <input type="password" class="form-control" name="Password" placeholder="Password" required>
    </div>
  </div>


  <div class="form-group">
  <font size=2 color="white">
    <label >Address</label></font>
    <input type="text" class="form-control" name="Address" placeholder="1234 Main St" required>
  </div>


  <div class="form-group">
  <font size=2 color="white">
    <label >Address 2</label></font>
    <input type="text" class="form-control" name="Address2" placeholder="Apartment, studio, or floor" required>
  </div>


  <div class="form-row">
    <div class="form-group col-md-6">
    <font size=2 color="white">
      <label >City</label></font>
      <input type="text" class="form-control" name="City">
    </div>


    <div class="form-group col-md-4">
    <font size=2 color="white">
      <label>State</label></font>
      <select name="State" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
        <option>Gujrat</option>
        <option>Rajasthan</option>
        <option>Goa</option>
        <option>Mahrastra</option>
      </select>
    </div>


    <div class="form-group col-md-2">
    <font size=2 color="white">
      <label>Zip</label></font>
      <input type="text" class="form-control" name="Zip">
    </div>
  </div>

  
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox"  id="Check" required>
      
      <font size=3 color="white">
        Check me out
      </label></font>
    </div>
  </div>
  <button  type="submit" class="btn btn-primary" name="submit">Creat New Accout</button>

   
</form>

</div>

    
  </body>
</html>