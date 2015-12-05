<?php 
include("denied.php");
include("dbconnect.php");

// Get data for user
$query = "SELECT * FROM users WHERE email='$user'";
$results = mysqli_query($conn, $query);
$row_count = mysqli_num_rows($results);
$row_name = mysqli_fetch_array($results);


// Get data for each row and start to print
while ($row = mysqli_fetch_assoc($query)) {
	print_r($row['forename']);
		
}

// Get DoB from age stored in DB
function get_age($birth_date){
	return floor((time() - strtotime($birth_date))/31556926);
}
 

?>

<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="./css/styles.css">
    
        <title>Profile</title>
    </head>
    <body>
		            <nav class="navbar navbar-default">
                <div class="container pull-left col-md-2">
                    <div class="navbar-header"> 
                        <img class="img-responsive" src="/assets/R21LogoDark.png">
                    </div>
                </div>
                
                <div class="container col-md-4 pull-left">  
                    <ul class="nav navbar-nav pull-left">
                        <li class="active"><a href="userdashboard.php">Dashboard</a></li>
                        <li><a href="index.php">Home</a></li>
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
            <h1>User Profile</h1>
        </div>	
		<div class="container col-md-9 pull-left">
			<div class="[ col-sm-6 col-md-offset-2 col-md-4 ]">
				<div class="[ info-card ]">
					<img style="width: 80%" height= "500px" src="./img/placeholder.jpg" />
					<div class="[ info-card-details ] animate">
						<div class="[ info-card-header ]">
							<h1> <?php echo $row_name['forename']; ?> <?php echo $row_name['surname']; ?> : <?php echo "".get_age($row_name['dob']) .""; ?></h1>
							<h3> <?php echo $row_name['location']; ?> </h3>
						</div>
						<div class="[ info-card-detail ]">
							<!-- Description -->
							<p>My Qualifications go here please</p>
							<br></br>
							<table>
<tr>
	<td>
		<div name="textNo" value="1">1</div>
	</td>

			
			
	<td>
		<select name="QualList">
			<option value="">Qualification Type</option>
			<option value="gcse">GCSE</option>
			<option value="btec">BTEC</option>
			<option value="alevel">ALEVEL</option>
			<option value="hons">HONS</option>
			<option value="masters">MASTERS</option>
		</select>
	</td>
	<td>
		<select name="QualDisc">
			<option value="">Qualification Discipline</option>
			<option value="Mathematics">Mathematics</option>
			<option value="English">English</option>
			<option value="Science">Science</option>
			<option value="ICT">ICT</option>
		</select>
	</td>
	<td>
		<input type="submit" name="sub"/>
	</td>
			
	
	
</tr>
</table>
							<p> Give me skills</p>
							<div class="social">
								<a href="https://www.facebook.com/andrew.ramsier" 
class="[ social-icon facebook ] animate"><span 
class="fa fa-facebook"></span></a>

								<a href="https://twitter.com/Brewhandy" class="[ 
social-icon twitter ] animate"><span class="fa 
fa-twitter"></span></a>

								<a href="https://github.com/massivturtlz" class="[ 
social-icon github ] animate"><span class="fa 
fa-github-alt"></span></a>

								<a href="https://www.linkedin.com/profile/view?id=AAkAABJSh9cBuLBOEyU_7DNdHQ4gwwE_eqoVXU4&authType=NAME_SEARCH&authToken=e60S&locale=en_US&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A307398615%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1449274689467%2Ctas%3Aandrew%20ramsier" class=
"[ social-icon linkedin ] animate"><span class=
"fa fa-linkedin"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
   
			</div>
    
                <div id="recent" class="container col-md-3 pull-right pre-scrollable">
            <div class="col-sm-12">
      <div class="tileorange">
        <h3 class="title">Recent 1</h3>
          <h6>Organisation Name</h6> 
        <p>This is the first recent opportunity.</p>
      </div>
    </div>
        <div class="col-sm-12">
      <div class="tileorange">
        <h3 class="title">Recent 2</h3>
          <h6>Organisation Name</h6> 
        <p>This is the second recent opportunity.</p>
      </div>
    </div>
        <div class="col-sm-12">
      <div class="tileorange">
        <h3 class="title">Recent 3</h3>
          <h6>Organisation Name</h6> 
        <p>This is the third recent opportunity</p>
      </div>
    </div>
            <div class="col-sm-12">
      <div class="tileorange">
        <h3 class="title">Recent 4</h3>
          <h6>Organisation Name</h6> 
        <p>This is the fourth recent opportunity</p>
      </div>
    </div>
            <div class="col-sm-12">
      <div class="tileorange">
        <h3 class="title">Recent 5</h3>
          <h6>Organisation Name</h6> 
        <p>This is the fifth recent opportunity</p>
      </div>
    </div>
            <div class="col-sm-12">
      <div class="tileorange">
        <h3 class="title">Recent 6</h3>
          <h6>Organisation Name</h6> 
        <p>This is the sixth recent opportunity</p>
      </div>
    </div>
        
    
            </div>
	        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>    
    </body>
</html>
