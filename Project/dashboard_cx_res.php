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

    <title>Customer Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard_cx_res.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php" style="color: white;">Lux Rent</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" style="color: white">Dashboard</a></li>
            <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white">Account <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="index.php">Logout</a></li>
                  </ul>
                </li>
            <li><a href="contact.php" style="color:white">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="dashboard_cx.php">Existing Reservation</a></li>
            <li class="active"><a href="dashboard_cx_res.php">New Reservation <span class="sr-only">(current)</span></a></li>
          </ul>
          
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>
          <div class="row placeholders">
          <div class="container">

      <form class="form-reserve">
        <h1>Reservation</h1>
        <div class="date">
          <h3 class="form-date-heading" style="color:grey">Date & Time</h3>
          <div class="pickup_date">
            <label for="pickup_date" class="sr-only">Pick-up date</label>
            <input type="pickup_date" id="inputPickupDate" class="form-control" placeholder="Pick-up date" required autofocus>
     	  </div>
     	  <div class="return_date">
            <label for="return_date" class="sr-only">Return date</label>
            <input type="return_date" id="inputReturnDate" class="form-control" placeholder="Return date" required>
		  </div>
        </div>
        <div class="location">
          <h3 class="form-location-heading" style="color:grey">Location</h3>
          <div class="pickup_location">
            <label for="pickup_location" class="sr-only">Pick-up location</label>
            <input type="pickup_location" id="inputPickupLocation" class="form-control" placeholder="Pick-up location" required autofocus>
          </div>
          <div class="return_location">
            <label for="return_location" class="sr-only">return location</label>
            <input type="return_location" id="inputReturnLocation" class="form-control" placeholder="Return location" required>
          </div>
        </div>
        <div class="view_button" href="select_car.php">
          <a href="select_car.php" class="btn btn-lg btn-primary btn-block" type="submit">Continue</a>
        </div>
      </form>

    </div> <!-- /container -->
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
