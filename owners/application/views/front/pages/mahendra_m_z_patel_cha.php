

<!-- Set up your HTML -->

<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?= base_url('asset/'); ?>images/slider3.jfif" data-natural-width="1400" data-natural-height="350">
  <div id="subheader">
    <h1>MAHENDRA (M.Z.) PATEL CHA</h1>
  </div>
  <!-- End subheader --> 
</section>
<!-- End section --> 
<!-- End SubHeader ============================================ -->

<h1 class="main_title_in">Deeply experienced hospitality management leader</h1>
<div class="container add_bottom_60">
  <div class="row">
    <div class="col-md-10" id="room_detail_desc">
      
      <div class="row">
        <div class="col-md-2">
          <h3></h3>
        </div>
        <div class="col-md-10" align="justify">
         <p>
         	Mr. M.Z. Patel is a deeply experienced hospitality management leader with strong industry ties and wide, profound business knowledge
         </p>
          <p>He is actively involved with leading industry associations and has successfully guided the development and growth of new initiatives within the industry. An experienced hotelier, he was previously an ambassador for the Eastern region of Asian American Hotel Owners Association and is currently an active member of the organization’s Awards Committee. From his many associations and memberships, he has an impressive list of contacts. </p>
          <p> Mr. M.Z. Patel is the immediate past president of EconoLodge Franchise Association (ELFA) and was a key figure in establishing better brand awareness and signage for this brand, including the first-ever EconoLodge television advertising campaign. He also created unique cross-membership opportunities for ELFA and AAHOA members. Among other achievements within the Choice Hotels brand is the translation of all training materials into the Gujarati language for better education of owners and staff.</p>
          <p>
          Mr. M.Z. Patel owns nearly 20 hotel franchises, including a Skybridge Inn &amp; Suites in Bordentown, New Jersey as well as a Days Inn and Best Western in Monmouth Junction, New Jersey. He also owns Knights Inn properties in Monroe, North Carolina plus Cartersville, Georgia and Columbia, South Carolina. Additional properties includes a HoJo Inn, a Comfort Suites, a Comfort Inn and a Four Points branded hotel and properties in other service-related industries, including a frozen yogurt store. 
			</P>
         <p>
         	In addition to working with the AAHOA, Mr. M.Z. Patel is a member of the New Jersey Restaurant Association, the New Jersey Hotel &amp; Motel Association, the American Hotel &amp; Motel Association, the Hotel Motel Engineers Association and many other local, state and national associations and boards. His industry awards and other recognition are too numerous to mention. He is the chief visionary and primary leader of MHO Hotels and holds ultimate responsibility for its decisions and actions.
         	
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