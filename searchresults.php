<?php
require('config.php');

// Getting upcoming events

$search_query = "SELECT * FROM events WHERE 1";

if ($_POST['location'] != "") {
  $by_location = $_POST['location']; 
  $search_query .= " AND eventAddress LIKE '%$by_location%'";
}

if ($_POST['category'] != "all") {
    $by_eventType = $_POST['category']; 
    $search_query .= " AND eventType LIKE '%$by_eventType%'";
  }

var_dump($search_query);

echo "<br><br>";

$by_date = $_POST['startDate'];
$by_eventType = $_POST['eventType'];

	// Get Result
  
  $searchresult = mysqli_query($conn, $search_query);

	// Fetch Data

  $searchEvents = mysqli_fetch_all($searchresult, MYSQLI_ASSOC);
	// Free Result
    var_dump($searchEvents);
    mysqli_free_result($searchresult);

    
        


/*OR startDate LIKE '$by_date' OR eventType LIKE '%$by_eventType%'*/
  
  

  // return $searchresult;



    mysqli_close($conn); 
    

?>