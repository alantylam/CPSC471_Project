<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Sign Up</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="signup.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php" style="color:white">Lux Rent</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <!--<li class="active"><a href="#">Home</a></li>-->
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white">Reservation <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="new_res.php">New</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">View</li>
                    <li><a href="signin.php">Existing</a></li>
                  </ul>
                </li>
                <li><a href="signin.php" style="color:white">Login</a></li>
                <li><a href="signup.php" style="color:white">Sign-up</a></li>
                <li><a href="contact.php" style="color:white">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
    
    <div class="container">

      <form class="form-reserve" action="signup_finish.php" method="post">
        <h1>Sign-Up</h1>
        <div class="account">
          <h3 class="form-account-heading" style="color:grey">Create a username & password:</h2>
          <div class="username">
            <label for="username" class="sr-only">E-mail</label>
            <input name="username" type="username" id="inputEmail" class="form-control" placeholder="E-mail" required autofocus>
     	  </div>
     	  <div class="password">
            <label for="password" class="sr-only">Password</label>
            <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
		  </div>
        </div>
        <div class="name">
          <h3 class="form-name-heading" style="color:grey">Please enter your first name & last name:</h2>
          <div class="firstname">
            <label for="firstname" class="sr-only">First Name</label>
            <input name="fname" type="firstname" id="inputFirstName" class="form-control" placeholder="First Name" required autofocus>
     	  </div>
     	  <div class="lastname">
            <label for="lastname" class="sr-only">Last Name</label>
            <input name="lname" type="lastname" id="inputLastName" class="form-control" placeholder="Last Name" required>
		  </div>
        </div>
        <div class="license">
          <h4 class="form-license-heading" style="color:grey">License Number:</h2>
          <div class="license_number">
            <label for="license_number" class="sr-only">License Number</label>
            <input name="lnumber" type="license_number" id="inputLicenseNumber" class="form-control" placeholder="License Number" required autofocus>
          </div>
        </div>
        <div class="creditcard">
          <h4 class="form-creditcard-heading" style="color:grey">Credit Card:</h2>
          <div class="creditcard_number">
            <label for="creditcard_number" class="sr-only">Credit Card Number</label>
            <input name="cnumber" type="creditcard_number" id="inputCreditCardNumber" class="form-control" placeholder="Credit Card Number" required autofocus>
          </div>
        </div>
        <div class="age">
          <h4 class="form-age-heading" style="color:grey">Age</h2>
          <select name="age" class="age_dropdown">
            <option value="Select">Select below~</option>
  			<option value="21">21</option>
  			<option value="22">22</option>
  			<option value="23">23</option>
  			<option value="24">24</option>
  			<option value="25+">25+</option>
		  </select>
        </div>
        <div class="gender">
          <h4 class="form-gender-heading" style="color:grey">Gender</h2>
          <select name="gender" class="gender_dropdown">
            <option value="Select">Select below~</option>
  			<option value="M">M</option>
  			<option value="F">F</option>
  			<option value="O">O</option>
		  </select>
        </div>
        <div class="resident">
          <h4 class="form-resident-heading" style="color:grey">Resident of</h2>
          <select name="resident" class="resident_dropdown">
            <option value="Select">Select below~</option>
  			<option value="AB">AB</option>
  			<option value="BC">BC</option>
  			<option value="SK">SK</option>
  			<option value="MB">MB</option>
  			<option value="ON">ON</option>
  			<option value="QC">QC</option>
  			<option value="NL">NL</option>
  			<option value="NB">NB</option>
  			<option value="PE">PE</option>
  			<option value="NS">NS</option>
  			<option value="YT">YT</option>
  			<option value="NT">NT</option>
  			<option value="NU">NU</option>
		  </select>
        </div>
        <div class="view_button">
          <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
        </div>
      </form>

    </div> <!-- /container -->
    
      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p style="color:grey">&copy; 2017 ABA Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="Others/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
