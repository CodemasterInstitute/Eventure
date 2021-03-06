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

    <div class="dash-nav">
      <h2>Members Dashboard</h2>
        <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">&#127380 Account Information</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">&#128197 My Events</a>
            </li>
            <li class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <a class="nav-link" href="#">&#128204 Selected Catagories</a>
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
              <a class="nav-link" href="#">&#128226 Create New Event</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" tabindex="-1" >&#9742 Help</a>
            </li>
          </ul>  
    </div>
    
      <div class="container">
          <h2 id="cont-text">My Events</h2>
          <div class="row">
            <div class="col-sm-6">
              <div class="card" id="main-card" style="width: 18rem;">
                  <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card" id="main-card" style="width: 18rem;">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
              <div class="card" id="main-card" style="width: 18rem;">
                  <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                  
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card" id="main-card" style="width: 18rem;">
                  <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
              </div>
            </div>
          </div>  
        </div>





        <!--Events you might like container-->
        <div class="container-fluid">
          <h2 class="text-center mb-3">Events you may like..</h2>
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner row w-100 mx-auto">
              <div class="carousel-item col-md-4 active">
                <div class="card">
                  <img class="card-img-top img-fluid" src="CSS/images/free-event.jpg"  alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Event 1</h4>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-4">
                <div class="card">
                  <img class="card-img-top img-fluid" src="CSS/images/carousel-sport.jpg"  alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Event 2</h4>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-4">
                <div class="card">
                  <img class="card-img-top img-fluid" src="CSS/images/music.jpg"  alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Event 3</h4>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-4">
                <div class="card">
                  <img class="card-img-top img-fluid" src="CSS/images/laugh.jpg"  alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Event 4</h4>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-4">
                <div class="card">
                  <img class="card-img-top img-fluid" src="CSS/images/bubbles.jpg"  alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Event 5</h4>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-4">
                <div class="card">
                  <img class="card-img-top img-fluid" src="CSS/images/carousel1.jpg"  alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Event 6</h4>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-4">
                <div class="card">
                  <img class="card-img-top img-fluid" src="CSS/images/carousel4-laughter.jpg"  alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Event 7</h4>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
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