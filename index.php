<?php 
require_once("inc/config.php");

$pageTitle = "Locksmith MSP";
$pageTitle = ucfirst($pageTitle);

include('inc/header.php'); 

?>

<div class = "container">

    <div class = "row"><!-- This is the slider, jumbotron photo on page-->

        <div class = "col-md-12">

            <img src="img/msp-locksmith-banner.jpg" alt="<?php echo $pageTitle; ?>">

        </div>

    </div>

    <div class="row"><!-- Creates additional row for the contact information under
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
    
            <div class = "row">

                <div class="col-sm-8">

                    <h2>Our Service Locations</h2>

                    <p>We service all of the <?php SERVICEAREA; ?> Metropolitan area including 
                       
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
                            <li>24/7 Emergency Lockout Service</li>
                            <li>Door Installation and repair</li>
                            <li>Safes & Vaults of all kinds, from wall safes to  </li>
                            <li>Interior doors of all types, wood/glass/metal, even French doors.</li>
                            <li>24/7 Emergency Lockout Service</li>
                        </ul>
                    </p>
                </div>

                <div class = "col-sm-4">

                   <?php include('inc/locksmithservices.php'); ?>

                </div>

            </div>
        <hr>
    
</div>

<?php include('inc/footer.php'); ?>