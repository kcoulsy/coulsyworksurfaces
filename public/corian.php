<?php
$url = 'http://' . $_SERVER['HTTP_HOST'];            // Get the server
$url .= rtrim(dirname($_SERVER['PHP_SELF']), '/\\'); // Get the current directory
$url .= '/corian-solid-surfaces-worktops.php';            // <-- Your relative path
header('Location: ' . $url, true, 302);              // Use either 301 or 302

include ('./includes/config.php');
$current_page = 'corian'; 
include('./includes/overall/header.php');
?>

<div class="grid_24">
  <div class="content">
    <h1 style="font-size:80px; line-height:80px;">Corian</h1>
    <br>
    <h2>Solid Surfaces</h2>
    <br>
    <h3>Installer Areas</h3>
  </div>
</div>

<div class="grid_24">
    <div class="content">
		<h3 class="cta">CALL <?php echo PHONE_MAIN; ?> TO BOOK YOUR APPOINTMENT...</h3>
        <h3>Here at <?php echo WEBSITE_NAME; ?> we pride ourselves on providing luxury bespoke fabricated <a href="corian/corian-quote-online.php">Corian</a> solid surfaces.</h3>
        <p>If your area is not listed, please call <?php echo PHONE_MAIN; ?></p>
        <ul>
            <li><a href="corian/bingley.php">Bingley Corian - <em> Bespoke Corian in Bingley</em></a></li>
            <li><a href="corian/bradford.php">Bradford Corian - <em> Bespoke Corian in Bradford</em></a></li>
            <li><a href="corian/halifax.php">Halifax Corian - <em> Bespoke Corian in Halifax</em></a></li>
            <li><a href="corian/harrogate.php">Harrogate Corian - <em> Bespoke Corian in Harrogate</em></a></li>
            <li><a href="corian/huddersfield.php">Huddersfield Corian - <em> Bespoke Corian in Huddersfield</em></a></li>
            <li><a href="corian/brighouse.php">Brighouse Corian - <em> Bespoke Corian in Brighouse</em></a></li>
            <li><a href="corian/bramhope.php">Bramhope Corian - <em> Bespoke Corian in Bramhope</em></a></li>
            <li><a href="corian/guiseley.php">Guiseley Corian - <em> Bespoke Corian in Guiseley</em></a></li>
            <li><a href="corian/horsforth.php">Horsforth Corian - <em> Bespoke Corian in Horsforth</em></a></li>
            <li><a href="corian/ilkley.php">Ilkley Corian - <em> Bespoke Corians in Ilkley</em></a></li>
            <li><a href="corian/leeds.php">Leeds Corian - <em> Bespoke Corian in Leeds</em></a></li>
            <li><a href="corian/london.php">London Corian - <em> Bespoke Corian in London</em></a></li>
            <li><a href="corian/manchester.php">Manchester Corian - <em> Bespoke Corian in Manchester</em></a></li>
            <li><a href="corian/otley.php">Otley Corian - <em> Bespoke Corian in Otley</em></a></li>
            <li><a href="corian/skipton.php">Skipton Corian - <em> Bespoke Corian in Skipton</em></a></li>
            <li><a href="corian/wilmslow.php">Wilmslow Corian - <em> Bespoke Corian in Wilmslow</em></a></li>
        </ul>
    </div><!--content-->
</div><!--grid_24-->
   
<?php
include('./includes/overall/footer.php');
?>