<?php

include "connect.php";

?>
<html>
<head>
  <style>
    .dis_movi
    {
        width: 80%;
        margin: auto;
        display: flex;
        flex-wrap: wrap;
    }
    .dis_movi a
    {
        margin-top: 40px;
    }

    .dis_movi1 {
      margin-top: 40px;
    }


    </style>


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
<br>

    <title>select Movi</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

        
</head>

<body>

<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="indexslaid.png" class="d-block w-100" >
        <div class="carousel-caption d-none d-md-block">
          
        </div>
      </div>
      <div class="carousel-item">
        <img src="slaid2.png" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          
        </div>
      </div>
      <div class="carousel-item">
        <img src="slaid1.png" class="d-block w-100" >
        <div class="carousel-caption d-none d-md-block">
          
        </div>
      </div>
      <div class="carousel-item">
        <img src="slaid3.png" class="d-block w-100" >
        <div class="carousel-caption d-none d-md-block">
        </div>    
    </div>

    <div class="carousel-item">
        <img src="Dainosor.png" class="d-block w-100" >
        <div class="carousel-caption d-none d-md-block">
        </div>    
    </div>
    

    

    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
  
    <br>
<div>
    
  <div class="row">
  <div class="column">
    
    
      <div class="dis_movi">
        
      <?php
      
      $select_movie = mysqli_query($con,"SELECT * FROM movie_master");
      while($row = mysqli_fetch_assoc($select_movie))
      {
        ?>
        
        <a href="imageselect.php?id=<?php echo $row['id'];?>"><input type="image" src="<?php echo $row['movie_image']; ?>" hight="100" width="155" 
        style="border-radius:10px" ></a>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <?php
      }

      ?>
    <div class="dis_movi1">
      <div class="row no-gutters bg-light position-relative">
  <div class="col-md-6 mb-md-0 p-md-4">
    <img src="vou.png" class="w-100" alt="...">
  </div>
  <div class="col-md-6 position-static p-4 pl-md-0">
    <h2 class="mt-0">Premium Vector | Cinema ticket with qr code
</h2><br><br>
    <p>
        Download this Premium Vector about Cinema ticket with qr code,
        and discover more than 37 Million Professional
        Graphic Resources on Freepik. #freepik #vector #moviepopcorn # movieticket #</p><br>

    <a href="#" class="stretched-link">Go To Claim</a>
  </div>
</div>
  </div>

    </div>
    <br>
    
    <center>
    <button class="btn btn-outline-success" type="submit">Help</button>
</center><br>
</div>
</div>    
</body>
</html>