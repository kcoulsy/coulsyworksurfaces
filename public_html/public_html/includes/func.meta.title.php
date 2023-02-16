<?php
// TOP LEVEL DIRECTORY ONLY
// TOP LEVEL DIRECTORY ONLY
// TOP LEVEL DIRECTORY ONLY

// PAGE TITLES function 70 Characters is optimum but if more use different sentances.---------------------------------------------------------------------
function title($the_page){
	
$title = "Coulsy Worksurfaces &amp; Worktops Installers | Corian Worktop Fabrication";
$s = " | ";
$st = $s.$title;
	
		if($the_page == 'home'){ 
			echo 'Coulsy Worksurfaces &amp; Worktops Installers | Corian Worktop Fabrication | Solid Surfaces';
		}
		elseif($the_page == 'about'){
			echo 'About Coulsy Worksurfaces' . $st;
		}
		elseif($the_page == 'contact'){
			echo 'Contact Us' . $st;
		}
		elseif($the_page == 'corian_solid_surfaces_worktops'){
			echo 'Corian Solid Surfaces' . $st;
		}
		elseif($the_page == 'wooden_timber_worktops'){
			echo 'Wooden &amp; Timber Worktops' . $st;
		}
		elseif($the_page == 'directory'){
			echo 'Fabricators Directory' . $st;
		}
		elseif($the_page == 'experience'){
			echo 'Our Solid Surfaces Experience' . $st;
		}
		elseif($the_page == 'faq'){
			echo 'FAQ' . $st;
		}
		elseif($the_page == 'hanex'){
			echo 'Hanex Solid Surfaces' . $st;
		}
		elseif($the_page == 'himacs'){
			echo 'Hi-Macs Solid Surfaces' . $st;
		}
		elseif($the_page == 'quote'){
			echo 'Solid Surfaces Quote' . $st;
		}
		elseif($the_page == 'staron'){
			echo 'Staron Solid Surfaces' . $st;
		}
		elseif($the_page == 'the_team'){
			echo 'The Team' . $st;
		}
		elseif($the_page == 'tristone'){
			echo 'Tristone solid Surfaces' . $st;
		}
		else {
			echo "Coulsy worksurfaces - Title Required";
		} // else
		
} // function
?>
