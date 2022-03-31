
<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?= base_url('asset/'); ?>images/slider3.jfif" data-natural-width="1400" data-natural-height="350">
  <div id="subheader">
    <h1>Update Your Profile</h1>
  </div>
  <!-- End subheader --> 
</section>
<!-- End section --> 
<!-- End SubHeader ============================================ -->

	<div class="container margin_60_35">
     <div class="col-md-7 col-md-offset-0">
      <div id="message-contact"></div>
      <?= $this->session->flashdata('succe_msg');
                      $this->session->unset_userdata('succe_msg');

                      $user_fullName = explode(' ',$user_details->user_name);
                       ?>
      <form method="post" action="<?php echo htmlspecialchars(base_url('/ControllerLogin/update_user_profile')); ?>" enctype='multipart/form-data' >
                        <input style="display:none;" type="text" class="form-control" id="id" name="id" value="<?= $user_details->id; ?>">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <label>Contact Person First Name</label>
              <input type="text" class="form-control" id="user_name" name="user_name" value="<?= $user_fullName[0]; ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <label>Contact Person Last Name</label>
              <input type="text" class="form-control" id="user_lname" name="user_lname" value="<?= $user_fullName[1]; ?>">
            </div>
          </div>
        </div>
        <!-- End row -->
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <label>Email</label>
              <input type="email" id="user_email" name="user_email" class="form-control" value="<?= $user_details->user_email; ?>" readonly="">
            </div>
          </div>
      	</div>
      	<div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <label>Phone</label>
              <input type="text" id="user_phone" name="user_phone" class="form-control" value="<?= $user_details->phone; ?>" max="10">
            </div>
          </div>
        </div>
<!--         <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>Contact Person Image</label>
				<input type="file" name="user_photo" id="user_photo" class="form-control">
            </div>
          </div>
        </div> -->
        <div class="row">
        	<div class="col-md-12">
        		<div class="form-group">
        			<label>Password</label>
        			<input type="password" name="user_password" id="user_password" class="form-control"  value="<?= $user_details->password; ?>">
        		</div>
        	</div>
        </div>
<!--         <div class="row">
        	<div class="col-md-12">
        		<div class="form-group">
        			<label>Confirm Password</label>
        			<input type="password" name="user_cpassword" id="user_cpassword" class="form-control" placeholder="Enter Confirm Password">
        		</div>
        	</div>
        </div> -->


        <div class="row add_bottom_30">
          <div class="col-md-6">
            <input type="submit" value="Update" class="btn_1" name="user_registration" id="user_registration">
          </div>
        </div>
      </form>
    </div>
	</div>
