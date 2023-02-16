<?php require ('./includes/head.php'); ?>

</head>
        
<body>

<div class="container_24">

    <div class="grid_12">
        <div id="head-logo">
            <a href="<?php echo BASE_URL; ?>"><img src="../../images/coulsy-worksurfaces-logo.gif" alt="Coulsy worktops and worksurfaces corian fabricators installers solid surfaces uk" width="466" height="44" border="0" usemap="#Map" title="Coulsy Worksurfaces - Solid surface specialists.">
        </a>
        </div><!--head-contact-->
    </div><!--grid_24-->
    
    <div class="grid_12">
        <div id="head-contact">
            <h2>T : <span><?php echo PHONE_MAIN; ?></span></h2>
            <p>E : <?php echo EMAIL_MAIN; ?></p>
        </div><!--head-contact-->
	</div><!--grid_12-->

    <div class="grid_24">
        <div id="nav">
            <ul>
                <li><a href="/"<?php if ($current_page == 'home') {echo ' class="current"';} ?> >Home</a></li>
                <li><a href="<?php echo $nav_corian; ?>" <?php if ($current_page == 'corian_solid_surfaces_worktops') {echo ' class="current"';} ?> >Corian</a></li>
                <li><a href="<?php echo $nav_himacs; ?>" <?php if ($current_page == 'himacs') {echo ' class="current"';} ?> >LG Hi-Macs</a></li>
                <li><a href="<?php echo $nav_staron; ?>" <?php if ($current_page == 'staron') {echo ' class="current"';} ?> >Staron</a></li>
                <li><a href="<?php echo $nav_tristone; ?>" <?php if ($current_page == 'tristone') {echo ' class="current"';} ?> >Tristone</a></li>
                <li><a href="<?php echo $nav_contact; ?>" <?php if ($current_page == 'contact') {echo ' class="current"';} ?> >Contact</a></li>
            </ul>
        </div><!--nav-->
    </div><!--grid_24-->
    
    
<?php if ($current_page == 'corian_solid_surfaces_worktops') echo "   
    
        <div class=\"grid_24\">
        <div id=\"nav\">
            <ul>
                <li><a href=\"$nav_corian_quote_online\">Quote</a></li>
                <li><a href=\"$nav_corian_colours\">Colours</a></li>
                <li><a href=\"$nav_corian_products\">Products</a></li>
                <li><a href=\"$nav_corian_worktops\">Worktops</a></li>
                <li><a href=\"$nav_corian_trends\">Trends</a></li>
                <li><a href=\"$nav_corian_about\">Corian</a></li>
                <li><a href=\"$nav_corian_news\">News / Blog</a></li>
                <li><a href=\"$nav_corian_portfolio\">Portfolio</a></li>				
            </ul>
        </div><!--nav-->
    </div><!--grid_24-->
	";
	 ?> 
     
<?php if ($current_page == 'himacs') echo "   
    
        <div class=\"grid_24\">
        <div id=\"nav\">
            <ul>
                <li>HiMacs Products</li>
                <li>HiMacs Worktops</li>
                <li>HiMacs Trends</li>
                <li>About HiMacs</li>
                <li>HiMacs Portfolio</li>
            </ul>
        </div><!--nav-->
    </div><!--grid_24-->
	";
	 ?> 
     
<?php if ($current_page == 'wooden_timber_worktops') echo "   
    
        <div class=\"grid_24\">
        <div id=\"nav\">
            <ul>
                <li><a href=\"$url_timber_worktops\">Timber Worktops</a></li>
                <li>Timber Worktop Care</li>
                <li>About Timber Woktops</li>
                <li>Timber Portfolio</li>
            </ul>
        </div><!--nav-->
    </div><!--grid_24-->
	";
	 ?> 
     
<?php if ($current_page == 'hanex') echo "   
    
        <div class=\"grid_24\">
        <div id=\"nav\">
            <ul>
                <li>Hanex Products</li>
                <li>Hanex Worktops</li>
                <li>Hanex Trends</li>
                <li>About Hanex</li>
                <li>Hanex Portfolio</li>
            </ul>
        </div><!--nav-->
    </div><!--grid_24-->
	";
	 ?> 
     
<?php if ($current_page == 'staron') echo "   
    
        <div class=\"grid_24\">
        <div id=\"nav\">
            <ul>
                <li>Staron Products</li>
                <li>Staron Worktops</li>
                <li>Staron Trends</li>
                <li>About Staron</li>
                <li>Staron Portfolio</li>
            </ul>
        </div><!--nav-->
    </div><!--grid_24-->
	";
	 ?> 
     
<?php if ($current_page == 'tristone') echo "   
    
        <div class=\"grid_24\">
        <div id=\"nav\">
            <ul>
                <li>Tristone Products</li>
                <li>Tristone Worktops</li>
                <li>Tristone Trends</li>
                <li>About Tristone</li>
                <li>Tristone Portfolio</li>
            </ul>
        </div><!--nav-->
    </div><!--grid_24-->
	";
	 ?> 
  
