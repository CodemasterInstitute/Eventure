<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Eventure</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="formValidation.js"></script>

</head>

<body>
    <!--Entire width header/hero-->
    <!-- <div class="container-fluid">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <a class="navbar-brand" href="#">Eventure</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Events <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">News</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Members
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Dashboard</a>
                                <a class="dropdown-item" href="#">My Events</a>
                                <a class="dropdown-item" href="#">Create Event</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Log In</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" tabindex="-1">Sign Up</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </header>
    </div> -->

    
    <!--Main Container with auto margins-->
    <div class="container">
        <form name="createEventForm" method="POST" action="submit-event.php">
            <h1>Create Your Event!</h1>
            <div class="form-row">

                <div class="form-group col-lg-6">
                    <label for="eventName">Event Name:</label>
                    <input type="text" class="form-control" id="eventName"
                        placeholder="Add a short, clear name" name="eventName" value="<?php echo $eventName;?>" required> <!--Without php echo does it clear the variables when the page is reloaded (otherwise the default variables are what has been previously entered-->
                </div>
                <div class="form-group col-lg-6">
                    <label for="eventAddress">Event Address</label>
                    <input type="text" class="form-control" id="eventAddress"
                        placeholder="Include a place or address" name = "eventAddress" value="<?php echo $eventAddress;?>" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-lg-6">
                    <label for="startDate">Event Start</label>
                    <input type="datetime-local" class="form-control" name = "startDate" value="<?php echo $startDate;?>" required>
                </div>
                <div class="form-group col-lg-6">
                    <label for="endDate">Event End</label>
                    <input type="datetime-local" class="form-control" name = "endDate" value="<?php echo $endDate;?>" required>
                </div>


            </div>
            <div class="form-row">
                <div class="form-group col-lg-12">
                    <label for="eventDescription">Event Description</label>
                    <textarea class="form-control rounded-0" class="md-textarea form-control" rows="8" name = "eventDescription" value="<?php echo $eventDescription;?>" required></textarea>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-lg-4">
                    <label for="availableTickets">Available Tickets</label>
                    <input type="number" class="form-control" name = "availableTickets" value="<?php echo $availableTickets;?>" required>
                </div>
                <div class="form-group col-lg-8">
                    <label for="organiserID">Organiser ID</label>
                    <input type="number" class="form-control" name = "organiserID" value="<?php echo $organiserID;?>" required>
                </div>
            </div>
            <div class="form-row">
                

                
                <div class="form-group col-lg-4">
                    <label for="imgName">Upload Photo</label>
                    <input type="file" accept="image/x-png,image/gif,image/jpeg" class="form-control"
                        id="imgName" name = "imgName" value="<?php echo $imgName;?>" required>
                </div>
                <div class="form-group col-lg-4">
                    <label for="price">Ticket Price</label>
                    <input type="text" class="form-control" id="price" name = "price" value="<?php echo $price;?>" required>
                </div>
                <div class="form-group col-lg-4">

                    <h4>Type of Event</h4>
                    <h5>Check all that apply</h5>
                    <div class="form-check" required>
                        <input class="form-check-input" type="checkbox" value="Free" id="Free" name = "eventType">
                        <label class="form-check-label" for="checkFree">
                            Free
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Comedy" id="Comedy" name = "eventType">
                        <label class="form-check-label" for="checkComedy">
                            Comedy
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Music" id="Music" name = "eventType"> 
                        <label class="form-check-label" for="checkMusic">
                            Music
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Sport" id="Sport" name = "eventType">
                        <label class="form-check-label" for="checkSport">
                            Sport
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Food" id="Food" name = "eventType">
                        <label class="form-check-label" for="checkFood">
                            Food
                        </label>

                    </div>
        

            </div>

            <div class="form-row">
                <div class="form-group col-lg-12">
                    <button type="submit" class="btn btn-primary" id="createEventButton">Create Event!</button>
                </div>
            </div>
        </form>
      
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
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">EVENTURE</h5>
                    <p>Make Adventures Possible.</p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Eventure</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Home</a>
                        </li>
                        <li>
                            <a href="#!">FAQs</a>
                        </li>
                        <li>
                            <a href="#!">Contact</a>
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
                            <a href="#!">My Dashboard</a>
                        </li>
                        <li>
                            <a href="#!">Create An Event</a>
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
                    <i class="fab fa-facebook-f"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-tw mx-1">
                    <i class="fab fa-twitter"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-gplus mx-1">
                    <i class="fab fa-google-plus-g"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-li mx-1">
                    <i class="fab fa-linkedin-in"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-dribbble mx-1">
                    <i class="fab fa-dribbble"> </i>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    
</body>

</html>