<?php 
require_once("inc/config.php");

$pageTitle = "Car Locksmith";
$pageTitle = ucfirst($pageTitle);
include('inc/header.php'); 

?>

<div class = "container">

    <div class = "row hero"><!-- This is the slider, jumbotron photo on page-->

        <div class = "col-md-12 hidden-xs" id="hero-position">

            <img src="img/automotive-locksmiths.jpg" alt="<?php echo $pageTitle; ?>">

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
    

        <div class="main-content-wrapper">

            <div class = "row">

                <div class="col-sm-8">

                    <h2>Our Service Locations</h2>
                       
                        <h2><?php echo SERVICEAREA; ?> Locksmith Services</h2>

                        <p>If you are locked out of your car or truck in MSP give
                            us a call. We have over 10 years of locksmith 
                            experience and have worked with all makes and models
                            of cars. So whether you need to be let in to your car,
                            need a new car key or simply need to be let into your car.
                        </p>
                        
                        <p>Car locksmiths can also handle a lot of jobs in the winter
                            in colder areas; they can unfreeze your car lock, open your
                            trunk of you car and we can be there within minutes from 
                            the time that you call. A reputable locksmith company will
                            ensure their locksmiths are bonded and licensed and that 
                            they have the latest technology and the best tools to 
                            do the jobs.
                        </p>
                    
                        <p>We also offer 24 hour locksmith services in MN. Our
                            car locksmith services include all types of car 
                            ignition keys, automotive ignition lock-outs or 
                            lock-ins, and others. Any problem with your ignition
                            key can be solved by our team of auto experts. Our 
                            auto locksmiths are able to fix transponder key problems
                            in just a few minutes using the latest equipment. So
                            if you are experience any car emergency, whether you
                            need a new car transpoder key problems, new transponder
                            keys, or more, just pick up the phone and call 
                            Father & Son's Locksmiths.
                        </p>
                            
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
                    
                    </p>
                
                </div>

                <div class = "col-sm-4">

                   <?php include('inc/locksmithservices.php'); ?>

                </div>

            </div>
        <hr>

            <div class = "row">

        <div class="col-md-8 col-sm-8 col-xs-12"><!-- THE START OF THE CONTENT -->

            <?php include('content/' . $pageName); ?>

        </div>

        <div class ="col-md-4 col-sm-4 col-xs-12">

            <?php include('inc/locksmithservices.php'); ?>

        </div>

       <?php include('content/sub-content.php'); ?>

    </div>
    
</div>

<?php include('inc/footer.php'); ?>