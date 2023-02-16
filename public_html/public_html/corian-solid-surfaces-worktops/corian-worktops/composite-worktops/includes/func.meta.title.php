<?php
// KITCHEN WORKTOPS DIRECTORY ONLY
// PAGE TITLES function 70 Characters is optimum but if more use different sentances.---------------------------------------------------------------------

function title($the_page){
	
$title = "To be completed";
	
		if($the_page == 'corian'){ 
			echo 'Corian worktops, Bespoke Corian Worktops';
		}
		elseif($the_page == ''){ 
			echo 'Glass worktops, ' . $title . '';
		}
		elseif($the_page == ''){ 
			echo 'Granite worktops, ' . $title . '';
		}
		elseif($the_page == ''){ 
			echo 'Laminate worktops, ' . $title . '';
		}
		elseif($the_page == ''){ 
			echo 'Quartz worktops, ' . $title . '';
		}
		elseif($the_page == ''){ 
			echo 'Wooden worktops, ' . $title . '';
		}
		else {
			echo "Coulsy Kitchen Worktops - Title Required";
		}
} // function  end /title
?>
