

<!-- Set up your HTML -->

<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?= base_url('asset/'); ?>images/slider3.jfif" data-natural-width="1400" data-natural-height="350">
  <div id="subheader">
    <h1>Piyush Patel CHO</h1>
  </div>
  <!-- End subheader --> 
</section>
<!-- End section --> 
<!-- End SubHeader ============================================ -->

<h1 class="main_title_in"></h1>
<div class="container add_bottom_60">
  <div class="row">
    <div class="col-md-10" id="room_detail_desc">
      
      <div class="row">
        <div class="col-md-2">
          <h3></h3>
        </div>
        <div class="col-md-10" align="justify">
         <p>
         	Mr. Piyush Patel has proven himself to be a well-rounded person, a deeply experienced businessman and a community leader. For the last decade, Piyush has been a successful and respected 7-Eleven convenience store franchisee and is the current secretary for the 7-Eleven franchisee association of Pennsylvania, the Delaware Valley Franchisee Owners Association. Over the last 10 years, he has proven is commitment to customer service, something that will be an asset as he works toward client goals for MHO Hotels.
         </p>
          <p>Piyush earned an MS in Applied Chemistry from the New Jersey Institute of Technology in 1992 and worked for 12 years as a senior chemist in the chemical and oil industry before working for 10 years as a senior scientist for the pharmaceutical industry. </p>
          <p> As an Indian American and resident of New Jersey for 30 years, Mr. Piyush Patel is an active participant in efforts of advancement and betterment for Indian Americans. He is the former president of Anand Pragati Mandal of the Tri-State region and is also a former treasurer for the Princeton Lions Club. Additionally, he is an an executive committee member with both the Sardar Patel University Alumni Association of New Jersey and the Central Jersey Business Association. He is an executive board member in the new Tri-State Business Association as well. 
         	
         </p>
         
          
          
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