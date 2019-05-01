<?php
require('config.php');

$valueForm = $_GET['citySelect']; 

// Create Query
$cityQuery = 'SELECT DISTINCT eventCity FROM events';

$querySelect = "SELECT *  FROM events WHERE eventCity = '$valueForm' ";


// Get Result
$result = mysqli_query($conn, $cityQuery);
$result2 = mysqli_query($conn, $querySelect);

// Fetch Data
$eventCity = mysqli_fetch_all($result, MYSQLI_ASSOC);
$eventSelect = mysqli_fetch_all($result2, MYSQLI_ASSOC);


// Free Result
mysqli_free_result($result);

mysqli_close($conn);




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
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/main.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>
    <?php
include 'header.php';
?>


    <form action="" method="get">
        <select name="citySelect">
            <?php foreach($eventCity as $event) : ?>
            <option value="<?php echo $event['eventCity']?>"><?php echo $event['eventCity']?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit">
    </form>



    <?php
      foreach($eventSelect as $event) : ?>

    <div id="cardHomePage" class="col-lg-3">
        <div class="card">
            <a href="Event.php?id=<?php echo $event['id']?>"><img class="card-img-top"
                    src="imagepath/uploads/<?php echo $event['imgName'] ?>" alt="Card image cap"></a>
            <div class="card-body">
                <a href="Event.php?id=<?php echo $event['id']?>">
                    <h5 class="card-title font-weight-bold"><?php echo $event['eventName'] ?></h5>
                </a>
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








    <?php
include 'footer.php';
  ?>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.0.min.js"
        integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="main.js"></script>

</body>

</html>