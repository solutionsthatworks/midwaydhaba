

<!-- Set up your HTML -->

<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?= base_url('asset/'); ?>images/slider3.jfif" data-natural-width="1400" data-natural-height="350">
  <div id="subheader">
    <h1>John Bereznak</h1>
  </div>
  <!-- End subheader --> 
</section>
<!-- End section --> 
<!-- End SubHeader ============================================ -->

<h1 class="main_title_in">Vice President Training


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
         	My name is John Bereznak.  I attended Trenton State college receiving a degree in secondary social studies education and elementary education.  I have attained the status of being a Highly Qualified Teacher in the state of New Jersey. I have been an elementary school teacher since 1979 to the present teaching Kindergarten through second grades.  During that time I have also been employed at the same hotel establishment, first under Howard Johnsons, then Executive Inn, next Econo Lodge, then Econo Lodge Inn and Suites, and finally at Skybridge Inn and Suites.  I am now part of the first MHO hotel, being front desk manager.  Throughout my hotel career I have been in charge of scheduling, training, customer service, direct billings, hiring, and reservations.  Both careers have been rewarding and exciting.  Looking forward to many more years in both professions.
         	
         </p>
         <p>
         	On a personal note, I like following dirt modified car racing, NASCAR races, and country concerts.  I also collect Trans Am cars and have a huge collection of Annalee dolls. I am a homeowner and have resided at the same address since 1960, taking over the family home in 1981.
         	
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