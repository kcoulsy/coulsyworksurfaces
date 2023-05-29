<?php
// KITCHEN WORKTOPS DIRECTORY ONLY
function metaRobots($the_page){
	
$robots			=		"index, follow";
$robots_no		=		"noindex, nofollow";
	
		if($the_page == 'composite_worktops'){ 
			echo $robots;
		}
		elseif($the_page == 'glass_worktops'){ 
			echo $robots;
		}
		elseif($the_page == 'granite_worktops'){ 
			echo $robots;
		}
		elseif($the_page == 'laminate_worktops'){ 
			echo $robots;
		}
		elseif($the_page == 'quartz_worktops'){ 
			echo $robots;
		}
		elseif($the_page == 'wooden_worktops'){ 
			echo $robots;
		}
else { // to cover any pages that are not listed as a fall back
			echo $robots_no;
	} // else
	
}
?>
