<?php
// TOP LEVEL DIRECTORY ONLY
// TOP LEVEL DIRECTORY ONLY
// TOP LEVEL DIRECTORY ONLY

function metaKeywords($the_page){
	
$keywords = ', Coulsy Worksurfaces &amp; Worktops Installers, Corian Worktop Fabrication, Solid Surfaces, kitchen worktops';	
	
		if($the_page == 'home'){ 
			echo 'Coulsy Worksurfaces &amp; Worktops Installers | Corian Worktop Fabrication | Solid Surfaces';
		}
		elseif($the_page == 'about'){
			echo 'About Coulsy Worksurfaces' . $keywords;
		}
		elseif($the_page == 'contact'){
			echo 'Contact Us' . $keywords;
		}
		elseif($the_page == 'corian_solid_surfaces_worktops'){
			echo 'Corian Solid Surfaces' . $keywords;
		}
		elseif($the_page == 'wooden_timber_worktops'){
			echo 'wooden worktops timber worktops fitting' . $keywords;
		}
		elseif($the_page == 'directory'){
			echo 'Fabricators Directory' . $keywords;
		}
		elseif($the_page == 'experience'){
			echo 'Our Solid Surfaces Experience' . $keywords;
		}
		elseif($the_page == 'faq'){
			echo 'FAQ' . $keywords;
		}
		elseif($the_page == 'hanex'){
			echo 'Hanex Solid Surfaces' . $keywords;
		}
		elseif($the_page == 'himacs'){
			echo 'Hi-Macs Solid Surfaces' . $keywords;
		}
		elseif($the_page == 'quote'){
			echo 'Solid Surfaces Quote' . $keywords;
		}
		elseif($the_page == 'staron'){
			echo 'Staron Solid Surfaces' . $keywords;
		}
		elseif($the_page == 'the_team'){
			echo 'The Team' . $keywords;
		}
		elseif($the_page == 'tristone'){
			echo 'Tristone solid Surfaces' . $keywords;
		}
		else { // to cover any pages that are not listed as a fall back
			echo 'Check meta file - missing keywords data';	
		} // else
		
} // function
?>
