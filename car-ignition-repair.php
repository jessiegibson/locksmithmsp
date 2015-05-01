<?php 
$pageTitle = 'Car Ignition Repair';
$pageTitle = ucfirst($pageTitle);
$pageName = 'page-template.php';

include('inc/header.php');

// wrapper is included in the last line of header 
?>
      
    <div class = "row" id="contact-wrapper">

        <div class = "col-xs-12">

           <h1><?php echo $pageTitle; ?></h1> 

        </div>

    </div>

    <div class = "row hero">

        <div class = "col-md-8 col-sm-12 hidden-xs" id="photo-wrapper">

            <img src="img/locksmith-services.jpg" alt="<?php echo $pageTitle; ?>">

        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 ">

            <?php include('inc/serviceareas.php'); ?>

        </div>

    </div>

    <div class = "clearfix">

    <div class = "row" id="contact-wrapper">

        <div class="col-md-8 col-sm-8 col-xs-12"><!-- THE START OF THE CONTENT -->

            <?php include('content/' . $pageName); ?>

        </div>

        <div class ="col-md-4 col-sm-4 col-xs-12">

            <?php include('inc/locksmithservices.php'); ?>

        </div>

        <div class = "col-md-8">

        <p>If you are in need of locksmith service don't hesitate to pick the 
            phone and give us a call at <?php echo PHONENUMBER; ?>
        </p>

        </div>

        <div class = "col-md-4">

            <div id="guarantee">

                <img src="img/guaranteed-grades-money-back.jpg" alt="Money Back Guarantee">

            </div>

    </div>
    
</div>

<?php include('inc/footer.php'); ?>