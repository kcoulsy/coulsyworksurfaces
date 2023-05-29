<?php
//require ('./includes/config.inc.php');

$current_page = "404";

$page_title = '404 page not found';

//require (MYSQL);

//include('includes/overall/header.php');

////include ('./includes/page_top.inc.php');

?> 

			<div role="main" class="main">

				<div class="container">

					<section class="page-not-found">
						<div class="row">
							<div class="col-md-6 col-md-offset-1">
								<div class="page-not-found-main">
									<h2>404 <i class="fa fa-file"></i></h2>
									<p>We're sorry, but the page you were looking for doesn't exist.</p>
								</div>
							</div>
							<div class="col-md-4">
								<h4>Here are some useful links</h4>
								<ul class="nav nav-list primary">
									<li><a href="<?php echo $nav_home; ?>">Home</a></li>
									<li><a href="<?php echo $nav_about; ?>">About Us</a></li>
									<li><a href="<?php echo $nav_faq; ?>">FAQ's</a></li>
									<li><a href="<?php echo $nav_sitemap; ?>">Sitemap</a></li>
									<li><a href="<?php echo $nav_contact; ?>">Contact Us</a></li>
								</ul>
							</div>
						</div>
					</section>

				</div>

			</div>

<?php //include('includes/overall/footer.php'); ?>