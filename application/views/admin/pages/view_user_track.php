      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            User Track Tables
<!--             <small>advanced tables</small> -->
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
             <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Track Data</h3>
                    
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
                        <th>BTN Value</th>
                        <th>BTN NAME</th>
                        <th>URL</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                  <?php 

                  //echo "<pre>";print_r($get_users[0]->user_name);die;
                  $i =1;
                  foreach ($get_users as $item):?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $item->user_name; ?></td>
                        <td><?= $item->btn_value; ?></td>
                        <td><?= $item->btn_name; ?></td>
                        <td><?= $item->url;?></td>
                        <td><?= $item->created_at;?></td>
                      </tr>
                  <?php endforeach;?>
                      
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Sr.No.</th>
                        <th>User Name</th>
                        <th>BTN Value</th>
                        <th>BTN NAME</th>
                        <th>URL</th>
                        <th>Date</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     <script src="<?= base_url('asset/admin/'); ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
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