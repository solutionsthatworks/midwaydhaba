<!-- Set up your HTML -->

<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?= base_url('asset/'); ?>images/slider3.jfif" data-natural-width="1400" data-natural-height="350">
	<div id="subheader">
		<h1>C.K. Patel</h1>
	</div>
	<!-- End subheader -->
</section>
<!-- End section --> 
<!-- End SubHeader ============================================ -->

<h1 class="main_title_in">Vice President Owner Relations &amp; Procurement<br>

</h1>
<div class="container add_bottom_60">
	<div class="row">
		<div class="col-md-10" id="room_detail_desc">

			<div class="row">
				<div class="col-md-2">
					<h3>
				</div>
				<div class="col-md-10" align="justify">
					<p>HOTELIER C.K. PATEL NAMED 2011 “PERSON OF THE YEAR”</p>

					<p>BY BLUE MAU MAU</p>

					<p><em>“The future depends on what we do in the present.”</em>
					</p>

					<p>Those words by India’s Mahatma Gandhi could well be the credo of Atlanta hotelier and immediate past chairman of the Asian American Hotel Owners Association (AAHOA) ChandraKant “C.K.” Patel, whose work in the present has been shaping the future of American hospitality for almost 30 years.</p>

					<p>Now C.K. Patel has been named 2011 <em>“Person of the Year”</em> by the daily franchise news site Bluemaumau.com for his many innovative initiatives on behalf of hotel franchisees.&nbsp;</p>

					<p>During his term as chairman, C.K. Patel led AAHOA to combine forces with the Coalition of Franchisee Associations so together the two groups can push for better contracts with franchisors as well as for stronger lobbying influence on behalf of franchise owners.&nbsp; He became one of the founding drafters of a Bill of Rights for franchisees in all industry segments.</p>

					<p>In announcing the <em>“Person of the Year”</em> recognition, Blue Mau Mau founder and editor Don Sniegowski said, “Years from now franchisees may affectionately look back to 2011 and refer to C.K. Patel as the franchise industry’s George Washington.”</p>

					<p>Also last year, Patel launched a study by AAHOA of return on investment (ROI) for franchise units among various hotel brands so potential owners will be able for the first time to compare independent information with the disclosure documents provided by franchisors.</p>

					<p>Two other pioneering programs begun last year at AAHOA by Patel were (1) an online purchasing cooperative called “AAHOA e-market” which enables members to buy a variety of products more easily, economically, and efficiently and (2) an online travel portal called “mybesthotelrate.com” through which travelers can book hotel rooms at the 20,000 properties owned across the country by AAHOA’s 11,000 members.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

					<p>These programs are rooted in C.K.’s experience as a successful hotel owner since 1982 and as a founder of two community banks – Quantum National Bank, the first bank owned by Indian Americans in the Southeast, in 1996 and Home Town Community Bank in 2005.</p>

					<p>Speaking of roots, it is C.K.’s Indian heritage that drives his special passion for education and for community service.&nbsp; Specifically, his parents instilled a respect for education when they willingly sacrificed their own marriage to live thousands of miles apart for 14 years – his father working in Africa to earn the money which enabled his mother to raise C.K. and his siblings in India, with its enhanced schooling options.</p>

					<p>C.K., who was born in Kenya, went on to earn a degree in mechanical and electrical engineering from Sardar Patel University in Gujarat, India.&nbsp;</p>

					<p>His commitment to education was the drive behind his emphasis on AAHOA’s Certified Hotel Owners Program (CHO) in the early 1990’s.&nbsp; Almost 1,000 independent hoteliers have benefited from CHO training to become better owners and to earn a better living – and the program continues to be a cornerstone of AAHOA’s professional development initiatives.&nbsp;</p>

					<p>Another example of C.K.’s commitment to education is his launch last year of <em>“AAHOA’s Educational Experience,” </em>&nbsp;a 30-minute show that airs every Sunday afternoon at 12:30 p.m. on Sahara One television.&nbsp; Episodes, which also post on AAHOA’s YouTube page, provide insight and perspective about issues that impact the hospitality industry as well as the entire Indian business community. &nbsp;</p>

					<p>However, C.K. is not just a man of business, he is a man of character – community service is part of his DNA.&nbsp; As he watched his grandfather fight alongside Gandhi for India’s independence, he learned that the best way to solve problems is to take positive, productive, and prompt action.&nbsp;</p>

					<p>It’s this attitude of giving back and helping others that led C.K. to be among the founders of AAHOA in 1989 – and to be the catalyst behind various charitable programs such as the current <em>“Salute To Soldiers”</em> which provides free hotel accommodations through the USO to returning military personnel and through TAPS to families of those grieving the death of a loved one who has served our country.&nbsp;</p>

					<p>Last year, the program contributed almost 55,000 room nights to America’s very worthy military men and women.</p>

					<p>C.K.’s list of professional achievements and awards is both long and impressive, but there is no better measure of business success than satisfied customers, or in his case members – and C.K. held consecutive elected office in AAHOA from 1998 until 2011, which is longer than anyone else in the association’s history.</p>

					<p>Today, C.K. is president of BVM Holdings, which owns and operates hotels as well as certain commercial real estate investments.&nbsp; His “giving back” also continues – in January of 2011, he was appointed by the Secretary of Commerce to the prestigious 30-member United States Travel and Tourism Advisory Board, which advises the federal government about industry programs and policies.</p>

					<p>While C.K. has a strong devotion for various business and civic activities, he has a deep love and devotion for his family.&nbsp; He and his wife Alka are proud parents of two grown children – their son, Deepum, is a management consultant in New York City and their daughter, Shama, is pursuing a medical degree.&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</p>

					<p>Whether it’s as a leader in the hotel industry or in his own business, C.K. Patel is known as an entrepreneurial thinker who is successful because he sees beyond <em>“the obvious”</em> to <em>“the possible,”</em> without losing sight of <em>“the practical.”</em>
					</p>

					<p></p>
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
	$( document ).on( "click", ".book_now", function () {
		var hotel = $( "#hotel" ).val();
		var url = window.location.pathname;
		alert( url );
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