<?php

include "connect.php";
if(isset($_POST['btn_submit']))
{
    $name = $_POST['txtName'];
    $filename = $_FILES['fup_image']['name'];
    $fileTmpName = $_FILES['fup_image']['tmp_name'];
    $fileLoc = "images/" . $filename;
    move_uploaded_file($fileTmpName,$fileLoc);

    $add_data = mysqli_query($con,"INSERT INTO movie_master(movie_name,movie_image) VALUES('$name','$fileLoc')");
    if($add_data){
        echo "<script>alert('data inserted!');</script>";
    }
    else{
        echo "<script>alert('ERROR!!');</script>";
    }
}

?>

<html>
<head>
    <title>Document</title>
</head>
<body style=background-image:url('addnew.png');><center>
<h1><font color="black"> Add New Movie</font> </h1>


    <form method="post" action="add_movie.php" enctype="multipart/form-data">
    
<br><br>
                      <h3><font color="black">Please Enter Your Credentials</h3>


                      <label><font color="black"> Movie Name:</label>
                        <input type="text" name="txtName"/><br><br>
                        <label><font color="black">Movie Image:</label>
                        <input type="file" name="fup_image" /><br><br><br>
                        <input type="submit" name="btn_submit" />
    </form>
</center>
</body>
</html>

