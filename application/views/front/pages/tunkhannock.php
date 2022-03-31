  <?php
	$sessionDetail = $this->session->userdata( 'userdata' );
	@$uid = $sessionDetail[ 'id' ];
	@$uname = $sessionDetail[ 'user_name' ];
	@$uemail = $sessionDetail[ 'user_email' ];
//	echo $uid;
//    echo CI_VERSION;
?> 

<!-- Set up your HTML -->

<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?= base_url('asset/'); ?>images/slider3.jfif" data-natural-width="1400" data-natural-height="350">
  <div id="subheader">
    <h1>MHO Inn &amp; Suites</h1>
  </div>
  <!-- End subheader --> 
</section>
<!-- End section --> 
<!-- End SubHeader ============================================ -->

<h1 class="main_title_in">MHO Inn &amp; Suites</h1>
<div class="container add_bottom_60">
  <div class="row">
   
    <div class="col-md-8" id="room_detail_desc">
      <div id="single_room_feat">
        <ul>
          <li><i class="icon_set_1_icon-7"></i>Free Wifi</li>
<!--			<li><i class="icon_set_2_icon-116"></i>Kids stay free</li>-->
          <li><i class=" icon_set_1_icon-59"></i>Vending machine</li>
          <li><i class="icon_set_1_icon-21"></i>Outdoor Parking</li>
<!--          <li><i class=" icon_set_1_icon-13"></i>Wheelchair Accessible</li>-->
          <li><i class=" icon_set_1_icon-91"></i>Free local calls</li>
          <!--                <li><i class="icon_set_2_icon-106"></i>Safe box</li> -->
        </ul>
        
      </div>
     
      <div class="row">
        <div class="col-md-3">
          <h3>Description</h3>
        </div>
        <div class="col-md-9">
          <p align="justify"> MHO Inn &amp; Suites offers air-conditioned accommodations in Tunkhannock. There is a children's playground and guests can make use of free WiFi and free private parking.</P>
<p align="justify">
	At the motel the rooms are equipped with a desk, a flat-screen TV and a private bathroom.</p>

<p align="justify">
Scranton is 28 mi from Maplehurst Motel, while Wilkes-Barre is 30 mi from the property. The nearest airport is Wilkes-Barre/Scranton International Airport, 24 mi from the accommodations.

We speak your language!</p>
          
          <!-- End row  -->
          
          <div class="row">
           <h4>Hotel Amenities</h4>
          <p> </p>
            <div class="col-md-6 col-sm-6">
              <ul class="list_ok">
                <li>Tea/Coffee Maker in All Rooms </li>
                <li>Garden</li>
                <li>WiFi is available in all areas </li>
                <li>Free private parking is possible on site </li>
                <li>Daily housekeeping</li>
                <li>Vending Machines</li>
                <li>Non-smoking rooms</li>
                
              </ul>
              
            </div>
<!--
            <div class="col-md-6 col-sm-6">
              <ul class="list_ok">
                
                <li>Government Travelers: FEMA Approved  </li>
                <li>Mass Transit </li>
                <li>Racing</li>
                <li>Gym</li>
                <li>Restaurant Nearby</li>
               
              </ul>
            </div>
-->
          </div><br>
          
          <div class="row">
           <h4>Room facilities</h4>
          <p> </p>
            <div class="col-md-6 col-sm-6">
              <ul class="list_ok">
                <li>Refrigerator  </li>
                <li>Hair Dryer</li>
                
                
              </ul>
            </div>
            <div class="col-md-6 col-sm-6">
              <ul class="list_ok">
                
                <li>Microwave  </li>
                <li>Air-conditioning</li>
                
              </ul>
            </div>
          </div>
          
<!--
          <div class="row">
           <h4>Accessibility Amenities</h4>
          <p> </p>
            <div class="col-md-6 col-sm-6">
              <ul class="list_ok">
                <li>Wheelchair Accessible</li>
                
              </ul>
            </div>
            
          </div>
-->
<!--
          <div class="row">
            <h4>Cleaning and safety practices</h4>
            <div class="col-md-6 col-sm-6">
              <ul class="list_ok">
                
                <li>Daily house keeping available</li>
                <li>Cleaned with disinfectant</li>
				</ul>
			  </div>
               <div class="col-md-6 col-sm-6">
                <ul class="list_ok">
                <li>Contactless check-in</li>
                <li>Personal protective equipment</li>
                
              </ul>
            </div>
          </div>
-->
          
        </div>
        <!-- End col-md-9  --> 
      </div>
<!--
      <div class="row">
        <div class="col-md-3">
          <h3>Nearby Attractions</h3>
        </div>
        <div class="col-md-9">
          <p align="justify"> Roebling Museum, Waterfront Park, CURE Insurance Arena, Trenton War Memorial Theater, Old Barracks Museum, Six Flags Great Adventure, New Egypt Speedway Fort Dix</p>
          
          
          
        </div>
        
      </div>
-->
      <div class="row">
        <div class="col-md-3">
          <h3>Hotel Alerts</h3>
        </div>
        <div class="col-md-9">
          <p align="justify"> Fire Alarm and smoke detectors</p>
          
          <!-- End row  -->
          
        </div>
        <!-- End col-md-9  --> 
      </div>
      <div class="row">
        <div class="col-md-3">
          <h3>About Guest room</h3>
        </div>
        <h4 >Beautifully furnished four types of rooms</h4>
        <div class="col-md-9">
          
            <div>
              <ul class="list_ok">
                <li>Delux Kign Room</li>
                <li>Superior Double Room</li>
                <li>King Room</li>
                <li>Standard Double Room</li>
                
              </ul>
            </div>
          
          <!-- End row  -->
          
        </div>
        <!-- End col-md-9  --> 
      </div>
      <div class="row">
        <div class="col-md-3">
          <h3>Summary</h3>
        </div>
        
        <div class="col-md-9">
          
            <div>
              <p>Tastefully furnished rooms with comfortable beds,  refrigerator,  microwave,  TV,   hair dryer,  in-house phone </p>
            </div>
          
          <!-- End row  -->
          
        </div>
        <!-- End col-md-9  --> 
      </div>
      <!-- End row  -->
      
      
      <hr>
      <div class="row">
        <div class="col-md-3">
          <h3>Reviews</h3>
          <a href="#" class="btn_1 add_bottom_15" data-toggle="modal" data-target="#myReview">Leave a review</a> </div>
        <div class="col-md-9">
          <div id="score_detail"><span>3.9</span>Good <small>(Based on 98 reviews)</small></div>
          <!-- End general_rating -->
          <div class="row" id="rating_summary">
            <div class="col-md-6">
              <ul>
                <li>Cleanliness 
                  <!--
                                    <div class="rating">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star-empty"></i>
                                            <i class="icon-star-empty"></i>
                                    </div>
--> 
                </li>
                <li>Property
                  <div class="rating"> 
                    <!--
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star-empty"></i>
--> 
                  </div>
                </li>
              </ul>
            </div>
            <div class="col-md-2">
              <ul>
                <li>Price
                  <div class="rating"> 
                    <!--
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star-empty"></i>
                                            <i class="icon-star-empty"></i>
--> 
                  </div>
                </li>
                <li>Service
                  <div class="rating"> 
                    <!--
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star-empty"></i>
--> 
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- End row -->
          
          <hr>
          <div class="review_strip_single"> <img src="<?= base_url('asset/') ?>images/avatar3.jpg" alt="" class="img-circle"> <small> </small>
            <h4>Anonymous</h4>
            <p> "It has been called a hidden gem with bread and gas next door;  worth the value and ample praises for its friendly staff and clean rooms" </p>
            <div class="rating"> <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i> </div>
          </div>
          <div class="review_strip_single"> <img src="<?= base_url('asset/') ?>images/avatar3.jpg" alt="" class="img-circle"> <small> a month ago on Google</small>
            <h4>Trypp Adams</h4>
            <p> "I booked this on bookin dt com. Check in is a little goofy as you stand outside and communicate through a small window. The room was nice, clean and quiet. They seem to be also known as the Skybridge Inn and Suites. All in all, great value and good nights sleep." </p>
            <div class="rating"> <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i> </div>
          </div>
          <!-- End review strip -->
          
          <div class="review_strip_single"> <img src="<?= base_url('asset/') ?>images/avatar3.jpg" alt="" class="img-circle"> <small> 5 Month ago on Expedia</small>
            <h4>Expedia reviewer</h4>
            <p> "I am truly happy with hotel. Overall, the property itself truly needs updating and modernization. However, aside from this, I enjoyed my stay. …" </p>
            <div class="rating"> <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i> </div>
          </div>
          <!-- End review strip -->
          
          <div class="review_strip_single last"> <img src="<?= base_url('asset/') ?>images/avatar3.jpg" alt="" class="img-circle"> <small> 4 month ago on Google</small>
            <h4>Mark Yorke</h4>
            <p> "Best rates within 60 miles. Excellent housekeeping. Clean and safe. Polite and helpful. It was a blessing to stay there" </p>
            <div class="rating"> <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i> </div>
          </div>
          <!-- End review strip --> 
          
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-3">
          <h3>Policies</h3>
        </div>
        <div class="col-md-9">
          <ul id="policies">
            <li><i class="icon_set_1_icon-83"></i>
              <h5>Check-in and check-out.</h5>
              <p>Check in - 	03:00 PM </p>
              <p>Check out - 	11:00 AM </p>
              <p>Minimum check-in age - 18 </p>
            </li>
            <li><i class=" icon_set_1_icon-77"></i>
              <h5>Cancellation</h5>
              <p>Cancel your reservation before 24 hours, and you'll get a full refund.
                After that, you'll be charged for the first night of your stay plus taxes and fees.
                Times are based on the property’s local time.</p>
            </li>
            <li><i class="icon_set_1_icon-47"></i>
              <h5>Smoking</h5>
              <p>This is a smoke-free hotel</p>
            </li>
            <li><i class=" icon_set_1_icon-22"></i>
              <h5>Pets</h5>
              <p>Pets are allowed on request. Charges may apply.</p>
            </li>
            <li><i class="icon_set_1_icon-35"></i>
              <h5>Payments</h5>
              <p>Payments are accepted by Cash or Credit cards.</p>
            </li>
            <!--
                    <li><i class="icon_set_1_icon-13"></i><h5>Disable</h5>
                    <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos. Unum etiam cum te, an elit assueverit vix, falli aliquam complectitur ex ius.</p>
                    </li>                    
-->
          </ul>
        </div>
      </div>
    </div>
    <!-- End col -->
    
    <div class="col-md-4" id="sidebar">
      <div class="theiaStickySidebar">
        <div class="box_style_1">
          <div id="message-booking"></div>
          <form method="post" action="#" autocomplete="off" >
            <input name="room_type" id="room_type" type="hidden" value="BORDENTOWN">
            <!--
                    	<div class="row">
                        	<div class="col-md-6 col-sm-6">
                            	<div class="form-group">
                                	<label>Arrival date</label>
                            	   	<input class="startDate1 form-control datepick" type="text" data-field="date" data-startend="start" data-startendelem=".endDate1" readonly placeholder="Arrival" id="check_in" name="check_in">
                                   <span class="input-icon"><i class="icon-calendar-7"></i></span>
                                   </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                            	<div class="form-group">
                                	<label>Departure date</label>
                            	   <input class="endDate1 form-control datepick" type="text" data-field="date" data-startend="end" data-startendelem=".startDate1" readonly placeholder="Departure" id="check_out" name="check_out">
                                   <span class="input-icon"><i class="icon-calendar-7"></i></span>
                               </div>
                            </div>
                        </div>
--> 
            <!-- End row --> 
            <!--
                        <div class="row">
                        	<div class="col-md-6 col-sm-6 col-xs-6">
                            	<div class="form-group">
                                <label>Adults</label>
                            	   <div class="qty-buttons">
                                        <input type="button" value="-" class="qtyminus" name="adults">
                                        <input type="text" name="adults" id="adults" value="" class="qty form-control" placeholder="0">
                                        <input type="button" value="+" class="qtyplus" name="adults">
                                    </div>
                                   </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                            	<div class="form-group">
                                <label>Children</label>
                            	    <div class="qty-buttons">
                                        <input type="button" value="-" class="qtyminus" name="children">
                                        <input type="text" name="children" id="children"  value="" class="qty form-control" placeholder="0">
                                        <input type="button" value="+" class="qtyplus" name="children">
                                    </div>
                               </div>
                            </div>
                        </div>
--> 
            <!-- End row -->
            <div class="row"> 
              
              <!--
                              <div class="col-md-12 col-sm-6">
                                   <div class="form-group">
                                	<label>Name</label>
                            	 		<input type="text" class="form-control" name="name_booking" id="name_booking" placeholder="Name and Last name">
                                   </div>
                                   </div>
--> 
              <!--
                                   <div class="col-md-12 col-sm-6">
                                   <div class="form-group">
                                	<label>Email</label>
                            	 		<input type="text" class="form-control" name="email_booking" id="email_booking" placeholder="Your email">
                                   </div>
                                   </div>
-->
              <div class="col-md-12 col-sm-12">
                <div class="form-group">
                  <?php 
					if(isset($uid)){
					?>
							<input type="button" onClick="#" value="Book now" class="btn_full book_now">
					<?php
						}else{
					?>
						<input type="button" onClick="#" value="Book now" class="btn_full book_now">
						<?php
						
							}
					?>
                  
<!--                  https://reservation.asiwebres.com/v2/RoomAvailability.aspx?id=e4a7f014288c4350a1a56589ea5b46d0&txtPromocode=EVERYDAY10-->
                </div>
              </div>
            </div>
          </form>
          <div align="center">
          7337 SR 6 W, Tunkhannock, PA 18657, USA <a href="tel://6092985000" id="phone_2"><i class="icon_set_1_icon-91"></i>+1 (609) 298-5000</a>   
			</div>
         <div align="center"><a href="mailto:mhohotels@gmail.com?subject = Feedback&body = Message"><i class="icon_set_1_icon-84"></i>mhohotels@gmail.com</a></div>
          </div>
        <!-- End box_style --> 
      </div>
      <!-- End theiaStickySidebar --> 
    </div>
    <!-- End col --> 
    
  </div>
  <!-- End row --> 
  
</div>
<!-- End container -->

<div id="dtBox"></div>
<!-- End datepicker -->

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-12"> <img src="images/MHO.png" alt="" id="logo_footer" data-retina="true">
        <ul id="contact_details_footer">
          <li><a href="tel://18003439483"></a> <a href="#0"><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a></li>
        </ul>
      </div>
      <div class="col-md-2 col-sm-4">
        <h3>About</h3>
        <ul>
          <li><a href="hotel_list.html">Hotels</a></li>
          <li><a href="our-brands.html">Our Brand</a></li>
          <li><a href="contacts.html">Contacts</a></li>
          <li><a href="feedback.html">Feedback</a></li>
        </ul>
      </div>
      <!--
                <div class="col-md-3 col-sm-4">
                    <h3>Change language</h3>
                   <ul>
                        <li><a href="#">English</a></li>
                        <li><a href="#">French</a></li>
                        <li><a href="#">Spanish</a></li>
                    </ul>
                </div>
-->
      <div class="col-md-3 col-sm-4"  id="newsletter">
        <h3>Franchise</h3>
        <p>Are you Interested in Joining our Franchise To learn More click here</p>
        <div id="message-newsletter_2"></div>
        <!--						<form method="post" action="assets/newsletter.php" name="newsletter_2" id="newsletter_2">-->
        <div class="form-group"> 
          <!--                            <input name="email_newsletter_2" id="email_newsletter_2"  type="email" value=""  placeholder="Your mail" class="form-control">--> 
        </div>
        <a href="http://mhohotelsowners.com/" target="_blank">
        <input type="button"  value="Hotel Owners" class="btn_1 white" id="submit-newsletter_2">
        </a> 
        <!--                    	</form>--> 
      </div>
    </div>
    <!-- End row -->
    <div class="row">
      <div class="col-md-12">
        <div id="social_footer">
          <ul>
            <li><a href="#"><i class="icon-facebook"></i></a></li>
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-google"></i></a></li>
            <li><a href="#"><i class="icon-instagram"></i></a></li>
            <li><a href="#"><i class="icon-pinterest"></i></a></li>
            <li><a href="#"><i class="icon-vimeo"></i></a></li>
            <li><a href="#"><i class="icon-youtube-play"></i></a></li>
          </ul>
          <p>Copyright © 2021 <a title="MHO Hotels" href="#">MHO Hotels</a> |  All Right Reserved</p>
        </div>
      </div>
    </div>
    <!-- End row --> 
  </div>
  <!-- End container --> 
</footer>
<!-- End footer -->

<div id="toTop"></div>
<!-- Back to top button --> 

<!-- Modal Review -->
<div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="myReviewLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myReviewLabel" style="font-weight:500;">Write your review</h4>
      </div>
      <div class="modal-body">
        <div id="message-review"> </div>
        <form method="post" action="assets/review.php" name="review" id="review">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input name="name_review" id="name_review" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input name="lastname_review" id="lastname_review" type="text" placeholder="Your last name" class="form-control">
              </div>
            </div>
          </div>
          <!-- End row -->
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input name="email_review" id="email_review" type="email" placeholder="Your email" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <select class="form-control" name="room_type_review" id="room_type_review">
                  <option value="">Select room type</option>
                  <option value="Single room">Single Room</option>
                  <option value="Double Room">Double Room</option>
                  <option value="King double room">King Double Room</option>
                </select>
              </div>
            </div>
          </div>
          <!-- End row -->
          <hr>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Position</label>
                <select class="form-control" name="position_review" id="position_review">
                  <option value="">Please review</option>
                  <option value="Low">Low</option>
                  <option value="Sufficient">Sufficient</option>
                  <option value="Good">Good</option>
                  <option value="Excellent">Excellent</option>
                  <option value="Superb">Super</option>
                  <option value="Not rated">I don't know</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Comfort</label>
                <select class="form-control" name="comfort_review" id="comfort_review">
                  <option value="">Please review</option>
                  <option value="Low">Low</option>
                  <option value="Sufficient">Sufficient</option>
                  <option value="Good">Good</option>
                  <option value="Excellent">Excellent</option>
                  <option value="Superb">Super</option>
                  <option value="Not rated">I don't know</option>
                </select>
              </div>
            </div>
          </div>
          <!-- End row -->
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Price</label>
                <select class="form-control" name="price_review" id="price_review">
                  <option value="">Please review</option>
                  <option value="Low">Low</option>
                  <option value="Sufficient">Sufficient</option>
                  <option value="Good">Good</option>
                  <option value="Excellent">Excellent</option>
                  <option value="Superb">Super</option>
                  <option value="Not rated">I don't know</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Quality</label>
                <select class="form-control" name="quality_review" id="quality_review">
                  <option value="">Please review</option>
                  <option value="Low">Low</option>
                  <option value="Sufficient">Sufficient</option>
                  <option value="Good">Good</option>
                  <option value="Excellent">Excellent</option>
                  <option value="Superb">Super</option>
                  <option value="Not rated">I don't know</option>
                </select>
              </div>
            </div>
          </div>
          <!-- End row -->
          <div class="form-group">
            <textarea name="review_text" id="review_text" class="form-control" style="height:100px" placeholder="Write your review"></textarea>
          </div>
          <div class="form-group">
            <input type="text" id="verify_review" class="form-control" placeholder="Are you human? 3 + 1 =">
          </div>
          <input type="submit" value="Submit" class="btn_1" id="submit-review">
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Review --> 

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