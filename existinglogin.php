
<html>
  <head>

  <nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><h2>Isequer</h2></a>
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

  
    <!--  CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"><br><br>

    <title>Crud opration</title>
  </head>
  <body style=background-image:url('ti.png');>
  <center>

				
    <h1><font color="gray"> WELCOME TO MOVIE TICKET BOOKING WEBSITE</font> </h1>
	<br>
	<form action="loginprocess.php" method="post">
            
    <br><br>
                      <h3><font color="gray">Please Enter Your Credentials</h3>
                      
                      <label><font color="black">Username:</label>
                      <input type="text" name="user" required></input><br><br>

                      <label>Password:</label>
                      <input type="password" name="pass" required></input><br><br>

                      <input class="form-check-input" type="checkbox"  id="Check">
      
                       <font size=3 color="white">
                                    Check me out
                          </label></font>
					  					  				  
                    
					  
					  <br><br>

  
  <button  type="submit" class="btn btn-outline-success" name="submit">Login</button>
</center>
   
</form>

</div>

    
  </body>
</html>