<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?= base_url('asset/'); ?>images/slider3.jfif" data-natural-width="1400" data-natural-height="350">
	<div id="subheader">
		<h1>Enquire About Membership</h1>
	</div>
	<!-- End subheader -->
</section>
<!-- End section --> 
<!-- End SubHeader ============================================ -->

<div class="container margin_60_35">
	<h3 class=""><em></em> <span> </span></h3>
	<div class="row">
		<p>The franchising information contained in this website is not intended as an offer to sell a franchise or the solicitation of an offer to buy a franchise. The following states regulate the offer and sale of franchises: California, Hawaii, Illinois, Indiana, Maryland, Michigan, Minnesota, New York, Oregon, Rhode Island, South Dakota, Virginia, Washington and Wisconsin. If you reside in one of these states, we will not offer or sell you a franchise unless and until we have complied with the applicable pre-sale registration and disclosure requirements in your state.</p>
		<p>
			Are you ready to start working with a dedicated and trustworthy team? Please fill out your contact details below and a member of the team will call you with more information.
		</p>
		
	</div>
	<div class="row">
		<div class="col-md-2">
			<!--      start address 1-->
			<div class="box_style_3">
				<div class="box_contact"> 
<!--				<i class="icon_set_1_icon-73"></i>-->
					
				</div>
			</div>
			<!--      end address 1-->


		</div>

		<div class="col-md-10 col-md-offset-0">
			<div id="message-contact"></div>
			<div class="row">
				<?= $this->session->flashdata('success_msg');
                      $this->session->unset_userdata('success_msg'); ?>
			</div>
			<form method="post" action="<?php echo htmlspecialchars(base_url('/ControllerHome/enquire_membership')); ?>" id="">
				
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<label>Your Name *</label>
							<input type="text" class="form-control" id="name_contact" name="name_contact" minlength="3" maxlength="50" placeholder="Enter First Name" required="">
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<label>Your Last Name *</label>
							<input type="text" class="form-control" id="lastname_contact" name="lastname_contact" placeholder="Enter Last Name" minlength="3" maxlength="50" required="">
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<label>Email *</label>
							<input type="email" id="email_contact" name="email_contact" class="form-control" placeholder="Enter Email" required="">
						</div>
					</div>
				</div>
				<!-- End row -->
				
				<div class="row">
					
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<label>Phone *</label>
							<input type="tel" id="phone_contact" name="phone_contact" class="form-control" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Enter Phone number" minlength="9" maxlength="14" required=""><small>Format: 234-567-8901</small>

						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<label>Cell Number *</label>
							<input type="tel" id="cell_number" name="cell_number" class="form-control" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Enter Cell number" minlength="9" maxlength="13" required=""><small>Format: 234-567-8901</small>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<label>Buy an Existing Hotels? *</label>
							<select class="form-control" name="buy_existing" id="buy_existing" required>
									<option value="" selected>Select</option>
									<option value="Yes">Yes</option>
									<option value="No">No </option>
									
							</select>
						</div>
					</div>
				</div>
				
				
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<label>Own an Existing Hotels? *</label>
							<select class="form-control" name="own_existing" id="own_existing" required>
									<option value="" selected>Select</option>
									<option value="Yes">Yes</option>
									<option value="No">No </option>
							</select>
						</div>
						
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<label>If existing hotel - Name of Hotel *</label>
							<input type="text" id="existing_hotel_name" name="existing_hotel_name" class="form-control"  placeholder="Name of existing Hotel" minlength="4" maxlength="50" required="">
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<label>Legal Name of Hotel *</label>
							<input type="text" id="legal_name" name="legal_name" class="form-control"  placeholder="Legal Name of Hotel" minlength="4" maxlength="50" required=""></small>
						</div>
						
					</div>
				</div>

				
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<label>New Development *</label>
							<select class="form-control" name="new_development" id="new_development" required>
									<option value="" selected>Select</option>
									<option value="Yes">Yes</option>
									<option value="No">No </option>
							</select>
							
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<label>Address *</label>
							<input type="text" class="form-control" id="address" name="address" minlength="5" maxlength="50" placeholder="Enter Address" required="">
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<label>Street Address *</label>
							<input type="text" class="form-control" id="street_address" name="street_address" placeholder="Enter Street Address" minlength="3" maxlength="50" required="">
						</div>
					</div>
				</div>
				
				
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<label>State / Province / Region *</label>
							<input type="text" id="state" name="state" class="form-control" minlength="3" maxlength="40" placeholder="Enter State / Province / Region" required="">
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<label>ZIP / Postal Code *</label>
							<input type="text" id="zip" name="zip" class="form-control" placeholder="Enter ZIP / Postal Code" minlength="5" maxlength="7" required="">

						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<label>Country  *</label>
							<input type="text" id="country" name="country" class="form-control" placeholder="Country" required="">
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
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<label>How did you find MHO hotels? *</label>
							<input type="text" id="findmho" name="findmho" class="form-control" placeholder="How did you find MHO hotels?" minlength="3" maxlength="50" required="">

						</div>
					</div>
					<div class="col-md-8">
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