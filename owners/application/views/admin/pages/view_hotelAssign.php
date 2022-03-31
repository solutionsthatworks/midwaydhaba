      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            View Assigned Hotel
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?= base_url('Dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">View Assigned Hotel</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <?php 
              if ($role=='admin') { ?>

          <div class="row">
            <div class="col-xs-12">
              <a href="<?= base_url('AddHotelAssign'); ?>" class="btn btn-lg btn-primary" style="margin-bottom: 5px;float: right;" >Assign New Hotel</a>
            </div>
          </div>
            <?php  }

          ?>

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
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Sr.No.</th>
                        <th>User Name</th>
                        <th>Hotel</th>
                        <th>Assigned Date</th>
          <?php 
              if ($role=='admin') { ?>
                        <th>Action</th>
                                    <?php  }

          ?>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $count = 1;
                  if (!empty($get_hotelAssign)) {

                        foreach ($get_hotelAssign as $item ) { ?>
                            <tr>
                              <td> <?= $count++; ?> </td>
								<td> <a href="<?= base_url('Edit-Assigned-Hotel/').$item->id; ?>" > <?= $item->user_name; ?> </a> </td>
                              <td><?= $item->hotel_name; ?></td>
                              <td><?= $item->assign_date; ?></td>
                                     <?php 
              if ($role=='admin') { ?>

                              <td>
      <!--                           <a href="<?= base_url('ControllerMessage/'); ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a> -->

                                  <a title="Delete this Message" onclick="return(confirm('Are you sure ? Want to delete this Hotel Assign.'))" href="<?php echo base_url();?>Admin/ControllerHotelAssign/delete_message/<?php echo $item->id; ?>" class='btn btn-mini btn-danger'><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                              </td>
            <?php  }

          ?>

                            </tr>

                        <?php }
                }else{ ?>
                  <tr>
                    <td colspan="5"> No Record Found! </td>
                  </tr>
                <?php }

                

                      ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Sr.No.</th>
                        <th>User Name</th>
                        <th>Hotel</th>
                        <th>Assigned Date</th>
          <?php 
              if ($role=='admin') { ?>
                        <th>Action</th>
                                    <?php  }

          ?>
                      </tr>
                    </tfoot>
                  </table>
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