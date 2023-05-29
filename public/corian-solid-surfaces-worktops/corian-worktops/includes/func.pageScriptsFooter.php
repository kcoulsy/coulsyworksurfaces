<?php 
// Page scripts for the top level directory pages
function pageScriptsFooter($the_page){
	
$notRequired = '
<!--footer script not required-->
<!--end / footer script not required-->
';
	
if ($the_page == ('home')){
			echo '';
			 } elseif 
				($the_page == ('about') || $the_page == ('kitchen_trends') || $the_page == ('experience') || $the_page == ('directory') || $the_page == ('faq') || 
		$the_page == ('news') || $the_page == ('contact')){
			echo $notRequired;
			}
			else {
				echo "\n<!--script may be required-->\n	<!--This page has not been set in the func.pageScriptsFooter file-->\n<!--end / script may be required-->\n";
				}
} // if
?>
