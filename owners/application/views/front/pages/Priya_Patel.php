

<!-- Set up your HTML -->

<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?= base_url('asset/'); ?>images/slider3.jfif" data-natural-width="1400" data-natural-height="350">
  <div id="subheader">
    <h1>Priya Patel</h1>
  </div>
  <!-- End subheader --> 
</section>
<!-- End section --> 
<!-- End SubHeader ============================================ -->

<h1 class="main_title_in">An Efficient Young Leader</h1>
<div class="container add_bottom_60">
  <div class="row">
    <div class="col-md-10" id="room_detail_desc">
      
      <div class="row">
        <div class="col-md-2">
          <h3></h3>
        </div>
        <div class="col-md-10" align="justify">
         <p>
         	Ms. Priya Patel is an efficient young leader who has already acquired significant experience that makes her perfect for her role as Senior Vice President &amp; CFO of MHO Hotels. She brings with her extensive experience in hospitality operations, governmental compliance, accounting and taxes and is licensed as a Certified Public Accountant in New Jersey. She earned a Bachelor of Science degree in accounting from Rutgers Business School in 2011.
         </p>
          <p>Most recently, she has worked as the operations officer for Welcome Hospitality Management in Monmouth Junction, New Jersey, where she had wide-ranging responsibilities contributing to business development efforts and driving revenue to help meet hotel objectives. She was also responsible for revising and modernizing standard operating procedures based on management and
employee feedback, working with properties regarding revenue and improving hotel process efficiency.
         </p>
          <p> Prior to coming to the hotel industry, Ms. Priya Patel was a tax senior at Wilkin &amp; Guttenplan PC and was responsible for preparing tax documents for individuals of high net worth as well as partnerships and more. Since acquiring her degree she has made steady and impressive progress moving up the leadership chain to acquire the skills, knowledge and experience necessary for her current position with MHO Hotels.</p>
          <p>
          Ms. Priya Patel is a member of the American Hotel &amp; Motel Association and the Asian American Hotel Owners Association and is pursuing other crucial memberships to enhance her networking opportunities and expand her presence in the industry.
			</P>
         
         
          
          
        </div>
        <!-- End col-md-9  --> 
      </div>
      <!-- End row  -->
    
     </div>
    <!-- End col -->
    
  </div>
  <!-- End row --> 
  
</div>
<!-- End container -->

<div id="dtBox"></div>
<!-- End datepicker -->


<!-- End footer -->

<div id="toTop"></div>
<!-- Back to top button --> 

<script type="text/javascript">
    $(document).on("click",".book_now",function(){
      var hotel = $("#hotel").val();
      var url = window.location.pathname;
        alert(url);
      if(hotel != ''){
        $.ajax({
                type : "POST",
                url  : "<?php echo base_url('ControllerHome/getCountClick'); ?>",
                data: {hotel: hotel,url:url},
                success: function(res) {
                    console.log(res);
                    //alert(res);
                }
            });
      }
    });
  </script>