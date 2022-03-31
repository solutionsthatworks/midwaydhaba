<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?= base_url('asset/'); ?>images/slider3.jfif" data-natural-width="1400" data-natural-height="350">
	<div id="subheader">
		<h1>Contact Us</h1>
	</div>
	<!-- End subheader -->
</section>
<!-- End section --> 
<!-- End SubHeader ============================================ -->

<div class="container margin_60_35">
	<h3 class=""><em>We are always available</em> to help our hotel owners through email and phone support.<span> </span></h3>
	<div class="row">
		<div class="col-md-4">
			<!--      start address 1-->
			<div class="box_style_3">
				<div class="box_contact"> <i class="icon_set_1_icon-41"></i>
					<h4>HEADQUARTERS </h4>
					<p>187 Route 130 Bordentown, <br> NJ 08505<br>
						<!--                    <a href="tel://004542344599">+45 423 445 99</a>-->
					</p>
					<h4>EAST COAST </h4>
					<p>3070 Bristol Pike Building 1 Suite 201 Bensalem, <br> PA 19020<br>
						<!--                    <a href="tel://004542344599">+45 423 445 99</a>-->
					</p>
					<h4>CENTRAL </h4>
					<p>3832 E Sophie Lane, Phoenix, <br> AZ 85042<br>
						<!--                    <a href="tel://004542344599">+45 423 445 99</a>-->
					</p>
					<h4>WEST COAST </h4>
					<p>35 East Tenth Street, Suite F Tracy, <br> CA 95376<br>
						<!--                    <a href="tel://004542344599">+45 423 445 99</a>-->
					</p>
					<p>Phone: 1-800-343-9483
						<br>Email: <a href="mailto:info@mhohotels.com">info@mhohotels.com</a>
						<br><a href="http://www.mhohotels.com" target="_blank">www.mhohotels.com</a>
						
					</p>
				</div>
			</div>
			<!--      end address 1-->


		</div>

		<div class="col-md-7 col-md-offset-0">
			<div id="message-contact"></div>
			<div class="row">
				<?= $this->session->flashdata('success_msg');
                      $this->session->unset_userdata('success_msg'); ?>
			</div>
			<form method="post" action="<?php echo htmlspecialchars(base_url('/ControllerHome/contact_usUser')); ?>" id="">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Your Name *</label>
							<input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="Enter First Name" required="">
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Your Last Name *</label>
							<input type="text" class="form-control" id="lastname_contact" name="lastname_contact" placeholder="Enter Last Name" required="">
						</div>
					</div>
				</div>
				<!-- End row -->
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Email *</label>
							<input type="email" id="email_contact" name="email_contact" class="form-control" placeholder="Enter Email" required="">
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Phone *</label>
							<input type="tel" id="phone_contact" name="phone_contact" class="form-control" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Enter Phone number" minlength="9" maxlength="14"><small>Format: 234-567-8901</small>

						</div>
					</div>
				</div>
				<script>
					function countWord() {

						// Get the input text value 
						var words = document
							.getElementById( "message_contact" ).value;

						// Initialize the word counter 
						var count = 0;

						// Split the words on each 
						// space character  
						var split = words.split( '' );

						// Loop through the words and  
						// increase the counter when  
						// each split word is not empty 
						for ( var i = 0; i < split.length; i++ ) {
							if ( split[ i ] != "" ) {
								count += 1;
							}
						}

						// Display it as output 
						document.getElementById( "show" )
							.innerHTML = count;
					}
				</script>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>Message</label>
							<textarea id="message_contact" name="message_contact" class="form-control" placeholder="Write your message" style="height:150px;" min="15" oninput="countWord()" maxlength="500" required></textarea>
							<p> Word Count:
								<span id="show">0</span>/500
							</p>
						</div>
					</div>
				</div>
				<div class="row add_bottom_30">
					<div class="col-md-6">
						<!--<div class="form-group">
              <label>Human verification</label>
              <input type="text" id="verify_contact" class="form-control add_bottom_30" placeholder="Are you human? 3 + 1 =">
            </div>-->
						<input type="submit" value="Submit" class="btn_1" name="user_contact" id="user_contact">
					</div>
				</div>
			</form>
		</div>
		<!-- End col-md-8 -->

	</div>
	<!-- End row -->
</div>
<!-- End Container -->