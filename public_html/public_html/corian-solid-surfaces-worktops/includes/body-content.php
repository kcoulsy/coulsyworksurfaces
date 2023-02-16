

<div class="grid_24">
    <div class="content">
		<h3 class="cta">CALL <?php echo PHONE_ROBERT; ?> to chat about having Corian fitted.</h3>
        <h2>Fitted <?php echo $current_product . ' worktops in ' . $current_area; ?></h2>
    </div><!--content-->
</div><!--grid_24-->



<div class="grid_13">
    <div class="slider_worktops">
        <div id="slider">
            <div id="imageSlider">
                <div class="imageSlide">
                <div class="imageSliderImage"><img src="../../images/worktops/corian-worktops/corian-worktop-0.jpg" alt="<?php echo $current_product . ' worktops in ' . $current_area; ?>" width="500" height="333" title="<?php echo $current_product. ' Designer ' . $current_area; ?>" /></div></div>
                <div class="imageSlide">
                <div class="imageSliderImage"><img src="../../images/worktops/corian-worktops/corian-worktop-1.jpg" alt="<?php echo $current_product . ' worktops in ' . $current_area; ?>" width="500" height="333" title="<?php echo $current_product. ' Designer ' . $current_area; ?>" /></div></div>
                <div class="imageSlide">
                <div class="imageSliderImage"><img src="../../images/worktops/corian-worktops/corian-worktop-2.jpg" alt="<?php echo $current_product . ' worktops in ' . $current_area; ?>" width="500" height="333" title="<?php echo $current_product. ' Designer ' . $current_area; ?>" /></div></div>
                <div class="imageSlide">
                <div class="imageSliderImage"><img src="../../images/worktops/corian-worktops/corian-worktop-3.jpg" alt="<?php echo $current_product . ' worktops in ' . $current_area; ?>" width="500" height="333" title="<?php echo $current_product. ' Designer ' . $current_area; ?>" /></div></div>
                <div class="imageSlide">
                <div class="imageSliderImage"><img src="../../images/worktops/corian-worktops/corian-worktop-4.jpg" alt="<?php echo $current_product . ' worktops in ' . $current_area; ?>" width="500" height="333" title="<?php echo $current_product. ' Designer ' . $current_area; ?>" /></div></div>
                <div class="imageSlide">
                <div class="imageSliderImage"><img src="../../images/worktops/corian-worktops/corian-worktop-5.jpg" alt="<?php echo $current_product . ' worktops in ' . $current_area; ?>" width="500" height="333" title="<?php echo $current_product. ' Designer ' . $current_area; ?>" /></div></div>
            </div><!--imageSlider-->
        </div><!--slider-->
    </div><!--slider_worktops-->
</div><!--grid_13-->

<div class="grid_10">
    <div class="content">
        <h3><?php echo $current_product . ' Worktops ' . $current_area; ?></h3>
        <p>Hello I'm <?php echo $current_person; ?>. I'd like to guide you through the simple process of having a <?php echo $current_product; ?> worktop fitted.</p>
        <p>We fit stunning <?php echo $current_product . ' Worktops ' . $current_area; ?> and it's surrounding areas.</p>
        <p>We specialise in <?php echo $current_product; ?> Design, <?php echo $current_product; ?> worktops installing and <?php echo $current_product; ?> fabrication.</p>
        <br>
        <p>Phone: <strong><?php echo PHONE_ROBERT; ?></strong></p>
        <p>Email: <strong><?php echo EMAIL_ROBERT; ?></strong></p>
    <div class="clear"></div>
    </div><!--content-->
</div><!--grid_10-->


<div class="grid_13">
    <div class="content">
        <h4>There are lots of good reasons to buy your <?php echo $current_product; ?> worktop from <?php echo WEBSITE_NAME; ?>.</h4>
        <ul>
            <li>I can taylor make you <?php echo $current_product; ?> to suit any shape of room.</li>
            <li>A Premium <?php echo $current_product; ?> Design Service in <?php echo $current_area; ?>.</li>
            <li>My <?php echo $current_product; ?> designs will be taylored to your <?php echo $current_product; ?>.</li>
            <li>Made to measure bespoke <?php echo $current_product; ?> worksurfaces in <?php echo $current_area; ?>.</li>
            <li>Made to measure bespoke Corian. We are Corian approved fitters and installers in <?php echo $current_area . '. Corian ' .$current_area; ?>.</li>
        </ul>
        
        
        <p>Are you looking for <?php echo $current_product; ?>, <?php echo $current_product; ?> worksurface and <?php echo $current_product; ?> designing?</p>
        <h3>You're in the right place in <?php echo $current_area; ?> for beautiful designer fitted <?php echo $current_product; ?>...</h3>
        
        <p>See what <?php echo WEBSITE_NAME; ?> can offer you, You will be surprised.</p>
        <p>No one will beat my <?php echo $current_area . ' ' . $current_product; ?> fabrication price Guaranteed!!!</p>
        
        
        <p>Call Me, Robert on <?php echo PHONE_MAIN; ?> to enquire further.</p>
            <p>FREE Consultation.</p>
            <p>FREE <a href="../corian-solid-surfaces-worktops/corian-quote-online.php"><b>Corian Quotation</b></a>.</p>
            <p><a href="../corian-solid-surfaces-worktops/corian-quote-online.php"><b>Corian Planning &amp; Design Grid Layout Download</b></a>.</p>
        <div class="clear"></div>
    </div><!--content-->
</div><!--grid_24-->



<div class="grid_10">
    <div class="content">
    
    <?php echo $alert_failed ?>

		<div class="form-container">
        
        
        <h3>Quick Enquiry</h3>
        
        <form class="form-horizontal" role="form" action="" enctype="multipart/form-data" method="post" id=""> 

                        <?php
                        if($_GET['message-sent'] == "true") {
                            echo '<p><b>Thank you<br />Your message has been sent!</b></p>';	
                            } else {
								
                                create_form_input('first_name', 'text', 'First Name', 'required', $errors, array('placeholder'=>'First Name')); 
                                create_form_input('last_name', 'text', 'Last Name', 'required', $errors, array('placeholder'=>'Last Name'));
                                create_form_input('email', 'email', 'Email Address', 'required', $errors, array('placeholder'=>'email@example.com')); ?>
                                
								    <input type="hidden" name="current_area" id="current_area" value="<?php echo $current_area ?>" class="field" />
<?
                                create_form_input('message', 'textarea', 'Message', 'required', $errors, array('placeholder'=>'Message eg. Hi I am interested in a Corian worktop')); 
                                create_form_input('phone_number', 'phone_number', 'Phone Number', 'required', $errors, array('placeholder'=>'Phone Number eg 01234567890 inc std')); 
                                    
                        if($_GET['message-sent'] == "error") // Captcha
                          $error = '<label class="error">Oops... Please Try Again !</label>';
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
                                <button type="submit" class="btn btn-success" id="submit" />Enquire <span class="glyphicon glyphicon-envelope"></span></button>
                                
                                ';  
                                } ?>
                        </form>
    <script>
      $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
    </script>
    
        </div><!--form-container-->
            </div><!--content-->

</div><!--grid_10-->

