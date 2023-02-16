<?php
// CORIAN DIRECTORY ONLY
// CORIAN DIRECTORY ONLY
// CORIAN DIRECTORY ONLY

function metaRobots($the_page){
	
$robots			=		"index, follow";
$norobots		=		"noindex, nofollow";

$p = $the_page;
	
		if(($p == 'aberdeen') || ($p == 'aldershot') || ($p == 'bath') || ($p == 'bingley') || ($p == 'bournemouth') || ($p == 'bradford') || ($p == 'bramhope') || ($p == 'brighouse') || ($p == 'brighton') || ($p == 'bristol') || 
		($p == 'cambridge') || ($p == 'chichester') || ($p == 'crawley') || ($p == 'guiseley') || ($p == 'halifax') || ($p == 'harrogate') || ($p == 'horsforth') || ($p == 'huddersfield') ||
		 ($p == 'ilkley') || ($p == 'leeds') || ($p == 'london') || ($p == 'manchester') || ($p == 'otley') || ($p == 'oxford') || ($p == 'reading') || 
		 ($p == 'salisbury') || ($p == 'sheffield') || ($p == 'skipton') || ($p == 'stalbans') || 
		 ($p == 'westminster') || ($p == 'westminster') || ($p == 'wetherby') || ($p == 'wilmslow') || ($p == 'winchester') || ($p == 'worthing') || ($p == 'york')
		  || ($p == 'corian_colours') || ($p == 'corian_about') || ($p == 'corian_news') || ($p == 'corian_portfolio') || ($p == 'corian_products') || ($p == 'corian_quote_online') || ($p == 'corian_trends')) {  
		
		echo $robots;
		
		}
		
		else { // to cover any pages that are not listed as a fall back
			echo $norobots;
		} // else
		
} // function
?>
