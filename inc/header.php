<?php 
require_once('config.php'); 

?>
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
    <?php include_once("analyticstracking.php") ?>  <!-- GOOGLE ANALYTICS TRACKING --> 
</head>

<body role="document">
    <div class = "container">
            <div class = "row header-top">
                <div class = "col-lg-2 col-md-3 col-sm-4 col-xs-12 logo">
                   <img src = "img/locksmith-msp.png" alt="<?php echo $pageTitle; ?>"> 
                </div>
                <div class = "col-lg-6 col-md-4 col-sm-8 col-xs-12" id="wrapperheadcta">
                         <span id="callnow"> 24/7 Support </span>
                </div>
                <div class="col-lg-4 col-md-5 col-sm- col-xs-12">
                    <span id="phoneNumber">
                        <?php echo PHONENUMBER; ?>
                    </span>
                </div>
            </div>
            <div class = "row">
                <nav class="navbar navbar-inverse" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header">      
                          <ul class="nav navbar-nav navbar-right">
                                <li><a class = "menubuttons" href="/">Home</a></li>
                                <li><a class = "menubuttons" href="car-locksmith.php">Car Locksmith</a></li>
                                <li><a class = "menubuttons" href="commercial-locksmith.php">Commercial</a></li>
                                <li><a  class = "menubuttons" href="../residential-locksmith.php">Residential</a></li>
                                <li class="divider"></li>
                                <li><a  id="emergency" href="../emergency-locksmith.php">EMERGENCY</a></li>
                          </ul>
                      </div><!-- /.navbar-header -->
                    </div><!-- // navbar row --> 
                  </nav>
              </div><!-- row --> 
<div class="wrapper"> <!-- content wrapper --> 
    