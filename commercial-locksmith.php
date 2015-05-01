<?php 

$pageTitle = "Commercial Locksmith SERVICES";
$pageTitle = ucfirst($pageTitle);
$pageName = 'commercial-locksmith.php';

require_once("inc/config.php");


include('inc/header.php'); 

?>

<div class = "container">

    <div class = "row"><!-- This is the slider, jumbotron photo on page-->

        <div class="page-slider">

                <img src="img/locksmith-services.jpg">

        </div>

    </div>

   <div class="row" id="contact-wrapper"><!-- Creates additional row for the contact information under
        the --> 

        <!--  <div class="contact-wrapper"> <!-//  This changes the colors of the contact -->

            <div class="col-sm-8 hidden-xs">

                    <h2>Our Mission</h2>

                    <p><?php echo SITENAME; ?>, strives to maintain the highest 
                        level of professionalism and quality service to each of 
                        our customers by providing top of the line security 
                        products, hardware, and the most up-to-date tools and
                        training to ensure that we do the best job on every job.

                    </p>

                </div>

            <div class="col-sm-4 col-xs-12" id="call-now-vertical-positioning">

                <div class="mission-wrapper">
                    <span id="contact-number-cta">Call Us Now!</span>

                    <br />

                    <span id="contact-phone-number"><?php echo PHONENUMBER; ?></span>
                </div>

            </div>

    </div> <!-- This closes the row, not the container -->
    

        <!-- <div class="main-content-wrapper"> -->

            <div class = "row">

                <div class="col-sm-8">

                     <h2><?php echo $pageTitle; ?></h2>

                    <p>At <?php echo SITENAME; ?>, we service all of the <?php echo SERVICEAREA; ?> Metro 
                        area. If you are not sure if your location is lo
                   </p>

                    <h2><?php echo SERVICEAREA; ?> Locksmith Services</h2>

                    <p><?php echo SITENAME; ?>, <a href="tel:<?php echo PHONENUMBER; ?>">
                        <?php echo PHONENUMBER; ?></a> is a leading company in the 
                        <?php echo SERVICEAREA; ?> . For many years we have been offering 
                        superior service for residents, retail locations, and 
                        businesses such as the installation of high sercurity
                        locks and pick proof locks, window locks, house lockouts,
                        broken lock extraction, changing locks or lock installation,
                        door installation and security installation for both 
                        residential and commercial customers.
                    </p>

                        <ul>

                            <li>
                                <a href="emergency-locksmith.php">24/7 Emergency Lockout Service</a>
                            </li>

                            <li>
                                <a href="safe-locksmith.php">Safes & Vaults of all kinds, from wall safes
                             to floor safes.</a></li>
                            
                            <li>
                                <a href="#">24/7 Emergency Lockout Service</a>
                            </li>

                        </ul>

                </div>

                <div class = "col-sm-4">

                   <?php include('inc/locksmithservices.php'); ?>

                </div>

            </div>

        <hr> <!-- The break right before the Money Back Guarantee -->

            <div class = "row" id="subsection-positioning-fix">
            
                <?php include('content/sub-content.php'); ?>

            </div>

        </div>

    </div>
    
<?php include('inc/footer.php'); ?>