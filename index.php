<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">        
        <link rel="stylesheet" href="./css/styles.css">
    
        <title>Front Page</title>
    </head>
    <body>   
            <nav class="navbar navbar-default">
                <div class="container pull-left col-md-2 col-sm-2">
                    <div class="navbar-header">
                    
                     <img class="img-responsive" src="./assets/R21LogoDark.png">
                    
                    </div>
                </div>
                
                <div class="container col-md-5 col-sm-5 pull-left">  
                    <ul class="nav navbar-nav pull-left">
                        <li><a href="userdashboard.php">Dashboard</a></li>
                        <li class="active"><a href="frontpage.php">Frontpage</a></li>
                        <li><a href="organisationsignup.php">Organisation</a></li>
                        <li><a href="about.php">Info</a></li>
                        <li><a href="account.php">Sign Up</a></li>
                    </ul> 
                </div>
                <div class="container col-md-5 col-sm-5 pull-right">
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
            
        
        <div class="carousel slide" data-ride="carousel" id="featured">
            
            <ol class="carousel-indicators">
                <li data-target="#featured" data-slide-to="0" class="active"></li>
                <li data-target="#featured" data-slide-to="1"></li>
                <li data-target="#featured" data-slide-to="2"></li>
                <li data-target="#featured" data-slide-to="3"></li>
                <li data-target="#featured" data-slide-to="4"></li>
            </ol>
                     
            <div class="carousel-inner">
                <div class="item active" id="featured">
                    <img class="img-responsive" src="assets/city-people-walking-blur.jpg" alt="R21 Logo Dark">
                </div>
                
                <div class="item">
                    <img class="img-responsive" src="/assets/people-woman-coffee-meeting.jpg" alt="R21 Logo Dark">
                </div>    
                <div class="item">    
                    <img class="img-responsive" src="/assets/city-sunny-people-street.jpg" alt="R21 Logo Dark">        
                </div>
                <div class="item">    
                    <img class="img-responsive" src="/assets/man-person-people-train.jpg" alt="R21 Logo Dark">        
                </div>
                <div class="item">    
                    <img class="img-responsive" src="/assets/people-apple-iphone-writing.jpg" alt="R21 Logo Dark">        
                </div>
            </div>  
            
            <a class="left carousel-control" href="#featured" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            
            <a class="right carousel-control" href="#featured" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
        
        <div class="container">
           <b> <h1>Who Are We?</h1></b>
            <p>Citizens UK is commited to empowering the youth of today by helping them to find good job opportunities across their vast network. Using the realtionships that Citizens UK has gained the hope that their new venture 'Route 21' will help youth to gain work through programs and technology. </p>
        </div>
        
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>    
    </body>
</html>