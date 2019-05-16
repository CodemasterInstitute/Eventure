
<?php
include ('registrationLogin.php');
if (isset($_SESSION['username'])) {?>
	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Eventure</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/main.css">
    <style>
     
   






 /*carousel*/
 @media (min-width: 768px) {
  /* show 3 items */
  .carousel-inner .active,
  .carousel-inner .active + .carousel-item,
  .carousel-inner .active + .carousel-item + .carousel-item {
    display: block;
  }

  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item,
  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
    transition: none;
  }

  .carousel-inner .carousel-item-next,
  .carousel-inner .carousel-item-prev {
    position: relative;
    
    transform: translate3d(0, 0, 0);
  }

  .carousel-inner .active.carousel-item + .carousel-item + .carousel-item + .carousel-item {
    position: absolute;
    top: 0;
    right: -33.3333%;
    z-index: -1;
    display: block;
    visibility: visible;
  }

  /* left or forward direction */
  .active.carousel-item-left + .carousel-item-next.carousel-item-left,
  .carousel-item-next.carousel-item-left + .carousel-item,
  .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item,
  .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
    position: relative;
    transform: translate3d(-100%, 0, 0);
    visibility: visible;
  }

  /* farthest right hidden item must be abso position for animations */
  .carousel-inner .carousel-item-prev.carousel-item-right {
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    display: block;
    visibility: visible;
  }

  /* right or prev direction */
  .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
  .carousel-item-prev.carousel-item-right + .carousel-item,
  .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item,
  .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
    position: relative;
    transform: translate3d(100%, 0, 0);
    visibility: visible;
    display: block;
    visibility: visible;
    
  }

  

  .carousel-item {
    margin-right: inherit
  }


  /*#carouselimage{
    
    height: 85%;
  }*/
}
    </style>
    
</head>
<body>
    <!--Entire width header/hero
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

            </div>
        </div>
    </div>-->
    <!--Main Container with auto margins
    <div class="container">

    </div>-->
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <?php
    include 'header.php';
      ?>
  
  <div class="container-fluid" >
  <h2 class="text-center mb-3" style="margin-top: 20px;">My Events:</h2>
  <div class="row">
    <div class="dash-nav col-lg-3" id="mainDash">
      <h2>Members Dashboard</h2>
      <div class="logged_in_info">
		<span>welcome <?php echo $_SESSION['username'] ?></span>
		<span><a href="logout.php">logout</a></span>
	</div>
        <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#"><i class="fas fa-user-edit"></i> Account Information</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-calendar-week"></i> My Events</a>
            </li>
            <li class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <a class="nav-link" href="#"><i class="fas fa-map-pin"></i> Selected Catagories</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Sport</a>
                  <a class="dropdown-item" href="#">Comedy</a>
                  <a class="dropdown-item" href="#">Design</a>
                  <a class="dropdown-item" href="#">Workout</a>
                  <a class="dropdown-item" href="#">E-Sport</a>
                  <a class="dropdown-item" href="#">Surfing</a>
                  <a class="dropdown-item" href="#">Band</a>
                  <a class="dropdown-item" href="#">HvZ</a>
                </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-bullhorn"></i> Create New Event</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" tabindex="-1" ><i class="fas fa-question"></i> Help</a>
            </li>
          </ul>  
    </div>
  
          <!--<h3>My Events:</h3>-->
        
            <div class="col-lg-3">
              <div class="card" id="main-card" >
                  <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Fyre Festival</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Look at Event</a>
                  </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" id="main-card" >
                    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">ITTA Table Tennis Championship 2019</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Look at Event</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
              <div class="card" id="main-card" >
                  <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">SOTA Festival 2019 (After Party)</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Look at Event</a>
                  </div>
                  
              </div>
            </div>
            
            
          </div>
          <div class="row" id="slideRow">
            <div class="col-lg-3 offset-md-3">
              <div class="card" id="main-card" >
                  <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Fyre Festival</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Look at Event</a>
                  </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" id="main-card" >
                    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">ITTA Table Tennis Championship 2019</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Look at Event</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
              <div class="card" id="main-card" >
                  <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">SOTA Festival 2019 (After Party)</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Look at Event</a>
                  </div>
                  
              </div>
            </div>
            
            
          </div>
            
        </div>

        <hr>

        <!--Events you might like container-->
        <div class="container-fluid">
          <h2 class="text-center mb-3">Events you may like..</h2>
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner row w-100 mx-auto">
              <div class="carousel-item col-md-4 active">
                <div class="card">
                  <img class="card-img-top img-fluid" id="carouselimage" src="CSS/images/free-event.jpg"  alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Event 1</h4>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-4">
                <div class="card">
                  <img class="card-img-top img-fluid" id="carouselimage" src="CSS/images/carousel-sport.jpg"  alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Event 2</h4>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-4">
                <div class="card">
                  <img class="card-img-top img-fluid" id="carouselimage" src="CSS/images/music.jpg"  alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Event 3</h4>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-4">
                <div class="card">
                  <img class="card-img-top img-fluid" id="carouselimage" src="CSS/images/laugh.jpg"  alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Event 4</h4>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-4">
                <div class="card">
                  <img class="card-img-top img-fluid" id="carouselimage" src="CSS/images/bubbles.jpg"  alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Event 5</h4>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-4">
                <div class="card">
                  <img class="card-img-top img-fluid" id="carouselimage" src="CSS/images/carousel1.jpg"  alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Event 6</h4>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-4">
                <div class="card">
                  <img class="card-img-top img-fluid" id="carouselimage" src="CSS/images/carousel4-laughter.jpg"  alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Event 7</h4>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev" id="carIcon">
              <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next" id="carIcon">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      
    <?php
    include 'footer.php';
      ?>
 


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
    <script src="main.js"></script>    
</body>
</html>
<?php } else { 
  //page for unsuccessful login ?>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Eventure</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/main.css">
    <style>

.container {
  margin-top: 50px;
  position: relative;
  text-align: center;
}

   /* Centered text */
.text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: white;
  color: #009f8b;
  opacity: 0.8;
  font-size: 38px;
  border-radius: 10px;
}
    </style>
    </head>
  <?php
  include 'header.php'; ?>
  <div class="container">
  <img src="CSS/images/pineapple-all.jpg" alt="pineapple" style="width:100%;">
  
  <div class="text">Your login was unsuccessful. Please <a href = "login.php" style="color:#009f8b">try again.</a></div>
</div>
  <?php
  include 'footer.php';
}
  ?>
