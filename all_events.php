<?php
require('config.php');

// Getting upcoming events


$query = 'SELECT * FROM events';
    


	// Get Result
  $result = mysqli_query($conn, $query);
 

	// Fetch Data
	$allEvents = mysqli_fetch_all($result, MYSQLI_ASSOC);


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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!-- <link rel="stylesheet" type="text/css" href="CSS/main.css"> -->
  <link rel="stylesheet" href="CSS/main.css">

</head>


<body>
    <div class="container" id="all-events">
      
      <div class="row">
      <?php
        foreach($allEvents as $event) : ?>
        <div class="col-lg-4">
          <div id="all-event-image" class="card">
            <img src="https://via.placeholder.com/150">
            <a href="Event.php?id=<?php echo $event['id']?>" ><img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap"></a>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="event-details">
              <h1 class="card-title font-weight-bold"><?php echo $event['eventName'] ?></h1>
              <h3 class="event-date"><?php echo $event['startDate'] ?></h3>
              <p class="event-location"><?php echo $event['eventAddress'] ?></p>
              <p class="event-description"><?php echo substr($event['eventDescription'], 0, 70) ?></p>
          </div>
          <a href="#" class="btn align-self-center">Buy tickets</a>
        </div>
          
         
        <?php endforeach; ?>
           
      </div>
    </div>
      
     
       
        
  
    
    
    
    
    
    
    
    
    
 


  </body>

</html>