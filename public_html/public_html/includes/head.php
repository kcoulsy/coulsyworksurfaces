<?php echo DOCTYPE; ?>

<head>

<title><?php echo title($current_page); ?></title>

<?php 
include('./includes/meta.php');

echo FAVICON;

echo css($current_page); 
?>