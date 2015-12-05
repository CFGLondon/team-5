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
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
      <link rel="stylesheet" href="css/styles.css">
      <title>Organisation Sign Up</title>
   </head>
   <body>
       
      <nav class="navbar navbar-default">
                <div class="container pull-left col-md-2">
                    <div class="navbar-header">
                    
                     <img class="img-responsive" src="./assets/R21LogoDark.png">
                    
                    </div>
                </div>
                
                <div class="container col-md-5 pull-left">  
                    <ul class="nav navbar-nav pull-left">
                        <li><a href="userdashboard.php">Dashboard</a></li>
                        <li ><a href="frontpage.php">Frontpage</a></li>
                        <li class="active"><a href="organisationsignup.php">Organisation</a></li>
                        <li><a href="about.php">Info</a></li>
                        <li><a href="account.php">Sign Up</a></li>
                    </ul> 
                </div>
                <div class="container col-md-5 pull-right">
                    <form class="navbar-form navbar-left pull-right"
                          role="login">
                        <div class="form-group">
                            <input type="text" class="form-control"
                                   placeholder="Email">
                            <input type="text" class="form-control"
                                   placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-default">Login</button>
                    </form>
                </div>
            </nav>    
       
      <div class="container-fluid"><h1>Organisation</h1></div>  
       
      <form action="loginpost.php" class="pull-left col-md-6" role="login">
         <h1>Login</h1>
         <div class="form-group">
            <label for="inputEmail">Email</label>
            <input class="form-control" type="text" name="username" id="username" placeholder="Email">
         </div>
         <div class="form-group">
            <label for="inputPassword">Password</label>
            <input class="form-control" type="password" name="password" id="password" placeholder="Password">
         </div>
         <button type="submit" class="btn btn-primary">Login</button>
      </form>
      <form action="registerpost.php" class="col-md-6 pull-right" method="post">
         <h1>Create Account</h1>
         <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Email" required autofocus>
         </div>
         <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="text" name="password" id="password" class="form-control" placeholder="Password" required autofocus>
         </div>
         <div class="form-group">
            <label for="inputForename">Forename</label>
            <input type="text" name="forename" id="forename" class="form-control" placeholder="Forename" required autofocus>
         </div>
         <div class="form-group">
            <label for="inputSurname">Surname</label>
            <input type="text" name="surname" id="surname" class="form-control" placeholder="Surname" required>
         </div>
         <div class="form-group">
            <label for="inputPostcode">Post Code</label>
            <input type="text" name="postcode" id="postcode" class="form-control" placeholder="Post Code" required>
         </div>
         <div class="form-group">
            <label for="inputDOB">Date of Birth (DD-MM-YYYY)</label>
            <input type="text" name="dob" id="dob" class="form-control" pattern="(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])-[0-9]{4}" placeholder="Date of Birth (DD-MM-YYYY)" required>
         </div>
         <div class="form-group">
            <label  for="selectQualification">Qualification</label>
            <select class="form-control" id="selectQualification">
               <option>Choose...</option>
               <option>BTEC</option>
               <option>A level</option>
               <option>GCeeSE</option>
            </select>
         </div>
         <input class="btn btn-primary" type="submit" value="Submit"> 
      </form>
      <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity=
         "sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
      <script src="js/script.js"></script>    
   </body>
</html>