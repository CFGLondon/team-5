<?php

include("dbconnect.php");
  
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

	$username = mysqli_real_escape_string($conn, $_POST['username']); 
	$password = mysqli_real_escape_string($conn, $_POST['password']); 

	$query = "SELECT password FROM users WHERE username = '$username'";
	
	$result = mysqli_query($conn, $query);
	if ($user = $result->fetch_object()) {
		
		$hash = $user->password;
    
		if (password_verify($password, $hash)){
	
			$_SESSION['userlog'] = $username;
			header("location: profile.php");

		} else {
	
			echo '<script>';
			echo 'alert("Your username or password was incorrect!")';
			echo '</script>';

		}	
	
	} else {
    
		echo '<script>';
		echo 'alert("Your username or password was incorrect!")';
		echo '</script>';

	}
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Test Login</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/signin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

	<form action="" class="form-signin" method="post">
        <h2 class="form-signin-heading">Please sign in:</h2>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>