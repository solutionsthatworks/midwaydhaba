      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add New Hotel
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?= base_url('Dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Add New Hotel</a></li>
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
                  <form role="form"  action="<?php echo base_url('Insert-Hotel'); ?>" method="post" enctype="multipart/form-data">
                    <div class="box-default">
                      <div class="form-group">
                       <label>Hotel Name *</label>
							<input type="text" class="form-control" id="hotel_name" name="hotel_name" placeholder="Enter Hotel Name" required="" >
                      </div>
                      <div class="form-group">
                        <label>Hotel Address *</label>
							<input type="text" class="form-control" id="hotel_address" name="hotel_address" placeholder="Enter Hotel Address" required="">
                      </div>
                      <div class="form-group">
                        <label>Brand *</label>
                          <select name="brand" id="brand" class="form-control select"  data-placeholder="Select brand" style="width: 40%;" required>
                               	<option value="">Select</option>
                                <option value="MHO Hotel">MHO Hotel</option>
                                <option value="MHO Suites">MHO Suites</option>
                                <option value="MHO Inn &amp; Suites">MHO Inn &amp; Suites</option>
                                <option value="MHO Inn">MHO Inn</option>
                                <option value="Powered by MHO Hotels">Powered by MHO Hotels</option>
                                
                          </select>
                      </div>
                      <div class="form-group">
                        <label>Status *</label>
                          <select name="status" id="status" class="form-control select"  data-placeholder="Select status" style="width: 40%;" required>
                               <option value="">Select</option>
                                <option value="In the system">In the system</option>
                                <option value="Lead">Lead</option>
                             
                          </select>
                      </div>
                      <div class="form-group">
                        <label>Member Discount in % *</label>
							<input type="text" class="form-control" id="discount" name="discount" placeholder="Enter Hotel Discount" required="" style="width: 30%">
                      </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                      <button type="submit" name="submit" id="submit" class="btn btn-primary">Add Hotel</button>
                      
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