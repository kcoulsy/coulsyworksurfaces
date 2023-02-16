<?php
include ('includes/config.php');

// calls config
$current_page = 'worthing'; 
 
$current_area = ucfirst($current_page);

// replaces the name on this page
$current_page_area = $current_area;
$current_page_code = 'fill in';
$current_page_city = 'fill in';
$current_page_region = 'fill in';
$current_page_county = 'fill in';

// replaces the person on this page
$current_person = 'Robert';
$current_person_tel = '';
$current_person_mob = '07544 030486';
$current_person_email = '<a href="mailto:robert@corianuk.comk">robert@corianuk.com</a>';

include('includes/overall/header.php');

echo '
<div class="grid_24">
    <div class="content">
        <h1 style="font-size:80px; line-height:80px;">' . $current_area . ' ' . $current_product . '</h1>
    </div><!--content-->
</div><!--grid_24-->';

include('includes/body-content.php');

include('includes/overall/footer.php');
?>