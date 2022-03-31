

<!-- Set up your HTML -->

<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?= base_url('asset/'); ?>images/slider3.jfif" data-natural-width="1400" data-natural-height="350">
  <div id="subheader">
    <h1>Hirna Patel</h1>
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
         	Ms. Hirna Patel comes to MHO Hotels with extensive experience working with highly detailed information, making her perfect to lead our marketing efforts. She also has a level of education that indicates a strong interest in learning and growing to meet each new challenge put before her. In addition to a Bachelor of Science in Public Health from the University of Arizona in Tucson, she also hold a Master of Public Health from the University of New England in Portland, Maine.
         </p>
          <p>Prior to coming to MHO Hotels, her career focused on public health, providing her a skillset and background that is perfect for the unique challenges involved in safely and smartly advancing the interests of our clients in the hospitality industry. Ms. Hirna Patel has experience and education that involves the scientific, medical and governmental communities. Much of her work has been with projects that seek to control and eradicate infectious diseases.
          </p>
          <p> Among the core skills she has exhibited include strategic planning, data collection and analysis, collaboration, cross-functional leadership, problem-solving and more. She is also
competent in business office computing software including Microsoft Office and SAS software.</p>
          <p>
          Most recently, she has been employed at the Maricopa County Air Quality Department as a Database Management Assistant. Prior to that, she worked for the Maricopa County Department of Public Health Office of Vital Registration as an Administrative Assistant. She was also employed in the past by the University of California Medical Center Pain Management Center and Genentech. While these positions were not directly related to marketing, they proved her expert abilities in formulating and planning programs based on a wide range of available data. Having such a detail-oriented and data-centric person in charge of MHO Hotel’s marketing efforts will surely mean better plans and better implementation than if an inferior candidate were at the helm.
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