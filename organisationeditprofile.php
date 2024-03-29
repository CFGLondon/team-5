<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="css/styles.css">
    
        <title>Organisation Edit Profile</title>
    </head>
    <body>
	<div id="wrapper">
		            <nav class="navbar navbar-default">
                <div class="container pull-left col-md-2">
                    <div class="navbar-header">
                    
                     <a href="" class="navbar-brand">
                            Route 21
                        </a>
                    
                    </div>
                </div>
                
                <div class="container col-md-4 pull-left">  
                    <ul class="nav navbar-nav pull-left">
                        <li class="active"><a href="organisationdashboard.php">Dashboard</a></li>
                        <li><a href="frontpage.php">Home</a></li>
                        <li><a href="organisationsignup.php">Organisation</a></li>
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
       
        <form action="registerpost.php" class="col-md-7 pull-left" method="post">
         <h1>Edit Organisation Account</h1>
         <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Email" required autofocus>
         </div>
         <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="text" name="password" id="password" class="form-control" placeholder="Password" required autofocus>
         </div>
         <div class="form-group">
            <label for="inputForename">Organisation Name</label>
            <input type="text" name="forename" id="forename" class="form-control" placeholder="Organisation Name" required autofocus>
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
               <option>GCSE</option>
            </select>
         </div>
         <input class="btn btn-primary" type="submit" value="save"> 
      </form>
        
        
	   <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>    
    </body>
</html>
