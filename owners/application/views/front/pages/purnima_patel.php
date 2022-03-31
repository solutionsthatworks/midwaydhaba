

<!-- Set up your HTML -->

<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?= base_url('asset/'); ?>images/slider3.jfif" data-natural-width="1400" data-natural-height="350">
  <div id="subheader">
    <h1>Purnima Patel</h1>
  </div>
  <!-- End subheader --> 
</section>
<!-- End section --> 
<!-- End SubHeader ============================================ -->

<h1 class="main_title_in">Vice President Marketing &amp; Owner Relations

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
         	Ms. Purnima Patel is proud to be responsible for operational activities, leadership development and sales implementation for our company-owned hotels. She began her hospitality career in 1993 after obtaining a degree in Business Administration and has proven herself to be a capable businessperson with a strong ability to meet demands and exceed expectations. Her passion is making a real difference in the lives of associates and guests through excellence in every task she performs.
         	
         </p>
         <p>
         	She achieved General Manager of the Year recognition in 1999 from a group of six hotels currently owned by the company and has won several other accolades for leadership and community service. Ms. Patel was born in England and has lived and worked in the United States since 1980, where she completed her education. She is a happily married mother of three who shows equal devotion to her family and her position with our company.
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