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
      <form method="post" action="<?php echo htmlspecialchars(base_url('Change-Password')); ?>" enctype='multipart/form-data' >
        <!-- End row -->
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <label>Please enter your new password</label>
              <input type="hidden" id="id" value="<?php echo $id; ?>" required="" name="id" class="form-control" placeholder="">
              <input type="password" id="password" required="" name="password" class="form-control" placeholder="Enter new password">
            </div>
          </div>
      	</div>


        <div class="row add_bottom_30">
          <div class="col-md-6">
            <input type="submit" value="Change Password" class="btn_1" name="reset_password" id="reset_password">
          </div>
        </div>
      </form>
      
    </div>
	</div>
