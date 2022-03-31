<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?= base_url('asset/'); ?>images/slider3.jfif" data-natural-width="1400" data-natural-height="350">
	<div id="subheader">
		<h1>Join Sponsors Program</h1>
	</div>
	<!-- End subheader -->
</section>
<!-- End section --> 
<!-- End SubHeader ============================================ -->

<div class="container margin_60_35">
	<h3 class=""><em></em> <span> </span></h3>
	<div class="row">
		<p></p>
		<p>
			
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
			<form method="post" action="<?php echo htmlspecialchars(base_url('/ControllerHome/insert_join_sponsors_program')); ?>" id="">
				
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
					
				</div>
				<!-- End row -->
				
				<div class="row">
					
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<label>Company Name *</label>
							<input type="text" id="company_name" name="company_name" class="form-control"  placeholder="Enter Company Name" minlength="3" maxlength="50" required="">
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<label>Company Type *</label>
							<input type="text" id="company_type" name="company_type" class="form-control"  placeholder="Enter Company Type" minlength="3" maxlength="50" required=""></small>
						</div>
						
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<label>Website *</label>
							<input type="text" id="website" name="website" class="form-control"  placeholder="Enter Website" minlength="8" maxlength="50" required=""></small>
						</div>
						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<label>Email *</label>
							<input type="email" id="email_contact" name="email_contact" class="form-control" placeholder="Enter Email" required="">
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<label>Phone *</label>
							<input type="tel" id="phone_contact" name="phone_contact" class="form-control" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Enter Phone number" minlength="9" maxlength="14" required=""><small>Format: 234-567-8901</small>

						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<label>Fax *</label>
							<input type="tel" id="fax" name="fax" class="form-control" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Enter Fax number" minlength="9" maxlength="13" required=""><small>Format: 234-567-8901</small>
						</div>
					</div>
					
				</div>
				
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<label>State / Province / Region *</label>
							<input type="text" id="state" name="state" class="form-control" minlength="2" maxlength="40" placeholder="Enter State / Province / Region" required="">
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
							<label>City *</label>
							<input type="text" class="form-control" id="city" name="city" placeholder="Enter City" minlength="3" maxlength="50" required="">
						</div>
					</div>
				</div>
				
				
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<label>Level Interested In  *</label>
							<select class="form-control" name="level_interested" id="level_interested" required>
									<option value="" selected>Select</option>
									<option value="Platinum">Platinum </option>
									<option value="Gold">Gold </option>
									<option value="Silver">Silver </option>
									<option value="Supporter">Supporter</option>
							</select>
							
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