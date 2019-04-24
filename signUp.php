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
  
    <div class="container-fluid">
        <h1>Sign Up:</h1>
            <form id="signup-form">
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="newFName">First Name:</label>
                    <input type="firstname" class="form-control" id="newFName" placeholder="First Name">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="newLName">Password:</label>
                    <input type="lastname" class="form-control" id="newLName" placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="newEmailAddress">E-mail Address:</label>
                    <input type="email" class="form-control" id="newEmailAddress" placeholder="name@email.com">
                </div>

                <div class="form-group">
                    <label for="newUsername">Username:</label>
                    <input type="username" class="form-control" id="newUsername" placeholder="eventurer1234567">
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="newPassword">Password:</label>
                        <input type="text" class="form-control" id="newPassword">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="confirmPass">Confirm Password:</label>
                        <input type="text" class="form-control" id="confirmPass">
                    </div>
                    
                </div>
                <div class="form-group">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        I Agree to the Terms and Conditions.
                    </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>

    
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