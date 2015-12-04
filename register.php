<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Test Register</title>

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

	<form action="registerpost.php" class="form-signin" method="post">
        <h2 class="form-signin-heading">Please register:</h2>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="text" name="email" id="email" class="form-control" placeholder="Email" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="text" name="password" id="password" class="form-control" placeholder="Password" required autofocus>
        <label for="inputForename" class="sr-only">Forename</label>
        <input type="text" name="forename" id="forename" class="form-control" placeholder="Forename" required autofocus>
        <label for="inputSurname" class="sr-only">Surname</label>
        <input type="text" name="surname" id="surname" class="form-control" placeholder="Surname" required>
        <label for="inputPostCode" class="sr-only">Post Code</label>
        <input type="text" name="postcode" id="postcode" class="form-control" placeholder="Post Code" required>
        <label for="inputDOB" class="sr-only">Date of Birth (DD/MM/YYYY)</label>
        <input type="text" name="dob" id="dob" class="form-control" pattern="(0[1-9]|1[012])/(0[1-9]|1[0-9]|2[0-9]|3[01])/[0-9]{4}" placeholder="Date of Birth" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
      </form>

    </div>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>