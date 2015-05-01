<?php 
$pageTitle = 'Hopkins Locksmith';
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

            <img src="img/msp-locksmith-banner.jpg" alt="<?php echo $pageTitle; ?>">

        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 ">

            <?php include('inc/serviceareas.php'); ?>

        </div>

    </div>

    <div class = "clearfix">

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