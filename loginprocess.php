<?php

    require('connect.php');

    if(isset($_POST['submit'])){
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $query = "select * from crud where Email='$username' and Password='$password'";
        $check_data = mysqli_query($con,$query);

        
        
        
        $count_row = mysqli_num_rows($check_data);
        if($count_row == 0)
        {
            echo "Invalid username a password!";
        }
        else
        {
            $row = mysqli_fetch_assoc($check_data);
            $key_value = $row['key'];
            if($key_value == '1')
            {
                header('location:display.php');
            }
           
            
        }

    }

?>