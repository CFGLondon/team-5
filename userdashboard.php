<?php 
include("denied.php");
include("dbconnect.php");

// Get all oppos from DB
$query = "SELECT * FROM opportunities";
$results = mysqli_query($conn, $query);
$row_count = mysqli_num_rows($results);
$row_name = mysqli_fetch_array($results);
$opname = array();
$opdesc = array();

//Display in Rows
while ($row = mysqli_fetch_assoc($results)) {
	array_push($opname, $row['opportunityname']);
	array_push($opdesc, $row['description']);
}	
	
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">        
        <link rel="stylesheet" href="../css/styles.css">
        
        <title>User Dashboard</title>
    </head>
    <body>   
            <nav class="navbar navbar-default">
                <div class="container pull-left col-md-2">
                    <div class="navbar-header">
                    
                     <img class="img-responsive" src="/assets/R21LogoDark.png">
                    
                    </div>
                </div>
                
                <div class="container col-md-5 pull-left">  
                    <ul class="nav navbar-nav pull-left">
                        <li class="active"><a href="userdashboard.php">Dashboard</a></li>
                        <li><a href="index.php">Frontpage</a></li>
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
        
        
        <div class="container row">
    <div class="container col-md-6">
      <h1>Suggested Opportunities</h1>
    </div>
    <div class="container col-md-5 pull-right">
	
		<form action="logout.php">
            <button type="submit" class="btn btn-primary pull-right">Logout</button>
		</form>
		<form method="get" action="userprofile.php">
            <button type="submit" class="btn btn-primary pull-right">View Profile</button> 
        </form>
        <form method="get" action="usereditprofile.php">
            <button type="submit" class="btn btn-primary pull-right">Edit Profile</button>
        </form>    
    </div>     
  </div>
  <div class="container col-md-9 pre-scrollable">
  
  <div class="col-md-12">
    <div class="col-sm-4">
      <div class="tile">
        <h3 class="title"><?php echo $row_name['opportunityname'] ?></h3>
        <h6>Organisation Name</h6>  
        <p><?php echo $row_name['description'] ?></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="tile">
        <h3 class="title">Opportunity 2</h3>
        <h6>Organisation Name</h6>    
        <p>Hello Red, this is a colored tile.</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="tile">
        <h3 class="title">Opportunity 3</h3>
        <h6>Organisation Name</h6>    
        <p>Hello Orange, this is a colored tile.</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="tile">
        <h3 class="title">Opportunity 4</h3>
        <h6>Organisation Name</h6>  
        <p>Hello Green, this is a colored tile.</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="tile">
        <h3 class="title">Opportunity 5</h3>
        <h6>Organisation Name</h6>    
        <p>Hello Blue, this is a colored tile.</p>
      </div>
    </div>
      <div class="col-sm-4">
      <div class="tile">
        <h3 class="title">Opportunity 6</h3>
        <h6>Organisation Name</h6>    
        <p>Hello Blue, this is a colored tile.</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="tile">
        <h3 class="title"><?php echo $row_name['opportunityname'] ?></h3>
          <h6>Organisation Name</h6> 
        <p><?php echo $row_name['description'] ?></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="tile">
        <h3 class="title">Opportunity 8</h3>
          <h6>Organisation Name</h6> 
        <p>Hello Red, this is a colored tile.</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="tile">
        <h3 class="title">Opportunity 9</h3>
        <h6>Organisation Name</h6>  
        <p>Hello Orange, this is a colored tile.</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="tile">
        <h3 class="title"><?php echo $row_name['opportunityname'] ?></h3>
          <h6>Organisation Name</h6> 
        <p><?php echo $row_name['description'] ?></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="tile">
        <h3 class="title">Opportunity 11</h3>
          <h6>Organisation Name</h6> 
        <p>Hello Red, this is a colored tile.</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="tile">
        <h3 class="title">Opportunity 12</h3>
          <h6>Organisation Name</h6> 
        <p>Hello Orange, this is a colored tile.</p>
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