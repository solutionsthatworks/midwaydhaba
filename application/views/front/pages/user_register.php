<style type="text/css">
  .formerroron{
    margin-top: 30px;
  }
</style>
<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?= base_url('asset/'); ?>images/slider3.jfif" data-natural-width="1400" data-natural-height="350">
  <div id="subheader">
    <h1>User Register</h1>
  </div>
  <!-- End subheader --> 
</section>
<!-- End section --> 
<!-- End SubHeader ============================================ -->

	<div class="container margin_60_35">
     <div class="col-md-7 col-md-offset-0">
      <div id="message-contact"></div>
      <?= $this->session->flashdata('success_msg');
                      $this->session->unset_userdata('success_msg'); ?>
      <form method="post" action="<?php echo htmlspecialchars(base_url('Users-Register')); ?>" enctype='multipart/form-data' >
              <!-- <input type="text" class="form-control" id="unique_id" name="unique_id" value="<?= 'MHO'.rand(0,999); ?>" required="" style="opacity: 0;"> -->

        <div class="row">
          <div class="col-md-8 col-sm-8">
            <div class="form-group">
              <label>First Name</label>
              <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter Your First Name" required="">
            </div>
          </div>
          <div class="col-md-4 formerroron">
            <?= form_error('user_name'); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <div class="form-group">
              <label>Last Name</label>
              <input type="text" class="form-control" id="user_lname" name="user_lname" placeholder="Enter Your Last Name" required="">
            </div>
          </div>
          <div class="col-md-4 formerroron">
            <?= form_error('user_lname'); ?>
          </div>
        </div>
        <!-- End row -->
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <div class="form-group">
              <label>Email</label>
              <input type="email" id="user_email" name="user_email" class="form-control" placeholder="Enter Email" required="">
            </div>
          </div>
          <div class="col-md-4 formerroron">
            <?= form_error('user_email'); ?>
          </div>
      	</div>
      	<div class="row">
          <div class="col-md-8 col-sm-8">
            <div class="form-group">
              <label>Phone</label>
              <input type="number" id="user_phone" name="user_phone" class="form-control" placeholder="Enter Phone number">
            </div>
          </div>
          <div class="col-md-4 formerroron">
            <?= form_error('user_phone'); ?>
          </div>
        </div>
<!--         <div class="row">
          <div class="col-md-8">
            <div class="form-group">
              <label>Contact Person Image</label>
				<input type="file" name="user_photo" id="user_photo" class="form-control"  required="">
            </div>
          </div>
          <div class="col-md-4 formerroron">
            <?= form_error('user_photo'); ?>
          </div>
        </div> -->
        <div class="row">
        	<div class="col-md-8">
        		<div class="form-group">
        			<label>Password</label>
        			<input type="password" name="user_password" id="user_password" class="form-control" placeholder="Enter Your Password"  required="">
        		</div>
        	</div>
          <div class="col-md-4 formerroron">
            <?= form_error('user_password'); ?>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-8">
        		<div class="form-group">
        			<label>Confirm Password</label>
        			<input type="password" name="user_cpassword" id="user_cpassword" class="form-control" placeholder="Enter Confirm Password"  required="">
        		</div>
        	</div>
          <div class="col-md-4 formerroron">
            <?= form_error('user_cpassword'); ?>
          </div>
        </div>


        <div class="row add_bottom_30">
          <div class="col-md-6">
            <input type="submit" value="Submit" class="btn_1" name="user_registration" id="user_registration">
          </div>
        </div>
      </form>
    </div>
	</div>
