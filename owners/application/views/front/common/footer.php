<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-12"> <img src="<?= base_url('asset/images/MHO-Hotels-150.png') ?>" alt="" id="logo_footer" data-retina="true">
				<ul id="contact_details_footer">

				</ul>
			</div>
			<div class="col-md-5 col-sm-4" id="newsletter">
				<h3>About Us</h3>
				<p>MHO Hotels is sharply focused on helping hotel owners get the most from their properties and offers hotel brands that consumers respect for quality and affordability.</p>
				
				<p>
					
					<a href="tel://18003439483">1-800-343-9483</a>
						<a href="#0">
							<script data-cfhash='f9e31' type="text/javascript">
								/* <![CDATA[ */ ! function ( t, e, r, n, c, a, p ) {
									try {
										t = document.currentScript || function () {
											for ( t = document.getElementsByTagName( 'script' ), e = t.length; e--; )
												if ( t[ e ].getAttribute( 'data-cfhash' ) ) return t[ e ]
										}();
										if ( t && ( c = t.previousSibling ) ) {
											p = t.parentNode;
											if ( a = c.getAttribute( 'data-cfemail' ) ) {
												for ( e = '', r = '0x' + a.substr( 0, 2 ) | 0, n = 2; a.length - n; n += 2 ) e += '%' + ( '0' + ( '0x' + a.substr( n, 2 ) ^ r ).toString( 16 ) ).slice( -2 );
												p.replaceChild( document.createTextNode( decodeURIComponent( e ) ), c )
											}
											p.removeChild( t )
										}
									} catch ( u ) {}
								}() /* ]]> */
							</script>
						</a>
					
				</p>
				<p><a href="mailto:info@mhohotels.com">info@mhohotels.com</a></p>
				<div id="message-newsletter_2"></div>
				<!--						<form method="post" action="assets/newsletter.php" name="newsletter_2" id="newsletter_2">-->
<!--
				<div class="form-group">
					                            <input name="email_newsletter_2" id="email_newsletter_2"  type="email" value=""  placeholder="Your mail" class="form-control">
				</div>
				<a href="http://mhohotelsowners.com/" target="_blank">
        <input type="button"  value="Hotel Owners" class="btn_1 white" id="submit-newsletter_2">
        </a>
-->
			


			</div>
			<div class="col-md-3 col-sm-4">
				<h3>Quick Links</h3>
				<ul>
					<li><a href="<?= base_url('Partners');?>">Partners</a>
					</li>
					<li><a href="<?= base_url('Blogs');?>">Blog</a>
					</li>
					<li><a href="<?= base_url('Testimonials'); ?>">Testimonial</a>
					</li>
					<li><a href="<?= base_url('Careers') ?>">Careers</a>
					</li>
					<li><a href="<?= base_url('CSR') ?>">Corporate Social Responsibility</a>
					</li>
					<li><a href="<?= base_url('Privacy') ?>">Privacy Policy</a>
					</li>
				</ul>
			</div>
			<!--
				<div class="col-md-3 col-sm-4">
					<h3>Change language</h3>
					<ul>
						<li><a href="#">English</a>
						</li>
						<li><a href="#">French</a>
						</li>
						<li><a href="#">Spanish</a>
						</li>
					</ul>
				</div>
-->

		</div>
		<!-- End row -->
		<div class="row">
			<div class="col-md-12">
				<div id="social_footer">
					<ul>
						<li><a href="https://www.facebook.com/MHOHotels/"><i class="icon-facebook"></i></a>
						</li>
						<li><a href="https://twitter.com/mhohotels"><i class="icon-twitter"></i></a>
							<!--
							<li><a href="https://mhohotels.com/"><i class="icon-linkedin"></i></a>
							</li>
-->
							<!--
							<li><a href="#"><i class="icon-google"></i></a>
							</li>
-->
							<!--
							<li><a href="#"><i class="icon-instagram"></i></a>
							</li>
							<li><a href="#"><i class="icon-pinterest"></i></a>
							</li>
							<li><a href="#"><i class="icon-vimeo"></i></a>
							</li>
							<li><a href="#"><i class="icon-youtube-play"></i></a>
							</li>
-->
					</ul>
					<p>Copyright © 2021 <a title="MHO Hotels" href="#">MHO Hotels</a> | All Right Reserved</p>
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



<!-- COMMON SCRIPTS -->
<script src="<?= base_url('asset/js/jquery-1.11.2.min.js'); ?>"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>

<script src="<?= base_url('asset/js/common_scripts_min.js'); ?>"></script>
<script src="<?= base_url('asset/assets/validate.js'); ?>"></script>
<script src="<?= base_url('asset/js/functions.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('asset/js/DateTimePicker.js'); ?>"></script>
<script type="text/javascript">
	$( "#dtBox" ).DateTimePicker();
</script>
<script type="text/javascript">
	$( document ).on( "click", "#submit-booking", function () {
		var hotel = $( "#hotel" ).val();
		var url = window.location.pathname;
		//alert(url);
		if ( hotel != '' ) {
			$.ajax( {
				type: "POST",
				url: "<?php echo base_url('ControllerHome/getCountClick'); ?>",
				data: {
					hotel: hotel,
					url: url
				},
				success: function ( res ) {
					console.log( res );
					//alert(res);
				}
			} );
		}
	} );
</script>

<script type="text/javascript">
	$( document ).on( "click", ".book_now", function () {
		var hotel = $( ".book_now" ).val();
		var url = window.location.pathname;
		//  alert(url);
		if ( hotel != '' ) {
			$.ajax( {
				type: "POST",
				url: "<?php echo base_url('ControllerHome/getCountClickBook'); ?>",
				data: {
					hotel: hotel,
					url: url
				},
				success: function ( res ) {
					console.log( res );
					//alert(res);
				}
			} );
		}
	} );
</script>




  
  <script src="<?= base_url('asset/js/bootstrap-datepicker.js'); ?>"></script>
<!-- date range -->

<script src="<?= base_url('asset/js/bootstrap-datepicker.js'); ?>"></script>
<script src="<?= base_url('asset/js/bootsrap_datepicker_func.js'); ?>"></script>


<!-- SPECIFIC SCRIPTS -->
<script src="<?= base_url('asset/js/theia-sticky-sidebar.js'); ?>"></script>
<script>
	jQuery( '.sidebar' ).theiaStickySidebar( {
		additionalMarginTop: 80
	} );
</script>

<script>
	$( "#star-rating-id" ).rating();
</script>

</body>

</html>