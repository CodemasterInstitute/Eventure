<?php
require('config.php');

// Getting upcoming events

$search_query = "SELECT * FROM events WHERE 1";

if ($_POST['eventAddress'] != "") {
  $by_location = $_POST['eventAddress']; 
  $search_query .= " AND eventAddress LIKE '%$by_location%'";
}

$by_date = $_POST['startDate'];
$by_eventType = $_POST['eventType'];


$query = 'SELECT * FROM events ORDER BY startDate ASC LIMIT 8';



    
$locationquery = 'SELECT DISTINCT eventAddress FROM events';

	// Get Result
  $result = mysqli_query($conn, $query);
  $locationresult = mysqli_query($conn, $locationquery);
  $searchresult = mysqli_query($conn, $search_query);

	// Fetch Data
	$upcomingEvents = mysqli_fetch_all($result, MYSQLI_ASSOC);
  $locationEvents = mysqli_fetch_all($locationresult, MYSQLI_ASSOC);
  $searchEvents = mysqli_fetch_all($searchresult, MYSQLI_ASSOC);
	// Free Result
    mysqli_free_result($result);
    mysqli_free_result($locationresult);
    mysqli_free_result($searchresult);

    
        


/*OR startDate LIKE '$by_date' OR eventType LIKE '%$by_eventType%'*/
  
  

  // return $searchresult;



    mysqli_close($conn); 
    

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Eventure</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!-- <link rel="stylesheet" type="text/css" href="CSS/main.css"> -->
  <link rel="stylesheet" href="CSS/main.css">

</head>

<body class="noPadding">

  <div class="row">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark navbar-scroll">
      <a class="navbar-brand" href="index.html"><img src="CSS/images/eventure logo 3.2.png" class="logo-icon"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="#">Events <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="categories.php" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Free</a>
                        <a class="dropdown-item" href="#">Music</a>
                        <a class="dropdown-item" href="#">Comedy</a>
                        <a class="dropdown-item" href="#">Sport</a>
                        <a class="dropdown-item" href="#">Food & Wine</a>
                    </div>
                </li>
          <li class="nav-item active">
            <a class="nav-link " href="#">
              Members
            </a>

          </li>

          <li class="nav-item">
            <a class="nav-link" href="#" tabindex="-1">Log In/ Sign Up</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">

          <input id="searchNav" type="text" name="search" placeholder="Start your eventure.."><i id="magnGlass"
              class="fas fa-search btn"></i>
        </form>
      </div>
    </nav>
    <div class="search">
      <div class="container searchbar">
        <h1>Find an event!</h1>
        <form action="searchresults.php" method = "post">
        <div class="form-row">
          <div class="form-group col-lg-4">
            <label class="sr-only" for="location">Location</label>
            <input type="text" class="form-control searchforms" id="location" name="location" placeholder="Location">
          </div>
          <div class=" form-group col-lg-4">
            <label class="sr-only" for="date">When</label>
            <div class="input-group">
              <input type="date" class="form-control searchforms" id="date" placeholder="Date" name="date">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
          </div>
          <div class="form-group col-lg-4">
            <label class="sr-only" for="category">Event Categories</label>
            <select id="category" name="category" class="form-control searchforms">
              <option value="all">All</option>
              <option value="free">Free</option>
              <option value="music">Music</option>
              <option value="comedy">Comedy</option>
              <option value="sport">Sport</option>
              <option value="food">Food</option>
            </select>
          </div>
        </div>
        <div class="col-lg-12" id="button-center">
          <button type="submit" class="btn btn-default btn-primary searchbar-btn">Search</button>
        </div>
        </form>
      </div>
    </div>

    <!--Entire width header/hero-->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner event-slider ">
        <div class="carousel-item active banner-slide">
          <img class="d-block w-100" src="CSS/images/tickets_NEW.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block text-center">
            <h1 class="carousel-title">Eventure</a></h1>
            <p class="banner-tagline">Make Adventures Possible</p>
          </div>
        </div>
        <div class="carousel-item banner-slide">
          <img class="d-block w-100" src="CSS/images/carousel1.jpg" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="carousel-title">Have a boogie</h1>
            <p></p>
          </div>
        </div>

        <div class="carousel-item banner-slide">
          <img class="d-block w-100" src="CSS/images/carousel4-laughter.jpg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="carousel-title">Have a laugh</a></h1>
            <p></p>
          </div>
        </div>
        <div class="carousel-item banner-slide">
          <img class="d-block w-100" src="CSS/images/carousel-sport.jpg" alt="Fourth slide">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="carousel-title">Make some noise</a></h1>
            <p></p>
          </div>
        </div>
        <div class="carousel-item banner-slide">
          <img class="d-block w-100" src="CSS/images/carousel3.jpg" alt="Fifth slide">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="carousel-title">Wine 'n Dine</a></h1>
            <p></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Container with event categories-->
  <div class="container" id="explore">
    <h1>Events to Explore</h1>
    <div class="row">
      <div class="col-lg-2">
        <img src="CSS/images/bubbles.jpg" class="img-fluid" alt="fireworks image">
        <p>Explore All</p>
      </div>
      <div class="col-lg-2">
        <img src="CSS/images/free.jpg" class="img-fluid" alt="free image">
        <p>Free</p>
      </div>


      <div class="col-lg-2">

        <img src="CSS/images/music.jpg" class="img-fluid" alt="concert">
        <p>Music</p>
      </div>
      <div class="col-lg-2">

        <img src="CSS/images/laugh.jpg" class="img-fluid" alt="laugh">
        <p>Comedy</p>

      </div>
      <div class="col-lg-2">

        <img src="CSS/images/sport.jpg" class="img-fluid" alt="tennis game">
        <p>Sport</p>

      </div>
      <div class="col-lg-2">

        <img src="CSS/images/food.jpg" class="img-fluid" alt="tacos">
        <p>Food & Wine</p>
      </div>
    </div>
  </div>

  <hr>
  <!--Upcoming Events Grid-->
  <div class="container" id="upcoming-events">
    <h3>Upcoming Events</h3>
    <div class="row">
      <?php
      foreach($upcomingEvents as $event) : ?>

      <div id="cardHomePage" class="col-lg-3">
        <div  class="card">
          <a href="Event.php?id=<?php echo $event['id']?>"><img class="card-img-top"
              src="imagepath/uploads/<?php echo $event['imgName'] ?>" alt="Card image cap"></a>
          <div class="card-body">
            <a href="Event.php?id=<?php echo $event['id']?>"><h5 class="card-title font-weight-bold"><?php echo $event['eventName'] ?></h5></a>
            <p class="card-text-homepage overflow-auto"><?php echo substr($event['eventDescription'], 0, 70) ?></p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><?php 
            
            $startDate = strtotime($event['startDate']);
            $dt = new DateTime("@$startDate");
            $convertedStartDate = $dt->format('d-M-Y H:i');

            echo $convertedStartDate ?></li>
            <li class="list-group-item"><?php echo $event['eventAddress'] . ' ' . $event['eventCity'] ?></li>
          </ul>
          <div class="card-body text-center d-flex ">
            <a href="Event.php?id=<?php echo $event['id']?>" class="btn btn-block align-self-end">More info</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>

    </div>
  </div>
  <hr>
  <div class="container">
    <h3 id="test">New Events</h3>
    <div class="row">
      <div class="col-lg-3">
        <div class="card">
          <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Event Name</h5>
            <p class="card-text">Event description</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Date & Time</li>
            <li class="list-group-item">Location</li>
          </ul>
          <div class="card-body text-center">
            <a href="#" class="btn btn-block">Buy tickets</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="card">
          <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Event Name</h5>
            <p class="card-text">Event description</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Date & Time</li>
            <li class="list-group-item">Location</li>
          </ul>
          <div class="card-body text-center">
            <a href="#" class="btn btn-block">Buy tickets</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="card">
          <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Event Name</h5>
            <p class="card-text">Event description</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Date & Time</li>
            <li class="list-group-item">Location</li>
          </ul>
          <div class="card-body text-center">
            <a href="#" class="btn btn-block">Buy tickets</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="card">
          <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Event Name</h5>
            <p class="card-text">Event description</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Date & Time</li>
            <li class="list-group-item">Location</li>
          </ul>
          <div class="card-body text-center">
            <a href="#" class="btn btn-block">Buy tickets</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>










  </div>
  <!-- Footer -->
  <footer class="page-footer font-small stylish-color-dark pt-4">
    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-4 mx-auto">

          <!-- Content -->
          <!-- <h5 class="font-weight-bold text-uppercase mt-3 mb-4 logo-icon">EVENTURE</h5> -->

          <img src="CSS/images/eventure logo 2.4(white).png" class="logo-icon footer">
          <p style="padding-top: 20px">Make Adventures Possible.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Eventure</h5>

          <ul class="list-unstyled">
            <li>
              <a href="index.html">Home</a>
            </li>
            <li>
              <a href="HTML/faq.html">FAQs</a>
            </li>
            <li>
              <a href="HTML/contact.html">Contact</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Events</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Events By Category</a>
            </li>
            <li>
              <a href="#!">Events Near You</a>
            </li>
            <li>
              <a href="#!">Events This Week</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">My Account</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Sign In</a>
            </li>
            <li>
              <a href="HTML/dashboard.html">My Dashboard</a>
            </li>
            <li>
              <a href="create-an-event.php">Create An Event</a>
            </li>

          </ul>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <hr>

    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
        <h5 class="mb-1">Register for free</h5>
      </li>
      <li class="list-inline-item">
        <a href="#!" class="btn btn-danger btn-rounded">Sign up!</a>
      </li>
    </ul>
    <!-- Call to action -->

    <hr>

    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
          <i class="fab fa-facebook"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
          <i class="fab fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-inst mx-1">
          <i class="fab fa-instagram"> </i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright: AAA Team
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    var cities = [ <?php 
    foreach($locationEvents as $city){
     $cityList .= "\"". $city["eventAddress"] . "\",";
    
    
    }
    echo $cityList;
      ?>]
    $( "#location" ).autocomplete({
      source: cities
    });
  } );
  </script>
  <script src="main.js"></script>
</body>

</html>