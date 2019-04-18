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

    <!--Entire width header/hero-->
    <div class="container-fluid">
           <?php
           include 'header.php';
           ?>
<div class = "contactUsInner">
    <form>
    <h1>Contact Us</h1>
    <div class = "form-row">
            <div class="form-group col-lg-4">
                <label for="inputEmail">Email</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Your email">
            </div>
        </div>
            <div class="form-row">
            <div class="form-group col-lg-4">
                    <select id="numberOfTickets" class="form-control">
                        <option selected>What's this about?</option>
                        <option>General Question</option>
                        <option>Work Opportunities</option>
                        <option>Complaints</option>
                        <option>Other</option>
                    </select>
                </div>
            </div>
            <!--Need to add textarea and centre all the form things col4 in centre of page-->
</form>
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