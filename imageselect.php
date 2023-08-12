<?php
include "connect.php";

$id = $_GET['id'];


?>


<!-- data stored in data base-->
<?php

if(isset($_POST['submit']))
{

$id= $_GET['id'];
$date=$_POST['date'];
$time=$_POST['time'];
$Theatre=$_POST['Theatre'];
$mod=$_POST['mod'];
$Language=$_POST['Language'];
$parsan=$_POST['number'];


//qvary
$sql = mysqli_query($con,"INSERT INTO book_movie(date,time,theater,movie_mod,language,person) VALUES('$date','$time','$Theatre','$mod','$Language','$parsan')");

if($sql)
    {

        echo "<script>alert('Data inserted successfully!');</script>";

    }
    else
    {
        die(mysqli_error($con));
    }

}

?>


<html><head>
        <!-- css-->
    <style>
        
   body
   {

        padding: 150px;
        
    }
    input
    {
            align: center;
                
    }
    .container
    {
        Position: absolute;
        top: 50%;
        left: 50%;
        height: 5px;
        transform: translate(-50% , -50%);
    }

    .form-control{
        text-decoration: none;
        padding: 2px 4px;
        border-radius: 25px;
        
        
    }


      

</style> 


</head>
<body bgcolor="lightgray">

    
        <?php

        $id = $_GET['id'];
        
        $select_data = mysqli_query($con,"SELECT * FROM movie_master WHERE id='$id'");
        $fetch_data = mysqli_fetch_assoc($select_data);

        ?>

        <hr>
        <br>
        <div>
        <img src="<?php echo $fetch_data['movie_image']; ?>" hight="200" width="200"  class="img-thumbnail" style="border-radius:10px">
        <h1> <?php echo $fetch_data['movie_name']; ?><br> 
        </h1>
        <hr>
<form method="post" action="" >
        <div style="margin-top:-420px;margin-left:500px; font-size:20px">

                Date: &nbsp<input type="date" name="date" required><br><br> 


        <div class="form-group col-md-4">
        <label> Time: &nbsp</label>
        <select name="time" class="form-control" required>
        <option selected>Choose...</option>
        <option>...</option>
        <option>10:00 to 1:00 </option>
        <option>3:00 to 6:00</option>
        <option>9:00 to 12:00</option>
        
        
        </select>
        </div>
        <br>




        <div class="form-group col-md-4">
        <label>Select Theatre: &nbsp</label>
        <select name="Theatre" class="form-control" required>
        <option selected>Choose...</option>
        <option>...</option>
        <option>PVR</option>
        <option>Miraj City Pluse</option>
        <option>Shital Theatre</option>
        <option>Connplex Smart</option>
        <option>Apple Multiplex</option>
        </select>
        </div>
        <br>
        


        <div class="form-group col-md-4">
        <label>Select Mode: &nbsp</label>
        <select name="mod" class="form-control" required>
        <option selected>Choose...</option>
        <option>...</option>
        <option>2D</option>
        <option>3D</option>
        <option>IMAX 3D</option>
        <option>IMAX 2D</option>
        </select>
        </div><br>

        <div class="form-group col-md-4">
        <label>Select Language: &nbsp</label>
        <select name="Language" class="form-control" >
        <option selected>Choose...</option>
        <option>...</option>
        <option>Hindi</option>
        <option>Malayalam</option>
        <option>Telugu</option>
        <option>Tamil</option>
        <option>Kannad</option>
        </select>
        </div><br>
        <div>
                Select Person:&nbsp&nbsp<input type="number" name="number" required>
        </div>
        
        <br><br><br><br>
    

        <input type="submit" name="submit">
        <input type="Reset" name="Reset">
    
</form>
        
</div>
</div>
</body>

</html>