<?php 
// Page scripts for the top level directory pages
function pageScriptsFooter($the_page){
	
$notRequired = '
<!--footer script not required-->
<!--end / footer script not required-->
';


// Pretty photo script
$prettyPhoto = '
<!--Pretty photo script-->
	<script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
	$("a[rel^=\'prettyPhoto\']").prettyPhoto();
	});
	</script>
<!--END / Pretty photo script -->
';

// This scripts allows the gallery to be finely tweeked
$galleryFineTweek = '
<!--Pretty photo fine tweek script-->
<script type="text/javascript" charset="utf-8">
$(document).ready(function(){
	$("area[rel^=\'prettyPhoto\']").prettyPhoto();
	
	$(".gallery:first a[rel^=\'prettyPhoto\']").prettyPhoto({animation_speed:\'normal\',theme:\'light_square\',slideshow:3000, autoplay_slideshow: true});
	$(".gallery:gt(0) a[rel^=\'prettyPhoto\']").prettyPhoto({animation_speed:\'fast\',slideshow:10000, hideflash: true});

	$("#custom_content a[rel^=\'prettyPhoto\']:first").prettyPhoto({
		custom_markup: \'<div id="map_canvas" style="width:260px; height:265px"></div>\',
		changepicturecallback: function(){ initialize(); }
	});

	$("#custom_content a[rel^=\'prettyPhoto\']:last").prettyPhoto({
		custom_markup: \'<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>\',
		changepicturecallback: function(){ _bsap.exec(); }
	});
});
</script>
<!--END / Pretty photo fine tweek script-->
';
	
if ($the_page == ('home')){
	echo '';
	}
	
	elseif($the_page == ('kitchen_storage_solutions')) {
		echo $prettyPhoto;
		echo $galleryFineTweek;
		}
		elseif ($the_page == ('about') || $the_page == ('kitchen_trends') || $the_page == ('experience') || $the_page == ('directory') || $the_page == ('faq') || 
		$the_page == ('news') || $the_page == ('contact')){
		echo $notRequired;
		}
		else {
			echo "\n<!--script may be required-->\n	<!--This page has not been set in the func.pageScriptsFooter file-->\n<!--end / script may be required-->\n";
			}
} // if
?>
