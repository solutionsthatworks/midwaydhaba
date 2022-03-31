      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Change Password
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?= base_url('Dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Change Password</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
             <div class="box">
                <div class="box-header">
<!--                   <h3 class="box-title">Data Table With Full Features</h3> -->
                    
                    <div class="col-md-12">
                      <?= $this->session->flashdata('success_msg');
                      $this->session->unset_userdata('success_msg'); ?>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body ">
                  <form method="post" action="<?php echo htmlspecialchars(base_url('In-Profile')); ?>" enctype='multipart/form-data'>
			<!-- <input type="text" class="form-control" id="unique_id" name="unique_id" value="<?= 'MHO'.rand(0,999); ?>" required="" style="opacity: 0;"> -->

			<div class="row">

				<div class="col-md-5 ">
					<div class="form-group">
						<input type="hidden" class="form-control" id="user_id" name="user_id" value="<?= $edit_profile->id ?>" placeholder="" required="">
						<label>User Id</label>
						
						
						<input type="text" class="form-control" id="user_email" name="user_email" value="<?= $edit_profile->user_email ?>" placeholder="" required="" disabled>
					</div>
					<?= form_error('user_name'); ?>

				</div>
				<div class="col-md-5">
					<div class="form-group">
						<label>Old Password</label>
						<input type="text" class="form-control" id="old_password" name="old_password" value="<?= $edit_profile->password ?>" placeholder="" required="" disabled>
					</div>
					<?= form_error('user_lname'); ?>

				</div>
			</div>



			<div class="row">
				<div class="col-md-5">
					<div class="form-group">
						<label>New Password</label>
						<input type="text" name="new_password" id="new_password" value="" class="form-control" required="">
					</div>
					<?= form_error('user_password'); ?>

				</div>

			</div>


			<div class="row add_bottom_30">
				<div class="col-md-6">
					<input type="submit" value="Update Profile" class="btn_1" name="update_profile" id="update_profile">
					<input type="button" value="Back" class="btn_1" name="user_registration" id="user_registration" onclick="goBack();">
				</div>
			</div>
		</form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     
    <script src="<?= base_url('asset/admin/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('asset/admin/'); ?>plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>


        <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>