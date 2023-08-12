<?php

include 'connect.php';
$id=$_GET['updateid'];

$sql="Select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

$firstname=$row['FirstName'];
$lastname=$row['LastName'];
$email=$row['Email'];
$password=$row['Password'];
$address=$row['Address'];
$address2=$row['Address2'];
$city=$row['City'];
$state=$row['State'];
$zip=$row['Zip'];

if(isset($_POST ['submit']))
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


    $sql= "update `crud` set id=$id,FirstName='$firstname',LastName='$lastname',Email='$email',
    Password='$password',Address='$address',Address2='$address2',City='$city',State='$state',Zip='$zip'
    where id=$id";

    $result=mysqli_query($con,$sql);

    if($result)
    {
       // echo "Data Updated Successfully";
        header('location:display.php');

    }
    else
    {
        die(mysqli_error($con));
    }
}

?>



<html>
  <head>
    
    <!--  CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

    <title>Crud opration</title>
  </head>
  <body style=background-image:url('bgm1.png');>
    <div class="container my-5">
    <form method="post">
  <div class="form-row">

  <div class="form-group col-md-6">
    <font size=2 color="white">
      <label >First Name</label></font>
      <input type="text" class="form-control" name="FirstName" placeholder="First Name" value=<?php echo $firstname;?>>
    </div>


    <div class="form-group col-md-6">
    <font size=2 color="white">
      <label>Last Name</label></font>
      <input type="text" class="form-control" name="LastName" placeholder="Last Name" value=<?php echo $lastname;?>>
    </div>

    <div class="form-group col-md-6">
    <font size=2 color="white">
      <label >Email</label></font>
      <input type="email" class="form-control" name="Email" placeholder="Email" value=<?php echo $email;?>>
    </div>
    <div class="form-group col-md-6">
    <font size=2 color="white">
      <label>Password</label></font>
      <input type="password" class="form-control" name="Password" placeholder="Password" value=<?php echo $password;?>>
    </div>
  </div>
  <div class="form-group">
  <font size=2 color="white">
    <label >Address</label></font>
    <input type="text" class="form-control" name="Address" placeholder="1234 Main St" value=<?php echo $address;?>>
  </div>
  <div class="form-group">
  <font size=2 color="white">
    <label>Address 2</label></font>
    <input type="text" class="form-control" name="Address2" placeholder="Apartment, studio, or floor" value=<?php echo $address2;?>>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
    <font size=2 color="white">
      <label>City</label></font>
      <input type="text" class="form-control" name="City" value=<?php echo $city;?>>
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
    <font size=2 color="white">
      <input class="form-check-input" type="checkbox" id="Check">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label></font>
    </div>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>

  
</form>

</div>

    
  </body>
</html>