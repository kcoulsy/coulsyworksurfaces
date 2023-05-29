<?php
// CSS FUNTIONS FOR SHOWROOMS DIR ONLY
// CSS FUNTIONS FOR SHOWROOMS DIR ONLY
// CSS FUNTIONS FOR SHOWROOMS DIR ONLY

function css($the_page){
	
	$p = $the_page;
	
// main style
$main_layout		=	'
<link href="../../css/reset.css" rel="stylesheet" type="text/css" />
<link href="../../css/text.css" rel="stylesheet" type="text/css" />
<link href="../../css/default.css" rel="stylesheet" type="text/css" />
<link href="../../css/960_24_col.css" rel="stylesheet" type="text/css" />

<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>

<script src="scripts/custom.js"></script>
  
<script type="text/javascript" src="/scripts/jquery.cycle.all.min.js"></script>

<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css">

<!-- jQuery (necessary for Bootstrap\'s JavaScript plugins) -->
	<script src="https://code.jquery.com/jquery.js"></script>
	
<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./scripts/bootstrap.min.js"></script>


<script type="text/javascript" src="./scripts/jqBootstrapValidation.js"></script>

';

$scripts 		=	'
<!--scripts-->
<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
<script type="text/javascript" src="./scripts/jquery.cycle.all.min.js"></script>
';

$ieFallBack		=	'
<!--[if lt IE 7]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
<![endif]-->

<!--[if lt IE 8]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
<![endif]-->

<!--[if lt IE 9]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->

<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
';

$slider		=	"
<!--slider-->
<script type=\"text/javascript\">
$(document).ready(function(){
  /* Dots Slider 1 */
  $(function(){
    $('#imageSlider')
    .after('<div id=\"imageSliderNav\">')
    .cycle({
      fx:  'fade',
      speed:  2000,
      timeout: 3500, 
      pager:  '#imageSliderNav'
    });
  });
});
</script>
";

$custom		=	"
<!--custom-->
<script src=\"scripts/custom.js\"></script>
";


		if(($p == 'bingley') || ($p == 'bradford') || ($p == 'bramhope') || ($p == 'brighouse') || ($p == 'guiseley') || ($p == 'halifax') || ($p == 'harrogate') || ($p == 'horsforth') || 
		($p == 'huddersfield') || ($p == 'ilkley') || ($p == 'leeds') || ($p == 'london') || ($p == 'manchester') || ($p == 'otley') || ($p == 'skipton') || ($p == 'wilmslow') ||
		 ($p == 'york') || ($p == 'wetherby') || ($p == 'sheffield') || ($p == 'corian_colours') || ($p == 'corian_about') || ($p == 'corian_news') || ($p == 'corian_portfolio') || 
		 ($p == 'corian_products') || ($p == 'corian_trends')) { 
		
			echo $main_layout . $scripts . $slider . $custom . $ieFallBack;
			
		} elseif ($p == 'corian_quote_online') {
		echo $main_layout . $ieFallBack.'<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> <!-- or use local jquery -->
		
		    <script>
      $(function () { $("input,select,textarea,text").not("[type=submit]").jqBootstrapValidation(); } );
    </script>

		
		
		';
		
		} else {
		echo $main_layout . $scripts . $slider . $custom . $ieFallBack;
		}
} // if
?>