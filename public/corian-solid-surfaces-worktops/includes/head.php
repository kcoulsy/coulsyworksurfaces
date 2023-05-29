<?php echo DOCTYPE; ?>

<head>

<title><?php // Call the title from the config
if (isset($page_title)) { 
		echo $page_title; 
} else { 
		echo title($current_page);
} 
?></title>

<?php 
include('../includes/meta.php');

echo FAVICON;

echo css($current_page); 
?>