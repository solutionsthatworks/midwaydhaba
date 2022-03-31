<script>

	function myfunction() {

			// Calling Validation function.
			//select option value from select tag and storing it in a variable.
			var password = document.getElementById( "password" ).value;
			var cPassword = document.getElementById( "cpassword" ).value;
			var oPassword = document.getElementById( "old_password" ).value;
			
			if(oPassword==""){
					alert("Please enter Old Password");
				document.getElementById( "old_password" ).focus();
					return ( false );
				}	
			if(password==""){
					alert("Please enter New Password");
					return ( false );
				}
			if(cPassword==""){
					alert("Please Confirm New Password");
					return ( false );
				}
			//alert(action);
			
			if ( password == cPassword) {
				//document.getElementById( "form1" ).action = action;
				document.getElementById( "form1" ).submit();
			} else {
				alert("New password mismatch!! Please re-enter.");
				return ( false );
			}
			

		}
</script>
<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?= base_url('asset/'); ?>images/slider3.jfif" data-natural-width="1400" data-natural-height="350">
  <div id="subheader">
    <h1>Forgot Password!</h1>
  </div>
  <!-- End subheader --> 
</section>
<!-- End section --> 
<!-- End SubHeader ============================================ -->

	<div class="container margin_60_35">
     <div class="col-md-7 col-md-offset-0">
      <div id="message-contact"></div>
      <?= 
      "<span style='color:red'>".validation_errors()."</span>";
      $this->session->flashdata('success_msg');
                      $this->session->unset_userdata('success_msg'); ?>
      <form method="post" action="<?php echo htmlspecialchars(base_url('Change-Password/').$user_id); ?>" id="form1" name="form1" enctype='multipart/form-data' onsubmit="javascript: return myfunction();">
        <!-- End row -->
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              
				
              <input type="hidden" id="id" value="<?php echo $user_id ?>" required="" name="id" class="form-control" placeholder="">
              <div class="row">
				<div class="col-md-5">
					<div class="form-group">
						<label>Old Password</label>
						<input type="password" name="old_password" id="old_password" class="form-control" placeholder="Enter Your Old Password" required="">
					</div>
					<?= form_error('old_password'); ?>
				</div>

			  </div> 
              <div class="row">
				<div class="col-md-5">
					<div class="form-group">
						<label>New Password</label>
						<input type="password" name="password" id="password" class="form-control" placeholder="Enter Your Password" required="">
					</div>
					<?= form_error('password'); ?>

				</div>

				<div class="col-md-5">
					<div class="form-group">
						<label>Confirm New Password</label>
						<input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Enter Confirm Password" required="">
					</div>
					<?= form_error('cpassword'); ?>

				</div>
			</div>
            </div>
          </div>
      	</div>


        <div class="row add_bottom_30">
          <div class="col-md-6">
            <input type="submit" value="Change Password" class="btn_1" name="reset_password" id="reset_password" >
          </div>
        </div>
      </form>
      
    </div>
	</div>
