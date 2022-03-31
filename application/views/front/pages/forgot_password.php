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
      echo $this->session->flashdata('success_msg');
                      $this->session->unset_userdata('success_msg'); ?>
      <form method="post" action="<?php echo htmlspecialchars(base_url('ForgotPassword')); ?>" enctype='multipart/form-data' >
        <!-- End row -->
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <label>Please enter your registered email Id to reset password</label>
              <input type="email" id="user_email" required="" name="user_email" class="form-control" placeholder="Enter Email">
            </div>
          </div>
      	</div>


        <div class="row add_bottom_30">
          <div class="col-md-6">
            <input type="submit" value="Submit" class="btn_1" name="send" id="signin">
          </div>
        </div>
      </form>
      
    </div>
	</div>
