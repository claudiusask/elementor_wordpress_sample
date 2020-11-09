<?php include 'config.php' ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/3.4/favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/starter-template/">

    <title>Parking Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/3.4/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="https://getbootstrap.com/docs/3.4/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- datatables.net css for search box available at all pages -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script type="text/javascript" src="https://me.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=wWDlc48h5bLpN7Qi28ZZdg6pQUdwyr5RMz1XC5B1y76dMz0wMQtmrJ5oANjEnkVrnqMaYV1k2JNUBC4p865LLoVAES9K-sFWt64Sv1TjzxA" charset="UTF-8"></script><script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<?php
  // echo "<pre>";
  // print_r($_SERVER);
  // exit;
  // ------------------------------------------------------
  // if the admin is logged in the below code will execute.
  // ------------------------------------------------------
  if($_SERVER["REQUEST_URI"] != "/parking/"):
?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="dashboard.php">Car Park System</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="">Tickets</a></li>
            <li><a href="driver-info.php">Membership Cards</a></li>
            <li><a href="vehicles.php">Vehicles</a></li>
            <li><a href="driver.php">Drivers</a></li>
            <li><a href="logout.php">Log Out</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- if not logged-in below code will execute -->
    <?php 
    else: ?>
      <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Car Park System</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class=""><a href="">Tickets</a></li>
            <li class=""><a href="driver-info.php">Membership Cards</a></li>
            <li class=""><a href="vehicle.php">Vehicles</a></li>
            <li class=""><a href="dirver.php">Drivers</a></li>
            <li class=""><a href="logout.php">Log Out</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <?php endif;
    // DO not put $conn->close(); here, it will breake the website.
    ?>