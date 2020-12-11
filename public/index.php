<?php
require_once __DIR__ . '/app/VisitorsCounter.php';

use cylab\hello\VisitorsCounter;
VisitorsCounter::inc();
?>
<!DOCTYPE html>
<html lang="en" style="width: 100%; height: 100%">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>cylab/hello</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
    body {
        position: relative;
        top: 0;
        width: 100%;
        height: 100%;
        background: url(https://cylab.be/images/home.jpg) no-repeat 50%;
        background-size: cover;
        font-family:Raleway, sans-serif;
    }

    div.overlay {
        width: 100%;    background-color: rgba(0,0,0,.4);
        padding: 15px;
        position: absolute;
        bottom: 20%;
        color: #fff;
        font-weight: 400;
        text-shadow: 0 0.2rem 0.2rem rgba(0,0,0,.7);
    }

    div.overlay h1 {
        font-size: 5rem;
    }

    div.overlay h2 {
        font-size: 2.5rem;
    }

    div.overlay a {
        color: #fff;
    }
    
    </style>
  </head>
  <body>

    <div class="overlay">
        <h1>Cyber Defence Lab</h1>
        <h2>
            Fighting cyber threats through <b>research</b> and <b>education</b><br>
            Docker image <b>cylab/hello</b>
        </h2>
        <h2>
            Already <?= VisitorsCounter::total() ?> visitors!
        </h2>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
