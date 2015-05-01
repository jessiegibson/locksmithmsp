<?php 

require_once('config.php'); ?>

<!DOCTYPE html>

<html lang="en">

  <head>

    <title><?php echo $pageTitle; ?></title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" ">
    <meta name="author" content="Jessie Gibson">
    <meta name="google-site-verification" content="HgsJ3cNWHZ2hmfDRHD3l9NAIXHp7lqlWhSL-s1WgxoY" />
    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
    <?php include_once("analyticstracking.php") ?><!-- GOOGLE ANALYTICS TRACKING --> 
</head>

<body role="document">
    <div class = "container">
            <div class="row header-top">
                <div class="col-md-5">
                    <h2>Fast Response</h2>
                    <h2>24/7 Support</h2>
                </div>
                <div class="col-md-2">
                   <img src="img/locksmith-msp.png" alt="<?php // echo $pageTitle; ?>"> 
                </div>
                <div class="col-md-5">
                    
                        <span id="phoneNumber"><?php echo PHONENUMBER; ?></span>
                    
                </div>

            </div>

            <div class = "row">

                <nav class="navbar navbar-inverse" role="navigation">

                    <div class="container-fluid">

                        <div class="navbar-header">      

                          <ul class="nav navbar-nav navbar-right">

                            <li>
                              <a class = "menubuttons" href="/">Home</a>
                            </li>

                            <li>
                              <a class = "menubuttons" href="car-locksmith.php">Car Locksmith</a>
                            </li>

                            <li>
                              <a class = "menubuttons" href="commercial-locksmith.php">Commercial</a>
                            </li>

                            <li>
                              <a  class = "menubuttons" href="../residential-locksmith.php">Residential</a>
                            </li>

                            <li class="divider"></li>

                            <li>
                              <a  id="emergency" href="../emergency-locksmith.php">EMERGENCY</a>
                            </li>

                          </ul>
                        
                      </div><!-- /.navbar-header -->

                    </div><!-- // navbar row --> 

                  </nav>

              </div><!-- row --> 

<div class="wrapper"> <!-- content wrapper --> 













    