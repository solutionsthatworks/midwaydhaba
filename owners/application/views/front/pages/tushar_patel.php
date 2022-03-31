

<!-- Set up your HTML -->

<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?= base_url('asset/'); ?>images/slider3.jfif" data-natural-width="1400" data-natural-height="350">
  <div id="subheader">
    <h1>Tushar Patel</h1>
  </div>
  <!-- End subheader --> 
</section>
<!-- End section --> 
<!-- End SubHeader ============================================ -->

<h1 class="main_title_in">Senior Vice President Marketing
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
         	Working for the United States Department of Justice for the past 27 years and currently serving as Chief of Health Care Quality and Risk Management in Washington DC, Dr. Tushar Patel provides his oversight to 122 Federal Bureau of Prisons, Health Care Quality and Risk Management programs including seven major Federal Medical Centers.  He also serves as the Program Manager for the Asian American and Pacific Islander for the agency. 
         </p>
          <p>Besides, his Government position, Dr. Patel provides leadership and oversight to various non-profit organizations in New Jersey.  He serves as the President of Indian Health Camp of NJ (IHCNJ) since 2006, and provides his vision, expertise and dedicated services to lead a team of volunteers to conduct free Health Screening and Disease Prevention and Awareness Fairs throughout New Jersey.    Since 1999, the organization provided more than 10,000 free screenings for needy people in South Asian communities for chronic diseases screening of diabetes, hypertension, hypercholesterolemia, cardiac diseases, eye disorders such as glaucoma and diabetic retinopathy, prostate, cervical and breast cancer screening and awareness education, oral health, pharmacy and physical therapy counseling and dietary and weight management to people above the age of 45 years without any medical insurance. </p>
          
          <p>Dr. Patel provides his service to Indo-American Cultural Foundation of Central Jersey (IACFNJ) since 2005 and currently serving as the President.  He also served as a Secretary for the Global Organization of People of Indian Origin (GOPIO) Central Jersey Chapter and currently serving as the President since 2017.  Dr. Patel is serving as the Chairperson for GOPIO International Health Council. 
         </p>
         <p>
         	Dr. Patel received the United States Department of Justice Community Service Award from the United States Attorney General in 2012 for his community service involvement, Gujarat Gaurav Award from Bruhud Gujaratii Samaj of NY in October 2013 for his community involvement at various levels in Indian community, Community Leadership from Indian American Community and Indo-American Independent Pharmacy Owners in December 2013, Humanitarian Award from Rotary Club of Plainsboro in March 2014 and Community Service Leadership Award from Rotary International District 71510 in March 2014. 
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