<?php
// KITCHEN WORKTOPS DIRECTORY ONLY
function metaRobots($the_page){
	
$robots			=		"index, follow";
$robots_no		=		"noindex, nofollow";
	
		if($the_page == 'corian'){ 
			echo $robots;
		}
		elseif($the_page == ''){ 
			echo $robots;
		}
		elseif($the_page == ''){ 
			echo $robots;
		}
		elseif($the_page == ''){ 
			echo $robots;
		}
		elseif($the_page == ''){ 
			echo $robots;
		}
		elseif($the_page == ''){ 
			echo $robots;
		}
else { // to cover any pages that are not listed as a fall back
			echo $robots_no;
	} // else
	
}
?>
