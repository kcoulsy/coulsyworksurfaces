<?php 
// CORIAN DIR ONLY
// CORIAN DIR ONLY
// CORIAN DIR ONLY

require ('./includes/head.php'); 
?>

</head>
        
<body>

<div class="container_24">

    <div class="grid_12">
        <div id="head-logo">
        <a href="/"><img src="../../../images/coulsy-worksurfaces-logo.gif" alt="Coulsy worktops and worksurfaces corian fabricators installers uk" width="466" height="44" border="0" usemap="#Map" title="Corian Solid Surfaces &amp; Worktops">
        <map name="Map">
            <area shape="rect" coords="411,3,435,35" href="../../../corian.php" alt="bespoke corian <?php echo $current_area; ?>">
        </map>
        </a>
        </div><!--head-contact-->
    </div><!--grid_24-->
    
    <div class="grid_12">
        <div id="head-contact">
            <h2>T : <span><?php echo PHONE_MAIN; ?></span></h2>
            <p>E : <?php echo EMAIL_MAIN; ?></p>
            <p><?php echo "Bespoke Corian " . $current_area; ?></p>
        </div><!--head-contact-->
	</div><!--grid_12-->
      
  
    <div class="grid_24">
        <div id="nav">
            <ul>
                <li><a href="/"<?php if ($current_page == 'home') {echo ' class="current"';} ?> >Home</a></li>
                <li><a href="<?php echo $nav_corian; ?>" <?php echo ' class="current"' ?> >Corian</a></li>
                <li><a href="<?php echo $nav_himacs; ?>" <?php if ($current_page == 'himacs') {echo ' class="current"';} ?> >LG Hi-Macs</a></li>
                <li><a href="<?php echo $nav_staron; ?>" <?php if ($current_page == 'staron') {echo ' class="current"';} ?> >Staron</a></li>
                <li><a href="<?php echo $nav_tristone; ?>" <?php if ($current_page == 'tristone') {echo ' class="current"';} ?> >Tristone</a></li>
                <li><a href="<?php echo $nav_contact; ?>" <?php if ($current_page == 'contact') {echo ' class="current"';} ?> >Contact</a></li>
            </ul>
        </div><!--nav-->
    </div><!--grid_24-->
        
    <div class="grid_24">
        <div id="nav">
            <ul>
                <li><a href="<?php echo $nav_corian_quote_online; ?>" <?php if ($current_page == 'corian_quote_online') {echo ' class="current"';} ?> >Quote</a></li>
                <li><a href="<?php echo $nav_corian_colours; ?>" <?php if ($current_page == 'corian_colours') {echo ' class="current"';} ?> >Colours</a></li>
                <li><a href="<?php echo $nav_corian_products; ?>" <?php if ($current_page == 'corian_products') {echo ' class="current"';} ?> >Products</a></li>
                <li><a href="<?php echo $nav_corian_worktops; ?>" <?php if ($current_page == 'corian_worktops') {echo ' class="current"';} ?> >Worktops</a></li>
                <li><a href="<?php echo $nav_corian_trends; ?>" <?php if ($current_page == 'corian_trends') {echo ' class="current"';} ?> >Trends</a></li>
                <li><a href="<?php echo $nav_corian_about; ?>" <?php if ($current_page == 'corian_about') {echo ' class="current"';} ?> >About Corian</a></li>
                <li><a href="<?php echo $nav_corian_news; ?>" <?php if ($current_page == 'corian_news') {echo ' class="current"';} ?> >News / Blog</a></li>
                <li><a href="<?php echo $nav_corian_portfolio; ?>" <?php if ($current_page == 'corian_portfolio') {echo ' class="current"';} ?> >Portfolio</a></li>
            </ul>
        </div><!--nav-->
    </div><!--grid_24-->
    
    <?php include('./includes/form-contact.php');
?>
