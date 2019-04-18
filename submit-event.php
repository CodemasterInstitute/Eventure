<?php
                    // define variables and set to empty values
                    // variables do NOT need to have the same names as the DB names but it does make it easier to read
                    $eventName = $organiserID = $startDate = $endDate = $eventAddress = $price = $eventDescription = $imgName = $availableTickets = $eventType = $error = "";
                    
                    if(isset($_POST['eventName'])) {
                        $eventName = test_input($_POST["eventName"]);
                        } else {
                            $eventName = "";
                        }
                    
                    if(isset($_POST['organiserID'])) {
                        $organiserID = test_input($_POST["organiserID"]);
                        } else {
                            $organiserID = "";
                        }
                    
                    if(isset($_POST['startDate'])) {
                        $startDate = test_input($_POST["startDate"]);
                        } else {
                            $startDate = "";
                        }
                
                    if(isset($_POST['endDate'])) {
                        $endDate = test_input($_POST["endDate"]);
                        } else {
                            $endDate = "";
                        }
                    
                    if(isset($_POST['eventAddress'])) {
                        $eventAddress = test_input($_POST["eventAddress"]);
                        } else {
                            $eventAddress = "";
                        }

                    if(isset($_POST['price'])) {
                        $price = test_input($_POST["price"]);
                        } else {
                            $price = "";
                        }

                    if(isset($_POST['eventDescription'])) {
                        $eventDescription = test_input($_POST["eventDescription"]);
                        } else {
                            $eventDescription = "";
                        }

                    if(isset($_POST['imgName'])) {
                        $imgName = test_input($_POST["imgName"]);
                        } else {
                            $imgName = "";
                        }

                    if(isset($_POST['availableTickets'])) {
                        $availableTickets = test_input($_POST["availableTickets"]);
                        } else {
                            $availableTickets = "";
                        }

                    if(isset($_POST['eventType'])) {
                        $availableTickets = test_input($_POST["eventType"]);
                        } else {
                            $eventType = "";
                        }
                    // add JS validation on input data, regEx too. validating email addresses will give structure of regEx structure in JS. regEx to remove $ and also to allow number and decimal point

                        function test_input($data) {
                            $data = trim($data);
                            $data = stripslashes($data);
                            $data = htmlspecialchars($data);
                            return $data;
                          }

                    $mysqli = new mysqli ('localhost', 'root', '', 'events'); // localhost, username, password, database name 

                    $sql = "INSERT INTO events (eventName, organiserID, startDate, endDate, eventAddress, price, eventDescription, imgName, availableTickets, eventType) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

                    
                    if ($stmt = $mysqli->prepare($sql)){
                        echo $mysqli->error;
                    }

                    $stmt->bind_param('sisssissis', $eventName, $organiserID, $startDate, $endDate, $eventAddress, $price, $eventDescription, $imgName, $availableTickets, $eventType);

                    if($stmt->execute()) {
                        $heading = "success";
                      } else {
                          $heading = "failure";
                      }
                        $stmt->close();
                      
                        $mysqli->close(); 

                   
                        
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
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/main.css">


</head>

<body>
    <!--Entire width header/hero-->
  <?php
  include 'header.php';
  ?>
<?php
    echo $heading;
?>

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