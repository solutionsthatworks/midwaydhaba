

<!-- Set up your HTML -->

<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?= base_url('asset/'); ?>images/slider3.jfif" data-natural-width="1400" data-natural-height="350">
  <div id="subheader">
    <h1>CHANDU PATEL CHA</h1>
  </div>
  <!-- End subheader --> 
</section>
<!-- End section --> 
<!-- End SubHeader ============================================ -->

<h1 class="main_title_in">An established turnaround specialist and self-made multimillionaire</h1>
<div class="container add_bottom_60">
  <div class="row">
    <div class="col-md-10" id="room_detail_desc">
      
      <div class="row">
        <div class="col-md-2">
          <h3></h3>
        </div>
        <div class="col-md-10" align="justify">
          <p>Mr. C.Z. Patel has developed or purchased and managed 16 hotel properties over thelast 25 years, including properties in Connecticut, Georgia, New Jersey, Pennsylvania, North Carolina and South Carolina. Working alongside his younger brother Mr. M.Z. Patel, C.Z. continues to excel in management and business development. </p>
          <p> Among the properties he has successfully turned around is the Sheraton Four Points in Meriden, Connecticut, a property with a significant negative cash flow that he purchased in 2006. By 2007, the property was well on its way to a positive cash flow with a strong management team, re-positioned food and beverage operations with a licensed restaurant location and more.</p>
          <p>
          Another example comes from just a few years earlier. In 2003, Mr. C.Z. Patel began managing the declining Comfort Inn in Lawrenceville, Georgia, quickly
increasing its revenue by nearly 50 percent and its occupancy rate from less than 46 percent to more than 62 percent. He recognized a nearly 30 percent capital gain when he sold the property in 2006.
			</P>
         <p>
         	Other examples of Mr. C.Z. Patel’s turnaround abilities include a distressed Econo Lodge purchased in 1987 and sold in 1988 for a 50 percent capital gain, a package of 5 hotels purchased from Chemical Bank in 1990 from which he recouped nearly all of his purchase price from the sale of just of the 2 hotels and the financial turnaround of an under-performing Econo Lodge branded property in Bordentown, New Jersey in 1999, which he still owns.
         	
         </p>
         <p>
         	Additionally, Mr. C.Z. Patel is active in the industry as a member of the American Hotel &amp; Motel Association, the New Jersey Hotel &amp; Motel Association and the Asian American Hotel Owners Association, which he served as Regional Director in 1998-1999.
         	
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