

<!-- Set up your HTML -->

<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?= base_url('asset/'); ?>images/slider3.jfif" data-natural-width="1400" data-natural-height="350">
  <div id="subheader">
    <h1>Dipal Patel</h1>
  </div>
  <!-- End subheader --> 
</section>
<!-- End section --> 
<!-- End SubHeader ============================================ -->

<h1 class="main_title_in">Public Relations

</h1>
<div class="container add_bottom_60">
  <div class="row">
    <div class="col-md-10" id="room_detail_desc">
      
      <div class="row">
        <div class="col-md-2">
          <h3>
        </div>
        <div class="col-md-10" align="justify">
         <p>
         	Ms. Dipal Patel has proven herself a valuable asset in other fields over a lengthy career and is eager to prove an equal commitment to and passion for the hospitality industry and the clients and goals of MHO Hotels. She holds a Diploma of Pharmacy from Sardar Patel University and has more than 24 years experience in the pharmaceutical and bioanalytical industries. 
         	
         </p>
         <p>
         	She was employed as an analyst and then a lab supervisor for 11 years. For the past nearly decade and a half, she has been involved in bioanalytical research and holds a management position at a prestigious contract research firm.
         	
         </p>
         <p>
         	Additionally, she works with a number of organizations and is active in the Indian American community. She was a committee member of Anand Pragati Mandal and is currently a member of the Sardar Patel University Alumni Association and in the Central Jersey Business Association. She never turns away from an opportunity to grow or help others grow and evolve.
         	
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