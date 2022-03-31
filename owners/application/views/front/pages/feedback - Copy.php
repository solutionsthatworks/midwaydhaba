<?php
   $sessionDetail = $this->session->userdata('userdata');
              @$uid = $sessionDetail['id'];
              @$uname = $sessionDetail['user_name'];
              @$uemail = $sessionDetail['user_email'];

    if(isset($uname) && !empty($uname)){
    //echo"user_id=".$uid." UserName".$uname;
    $uid = $uid;
    $uname = $uname;
    $uemail = $uemail;
}
else{
    $uid = rand(0,999);
/*    $uname = "Your Name";
    $uemail = "example@gmail.com";*/
}
?>

<style>
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked  label:hover  label,
.rate > label:hover  input:checked  label {
    color: #c59b08;
}

</style>

<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?= base_url('asset/'); ?>images/slider3.jfif" data-natural-width="1400" data-natural-height="350">
  <div id="subheader">
    <h1>Hotel Feedback please!!</h1>
  </div>
  <!-- End subheader --> 
</section>
<!-- End section --> 
<!-- End SubHeader ============================================ -->

<div class="container margin_60_35">
<!--   <h2 class="main_title"><em></em>Thanks for your <span> Visit</span></h2> -->
  
  <div class="row">
   
    <div class="col-md-4">
<!--      start address 1-->     
      <div class="box_style_3">
        <div class="box_contact"> <i class="icon_set_1_icon-41"></i>
          <h4>We Value your Feedback to serve you better </h4>
        </div>
      </div>
<!--      end address 1-->
    </div>
    
     <div class="col-md-7 col-md-offset-0">
      <div id="message-contact"></div>
      <div class="row">
          <?= $this->session->flashdata('success_msg');
          $this->session->unset_userdata('success_msg'); ?>
        
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-10">
          <form method="post" action="<?php echo htmlspecialchars(base_url('/ControllerHome/insert_feedback')); ?>" id="feedbackUsers">
              <div class="row"> 
                <input type="text" name="uid" id="uid" value="<?= $uid;?>" style="display:none;"/>
                <!-- <input type="text" name="uname" id="uname" value="<?= $uname;?>" style="display:none;"/> -->
            </div>
            <div class="row">
              <div class="form-group">
                <label>Your Name</label>
<!--                 <input class="form-control" type="text" name="uname" id="uname" value="<?= (!empty($uname))?$uname:FALSE;?>" required=""> -->
                <?php 
                  if (!empty($uname)) { ?>
                    <input class="form-control" type="text" name="uname" id="uname" value="<?= (!empty($uname))?$uname:FALSE;?>" required="">                    
                 <?php }
                  else{ ?>
                <input class="form-control" type="text" name="uname" id="uname" required="">

                 <?php  }
                ?>

             </div>
            </div>
            <div class="row">
              <div class="form-group">
                <label>Your Email</label>
                <?php 
                  if (!empty($uemail)) { ?>
                    <input class="form-control" type="email" name="uemail" id="uemail" value="<?= (!empty($uemail))?$uemail:FALSE;?>" required="">                    
                 <?php }
                  else{ ?>
                <input class="form-control" type="email" name="uemail" id="uemail" required="">

                 <?php  }
                ?>
              </div>
            </div>

            <div class="row">
                <label>Hotels</label>
                <select class="form-control" name="hotel_name" id="hotel_name" required="">
                  <option value="">Select Hotel</option>
                  <option value="MHO Hotel, Bordentown, NJ">MHO Hotel, Bordentown, NJ</option>
                  <option value="Green Acres Motel, Atco, NJ">Green Acres Motel, Atco, NJ </option>
                  <option value="La Mirage Motor Inn, South Brunswick, NJ">La Mirage Motor Inn, South Brunswick, NJ</option>
                  <option value="Plaza Motel Mays, Mays Landing, NJ">Plaza Motel Mays, Mays Landing, NJ</option>
                  <option value="Prince Hotel, Tunkhannock, PA">Prince Hotel, Tunkhannock, PA</option>
                </select>
              </div>
              <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label> Check In Date</label>
                  <input type="date" name="check_in" id="check_in" class="form-control" required="">
                </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label> Check Out Date</label>
                    <input type="date" name="check_out" id="check_out" class="form-control" required="">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="form-group">
                  <label>1. Overall, how friendly were the hotel staff members?</label>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_first" value="Extremely friendly" required=""> Extremely friendly
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_first" value="Slightly friendly"> Slightly friendly
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_first" value="Quite polite"> Quite polite
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_first" value="Not at all polite"> Not at all polite
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_first" value="Moderately polite"> Moderately polite
                    </div>
                    <div class="col-md-6">
                    </div>
                  </div>
                </div>
              </div>


              <div class="row">
                <div class="form-group">
                  <label>2. Overall, how polite were the hotel staff members?</label>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_two" value="Extremely polite" required=""> Extremely polite
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_two" value="Slightly polite"> Slightly polite
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_two" value="Quite polite"> Quite polite
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_two" value="Not at all polite"> Not at all polite
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_two" value="Moderately polite"> Moderately polite                     
                    </div>
                  </div>
                </div>
              </div>


              <div class="row">
                <div class="form-group">
                  <label>3. Overall, how professional were the hotel staff members?</label>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_three" value="Extremely professional" required=""> Extremely professional
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_three" value="Slightly professional"> Slightly professional
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_three" value="Quite professional"> Quite professional
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_three" value="Not at all professional"> Not at all professional
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_three" value="Moderately professional"> Moderately professional
                    </div>
                    <div class="col-md-6">
                    </div>
                  </div>
                </div>
              </div>


              <div class="row">
                <div class="form-group">
                  <label>4. How quick was the check-in process?</label>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_four" value="Extremely quick" required=""> Extremely quick
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_four" value="Slightly quick"> Slightly quick
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_four" value="Quite quick"> Quite quick
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_four" value="Not at all quick"> Not at all quick
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_four" value="Moderately quick"> Moderately quick
                    </div>
                    <div class="col-md-6">
                    </div>
                  </div>
                </div>
              </div>


              <div class="row">
                <div class="form-group">
                  <label>5. How clean was your room upon arrival?</label>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_five" value="Extremely clean" required=""> Extremely clean
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_five" value="Slightly clean"> Slightly clean
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_five" value="Quite clean"> Quite clean
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_five" value="Not at all clean"> Not at all clean
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_five" value="Moderately clean"> Moderately clean
                    </div>
                    <div class="col-md-6">
                    </div>
                  </div>
                </div>
              </div>


              <div class="row">
                <div class="form-group">
                  <label>6. How well did the housekeeping staff clean your room?</label>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_six" value="Extremely well" required=""> Extremely well
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_six" value="Slightly well"> Slightly well
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_six" value="Quite well"> Quite well
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_six" value="Not at all well"> Not at all well
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_six" value="Moderately well"> Moderately well
                    </div>
                    <div class="col-md-6">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="form-group">
                  <label>7. Overall, how well-equipped was your room?</label>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_seven" value="Extremely well-equipped" required="">Extremely well-equipped
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_seven" value="Slightly well-equipped">Slightly well-equipped
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_seven" value="Quite well-equipped"> Quite well-equipped
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_seven" value="Not at all well-equipped">Not at all well-equipped
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_seven" value="Moderately well-equipped"> Moderately well-equipped
                    </div>
                    <div class="col-md-6">
                    </div>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="form-group">
                  <label>8. How helpful was the concierge throughout your stay?</label>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_eight" value="Extremely helpful" required=""> Extremely helpful
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_eight" value="Slightly helpful"> Slightly helpful
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_eight" value="Very helpful"> Very helpful
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_eight" value="Not at all helpful"> Not at all helpful
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_eight" value="Moderately helpful"> Moderately helpful
                    </div>
                    <div class="col-md-6">
                    </div>
                  </div>
                </div>
              </div>


              <div class="row">
                <div class="form-group">
                  <label>9. How comfortable were your bed linens?</label>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_nine" value="Extremely comfortable" required=""> Extremely comfortable
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_nine" value="Slightly comfortable"> Slightly comfortable
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_nine" value="Very comfortable"> Very comfortable
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_nine" value="Not at all comfortable"> Not at all comfortable
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_nine" value="Moderately comfortable"> Moderately comfortable
                    </div>
                    <div class="col-md-6">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="form-group">
                  <label>10. Overall, how quickly did the hotel staff respond to your requests?</label>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_ten" value="Extremely quickly" required=""> Extremely quickly
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_ten" value="Slightly quickly"> Slightly quickly
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_ten" value="Quite quickly"> Quite quickly
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_ten" value="Not at all quickly"> Not at all quickly
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_ten" value="Moderately quickly"> Moderately quickly
                    </div>
                    <div class="col-md-6">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="form-group">
                  <label>11. How convenient were the hours of the food service options at our hotel?</label>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_eleven" value="Extremely convenient" required=""> Extremely convenient
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_eleven" value="Slightly convenient"> Slightly convenient
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_eleven" value="Quite convenient"> Quite convenient
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_eleven" value="Not at all convenient"> Not at all convenient
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_eleven" value="Moderately convenient"> Moderately convenient
                    </div>
                    <div class="col-md-6">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="form-group">
                  <label>12. How delicious was the hotel breakfast service?</label>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_twevel" value="Extremely delicious" required=""> Extremely delicious
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_twevel" value="Slightly delicious"> Slightly delicious
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_twevel" value="Very delicious"> Very delicious
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_twevel" value="Not at all delicious"> Not at all delicious
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_twevel" value="Moderately delicious"> Moderately delicious
                    </div>
                    <div class="col-md-6">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="form-group">
                  <label>13. How pleased were you with the quality of the food offered at our hotel?</label>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_thirteen" value="Extremely pleased" required=""> Extremely pleased
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_thirteen" value="Slightly pleased"> Slightly pleased
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_thirteen" value="Quite pleased"> Quite pleased
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_thirteen" value="Not at all pleased"> Not at all pleased
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_thirteen" value="Moderately pleased"> Moderately pleased
                    </div>
                    <div class="col-md-6">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="form-group">
                  <label>14. How affordable was the hotel breakfast service?</label>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_fourteen" value="Extremely affordable" required="">Extremely affordable
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_fourteen" value="Slightly affordable">Slightly affordable
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_fourteen" value="Very affordable"> Very affordable
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_fourteen" value="Not at all affordable">Not at all affordable
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_fourteen" value="Moderately affordable"> Moderately affordable
                    </div>
                    <div class="col-md-6">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="form-group">
                  <label>15. How affordable was your stay at our hotel?</label>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_fifteen" value="Extremely affordable" required="">Extremely affordable
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_fifteen" value="Slightly affordable"> Slightly affordable
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_fifteen" value="Very affordable"> Very affordable
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_fifteen" value="Not at all affordable">Not at all affordable
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_fifteen" value="Moderately affordable"> Moderately affordable
                    </div>
                    <div class="col-md-6">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="form-group">
                  <label>16. Overall, were you satisfied with our hotel, dissatisfied with our hotel, or neither satisfied nor dissatisfied?</label>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_sixteen" value="Extremely satisfied" required=""> Extremely satisfied
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_sixteen" value="Somewhat dissatisfied"> Somewhat dissatisfied
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_sixteen" value="Quite satisfied"> Quite satisfied
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_sixteen" value="Quite dissatisfied"> Quite dissatisfied
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_sixteen" value="Somewhat satisfied"> Somewhat satisfied
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_sixteen" value="Extremely dissatisfied"> Extremely dissatisfied
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_sixteen" value="Neither satisfied nor dissatisfied"> Neither satisfied nor dissatisfied
                    </div>
                    <div class="col-md-6">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-group">
                  <label>17. How likely are you to stay at our hotel again?</label>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_seventeen" value="Extremely likely" required=""> Extremely likely
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_seventeen" value="Slightly likely"> Slightly likely
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_seventeen" value="Quite likely"> Quite likely
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_seventeen" value="Not at all likely"> Not at all likely
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_seventeen" value="Moderately likely"> Moderately likely
                    </div>
                    <div class="col-md-6">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="form-group">
                  <label>18. How likely is it that you would recommend our hotel to a friend or colleague?</label>
                  <div class="col-md-12">
                    <div class="col-md-6">
                          <!-- <div class="rate">
                            <input type="radio" id="star5" name="qus_eighteen" value="5" required=""/>
                            <label for="star5" title="text">5 stars</label>
                            <input type="radio" id="star4" name="qus_eighteen" value="4" />
                            <label for="star4" title="text">4 stars</label>
                            <input type="radio" id="star3" name="qus_eighteen" value="3" />
                            <label for="star3" title="text">3 stars</label>
                            <input type="radio" id="star2" name="qus_eighteen" value="2" />
                            <label for="star2" title="text">2 stars</label>
                            <input type="radio" id="star1" name="qus_eighteen" value="1" />
                            <label for="star1" title="text">1 star</label>
                          </div> -->
                          <label for="star-rating-id" class="control-label">No stars yet:</label>
<input id="star-rating-id" name="star-rating-id" class="rating rating-loading" value="0" data-min="0" data-max="5" data-step="0.5" data-size="xs" required>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="form-group">
                  <label>19. How likely are you to discourage others from staying at our hotel?</label>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_ninteen" value="Extremely likely" required=""> Extremely likely
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_ninteen" value="Slightly likely"> Slightly likely
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_ninteen" value="Quite likely"> Quite likely
                    </div>
                    <div class="col-md-6">
                      <input type="radio" name="qus_ninteen" value="Not at all likely"> Not at all likely
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="radio" name="qus_ninteen" value="Moderately likely"> Moderately likely
                    </div>
                    <div class="col-md-6">
                    </div>
                  </div>
                </div>
              </div>


              <div class="row">
                <div class="form-group">
                  <label>20. Do you have any other comments, questions, or concerns?</label>
                  <div class="col-md-12">
                    <textarea name="qus_twentey" id="qus_twentey" cols="70" rows="3" required=""></textarea>
                  </div>
                </div>
              </div>


<div class="row">
  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="feedback_submit" value="Submit Feedback">
  </div>
</div>
          </form>
        
      </div>
      <div class="col-md-1"></div>
    </div>
    <!-- End col-md-8 --> 
    
  </div>
  <!-- End row --> 
</div>
<!-- End Container -->

