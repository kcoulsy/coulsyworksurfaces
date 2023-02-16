<?php
// AREAS DIRECTORY ONLY
// PAGE TITLES function 70 Characters is optimum but if more use different sentances.---------------------------------------------------------------------

function title($the_page){

$p = $the_page;
	
		if(($p == 'aberdeen') || ($p == 'aldershot') || ($p == 'bath') || ($p == 'bingley') || ($p == 'bournemouth') || ($p == 'bradford') || ($p == 'bramhope') || ($p == 'brighouse') || ($p == 'brighton') || ($p == 'bristol') || 
		($p == 'cambridge') || ($p == 'chichester') || ($p == 'crawley') || ($p == 'guiseley') || ($p == 'halifax') || ($p == 'harrogate') || ($p == 'horsforth') || ($p == 'huddersfield') ||
		 ($p == 'ilkley') || ($p == 'leeds') || ($p == 'london') || ($p == 'manchester') || ($p == 'otley') || ($p == 'oxford') || ($p == 'reading') || 
		 ($p == 'salisbury') || ($p == 'sheffield') || ($p == 'skipton') || ($p == 'stalbans') || 
		 ($p == 'westminster') || ($p == 'westminster') || ($p == 'wetherby') || ($p == 'wilmslow') || ($p == 'winchester') || ($p == 'worthing') || ($p == 'york')
		  || ($p == 'corian_colours') || ($p == 'corian_about') || ($p == 'corian_news') || ($p == 'corian_portfolio') || ($p == 'corian_products') || ($p == 'corian_quote_online') || ($p == 'corian_trends')) {  
		
			$p = ucfirst($the_page);		
			echo PRODUCT . ' Worktops ' . $p . ' | ' . PRODUCT . ' fabricators ' . $p . ' | Designer ' . PRODUCT . ' in ' . $p . ' | ' . PRODUCT . ' ' . $p;
		}

		else {
			echo PRODUCT . ' Worktops ' . $p . ' | ' . PRODUCT . ' fabricators ' . $p . ' | Designer ' . PRODUCT . ' in ' . $p . ' | ' . PRODUCT . ' ' . $p . ' Check func.meta.title';
		}
} // function  end /title
?>
