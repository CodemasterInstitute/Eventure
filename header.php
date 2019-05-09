<header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark color-header">
        <a class="navbar-brand" href="index.php"><img src="CSS/images/eventure logo 4.2.png" class="logo-icon"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="events.php">Events <span class="sr-only">(current)</span></a>
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
                    <a class="nav-link " href="dashboard.php">
                        Members
                    </a>

                </li>

                <li class="nav-item">
                    <a class="nav-link" href="logIn.php" tabindex="-1">Log In/ Sign Up</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="post" action="searchresults.php">
                <input id="searchNav" type="text" name="search" placeholder="Start your eventure.."><i id="magnGlass"
                    class="fas fa-search btn"></i>
            </form>
        </div>
    </nav>
</header>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
    <script src="main.js"></script>    
</body>
</html>