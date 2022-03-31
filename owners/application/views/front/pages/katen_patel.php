

<!-- Set up your HTML -->

<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?= base_url('asset/'); ?>images/slider3.jfif" data-natural-width="1400" data-natural-height="350">
  <div id="subheader">
    <h1>Katen Patel</h1>
  </div>
  <!-- End subheader --> 
</section>
<!-- End section --> 
<!-- End SubHeader ============================================ -->

<h1 class="main_title_in">Vice President Owner Relations &amp; Procurement<br>
(20 Years in Hospitality)
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
         	Katen is a native to Portland Oregon and a second-generation hotelier.  His family moved to Portland Oregon in 1975 and purchased a small independent property in Milwaukie.  They owned and operated the motel which served as both a place of business and a home for his family as the business grew.
			</p>
			<p>
Katen’s Education in the hospitality industry began as a youth helping at his family’s hotel after school and on weekends. From checking in guests and doing laundry to sweeping the parking lot, he learned the industry from the ground up. 
			</p>
     <p>
      
       Today, Katen owns and operates multiple branded and independent hotel properties overseeing daily operations and marketing initiatives. He is the President of K10 Hotels LLC, a Hotel Management, Investment and Consulting Company in Happy Valley Oregon. He first served on the Econo Lodge Franchisee Association on several marketing and Co-Op Boards and later was elected to become President of the Association in 2015.  He is still serving the board and has been reelected as Vice Chair, with over 400 hotels nationally as members. He is a graduate of Portland State University and holds a B.S. in Economics and Finance and a strong supporter of the PSU Alumni Business Network.  He is an avid adventurist and world traveler.  His goal is to draw upon experiences in travel and hospitality to provide his clients and guests with the best experience possible. 
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