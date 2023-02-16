<?php
// KITCHEN WORKTOPS DIRECTORY ONLY
// PAGE TITLES function 70 Characters is optimum but if more use different sentances.---------------------------------------------------------------------

function title($the_page){
	
$title = "To be completed";
	
		if($the_page == 'composte_worktops'){ 
			echo 'Composte worktops, ' . $title . '';
		}
		elseif($the_page == 'glass_worktops'){ 
			echo 'Glass worktops, ' . $title . '';
		}
		elseif($the_page == 'granite_worktops'){ 
			echo 'Granite worktops, ' . $title . '';
		}
		elseif($the_page == 'laminate_worktops'){ 
			echo 'Laminate worktops, ' . $title . '';
		}
		elseif($the_page == 'quartz_worktops'){ 
			echo 'Quartz worktops, ' . $title . '';
		}
		elseif($the_page == 'wooden_worktops'){ 
			echo 'Wooden worktops, ' . $title . '';
		}
		else {
			echo "Coulsy Kitchen Worktops - Title Required";
		}
} // function  end /title
?>
