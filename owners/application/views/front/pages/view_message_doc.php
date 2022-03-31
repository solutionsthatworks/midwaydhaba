<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?= base_url('asset/'); ?>images/slider3.jfif" data-natural-width="1400" data-natural-height="350">
	<div id="subheader">
		<h1>Owner Dashboard</h1>
	</div>
	<!-- End subheader -->
</section> <!-- End section -->
<!-- End SubHeader ============================================ -->

<div class="container margin_60">
	<h2 class="main_title"><em></em><span> </span></h2>
	<p class="lead styled">

	</p>

	<div class="bs-example">
		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a href="#Profile" class="nav-link active" data-toggle="tab">Profile
				</a>
			</li>
			<li class="nav-item">
				<a href="#Platinum" class="nav-link" data-toggle="tab">View Message
				</a>
			</li>
			<li class="nav-item">
				<a href="#Gold" class="nav-link" data-toggle="tab">View Document</a>
			</li>
			<li class="nav-item">
				<a href="#Upload" class="nav-link" data-toggle="tab">Upload Document</a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="Profile">

				<div class="row">

					<form role="form" action="<?php echo base_url('Update-Discount'); ?>" method="post" enctype="multipart/form-data">
						<div>
							<input type="hidden" class="form-control" id="id_property" name="id_property" value="<?= $hotelData[0]->{'id_property'} ?>" placeholder="Enter Hotel Id" required="">
							<div class="col-md-6">
								<div class="form-group">
									<label>Hotel Name: </label>
									<?= $hotelData[0]->{'tbl_property_name'} ?>
								</div>
								<div class="form-group">
									<label>Hotel Address: </label>
									<?= $hotelData[0]->{'tbl_address'} ?>

								</div>
								<div class="form-group">
									<label>Brand: </label>
									<?= $hotelData[0]->{'brand'} ?>
								</div>
								<div class="form-group">
									<label>Member Discount in % *</label>
									<input type="number" class="form-control" id="discount" name="discount" placeholder="Enter Hotel Discount" value="<?= $hotelData[0]->{'discount'} ?>" required="" style="width: 30%">
								</div>

								<div class="box-footer">
									<button type="submit" name="submit" id="submit" class="btn btn-primary">Update</button>
								</div>
							</div>
							

						</div>
						<!-- /.box-body -->

					</form>
				</div>


			</div>

			<div class="tab-pane fade" id="Platinum">

				<div class="row">

					<?php
					if ( !empty( $get_message ) && ( !$get_message == '' ) ) {
						foreach ( $get_message as $item ) {
							?>
					<div class="col-md-12">
						<h3> <?= $item->message; ?> </h3>
						<p>
							<?= 'Send Date : '.$item->send_date; ?>
						</p>
					</div>
					<hr style="color: #e3e1e1;border: 1px solid;">
					<?php }	}else{ ?>
					<div class="col-md-12"> No Record Found! </div>

					<?php } ?>

				</div>


			</div>

			<div class="tab-pane fade" id="Gold">
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-1">
							<h4>Sr. No.</h4>
						</div>
						<div class="col-md-3">
							<h4>Category</h4>
						</div>
						<div class="col-md-2">
							<h4>Document Name</h4>
						</div>
						<div class="col-md-3">
							<h4>Document</h4>
						</div>
						<div class="col-md-3">
							<h4>Upload Date</h4>
						</div>
					</div>
					<hr style="color: #e3e1e1;border: 1px solid;">
					<?php 
				$i=1;
				if (!empty($get_list) && (!$get_list=='')) {

				foreach ($get_list as $key) { ?>
					<div class="col-md-12">
						<div class="col-md-1">
							<p>
								<?= $i++;?>
							</p>
						</div>
						<div class="col-md-3 ">
							<h4 class=" "><?= $key->category; ?></h4>
						</div>
						<div class="col-md-2 ">
							<h4 class=" "><?= $key->docs; ?></h4>
						</div>
						<div class="col-md-3">
							<!-- 						<?php 
							$exte = explode('.', $key->docs);
							if (($exte[1]=='pdf') || ($exte[1]=='doc') || ($exte[1]=='docx') ) { ?> 
									<p>f</p>	  
						 <?php	}else{ ?>
									<p>f</p>	  

						<?php	}
						 ?> -->
							<a href="<?php echo base_url('asset/document/').$key->docs; ?>" onclick="window.open('<?php echo base_url('asset/document/').$key->docs; ?>','targetWindow', 'toolbar=no, location=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1090px, height=550px, top=25px left=120px'); return false;"> Click to View Or Download </a>
						</div>
						<div class="col-md-3">
							<p>
								<?= $key->created_at; ?>
							</p>
						</div>
						<!-- 				<div class="col-md-12 divider"></div> -->
					</div>
					<hr style="color: #e3e1e1;border: 1px solid;">
					<?php } }else{ ?>
					<div class="col-md-12"> No Record Found! </div>
					<?php }	?>

				</div>

			</div>
			<!-- upload data files -->
			<div class="tab-pane fade" id="Upload">
				<div class="row">
					<div class="col-md-12">
						<?= $this->session->flashdata('success_msg');
                      $this->session->unset_userdata('success_msg'); ?>
					</div>
				</div>
				<div class="row">

					<form role="form" action="<?php echo base_url('ControllerOwner_dashboard/insertDocument'); ?>" method="post" enctype="multipart/form-data">
						<div class="box-body">
							<?php
							if ( !empty( $hotelAssign ) && ( !$hotelAssign == '' ) ) {

								foreach ( $hotelAssign as $key ) {
									?>
							<input type="hidden" name="user_id" value="<?= $key->user_id;?>">
							<input type="hidden" name="hotels_name" value="<?= $key->hotel_name;?>">
							<input type="hidden" name="hotels_id" value="<?php 
                    		if($key->hotel_name =='MHO Hotel, Bordentown, NJ'){
                    			echo " 1 ";
                    		}elseif($key->hotel_name == 'Green Acres Motel, Atco, NJ'){
                    			echo "2 ";
                    		}elseif($key->hotel_name == 'La Mirage Motor Inn, South Brunswick, NJ'){
                    			echo "3 ";
                    		}elseif($key->hotel_name == 'Prince Hotel, Tunkhannock, PA'){
                    			echo "4 ";
                    		}
                    	?>">

							<?php } }else{ ?>
							<input type="hidden" name="user_id" value="<?= $user_id;?>">
							<p><span style="color: red;"> * </span> You cannot upload documents until you are assigned to a Hotel by Administrator</p>
							<?php }	 ?>
							<div class="form-group">
								<label for="category">Select Category</label>
								<select name="category" id="category" class="form-control select2" data-placeholder="Select a State" style="width: 100%;" required>
									<option value="">---Select Category---</option>
									<option value="Property document">Property documents</option>
									<option value="MHO Document">MHO Documents</option>
									<option value="Normal documents">Normal documents</option>
								</select>
							</div>

							<div class="form-group">
								<label for="exampleInputFile">File Upload</label>
								<input type="file" name="files[]" multiple id="files" required="">
							</div>
						</div>
						<!-- /.box-body -->

						<div class="box-footer">
							<?php                     		if (!empty($hotelAssign) && (!$hotelAssign=='')) { ?>

							<button type="submit" name="submit" id="submit" class="btn btn-primary">Upload Document</button>
							<?php }else{ ?>
							<button type="submit" name="submit" id="submit" class="btn btn-primary" disabled="">Upload Document</button>

							<?php }?>
						</div>
					</form>

				</div>

			</div>
			<!-- //upload data files -->

		</div>
	</div>




	<!-- End row -->
	<!--	<div class="divider hidden-xs"></div>-->


</div>