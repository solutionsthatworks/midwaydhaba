

<!-- Set up your HTML -->

<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?= base_url('asset/'); ?>images/slider3.jfif" data-natural-width="1400" data-natural-height="350">
  <div id="subheader">
    <h1>Keshin Patel CHO</h1>
  </div>
  <!-- End subheader --> 
</section>
<!-- End section --> 
<!-- End SubHeader ============================================ -->

<h1 class="main_title_in">Valuable Leader for the Company</h1>
<div class="container add_bottom_60">
  <div class="row">
    <div class="col-md-10" id="room_detail_desc">
      
      <div class="row">
        <div class="col-md-2">
          <h3></h3>
        </div>
        <div class="col-md-10" align="justify">
         <p>
         	Mr. Keshin Patel has established himself as a valuable leader for the company because of deep his commitment to the range of projects and industries to which he has set his mind. He is pleased to bring his extensive and varied experience to MHO Hotels. As an enthusiastic young leader, he offers energy and passion to the company that combine well with his skills and education to help drive innovation. A hotelier himself with a very strong business background, he understands well the practical, financial and operational challenges and trials of the hospitality industry.  
         </p>
          <p>Mr. Keshin Patel has established himself as a valuable leader for the company because of deep his commitment to the range of projects and industries to which he has set his mind. He is pleased to bring his extensive and varied experience to MHO Hotels. As an enthusiastic young leader, he offers energy and passion to the company that combine well with his skills and education to help drive innovation. A hotelier himself with a very strong business background, he understands well the practical, financial and operational challenges and trials of the hospitality industry. </p>
          <p> Other achievements in recent years include being elected a representative of the Indian Embassy to escort Prime Minister Narendra Modi during a visit to the West Coast of the United States in 2015. He was also elected a representative to host Regional PravasiBhartiya Divas 2015 in Los Angeles.</p>
          <p>
          Mr. Keshin Patel achieved a Bachelor of Science in Business Management from Middlesex University in London. Before turning to the visa facilitation industry and hotel development, he was involved in the dry cleaning industry in the United Kingdom and Arizona as a store manager and ultimately a regional manager for a respected chain in the Southwestern United States. 
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