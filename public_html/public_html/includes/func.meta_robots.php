<?php
// TOP LEVEL DIRECTORY ONLY
// TOP LEVEL DIRECTORY ONLY
// TOP LEVEL DIRECTORY ONLY

function metaRobots($the_page){
	
$robots			=		"index, follow";
$norobots		=		"noindex, nofollow";
	
		if($the_page == 'home'){ 
			echo $robots;
		}
		elseif($the_page == 'about'){
			echo $robots;
		}
		elseif($the_page == 'contact'){
			echo $robots;
		}
		elseif($the_page == 'corian_solid_surfaces_worktops'){
			echo $robots;
		}
		elseif($the_page == 'wooden_timber_worktops'){
			echo $robots;
		}
		elseif($the_page == 'directory'){
			echo $robots;
		}
		elseif($the_page == 'experience'){
			echo $robots;
		}
		elseif($the_page == 'faq'){
			echo $robots;
		}
		elseif($the_page == 'hanex'){
			echo $robots;
		}
		elseif($the_page == 'himacs'){
			echo $robots;
		}
		elseif($the_page == 'quote'){
			echo $robots;
		}
		elseif($the_page == 'staron'){
			echo $robots;
		}
		elseif($the_page == 'the_team'){
			echo $robots;
		}
		elseif($the_page == 'tristone'){
			echo $robots;
		}
		else { // to cover any pages that are not listed as a fall back
			echo $norobots;
		} // else
		
} // function
?>
