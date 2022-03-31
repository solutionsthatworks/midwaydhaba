

<!-- Set up your HTML -->

<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?= base_url('asset/'); ?>images/slider3.jfif" data-natural-width="1400" data-natural-height="350">
  <div id="subheader">
    <h1>Brandi Connor</h1>
  </div>
  <!-- End subheader --> 
</section>
<!-- End section --> 
<!-- End SubHeader ============================================ -->

<h1 class="main_title_in">Business Development <br> (8 Years in Hospitality)
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
         	As the founder and owner of Travel Reputation Services, LLC, Brandy strives to attain a remarkable level of excellence and commitment to all her clients. Specializing in the Travel and Lodging industries with extensive experience marketing and advertising properties for over sixteen year, she has succeeded in transition from just an idea and vision to providing reliable solutions helping thousands of clients worldwide. 
         </p>
          <p>Through her business ventures, she has helped numerous struggling clients gain authority online and increase their overall long-term profits. Brandy’s knowledge remains integral to the growth of business to her clients as she leads her team to transform their online reputation by optimizes their review sites, taking effective measures to boost their online traffic and thereby attracting them new customers.</p>
          <p>Brandy’s insight as an entrepreneur is relevant to these clients as she delivers goal-oriented strategies that works best for them. Besides rendering professional services to hoteliers and property owners, Brandy is passionate about giving back to the community, providing mentorship to new and struggling business owners through SCORE.org (a partner to the SBA) and well as providing food, shelter and resources to those in need through charitable organizations such as Tiny Smiling Faces. Having faced several struggles and setbacks in her life including childhood poverty, she is passionate about giving aid to those in need. She finds her work rewarding as it gives her the opportunity to help others grow a profitable business and also impact the lives of many in a dramatically positive way. 
         	
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