

<!-- Set up your HTML -->

<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?= base_url('asset/'); ?>images/slider3.jfif" data-natural-width="1400" data-natural-height="350">
  <div id="subheader">
    <h1>Elliot Ginsburg</h1>
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
         	“Elliot Ginsburg of Garner, Ginsburg &amp; Johnsen, P.A. is our outside counsel.  He has represented franchisees since his legal career began in 2010 and has been working with MHO since its inception. His background representing franchisees brings a unique perspective to our franchise model. 
         </p>
          <p>Elliot is an editor of the Franchise Law Journal.  He has presented programs on various legal topics at the Forum on Franchising of the American Bar Association  and the International Franchise Association Legal Symposium.  He has also presented to the State Bar of Georgia Franchise and Distribution Law Section, the Solo and Small Firm meeting at the Form on Franchising, and the National Franchise Institute in Colorado.  He has been selected as a Rising Star by Minnesota Super Lawyers from 2013 through 2020.</p>
          <p> Elliot also co-authored a book in 2018 on developments in franchise law during the prior year and presented the book with his co-author at a conference to hundreds of franchise lawyers.</p>
          <p>
          In addition to his franchise practice, Elliot represents breweries, distilleries, and wineries in many areas of law, including corporate formation, securities offerings, employment issues, regulatory matters, and trademark matters.  He has spoken at numerous conferences on various topics related to the alcoholic beverage industry and published articles related thereto.  Elliot also served on the Board of Directors at Fair State Brewing Cooperative, one of the first cooperative breweries in the country.” 
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