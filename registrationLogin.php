<?php 
session_start();

// OOP I did it again
    // variable declaration
    $fName     = "";
    $lName = ""; 
    $email    = "";
    $username = "";
    $password_1 = "";
    $password_2 = "";
    $errors = array();
	
 

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
        // receive all input values from the form
        $fName = esc($_POST['fName']);
        $lName = esc($_POST['lName']);
        $email = esc($_POST['email']);
		$username = esc($_POST['username']);
		$password_1 = esc($_POST['password_1']);
        $password_2 = esc($_POST['password_2']);
        
        


		// Ensure that no user is registered twice. 
        // the email and usernames should be unique
        $mysqli = new mysqli ('localhost', 'root', '', 'events');
        
        if ($mysqli->connect_errno) {
            echo "Connection failed " . $mysqli->connect_errno . " because " . $mysqli->connect_error;
        }
		$stmt = $mysqli->prepare("SELECT * FROM users WHERE username=? 
                                OR emailAddress=? LIMIT 1");
        $stmt->bind_param('ss', $username, $email); 

        $stmt->execute();

		if ($result = $stmt->get_result()) {
            $user = $result->fetch_assoc();
        } else {
            echo $mysqli->error;
        };

        
        if ($user) { // if user exists
			if ($user['username'] === $username) {
			  array_push($errors, "Username already exists");
			}
			if ($user['email'] === $email) {
			  array_push($errors, "Email already exists");
			}
        }
        
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = $mysqli->prepare("INSERT INTO users (firstName, lastName, emailAddress, username, password) 
                      VALUES(?, ?, ?, ?, ?)");
            $query->bind_param('sssss', $fName, $lName, $email, $username, $password);
            

            $query->execute();
            
			// get id of created user
			$reg_user_id = mysqli_insert_id($mysqli); 

			// put logged in user into session array
			// $_SESSION['user'] = getUserById($reg_user_id);

			
			}
		} 

      
function esc($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
    



    // LOG USER IN
    // need to have SESSION, dashboard page needs to not show data unless user is logged in, if stmt around all on dashboard
    // need to have session_start() and session_destroy() etc -> see how they did it in the blog
    if (isset($_POST['login_btn'])) {
	 	$email = esc($_POST['email']);
         $password = esc($_POST['password']);
         
        $mysqli = new mysqli ('localhost', 'root', '', 'events');
        
        if ($mysqli->connect_errno) {
            echo "Connection failed " . $mysqli->connect_errno . " because " . $mysqli->connect_error;
        }

        if (empty($email)) { array_push($errors, "Username required"); }
	 	if (empty($password)) { array_push($errors, "Password required"); }
		if (empty($errors)) {
            $password = md5($password); // encrypt password
        
            if(!$stmt = $mysqli->prepare("SELECT * FROM users WHERE emailAddress=? and password=? LIMIT 1")) {
                echo $mysqli->error;
            }
        
            $stmt->bind_param('ss', $email, $password);

            $stmt->execute();

            if ($result = $stmt->get_result()) {
                $user = $result->fetch_assoc();
                $_SESSION['username'] = $user['username'];
                // echo 'success';
            } else {
                echo $mysqli->error;
            }
            
            
        }
    }
            // INCLUDE so user can navigate between pages without having to log in again
			//$result = mysqli_query($mysqli, $sql);
			// if (mysqli_num_rows($result) > 0) {
			// 	// get id of created user
			// 	$reg_user_id = mysqli_fetch_assoc($result)['id']; 

				// put logged in user into session array
				 

			// 	// if user is admin, redirect to admin area
			// 	if ( in_array($_SESSION['user']['role'], ["Admin", "Author"])) {
			// 		$_SESSION['message'] = "You are now logged in";
			// 		// redirect to admin area
			// 		header('location: ' . BASE_URL . '/admin/dashboard.php');
			// 		exit(0);
			// 	} else {
			// 		$_SESSION['message'] = "You are now logged in";
			// 		// redirect to public area
			// 		header('location: index.php');				
			// 		exit(0);
			// 	}
			// } else {
			// 	array_push($errors, 'Wrong credentials');
	// 		// }
	// 	}
	// }

	// Get user info from user id
	// function getUserById($id)
	// {
	// 	global $mysqli;
	// 	$sql = "SELECT * FROM users WHERE id=$id LIMIT 1";

	// 	$result = mysqli_query($mysqli, $sql);
	// 	$user = mysqli_fetch_assoc($result);

	// 	// returns user in an array format: 
	// 	// ['id'=>1 'username' => 'Awa', 'email'=>'a@a.com', 'password'=> 'mypass']
	// 	return $user; 
	// }
?>