<?php
include('./includes/config.php');

$dest = 'info@coulsyworksurfaces.coulsy.dev';

$current_page = 'contact';

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if ($_GET['message-sent'] == "true") {

	include('includes/overall/header.php');
	echo '
		<div class="alert alert-success alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h2>Message Sent To Admin</h2>
		</div>
		';

} elseif ($_GET['message-sent'] == "false") {

	include('includes/overall/header.php');
	echo '
		<div class="alert alert-warning alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h2>Message Failed To Send!</h2>
		</div>
		';
} else {

	include('includes/overall/header.php');


	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// Create an empty error array if it doesn't already exist:
	if (!isset($errors))
		$errors = array();
	// For storing registration errors:
//$reg_errors = array();
//
// Check for a form submission:
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {



		// Check for a first name:
		if (preg_match('/^[A-Z \'.-]{2,45}$/i', $_POST['first_name'])) {
			$first_name = ($_POST['first_name']);
		} else {
			$errors['first_name'] = 'Please enter your first name. Min 2 Letters!';
		}

		// Check for a last name:
		if (preg_match('/^[A-Z \'.-]{2,45}$/i', $_POST['last_name'])) {
			$last_name = ($_POST['last_name']);
		} else {
			$errors['last_name'] = 'Please enter your last name. Min 2 Letters!';
		}

		// Check for an email address:
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === $_POST['email']) {
			$email = ($_POST['email']);
		} else {
			$errors['email'] = 'Please enter a valid email address!';
		}

		// Check for a last name:
		if (preg_match('/^[A-Z \'.-]{10,200}$/i', $_POST['message'])) {
			$message = ($_POST['message']);
		} else {
			$errors['message'] = 'Please enter your message. Min 10 Letters!';
		}

		// Check for a first name:
		if (preg_match('/^[0-9,. ]{11,14}$/i', $_POST['phone_number'])) {
			$phone_number = ($_POST['phone_number']);
		} else {
			$errors['phone_number'] = 'Please enter your phone number. Min 11 Numbers inc std!';
		}



		if (empty($errors)) { // If everything's OK...


			// CAPTCHA
			if ($_POST['1'] + $_POST['2'] != $_POST['check']) {

				$error = '
		<div class="clearfix"></div>
			<div class="alert alert-warning alert-dismissable">
				<h5>Oops... Please Try SUM Again !</h5>
			</div>
		<div class="clearfix"></div>
		';

				$alert_failed = '
		<div class="clearfix"></div>
		<div class="alert alert-warning alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h2>Message Failed To Send!</h2>
			<h3>Please try Again.</h3>
		</div>
		<div class="clearfix"></div>
			';

				echo '
		
			';

				//header('Location: contact.php?message-sent=false');
				//exit();
			} elseif ($_POST['1'] + $_POST['2'] == $_POST['check']) {




				// email disclaimer
				$e_dis = 'Email Disclaimer<br />
		This email and any attachments to it may be confidential and are intended solely for the use of the individual to whom it is addressed.<br />
		Any views or opinions expressed are solely those of the author and do not necessarily represent those of ' . $website_name . '.<br />
		If you are not the intended recipient of this email, you must neither take any action based upon its contents, nor copy or show it to anyone.<br />
		Please contact the sender if you believe you have received this email in error.';


				// send their message email to Admin
				$headers1 = 'MIME-Version: 1.0' . "\r\n";
				$headers1 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers1 .= "From: From $first_name $last_name <$email>\r\nReply-to : $first_name $last_name <$email>\r\nX-Mailer:PHP";
				$subject1 = "Contact from your website $website_name Enquiry Form";
				$destination1 = "$dest";
				$body1 = "<b>A $website_name Enquiry has been raised using the contact page form.</b>
		<br /><br />
		The Enquirers Details Are:
		<br /><br />
		Name: <b>$first_name $last_name</b>
		<br /><br />
		Email: <b>$email</b>
		<br /><br />
		Phone Number: <b>$phone_number</b>
		<br /><br />
		Message: <b>$message</b>
		<br /><br /><br /><br />
		<h2>$website_name</h2>
		<br />
		$e_dis
		";
				mail($destination1, $subject1, $body1, $headers1);


				// This section is the automated reply to the enquirer. 
				$headers2 = 'MIME-Version: 1.0' . "\r\n";
				$headers2 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers2 .= "From: A $website_name Enquiry<$dest>\r\nReply-to : $website_name <$dest>\nX-Mailer:PHP";
				$subject2 = "Automatic $website_name mail reply";
				$destination2 = "$email";
				$body2 = "
		<b>Dear $first_name</b>
		<br /><br />
		Thanks for contacting us.
		<br /><br />
		We will deal with your enquiry as soon as possible.
		<br /><br />
		<b>Your Entered Details:</b>
		<br /><br />
		Name: <b>$first_name $last_name</b>
		<br /><br />
		Email: <b>$email</b>
		<br /><br />
		Phone Number: <b>$phone_number</b>
		<br /><br />
		Message: <b>$message</b>
		<br /><br /><br /><br />
		<h2>$website_name</h2>
		<br />
		$e_dis
		";
				mail($destination2, $subject2, $body2, $headers2);

				echo '
	<div class="clearfix"></div>
		<div class="alert alert-success">
			<h1>Dear ' . $first_name . '</h1>
			<br>
			<h3>Thank you for making contact.</h3>
			<h3>We will deal with your enquiry as soon as possible.</h3>
			<p>We have sent an automated message confirmation to your email <b>' . $email . '</b>. Please check you spam folder should you not receive it.</p>
			<p>Your Details:</p>
			<p>Name: <b>' . $first_name . ' ' . $last_name . '</b></p>
			<p>Email: <b>' . $email . '</b></p>
			<p>Phone Number: <b>' . $phone_number . '</b></p>
			<p>Message: <b>' . $message . '</b></p>
			<br>
			<h3>Admin</h3>
			<h2>' . $website_name . '</h2>
			<a class="btn btn-primary" href="' . $nav_home . '" role="button">Home Page <span class="glyphicon glyphicon-home"></span></a>
		</div>
		<div class="clearfix"></div>
			';

				// Finish the page:
				include('includes/overall/footer.php'); // Include the HTML footer.
				exit(); // Stop the page.

				//Header("Location: contact.php?&message-sent=true");


			}
			//else { // If it did not run OK.
			//trigger_error('Your message could no be sent due to a system error. We apologize for any inconvenience.');
			//}

		} // End of empty($reg_errors) IF.

	} // End of the main form submission conditional.

} // if message-sent

// Need the form functions script, which defines create_form_input():
require('./includes/form_functions.inc.php');
?>

<div class="grid_24">

	<div class="content">

		<h1 style="font-size:80px; line-height:80px;">Contact</h1>

	</div><!--content-->

</div><!--grid_24-->

<div class="grid_24">
	<div class="content">
		<h3 class="cta">CALL
			<?php echo PHONE_MAIN; ?> To discuss you worksurface.
		</h3>
		<p>Alternatively... fill in the form below and send your enquiry.</p>

		<?php echo $alert_failed; ?>

		<div class="form-container">

			<form class="form-horizontal" role="form" action="contact.php" enctype="multipart/form-data" method="post"
				id="">

				<?php
				if ($_GET['message-sent'] == "true") {
					echo '<p><b>Thank you<br />Your message has been sent!</b></p>';
				} else {

					create_form_input('first_name', 'text', 'First Name', 'required', $errors, array('placeholder' => 'First Name'));
					create_form_input('last_name', 'text', 'Last Name', 'required', $errors, array('placeholder' => 'Last Name'));
					create_form_input('email', 'email', 'Email Address', 'required', $errors, array('placeholder' => 'email@example.com'));
					create_form_input('message', 'textarea', 'Message', 'required', $errors, array('placeholder' => 'Message eg. Hi I am interested in a Corian worktop'));
					create_form_input('phone_number', 'phone_number', 'Phone Number', 'required', $errors, array('placeholder' => 'Phone Number eg 01234567890 inc std'));

					if ($_GET['message-sent'] == "error") // Captcha
						$error = '<label class="error">Oops... Please Try Again1 !</label>';
					$n1 = rand(1, 10);
					$n2 = rand(1, 10);

					echo '<div class="form-group">
                                <label for="check" class="col-sm-3 control-label">SUM ' . $n1 . ' + ' . $n2 . '  = ?' . $test . '</label>
                                <div class="col-sm-9">
									<input type="number" name="check" id="check" size="2" maxlength="2" required number class="form-control" placeholder="What is the answer to the sum? (Helps avoid email spam)">
									</div>
                                
                                <input type="hidden" name="1" value="' . $n1 . '">
                                <input type="hidden" name="2" value="' . $n2 . '">
                                <br/>' . $error . '<br/>
                                </div>
                                
                                <div class="clearfix"></div>
                                <button type="submit" class="btn btn-success" id="submit" />Enquire <span class="glyphicon glyphicon-envelope"></span></button>
                                
                                ';
				} ?>
			</form>
			<script>
				$(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); });
			</script>

		</div><!--form-container-->

	</div>
</div>

<?php
include('./includes/overall/footer.php');
?>