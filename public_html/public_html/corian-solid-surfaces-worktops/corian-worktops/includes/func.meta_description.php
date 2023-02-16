<?php
// KITCHEN WORKTOPS DIRECTORY ONLY
function metaDescription($the_page){
	
$desc = 'Coulsy Kitchens';
	
$desc = "Descriptions to be completed";

		if($the_page == 'composite_worktops'){ 
			echo 'Composte worktops, ' . $desc . '';
		}
		elseif($the_page == 'glass_worktops'){ 
			echo 'Glass worktops, ' . $desc . '';
		}
		elseif($the_page == 'granite_worktops'){ 
			echo 'Granite worktops, ' . $desc . '';
		}
		elseif($the_page == 'laminate_worktops'){ 
			echo 'Laminate worktops, ' . $desc . '';
		}
		elseif($the_page == 'quartz_worktops'){ 
			echo 'Quartz worktops, ' . $title . '';
		}
		elseif($the_page == 'wooden_worktops'){ 
			echo 'Wooden worktops, ' . $desc . '';
		}
		else {
			echo "Coulsy Kitchen Worktops - Description Required";
		}
}
?>