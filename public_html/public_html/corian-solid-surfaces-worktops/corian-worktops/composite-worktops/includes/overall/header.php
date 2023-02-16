<?php require ('../../../../kitchen-worktops/composite-worktops/includes/overall/includes/head.php'); ?>

</head>
        
<body>

<div class="container_24">

    <div class="grid_12">
        <div id="head-logo">
        <a href="/"><img src="../../../../kitchen-worktops/composite-worktops/images/coulsy-kitchens-logo.gif" alt="Coulsy Kitchens - fantastic designer kitchens at affordable prices" width="442" height="39" border="0" usemap="#Map" title="Coulsy Kitchens - fantastic designer kitchens at affordable prices">
        <map name="Map">
            <area shape="rect" coords="411,3,435,35" href="../../../../kitchen-worktops/composite-worktops/showrooms.php" alt="bespoke kitchen designers">
        </map>
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
                <li><a href="/"<?php if ($current_page == 'home') {echo 'class="current"';} ?> >Home</a></li>
                <li><a href="<?php echo $nav_kitchens; ?>" <?php if ($current_page == 'kitchens') {echo 'class="current"';} ?> >Kitchens</a></li>
                <li><a href="<?php echo $nav_kitchen_doors; ?>" <?php if ($current_page == 'kitchen_doors') {echo 'class="current"';} ?> >Kitchen Doors</a></li>
                <li><a href="<?php echo $nav_kitchen_carcases; ?>" <?php if ($current_page == 'kitchen_carcases') {echo 'class="current"';} ?> >Kitchen Carcases</a></li>
                <li><a href="<?php echo $nav_kitchen_worktops; ?>" <?php if ($current_page == 'kitchen_worktops') {echo 'class="current"';} ?> >Worktops</a></li>
                <li><a href="<?php echo $nav_accessories; ?>" <?php if ($current_page == 'accessories') {echo 'class="current"';} ?> >Accessories</a></li>
                <li><a href="<?php echo $nav_kitchen_trends; ?>" <?php if ($current_page == 'kitchen_trends') {echo 'class="current"';} ?> >Kitchen Trends</a></li>
                <li><a href="<?php echo $nav_about; ?>" <?php if ($current_page == 'about') {echo 'class="current"';} ?> >About</a></li>
                <li><a href="<?php echo $nav_contact; ?>" <?php if ($current_page == 'contact') {echo 'class="current"';} ?> >Contact</a></li>
            </ul>
        </div><!--nav-->
    </div><!--grid_24-->

  
