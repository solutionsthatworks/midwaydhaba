      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Messages
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?= base_url('Dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">View Message</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <a href="<?= base_url('SendMessage'); ?>" class="btn btn-lg btn-primary" style="margin-bottom: 5px;float: right;" >Send New Message</a>
            </div>
          </div>
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
                        <th>Message</th>
                        <th>Send Date</th>
                        <th>Action</th>

                      </tr>
                    </thead>
                    <tbody>
                      
                  <?php 

                  //echo "<pre>";print_r($get_users[0]->user_name);die;
						//echo "<pre>";print_r($get_message);die;
                  $i =1;
                  if (!empty($get_message)) {
                    # code...
                  
                  foreach ($get_message as $item):?>
                      
                       <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $item->user_name; ?></td>
                        <td><?= $item->message; ?> </td>
                        <td><?= $item->send_date; ?></td>
                        <td>
<a title="Delete this Message" onclick="return(confirm('Are you sure ? Want to delete this Message.'))" href="<?php echo base_url();?>Admin/ControllerMessage/delete_message/<?php echo $item->id; ?>" class='btn btn-mini btn-danger'><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                          </td>
                      </tr>
                      <div id="<?= $item->id; ?>">
                      	<p><?= $item->message; ?></p>
                      </div>

                      
<!--
                      <tr>
                      	<td colspan="5">
                      		<?= $item->message; ?>
                      	</td>
                      </tr>
-->
                  <?php endforeach;
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
                        <th>Message</th>
                        <th>Reg. Date</th>
                        <th>Action</th>
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