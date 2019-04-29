<?php
require('config.php');

// Getting upcoming events

$search_query = "SELECT * FROM events WHERE 1";

if ($_POST['location'] != "") {
  $by_location = $_POST['location']; 
  $search_query .= " AND eventCity LIKE '%$by_location%'";
  if ($_GET['location'] != "") {
    $by_location = $_GET['location']; 
    $search_query .= " AND eventCity LIKE '%$by_location%'";
}
}

if ($_POST['category'] != "all") {
    $by_eventType = $_POST['category']; 
    $search_query .= " AND eventType LIKE '%$by_eventType%'";
    if ($_GET['category'] != "all") {
        $by_eventType = $_GET['category']; 
        $search_query .= " AND eventType LIKE '%$by_eventType%'";
  }
}
// 
  
// if ($_POST['date'] != ""){
// $startDate = $_POST['date'];
// $search_query .= " AND startDate = '$startDate'";
// }


// var_dump($search_query);

echo "<br><br>";

 $sql = "SELECT * FROM events WHERE eventName LIKE ? AND eventType LIKE ?"; 

 $datesql = "SELECT * FROM events WHERE startDate = ?";




// $res = $stmt->get_result();

// $by_date = $_POST['startDate'];


	// Get Result
  
  $searchResult = mysqli_query($conn, $search_query);

	// Fetch Data

  $searchEvents = mysqli_fetch_all($searchResult, MYSQLI_ASSOC);
  // Free Result
    //  var_dump($searchEvents);
  
    if (!($stmt = $conn->prepare($sql))) {
    echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
 }
//  $stmt->bind_param('ss', $by_location, $by_eventType);
 $stmt->bind_param('ss', $by_location, $by_eventType);
 $stmt->execute();

// var_dump($stmt);

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

<?php include 'header.php'
?>
<body>
    <div class="container" id="all-events">
    
    
      <?php
        foreach($searchEvents as $event) : ?>
        <div class="card mb-3">
       <div class="row no-gutters">
        <div class="col-lg-3">
            <a href="Event.php?id=<?php echo $event['id']?>" ><img class="card-img" src="https://via.placeholder.com/150" alt="Card image cap"></a>
        </div>
        <div class="col-lg-5">
          <div class="event-details card-body">
              <h1 class="event-title font-weight-bold card-title"><?php echo $event['eventName'] ?></h1>
              <h3 class="event-date card-title"><?php 
         
            
            $startDate = strtotime($event['startDate']);
            $dt = new DateTime("@$startDate");
            $convertedStartDate = $dt->format('d-M-Y H:i');

            echo $convertedStartDate 
                ?></h3>
              <p class="event-location card-text"><?php echo $event['eventAddress'] ?></p>
              <p class="event-description card-text"><?php echo substr($event['eventDescription'], 0, 70) ?></p>
          </div>
          <a href="#" class="btn align-self-center">Buy tickets</a>
        </div>
    
        </div>
      </div>

   
         
        <?php endforeach; ?>
      

     
           
    
    </div>
      
     
       
        
  
    
    
    
    
    
    
    
    
    
 
<?php 
include'footer.php';
?>

  </body>

</html>