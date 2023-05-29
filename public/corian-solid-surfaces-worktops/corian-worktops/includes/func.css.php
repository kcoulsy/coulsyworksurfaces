<?php
// CSS FUNTIONS FOR KITCHENS DIR ONLY
// CSS FUNTIONS FOR KITCHENS DIR ONLY
// CSS FUNTIONS FOR KITCHENS DIR ONLY

function css($the_page){
	
// main style
$main_layout		=	'
<link href="../css/reset.css" rel="stylesheet" type="text/css" />
<link href="../css/text.css" rel="stylesheet" type="text/css" />
<link href="../css/default.css" rel="stylesheet" type="text/css" />
<link href="../css/960_24_col.css" rel="stylesheet" type="text/css" />

<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>

<script src="scripts/custom.js"></script>
  
<script type="text/javascript" src="/scripts/jquery.cycle.all.min.js"></script>

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

if ($the_page == ('composite_worktops') || $the_page == ('glass_worktops') || $the_page == ('granite_worktops') || $the_page == ('laminate_worktops') 
|| $the_page == ('quartz_worktops') || $the_page == ('wooden_worktops')){
		echo $main_layout;
		}
	else {
		echo $main_layout;
		echo "\n<!--other styles may be required-->\n	<!--This page has not been set in the func.css file-->\n<!--end / other styles may be required-->\n";
		}
} // if
?>