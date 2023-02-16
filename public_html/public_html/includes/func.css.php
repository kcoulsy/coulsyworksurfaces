<?php
// this is the css function top level directory pages

function css($the_page){
	
// main style
$main_layout		=	'
<!--Main Styles-->
<link href="./css/reset.css" rel="stylesheet" type="text/css">
<link href="./css/text.css" rel="stylesheet" type="text/css">
<link href="./css/default.css" rel="stylesheet" type="text/css">
<link href="./css/960_24_col.css" rel="stylesheet" type="text/css">
';

$scripts 		=	'
<!--scripts-->
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
<script type="text/javascript" src="/scripts/jquery.cycle.all.min.js"></script>


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
      speed:  2550,
      timeout: 5000, 
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



if ($the_page == ('about') || $the_page == ('experience') || $the_page == ('directory') || $the_page == ('faq') || 
		$the_page == ('corian_news') || $the_page == ('corian') || $the_page == ('') || $the_page == ('kitchen_trends')){
		echo $main_layout;
		echo $ieFallBack;

		}
		elseif($the_page == ('contact')) {
			echo $main_layout.$ieFallBack.'
			<link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css">
			
			<!-- jQuery (necessary for Bootstrap\'s JavaScript plugins) -->
				<script src="https://code.jquery.com/jquery.js"></script>
				
			<!-- Include all compiled plugins (below), or include individual files as needed -->
				<script src="/scripts/bootstrap.min.js"></script>

			<script type="text/javascript" src="/scripts/jqBootstrapValidation.js"></script>
			';
			}
		elseif($the_page == ('kitchens')) {
		echo $main_layout;
		echo $scripts;
		echo $ieFallBack;
		echo $custom;
		echo '
		<link rel="stylesheet" type="text/css" href="./css/jquery.kwicks-2.2.0.css" />
        <style type="text/css">
            .kwicks {
                width: 930px;
                height: 333px;
            }
            .kwicks > li {
                height: 333px;
                background-color: #fff;
                /* overridden by kwicks but good for when JavaScript is disabled */
                margin-left: 5px;
                float: left;
            }
        </style>
		
                <script src="scripts/jquery-1.8.1.min.js" type="text/javascript"></script>
                <script src="scripts/jquery.kwicks-2.2.0.js" type="text/javascript"></script>
                <script src="scripts/jquery.kwicks.min.js" type="text/javascript"></script>
        
                <script type="text/javascript">
                    $(function() {
                        $(\'.kwicks\').kwicks({
                            minSize: 100,
                            behavior: \'slideshow\'
                        });
                    });
                </script>
		';
		}
		elseif($the_page == ('home')) {
			echo $main_layout . $scripts . $slider . $custom . $ieFallBack;
			}
		
		elseif($the_page == ('corian_products')) {
			echo $main_layout . $scripts . $slider . $custom . $ieFallBack;
			echo '
			<link rel="stylesheet" type="text/css" href="./css/jquery.kwicks-2.2.0.css" />
			<style type="text/css">
				.kwicks {
					width: 930px;
					height: 400px;
				}
				.kwicks > li {
					height: 400px;
					background-color: #fff;
					/* overridden by kwicks but good for when JavaScript is disabled */
					margin-left: 5px;
					float: left;
				}
			</style>
			
					<script src="scripts/jquery-1.8.1.min.js" type="text/javascript"></script>
					<script src="scripts/jquery.kwicks-2.2.0.js" type="text/javascript"></script>
					<script src="scripts/jquery.kwicks.min.js" type="text/javascript"></script>
			
					<script type="text/javascript">
						$(function() {
							$(\'.kwicks\').kwicks({
								minSize: 100,
								behavior: \'slideshow\'
							});
						});
					</script>
			';
		}
		elseif($the_page == ('corian_worktops')) {
			echo $main_layout . $scripts . $custom . $ieFallBack;
			echo '
			<link rel="stylesheet" type="text/css" href="./css/jquery.kwicks-2.2.0.css" />
			<style type="text/css">
				.kwicks {
					width: 930px;
					height: 333px;
				}
				.kwicks > li {
					height: 333px;
					background-color: #fff;
					/* overridden by kwicks but good for when JavaScript is disabled */
					margin-left: 5px;
					float: left;
				}
			</style>
			
					<script src="scripts/jquery-1.8.1.min.js" type="text/javascript"></script>
					<script src="scripts/jquery.kwicks-2.2.0.js" type="text/javascript"></script>
					<script src="scripts/jquery.kwicks.min.js" type="text/javascript"></script>
			
					<script type="text/javascript">
						$(function() {
							$(\'.kwicks\').kwicks({
								minSize: 100,
								behavior: \'slideshow\'
							});
						});
					</script>
			';
		}
		elseif($the_page == ('kitchen_storage_solutions')) {
			echo $main_layout . $ieFallBack;
			echo "
<script src=\"scripts/jquery-1.7.1.js\" type=\"text/javascript\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/prettyPhoto.css\" />
<script src=\"scripts/jquery.prettyPhoto.js\" type=\"text/javascript\"></script>
";
		}
	else {
		echo $main_layout . $ieFallBack;
		echo "\n<!--other styles may be required-->\n	<!--This page has not been set in the func.css file-->\n<!--end / other styles may be required-->\n";
		}
} // if
?>