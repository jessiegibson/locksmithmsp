<?php 
require_once("inc/config.php");

$pageTitle = "Emergency Locksmith Services";
$pageTitle = ucfirst($pageTitle);
$area = "TYPE SERVICE AREA";

include('inc/header.php'); 
?>

    <div class = "row"><!-- This is the slider, jumbotron photo on page-->
        <div class = "col-md-8 hidden-xs">
            <img src="img/locked-out-car-emergency-locksmith.jpg" alt="<?php echo $pageTitle; ?>">
        </div>
        <div class="col-lg-4 col-md-4"><?php include('inc/serviceareas.php'); ?></div>
    </div>
<div class="container">
        <div class="main-content-wrapper">
            <div class = "row">
                <div class="col-sm-8">
                    <h2><?php echo $pageTitle; ?></h2>
                    <p>At <?php echo SITENAME; ?>, we service all of the <?php echo SERVICEAREA; ?> Metro area. If you are not sure if you are located in our service area just give us a call and we will be happy to figure it out.</p>
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

            <div class = "row" id="subsection-positioning-fix">
            
                 <?php include('content/sub-content.php'); ?>

            </div>

        </div>
</div>

    </div>
    
<?php include('inc/footer.php'); ?>