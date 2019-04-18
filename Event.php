


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Eventure</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/main.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>
<?php
include 'header.php';
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 jumbotron jumbotron-fluid eventJumbo">
            </div>
    

            <div id="eventInformation" class="col-lg-4 text-center">
                <h1 class="pt-2">Coding for dummies</h1>
                <p class="text-center font-italic">15/05/2019</p>
                <p>Coding instructions by Adam, Verity, Jill & Jeroen </p>
                <p>$25,-</p>
                <button class="btn-block btn">Buy Tickets</button>

            </div>

        </div>

    </div>

    <div class="container">

        <div class="row">
            <div class="col-lg-8">
                <h1>Coding for Dummies</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem asperiores adipisci praesentium
                    aliquam laudantium deleniti corporis a, magni perspiciatis? Ex sapiente autem ipsa nobis delectus
                    pariatur reprehenderit quidem, nulla ut labore vero possimus repellat! Excepturi asperiores modi
                    aliquid quia similique itaque maxime dolor. Possimus perferendis fugiat minima, qui consequatur a
                    tempore perspiciatis aliquid, temporibus repudiandae tempora autem veniam. Magni esse dolore sint
                    explicabo iusto magnam, aliquam id assumenda veritatis accusantium animi pariatur consequuntur harum
                    dolorem.</p>
                <h2>Speakers</h2>
                <ul>
                    <li>Adam</li>
                    <li>Verity</li>
                    <li>Jill</li>
                    <li>Jeroen</li>
                </ul>


            </div>
            <div class="col-lg-4">

                <h2>Time & Date</h2>
                <p>15/05/2019<br>
                    3:00 PM - 5:00 PM AWST
                </p>

                <h2>Location</h2>
                <p>278 Barker Rd, Subiaco WA 6008</p>

                <h2>Share this Event!</h2>
                <span><i class="fab fa-twitter text-center"></i></span>
                <span><i class="fab fa-facebook text-center"></i></span>
                <span><i class="fab fa-instagram text-center"></i></span>

            </div>

        </div>
    </div>

    <hr>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center pt-4">Get Ready</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="card text-center m-4">
                    <img class="card-img-top" src="CSS/images\uber.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Get there</h4>
                        <a href="routeToEvent.html" class="btn btn-primary">Find</a>
                    </div>
                </div>

            </div>

            <div class="col-lg-3">
                <div class="card text-center m-4">
                    <img class="card-img-top" src="CSS/images\parking.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Parking</h4>
                        <a href="#" class="btn btn-primary">Find</a>
                    </div>
                </div>

            </div>

            <div class="col-lg-3">
                <div class="card text-center m-4">
                    <img class="card-img-top" src="CSS/images\food2.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Food</h4>
                        <a href="#" class="btn btn-primary">Find</a>
                    </div>
                </div>

            </div>

            <div class="col-lg-3">
                <div class="card text-center m-4">
                    <img class="card-img-top" src="CSS/images\sleep.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Sleep</h4>
                        <a href="#" class="btn btn-primary">Find</a>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <hr>
                <h2 class="text-center m-4">Location</h2>

                <div id="map"></div>
                <script>
                    var map;

                    function initMap() {
                        map = new google.maps.Map(document.getElementById('map'), {
                            center: {
                                lat: -34.397,
                                lng: 150.644
                            },
                            zoom: 8
                        });
                    }
                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8fr1kqe2iBN30S0oX06Ff6FhwoJdloGg&callback=initMap" async defer>
                </script>
            </div>
        </div>
    </div>

    <?php
include 'footer.php';
  ?>





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
    <script src="main.js"></script>
</body>

</html>