<?php
include ('./includes/config.php');
$current_page = 'about'; 
include('./includes/overall/header.php');
?>

<div class="grid_24">
  <div class="content">
    <h1 style="font-size:80px; line-height:80px;">About Us</h1>
  </div>
</div>

    <div class="grid_24">
        <div class="content">
            <h3>About Us...</h3>
            <h3 class="cta">CALL <?php echo PHONE_MAIN; ?> To discuss you worksurface.</h3>
        </div><!--content-->
    </div><!--grid_24-->

    <div class="grid_24">
        <div id="head-underConstruction">
            <p>Sorry! This page is coming soon</p>
			<p>Our website is currently under development...Please feel free to browse while we continue developing. Should you require assistance please call...</p>
        </div><!--head-contact-->
    </div><!--grid_24-->
    
<?php
include('./includes/overall/footer.php');
?>