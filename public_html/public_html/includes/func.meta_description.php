<?php
// TOP LEVEL DIRECTORY ONLY
// TOP LEVEL DIRECTORY ONLY
// TOP LEVEL DIRECTORY ONLY

function metaDescription($the_page){
	
$desc = ' | Coulsy Worksurfaces &amp; Worktops Installers | Corian Worktop Fabrication';
	
		if($the_page == 'home'){ 
			echo 'Coulsy Worksurfaces &amp; Worktops Installers | Corian Worktop Fabrication | Solid Surfaces';
		}
		elseif($the_page == 'about'){
			echo 'About Coulsy Worksurfaces' . $desc;
		}
		elseif($the_page == 'contact'){
			echo 'Contact Us' . $desc;
		}
		elseif($the_page == 'corian_solid_surfaces_worktops'){
			echo 'Corian Solid Surfaces' . $desc;
		}
		elseif($the_page == 'wooden_timber_worktops'){
			echo 'Wooden worktops and Timber worktops fitting' . $desc;
		}
		elseif($the_page == 'directory'){
			echo 'Fabricators Directory' . $desc;
		}
		elseif($the_page == 'experience'){
			echo 'Our Solid Surfaces Experience' . $desc;
		}
		elseif($the_page == 'faq'){
			echo 'FAQ' . $desc;
		}
		elseif($the_page == 'hanex'){
			echo 'Hanex Solid Surfaces' . $desc;
		}
		elseif($the_page == 'himacs'){
			echo 'Hi-Macs Solid Surfaces' . $desc;
		}
		elseif($the_page == 'quote'){
			echo 'Solid Surfaces Quote' . $desc;
		}
		elseif($the_page == 'staron'){
			echo 'Staron Solid Surfaces' . $desc;
		}
		elseif($the_page == 'the_team'){
			echo 'The Team' . $desc;
		}
		elseif($the_page == 'tristone'){
			echo 'Tristone solid Surfaces' . $desc;
		}
		else { // to cover any pages that are not listed as a fall back
			echo 'Check meta file - missing description data';	
		} // else
		
} // function
?>