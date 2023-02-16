<?php 
// Page scripts for the top level directory pages
function pageScriptsFooter($the_page){
	
$called = '';
$not_called = "\n<!--script may be required-->\n	<!--This page has not been set in the func.pageScriptsFooter file-->\n<!--end / script may be required-->\n";

$p = $the_page;
	
		if(($p == 'aberdeen') || ($p == 'aldershot') || ($p == 'bath') || ($p == 'bingley') || ($p == 'bournemouth') || ($p == 'bradford') || ($p == 'bramhope') || ($p == 'brighouse') || ($p == 'brighton') || ($p == 'bristol') || 
		($p == 'cambridge') || ($p == 'chichester') || ($p == 'crawley') || ($p == 'guiseley') || ($p == 'halifax') || ($p == 'harrogate') || ($p == 'horsforth') || ($p == 'huddersfield') ||
		 ($p == 'ilkley') || ($p == 'leeds') || ($p == 'london') || ($p == 'manchester') || ($p == 'otley') || ($p == 'oxford') || ($p == 'reading') || 
		 ($p == 'salisbury') || ($p == 'sheffield') || ($p == 'skipton') || ($p == 'stalbans') || 
		 ($p == 'westminster') || ($p == 'westminster') || ($p == 'wetherby') || ($p == 'wilmslow') || ($p == 'winchester') || ($p == 'worthing') || ($p == 'york')
		  || ($p == 'corian_colours') || ($p == 'corian_about') || ($p == 'corian_news') || ($p == 'corian_portfolio') || ($p == 'corian_products') || ($p == 'corian_quote_online') || ($p == 'corian_trends')) {  
		
			echo $called;
			}
			else {
				echo $not_called;
				}
} // if
?>
