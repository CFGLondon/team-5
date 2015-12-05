<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">        
        <link rel="stylesheet" href="css/styles.css">
    
        <title>Route 21</title>
    </head>
    <body>   
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
                        <li class="active"><a href="userdashboard.php">Dashboard</a></li>
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
        
        
        <div class="container">
            <h1>Create Opportunities</h1>
			</br>
				<table>
					<tr>
						<form action=".\oppost.php" method="POST">
						<input type="text" name="oname" placeholder="Organisation Name"/></br></br>
						<textarea type="text" name="odesc" style='width:50%;' rows="5" placeholder="Description of Opportunity" /></textarea></br></br>
						<input type="text" name="olocation" placeholder="Location" /></br></br>
						<input type="submit" name="sub"/>
						</form>
						
				
				
				
        </div>
        
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>    
    </body>
</html>