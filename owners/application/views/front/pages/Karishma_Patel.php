

<!-- Set up your HTML -->

<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?= base_url('asset/'); ?>images/slider3.jfif" data-natural-width="1400" data-natural-height="350">
  <div id="subheader">
    <h1>Karishma Patel</h1>
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
         	Ms. Karishma Patel brings an excellent educational background and significant experience in administration to MHO Hotels. This motivated and intelligent young woman achieved a Master’s in Public Administration from San Jose State University and has worked extensively in health and hospital emergency preparedness as well as with a prominent hospitality software company. The skills she has developed in these fields have provided her a background that brings much-needed diversity and depth to the overall skillset of the MHO Hotels team.
         </p>
          <p>Ms. Karishma Patel is fluent in English, Hindi and Gujarati, giving her the ability to communicate with most of the company’s staff and clients on their own terms. Her strong leadership, communication, interpersonal and coordination skills also benefit the company. She is also perhaps the most skilled member of our team in regards to today’s popular
software packages, including Microsoft Office, PowerPoint, QuickBooks and Excel.
          </p>
          <p> Most recently, she was employed as a Health Emergency Preparedness Analyst for San Mateo County Emergency Medical Services in South San Francisco, California where she worked on a number of large and small initiatives to improve the preparedness of the area for emergencies and make sure all parties were on board with current plans and goals. Prior to that, she worked briefly for the Santa Clara County Public Health Department Preparedness Program in San Jose, California.</p>
          <p>
          This is not her first position in the hospitality industry, however. Concurrent with her other recent employment, she also worked for hotel/motel software company Anand Systems, where she assisted with planning a number of conventions, handled invoicing of clients and dealt with the company’s bank accounts and payment processing. In addition to her MPA, she holds a Bachelor of Arts degree in Political Science from San Francisco State University. 
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