<?php
include ('./includes/config.php');

$current_page = 'corian_quote_online';

$page_title = "Corian online quote"; 

$dest	=	'info@coulsyworksurfaces.co.uk';

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if($_GET['message-sent'] == "true") {
	
	include('./includes/overall/header.php');
	echo '
		<div class="alert alert-success alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h2>Message Sent To Admin</h2>
		</div>
		';	
	
	}  elseif($_GET['message-sent'] == "false") {
	
	include('./includes/overall/header.php');
	echo '
		<div class="alert alert-warning alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h2>Message Failed To Send!</h2>
		</div>
		';	
		} else {
			
			include('./includes/overall/header.php');
			

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Create an empty error array if it doesn't already exist:
if (!isset($errors)) $errors = array();

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
	
//validate postcode
function IsPostcode($postcode)
{
    $postcode = strtoupper(str_replace(' ','',$postcode));
    if(preg_match("/^[A-Z]{1,2}[0-9]{2,3}[A-Z]{2}$/",$postcode) || preg_match("/^[A-Z]{1,2}[0-9]{1}[A-Z]{1}[0-9]{1}[A-Z]{2}$/",$postcode) || preg_match("/^GIR0[A-Z]{2}$/",$postcode))
    {
        return true;
    }
    else
    {
        return false;
    }
}	
	
	
	if (empty($errors)) { // If everything's OK...
	
	
		// CAPTCHA
		if($_POST['1'] + $_POST['2'] != $_POST['check']) {
			
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
		}
		elseif($_POST['1'] + $_POST['2'] == $_POST['check']) {
			
			
		
		
		// email disclaimer
		$e_dis = 	'Email Disclaimer<br />
		This email and any attachments to it may be confidential and are intended solely for the use of the individual to whom it is addressed.<br />
		Any views or opinions expressed are solely those of the author and do not necessarily represent those of '.$website_name.'.<br />
		If you are not the intended recipient of this email, you must neither take any action based upon its contents, nor copy or show it to anyone.<br />
		Please contact the sender if you believe you have received this email in error.';
						
		
		// send their message email to Admin
		$headers1		=	'MIME-Version: 1.0' . "\r\n";
		$headers1		.=	'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers1		.=	"From: From $first_name $last_name <$email>\r\nReply-to : $first_name $last_name <$email>\r\nX-Mailer:PHP"; 
		$subject1		=	"Contact from your website $website_name Enquiry Form";
		$destination1	=	"$dest";
		$body1			=	"<b>A $website_name Enquiry has been raised using the contact page form.</b>
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
		mail($destination1,$subject1,$body1,$headers1);
		
		
		// This section is the automated reply to the enquirer. 
		$headers2		=	'MIME-Version: 1.0' . "\r\n";
		$headers2		.=	'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers2		.=	"From: A $website_name Enquiry<$dest>\r\nReply-to : $website_name <$dest>\nX-Mailer:PHP"; 
		$subject2		=	"Automatic $website_name mail reply";
		$destination2	=	"$email";
		$body2="
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
		mail($destination2,$subject2,$body2,$headers2);
		
	echo '
	<div class="clearfix"></div>
		<div class="alert alert-success">
			<h1>Dear '.$first_name.'</h1>
			<br>
			<h3>Thank you for making contact.</h3>
			<h3>We will deal with your enquiry as soon as possible.</h3>
			<p>We have sent an automated message confirmation to your email <b>'.$email.'</b>. Please check you spam folder should you not receive it.</p>
			<p>Your Details:</p>
			<p>Name: <b>'.$first_name.' ' .$last_name.'</b></p>
			<p>Email: <b>'.$email.'</b></p>
			<p>Phone Number: <b>'.$phone_number.'</b></p>
			<p>Message: <b>'.$message.'</b></p>
			<br>
			<h3>Admin</h3>
			<h2>'.$website_name.'</h2>
			<a class="btn btn-primary" href="' . $nav_home . '" role="button">Home Page <span class="glyphicon glyphicon-home"></span></a>
		</div>
		<div class="clearfix"></div>
			';	

		// Finish the page:
		include ('includes/overall/footer.php'); // Include the HTML footer.
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
//require ('./includes/form_functions.inc.php');
?>
        
<div class="grid_24">
    <div class="alert alert-danger"><h4>Sorry. This page is currently being developed. Please call <?php echo PHONE_MAIN; ?></h4></div>
    <div class="content">
        <h2>Corian&reg; Online Quote</h2>
    </div><!--content-->
</div><!--grid_24-->

<div class="grid_24">
	<div class="content">
        
        <?php echo $alert_failed; ?>

		<div class="form-container">
        
        <form class="form-horizontal" role="form" action="" enctype="multipart/form-data" method="post" id="quote_form"> 

                        <?php
                        if($_GET['message-sent'] == "true") {
                            echo '<p><b>Thank you<br />Your message has been sent!</b></p>';	
                            } else {
								?>
    
    <div><h3>Worktop Section</h3></div>
    
    <div class="form-group">
        <label for="' . $hob_bars . '" class="col-sm-3 control-label">Choose Worktop Colour</label>
        <div class="col-sm-3">
            <select class="form-control" required>
                <option value=''>-</option>
                <option value='Bisque'>Bisque</option>
                <option value='Bone'>Bone</option>
                <option value='Cameo White'>Cameo White</option>
                <option value='Designer White'>Designer White</option>
                <option value='Glacier White'>Glacier White</option>
                <option value='Pearl Grey'>Pearl Grey</option>
                <option value='Seagrass'>Seagrass</option>
                <option value='Vanilla'>Vanilla</option>
                <option value='Aqua'>Aqua</option>
                <option value='Aurora'>Aurora</option>
                <option value='Clay'>Clay</option>
                <option value='Dove'>Dove</option>
                <option value='Dusk'>Dusk</option>
                <option value='Eclipse'>Eclipse</option>
                <option value='Linen'>Linen</option>
                <option value='Midnight'>Midnight</option>
                <option value='Mojave'>Mojave</option>
                <option value='Raffia'>Raffia</option>
                <option value='Sandstone'>Sandstone</option>
                <option value='White Jasmine'>White Jasmine</option>
                <option value='Abalone'>Abalone</option>
                <option value='Everest'>Everest</option>
                <option value='Matterhorn'>Matterhorn</option>
                <option value='Antartica'>Antartica</option>
                <option value='Beige Fieldstone'>Beige Fieldstone</option>
                <option value='Clam Shell'>Clam Shell</option>
                <option value='Fossil'>Fossil</option>
                <option value='Platinum'>Platinum</option>
                <option value='Sagebrush'>Sagebrush</option>
                <option value='Sahara'>Sahara</option>
                <option value='Savannah'>Savannah</option>
                <option value='Silver Birch'>Silver Birch</option>
                <option value='Sonora'>Sonora</option>
                <option value='Whitecap'>Whitecap</option>            
            </select>                                
        </div>
        <div class="col-sm-6">
        	<h5>Corian worktop colours</h5><p>Please select a Corian colour.</p>
        </div>
    </div>
      
    <div class="form-group">
        <label for="' . $hob_bars . '" class="col-sm-3 control-label">Choose Worktop Thickness</label>
        <div class="col-sm-3">
            <select class="form-control">
                <option value="24mm">24mm</option>
                <option value="38mm ">38mm </option>
                <option value="50mm">50mm</option>
                <option value="65mm">65mm</option>
                <option value="12mm Highline">12mm Highline</option>
                <option value="Other">Other!</option>
            </select>                                
        </div>
        <div class="col-sm-6">
        	<h5>Corian worktop thickness</h5><p>Please select a worktop thinkness. Please specify in message field if not listed.</p>
        </div>
    </div>
      
    <div class="form-group">
        <label for="' . $hob_bars . '" class="col-sm-3 control-label">Choose Edge Detail</label>
        <div class="col-sm-3">
            <select class="form-control">
                <option value="square">Square</option>
                <option value="round ">Round</option>
                <option value="double_round ">Double Round</option>
                <option value="bevel ">Bevel</option>
                <option value="double_bevel ">Double Bevel</option>
                <option value="imperial ">Imperial</option>
                <option value="spanish ">Spanish</option>
                <option value="ovolo ">Ovolo</option>
                <option value="waterfall ">waterfall</option>
                <option value="Other">Other!</option>
            </select>                                
        </div>
        
        
        
        <div class="col-sm-6">
            
            <!-- Button trigger modal -->
            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">
              Edge details
            </button><p>Please select a worktop edge detail. Please specify in message field if not listed.</p>
            
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Worktop Edge Details</h4>
                  </div>
                  <div class="modal-body">
						<div class="row">
							<div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-edge-details/corian-square-edge.jpg" alt="corian Square edge">Square edge
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-edge-details/corian-round-edge.jpg" alt="corian Round edge">Round edge
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-edge-details/corian-double-round-edge.jpg" alt="corian Double round edge">Double round edge
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-edge-details/corian-single-bevel-edge.jpg" alt="corian Single bevel egde">Single bevel egde
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-edge-details/corian-double-bevel-edge.jpg" alt="corian Double bevel edge">Double bevel edge
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-edge-details/corian-ovolo-edge.jpg" alt="corian Ovolo edge">Ovolo edge
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-edge-details/corian-imperial-edge.jpg" alt="corian Imperial edge">Imperial edge
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-edge-details/corian-spanish-edge.jpg" alt="corian Spanish edge">Spanish edge
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-edge-details/corian-waterfall-edge.jpg" alt="corian Waterfall">Waterfall
                                </a>
                            </div>
                      </div>
                  
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                  </div>
                </div>
              </div>
            </div> 
            
       </div>
       
      <label for="' . $date_req . '" class="col-sm-3 control-label">Overall Waterfall Length (mm)</label>
      <div class="col-sm-3"><input type="number" class="form-control" placeholder="eg. 4510"></div>
       
    </div>

    <div class="form-group">
        <label for="' . $hob_bars . '" class="col-sm-3 control-label">Upstand Type</label>
        <div class="col-sm-3">
            <select class="form-control" required>
                <option value=''>-</option>
                <option value='Square 50 - 99mm'>Square 50 - 99mm</option>
                <option value='Square upto 100 - 200mm'>Square upto 100 - 200mm</option>
                <option value='Coved 10mm'>Coved 10mm</option>
                <option value='Coved 50mm'>Coved 50mm</option>
                <option value='Coved 100mm'>Coved 100mm</option>
                <option value='none'>No Upstand</option>
            </select>                                
        </div>
        <div class="col-sm-6">
            
            <!-- Button trigger modal -->
            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal2">
              Upstand Types
            </button><p>Please select an upstand if required. Please specify in message field if not listed.</p>
            
            <!-- Modal -->
            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Worktop Edge Details</h4>
                  </div>
                  <div class="modal-body">
						<div class="row">
							<div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-edge-details/corian-coved-upstand.png" alt="Corian coved upstand detail">Coved upstand
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-edge-details/corian-square-upstand.png" alt="Corian square upstand detail">Square upstand
                                </a>
                            </div>
						</div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                  </div>
                </div>
              </div>
            </div> 
            
        </div>
    </div>
    
  <div class="form-group">
      <label for="' . $date_req . '" class="col-sm-3 control-label">Upstand Overall Length (mm)</label>
      <div class="col-sm-3"><input type="number" class="form-control" placeholder="eg. 4510"></div>
  </div>

    <hr>
    
    <div><h3>Sink Section</h3></div>
    
<div class="form-group">
    <label for="' . $hob_bars . '" class="col-sm-3 control-label">Choose Sink</label>
        <div class="col-sm-3">
            <select class="form-control">
                <option value="Corian 1.5 Bowl 804+857">Corian 1.5 Bowl 804+857</option>
                <option value="Corian Small Single 802">Corian Small Single 802</option>
                <option value="Corian Large Single 804">Corian Large Single 804</option>
                <option value="Corian Large Single 805">Corian Large Single 805</option>
                <option value="Corian Small Single 809">Corian Small Single 809</option>
                <option value="Corian Small Single 857">Corian Small Single 857</option>
                <option value="Corian Large Single 859">Corian Large Single 859</option>
                <option value="Corian Large Single 871">Corian Large Single 871</option>
                <option value="Corian Large Single 881">Corian Large Single 881</option>
                <option value="Corian Large Single 985">Corian Large Single 985</option>
                <option value="Corian Large Single 966">Corian Large Single 966</option>
                <option value="Corian Small Single 967">Corian Small Single 967</option>
                <option value="Corian Large Single 969">Corian Large Single 969</option>
                <option value="Corian Large Single 970">Corian Large Single 970</option>
                <option value="Corian Large Double 873">Corian Large Double 873</option>
                <option value="Corian Large Double 850">Corian Large Double 850</option>
                <option value="Corian Fontana (Specify Model in Footer of Form)">Corian Fontana (Specify Model in Footer of Form)</option>
                <option value="Corian 857 &amp; 859">Corian 857 &amp; 859</option>
                <option value="No">Not Required</option>
                <option value="I will supply my own Undermount / Overmount">I will supply my own Undermount / Overmount</option>
            </select>                                
        </div>
        <div class="col-sm-6">
            
            <!-- Button trigger modal -->
            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalCorianSinks">
              Corian&reg; Sinks
            </button>
            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalCorianMixaSinks">
              Corian&reg; Mixa&reg; Sinks
            </button>
            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalFontanaSinks">
              Fontana Sinks
            </button>
            
            
            <p>Please select an sink if required. Please specify in message field if not listed.</p>
            
            <!-- Modal -->
            <div class="modal fade" id="modalCorianSinks" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Corian&reg; Sinks</h4>
                  </div>
                  
					<div class="modal-body">
						<div class="row">
							<div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-sinks/corian-sink-802.jpg" alt="corian sink 802">802
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-sinks/corian-sink-804.jpg" alt="corian sink 804">804
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-sinks/corian-sink-805.jpg" alt="corian sink 805">805
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-sinks/corian-sink-809.jpg" alt="corian sink 809">809
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-sinks/corian-sink-850.jpg" alt="corian sink 850">850
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-sinks/corian-sink-857.jpg" alt="corian sink 857">857
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-sinks/corian-sink-859.jpg" alt="corian sink 859">859
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-sinks/corian-sink-871.jpg" alt="corian sink 871">871
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-sinks/corian-sink-873.jpg" alt="corian sink 873">873
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-sinks/corian-sink-881.jpg" alt="corian sink 881">881
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-sinks/corian-sink-965.jpg" alt="corian sink 965">965
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-sinks/corian-sink-966.jpg" alt="corian sink 966">966
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-sinks/corian-sink-967.jpg" alt="corian sink 967">967
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-sinks/corian-sink-969.jpg" alt="corian sink 969">969
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-sinks/corian-sink-970.jpg" alt="corian sink 970">970
                                </a>
							</div>
                      </div>
				</div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                  </div>
                </div>
              </div>
            </div> 

            <!-- Modal -->
            <div class="modal fade" id="modalCorianMixaSinks" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Corian&reg; Mixa&reg; Sinks</h4>
                  </div>
                  
					<div class="modal-body">
						<div class="row">
							<div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-mixa-sinks/410M.jpg" alt="corian mixa sink 410M">410M
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-mixa-sinks/809M.jpg" alt="corian mixa sink 809M">809M
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-mixa-sinks/813M.jpg" alt="corian mixa sink 813M">813M
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-mixa-sinks/851M.jpg" alt="corian mixa sink 851M">851M
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-mixa-sinks/853M.jpg" alt="corian mixa sink 853M">853M
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/corian-mixa-sinks/871M.jpg" alt="corian mixa sink 871M">871M
                                </a>
                            </div>
                      </div>
				</div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                  </div>
                </div>
              </div>
            </div> 

            <!-- Modal -->
            <div class="modal fade" id="modalFontanaSinks" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Fontana Sinks with Stainless Steel Base</h4>
                    <p>The sink is at the heart of every kitchen, both in terms of design and functionality. <br>
Our superb Fontana sinks combine DuPont&trade; &reg; with the highest quality stainless steel to offer endless possibilities for the modern kitchen.</p>
                    <p>Fontana sinks are hygienic and easy to clean. The stainless steel base easily withstands boiling liquid and hot pots and pans.<br>
 
                    Because Fontana sinks are available in all the Corian&reg; kitchen colours, the sink can be integrated into a matching Corian&reg; worktop for the ultimate in contemporary kitchen style.</p>
                    <p>Made in Germany, Fontana sinks carry the manufacturer’s 10-year limited installed warranty.</p>
                  </div>
                  
					<div class="modal-body">
						<div class="row">
							<div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/fontana-sinks/FSP-12R.jpg" alt="Fontana sink FSP-12R">Fontana FSP-12R
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/fontana-sinks/FSP-15.jpg" alt="Fontana sink FSP-15">Fontana FSP-15
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/fontana-sinks/FSP-30.jpg" alt="Fontana sink FSP-30">Fontana FSP-30
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/fontana-sinks/FSP-3015.jpg" alt="Fontana sink FSP-3015">Fontana FSP-3015
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/fontana-sinks/FSP-35.jpg" alt="Fontana sink FSP-35">Fontana FSP-35
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/fontana-sinks/FSP-40.jpg" alt="Fontana sink FSP-40">Fontana FSP-40
                                </a>
                            </div>
							<div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/fontana-sinks/FSP-41.jpg" alt="Fontana sink FSP-41">Fontana FSP-41
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/fontana-sinks/FSP-44.jpg" alt="Fontana sink FSP-44">Fontana FSP-44
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/fontana-sinks/FSP-50.jpg" alt="Fontana sink FSP-50">Fontana FSP-50
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/fontana-sinks/FSP-5035.jpg" alt="Fontana sink FSP-5035">Fontana FSP-5035
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/fontana-sinks/FSP-851.jpg" alt="Fontana sink FSP-851">Fontana FSP-851
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/fontana-sinks/FSP-851853.jpg" alt="Fontana sink FSP-851853">Fontana FSP-851853
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="#" class="thumbnail">
                                  <img data-src="holder.js/100%x180" src="images/fontana-sinks/FSP-853.jpg" alt="Fontana sink FSP-853">Fontana FSP-853
                                </a>
                            </div>
                      </div>
				</div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                  </div>
                </div>
              </div>
            </div> 



        </div>
    </div>
    
    <div class="form-group">
        <label for="' . $hob_bars . '" class="col-sm-3 control-label">Drainer Grooves</label>
        <div class="col-sm-3">
            <select class="form-control">
                <option value='-'>-</option>
                <option value='1'>1 Set</option>
                <option value='2'>2 Sets</option>
                <option value='3'>3 Sets</option>
                <option value='4'>4 Sets</option>
            </select>                                
        </div>
        <div class="col-sm-6">
        	<h5>Drainer Grooves</h5><p>Drainer grooves can be routed directly into your worktop next to your sink and can be one side or both. Please enter the amount of sets you require in the box opposite.</p>
        </div>
    </div>
    
    <hr>
    
    <div><h3>Hob Section</h3></div>

    <div class="form-group">
        <label for="' . $hob_bars . '" class="col-sm-3 control-label">Hob Cut Outs</label>
        <div class="col-sm-3">
            <select class="form-control">
                <option value='-'>-</option>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
            </select>                                
        </div>
        <div class="col-sm-6">
        	<h5>Hob Cut Outs</h5><p>Number of standard hob cut outs required. For recessed hobs please specify in message box.</p>
        </div>
    </div>
  
    <div class="form-group">
        <label for="' . $hob_bars . '" class="col-sm-3 control-label">Hob Bars</label>
        <div class="col-sm-3">
            <select class="form-control" required>
                <option value=''>-</option>
                <option value='0'>none</option>
                <option value='1'>1 Set</option>
                <option value='2'>2 Sets</option>
                <option value='3'>3 Sets</option>
                <option value='4'>4 Sets</option>
            </select>                                
        </div>
        <div class="col-sm-6">
        	<h5>Hob Bar Sets</h5><p>Hob bars can be either routed directly into the worktop or supplied fitted into a board. Each set comprises of 5 bars.</p>
            <img src="images/corian-hob-bars/corian-hob-bars.jpg" alt="corian hob bar sets" width="113" height="83" title="Corian hob bar set"> 
        </div>
    </div>
    
    <hr>
    
    <div><h3>Additional Section</h3></div>
    
    <div class="form-group">
        <label for="' . $hob_bars . '" class="col-sm-3 control-label">Angled Corners</label>
        <div class="col-sm-3">
            <select class="form-control">
                <option value='-'>-</option>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
            </select>                                
        </div>
        <div class="col-sm-6">
        	<h5>Angled Corners</h5><p>Allow for all angled corners. This would include each breakfast bar corner too.</p>
        </div>
    </div>
    
    <div class="form-group">
        <label for="' . $hob_bars . '" class="col-sm-3 control-label">Curved Corners</label>
        <div class="col-sm-3">
            <select class="form-control">
                <option value='-'>-</option>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
            </select>                                
        </div>
        <div class="col-sm-6">
        	<h5>Curved Corners</h5><p>Allow for all curved corners. This would include each breakfast bar corner too.</p>
        </div>
    </div>
    
    <hr>
  
  <div class="form-group">
      <label for="' . $date_req . '" class="col-sm-3 control-label">Date Required</label>
      <div class="col-sm-3"><input type="date" class="form-control" required placeholder="Text input"></div>
        <div class="col-sm-6">
        	<!--<h5>Curved Corners</h5>--><p>Please enter the date you would like your worktop fitting.</p>
        </div>
  </div>
    
    <hr>
    
    <div><h3>Personal Details</h3></div>
    
                               <?
							   	create_form_input('first_name', 'text', 'First Name', 'required', $errors, array('placeholder'=>'First Name')); 
                                create_form_input('last_name', 'text', 'Last Name', 'required', $errors, array('placeholder'=>'Last Name'));
                                create_form_input('email', 'email', 'Email Address', 'required', $errors, array('placeholder'=>'email@example.com')); 
                                create_form_input('message', 'textarea', 'Message', 'required', $errors, array('placeholder'=>'Message eg. Hi I am interested in a Corian worktop')); 
                                create_form_input('phone_number', 'tel', 'Phone Number', 'required', $errors, array('placeholder'=>'Phone Number eg 01234567890 inc std')); 
                                create_form_input('postcode', 'text', 'Post Code', 'required', $errors, array('placeholder'=>'Postcode')); 
                                    
                        if($_GET['message-sent'] == "error") // Captcha
                          $error = '<label class="error">Oops... Please Try Again1 !</label>';
                          $n1 = rand(1, 10);
                          $n2 = rand(1, 10);
                          
                          echo '<div class="form-group">
                                <label for="check" class="col-sm-3 control-label">SUM ' .$n1. ' + '.$n2.'  = ?'.$test.'</label>
                                <div class="col-sm-9">
									<input type="number" name="check" id="check" size="2" maxlength="2" required number class="form-control" placeholder="What is the answer to the sum? (Helps avoid email spam)">
									</div>
                                
                                <input type="hidden" name="1" value="'.$n1.'">
                                <input type="hidden" name="2" value="'.$n2.'">
                                <br/>'.$error.'<br/>
                                </div>
                                
                                <div class="clearfix"></div>
                                <button type="submit" class="btn btn-success" id="submit" />Quote Me <span class="glyphicon glyphicon-envelope"></span></button>
                                
                                ';  
                                } ?>
            </form>
    
        </div><!--form-container-->

	</div>
</div>
<?php
include('./includes/overall/footer.php');
?>