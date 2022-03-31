
<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?= base_url('asset/'); ?>images/slider3.jfif" data-natural-width="1400" data-natural-height="350">
  <div id="subheader">
	  <h1></h1>
	<h1></h1>
  </div>
  <!-- End subheader --> 
</section>
<!-- End section --> 
<!-- End SubHeader ============================================ -->


	<div class="container margin_60_35">
     <div class="col-md-7 col-md-offset-4">
      <div id="message-contact"></div>
      <?= 
      "<span style='color:red'>".validation_errors()."</span>";
      echo $this->session->flashdata('success_msg');
                      $this->session->unset_userdata('success_msg'); ?>
      <form method="post" action="<?php echo htmlspecialchars(base_url('/ControllerLogin/user_login')); ?>" enctype='multipart/form-data' >
<!--         End row -->
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="form-group">
              <label>Email Address</label>
              
                    <i class="tds-tooltip-icon"></i>
                  
              <input type="email" id="user_email" name="user_email" class="form-control" placeholder="Enter Email" autofocus>
            </div>
          </div>
      	</div>
        <div class="row">
        	<div class="col-md-6 col-sm-6">
        		<div class="form-group">
        			<label>Password</label>
        			<input type="password" name="user_password" id="user_password" class="form-control" placeholder="Enter Your Password" autofocus>
        		</div>
        	</div>
        </div>
        

        <div class="row add_bottom_15">
          <div class="col-md-6">
            <input type="submit" value="Sign In" class="btn_full" name="signin" id="signin">
          </div>
        </div>
        <div class="row ">
        	<div class="col-md-6 col-sm-6">
        			<p align="center"><a href="<?= base_url('ForgotPassword'); ?>" style="color:red;" >Forgot Password ?</a></p>
        			
        		</div>
        </div>
        
        <div class="row">
        	<div class="col-md-6 col-sm-6">
        		<input type="button" value="Register" class="btn_outline" name="register" id="register" onclick="location.href='<?= base_url('Users-Register'); ?>'">
<!--
        		<div class="form-group">
        			<p><a href="" style="color:red;">Register</a></p>
        			
        		</div>
-->
        	</div>
        </div>
      </form>
      
    </div>
	</div>


