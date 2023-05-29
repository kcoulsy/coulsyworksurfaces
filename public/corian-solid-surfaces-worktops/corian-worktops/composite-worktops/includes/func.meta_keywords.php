<?php
// KITCHEN WORKTOPS DIRECTORY ONLY
function metaKeywords($the_page){
$keywords = "Keywords to be completed";
	
		if($the_page == 'composite_worktops'){ 
			echo 'Composte worktops, ' . $keywords . '';
		}
		elseif($the_page == 'glass_worktops'){ 
			echo 'Glass worktops, ' . $keywords . '';
		}
		elseif($the_page == 'granite_worktops'){ 
			echo 'Granite worktops, ' . $keywords . '';
		}
		elseif($the_page == 'laminate_worktops'){ 
			echo 'Laminate worktops, ' . $keywords . '';
		}
		elseif($the_page == 'quartz_worktops'){ 
			echo 'Quartz worktops, ' . $keywords . '';
		}
		elseif($the_page == 'wooden_worktops'){ 
			echo 'Wooden worktops, ' . $keywords . '';
		}
		else {
			echo "Coulsy Kitchen Worktops - Keywords Required";
		}
} // function end / metaKeywords
?>
